<?php
/**
*
* Navbar extension for the phpBB Forum Software package.
*
* @copyright http://www.orthohin.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/


namespace orthohin\navbar\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/** @var string phpBB root path */
	protected $root_path;

	/** @var string phpBB php ext */
	protected $php_ext;

	/** @var string The database table the auto group rules are stored in */
	protected $orthohin_navbar_menu_table;

	/**
	 * Constructor
	 *
	 *
	 * @access	public
	 */
	public function __construct(\phpbb\db\driver\driver_interface $db, \phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user, $root_path, $php_ext, $orthohin_navbar_menu_table, $orthohin_navbar_config_table)
	{
		$this->db = $db;
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
		$this->root_path = $root_path;
		$this->php_ext = $php_ext;
		$this->orthohin_navbar_menu_table = $orthohin_navbar_menu_table;
		$this->orthohin_navbar_config_table = $orthohin_navbar_config_table;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 * @static
	 * @access public
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header_after'	=> 'orthohin_get_navbar_items',
		);
	}

	/**
	 * Adds customized template variables
	 *
	 * @param object $event The event object
	 * @return null
	 * @access public
	 */
	public function orthohin_get_navbar_items($event)
	{
		// obtain access to assigned template variables
		global $phpbb_container;
		$context = $phpbb_container->get('template_context');
		$rootref = &$context->get_root_ref();

		// Load buttons
		$sql_ary = array(
			'SELECT'	=> 'fsm.*',
			'FROM'		=> array(
				$this->orthohin_navbar_menu_table	=> 'fsm',
			),
			'WHERE'		=> 'button_display = 1 AND parent_id = 0',
			'ORDER_BY'	=> 'left_id',
		);
		$result = $this->db->sql_query($this->db->sql_build_query('SELECT', $sql_ary));
		while ($row = $this->db->sql_fetchrow($result))
		{
			if (($row['button_only_registered'] && $this->user->data['user_id'] == ANONYMOUS) || ($row['button_only_guest'] && $this->user->data['user_id'] != ANONYMOUS))
			{
				continue;
			}

			if (preg_match("/\{(.*)\}/", $row['button_url']))
			{
				$brackets = array("{", "}");
				$var_name = strtoupper(str_replace($brackets, '', $row['button_url']));
				if ($var_name == 'U_MARK_FORUMS')
				{
					$row['button_url'] = ($this->user->data['is_registered'] || $this->config['load_anon_lastread']) ? append_sid("{$this->root_path}index.{$this->php_ext}", 'hash=' . generate_link_hash('global') . '&mark=forums&mark_time=' . time()) : '';
				}
				else
				{
					$row['button_url'] = isset($rootref[$var_name]) ? $rootref[$var_name] : '#';
				}
			}

			if (preg_match("/\{(.*)\}/", $row['button_name']))
			{
				$brackets = array("{L_", "}");
				$var_name = strtoupper(str_replace($brackets, '', $row['button_name']));
				$row['button_name'] = $this->user->lang[$var_name];
			}

			if (preg_match("/\{(.*)\}/", $row['button_desc']))
			{
				$brackets = array("{L_", "}");
				$var_name = strtoupper(str_replace($brackets, '', $row['button_desc']));
				$row['button_desc'] = $this->user->lang[$var_name];
			}


			if (preg_match_all("/\{(.*?)\}/", $row['mega_html'], $matches))
			{
				foreach ($matches[0] as $var_name){
					if (preg_match("/\{L_/", $var_name)){
						$brackets = array("{L_", "}");
						$var_text = strtoupper(str_replace($brackets, '', $var_name));
						$var_text = $this->user->lang[$var_text];
						$row["mega_html"] = str_replace($var_name,$var_text,$row["mega_html"]);
					}
					else{
						$brackets = array("{", "}");
						$var_text = strtoupper(str_replace($brackets, '', $var_name));
						if ($var_text == 'U_MARK_FORUMS')
						{
							$var_text = ($this->user->data['is_registered'] || $this->config['load_anon_lastread']) ? append_sid("{$this->root_path}index.{$this->php_ext}", 'hash=' . generate_link_hash('global') . '&mark=forums&mark_time=' . time()) : '';
						}
						else
						{
							$var_text = isset($rootref[$var_text]) ? $rootref[$var_text] : '#';
						}
						$row["mega_html"] = str_replace($var_name,$var_text,$row["mega_html"]);
					}
				}
			}

			$this->template->assign_block_vars('menu', array(
				'ID'			=> $row['button_id'],
				'URL'			=> $row['button_url'],
				'NAME'			=> $row['button_name'],
				'DESC'			=> $row['button_desc'],
				'EXTERNAL'		=> $row['button_external'],
				'ICON'			=> $row['icon'],
				'IS_MEGA'		=> $row['is_mega'],
				'MEGA_HTML'		=> htmlspecialchars_decode($row['mega_html']),
			));

			// Load sub-buttons
			$sql_ary = array(
				'SELECT'	=> 'fsm.*',
				'FROM'		=> array(
					$this->orthohin_navbar_menu_table	=> 'fsm',
				),
				'WHERE'		=> 'button_display = 1 AND parent_id = ' . $row['button_id'],
				'ORDER_BY'	=> 'left_id',
			);
			$sub_result = $this->db->sql_query($this->db->sql_build_query('SELECT', $sql_ary));
			while ($sub_row = $this->db->sql_fetchrow($sub_result)) {
				if (($sub_row['button_only_registered'] && $this->user->data['user_id'] == ANONYMOUS) || ($sub_row['button_only_guest'] && $this->user->data['user_id'] != ANONYMOUS))
				{
					continue;
				}

				if (preg_match("/\{(.*)\}/", $sub_row['button_url']))
				{
					$brackets = array("{", "}");
					$var_name = strtoupper(str_replace($brackets, '', $sub_row['button_url']));
					$sub_row['button_url'] = $rootref[$var_name];
				}

				if (preg_match("/\{(.*)\}/", $sub_row['button_name']))
				{
					$brackets = array("{L_", "}");
					$var_name = strtoupper(str_replace($brackets, '', $sub_row['button_name']));
					$sub_row['button_name'] = $this->user->lang[$var_name];
				}

				$this->template->assign_block_vars('menu.sub', array(
					'ID'			=> $sub_row['button_id'],
					'URL'			=> $sub_row['button_url'],
					'NAME'			=> $sub_row['button_name'],
					'EXTERNAL'		=> $sub_row['button_external'],
					'ICON'			=> $sub_row['icon'],
				));
			}
			$this->db->sql_freeresult($sub_result);
		}
		$this->db->sql_freeresult($result);

		// Load Config values
		$sql_ary = array(
			'SELECT'	=> 'fsc.*',
			'FROM'		=> array(
				$this->orthohin_navbar_config_table	=> 'fsc',
			),
		);
		$result = $this->db->sql_query($this->db->sql_build_query('SELECT', $sql_ary));
		while ($row = $this->db->sql_fetchrow($result))
		{
			if ($row['config_name'] == 'background_color' || $row['config_name'] == 'text_color')
			{
				$row['config_value'] = htmlspecialchars_decode($row['config_value']);
			}

			$this->template->assign_vars(array(
				strtoupper($row['config_name'])	=> ($row['config_value'] != '') ? $row['config_value'] : false,
			));
		}
		$this->db->sql_freeresult($result);

		// Does logo image exist?
		$logo_exist = false;
		$logo_filename = '';
		$files = glob($this->root_path . 'ext/orthohin/navbar/images/logo/*');

		if ($files && sizeof($files))
		{
			foreach($files as $file)
			{
				if(is_file($file))
				{
					$temp = explode(".", $file);
					if (end($temp) == 'png' || end($temp) == 'jpg' || end($temp) == 'jpeg' || end($temp) == 'gif')
					{
						$logo_exist = true;
						$logo_filename = basename($file);
					}
				}
			}
		}

		// Uploaded images
		$this->template->assign_vars(array(
			'LOGO_IMAGE_EXIST'				=> $logo_exist,
			'LOGO_FILENAME'					=> $file,

			// custom CSS
			'S_ALLOW_CUSTOMCSS'				=> $this->config['orthohin_navbar_custom_css'],
		));

	}

}
