<?php
/**
*
* Navbar extension for the phpBB Forum Software package.
*
* @copyright http://www.orthohin.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/


namespace orthohin\navbar\migrations\v10x;

/**
* Migration stage 3: Initial config data
*/
class m3_initial_data extends \phpbb\db\migration\migration
{
	/**
	 * Assign migration file dependencies for this migration
	 *
	 * @return array Array of migration files
	 * @static
	 * @access public
	 */
	static public function depends_on()
	{
		return array('\orthohin\navbar\migrations\v10x\m2_initial_modules');
	}

	/**
	 * Add or update data in the database
	 *
	 * @return array Array of table data
	 * @access public
	 */
	public function update_data()
	{
		return array(
			array('custom', array(array($this, 'insert_sample_config_data'))),
		);
	}

	/**
	 * Custom function to install sample config data
	 *
	 * @return null
	 * @access public
	 */
	public function insert_sample_config_data()
	{
		$sample_config_data = array(
			array('config_name'  => 'is_color', 'config_value'  => 0),
			array('config_name'  => 'background_color', 'config_value'  => '#ffffff'),
			array('config_name'  => 'text_color', 'config_value'  => '#000000'),
			array('config_name'  => 'menu_position', 'config_value'  => 0),
		);

		$this->db->sql_multi_insert($this->table_prefix . 'orthohin_navbar_config', $sample_config_data);
	}

}
