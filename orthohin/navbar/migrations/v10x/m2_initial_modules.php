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
* Migration stage 2: Initial module
*/
class m2_initial_modules extends \phpbb\db\migration\migration
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
		return array('\orthohin\navbar\migrations\v10x\m1_initial_schema');
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
			array('module.add', array(
				'acp', 'ACP_CAT_DOT_MODS', 'ORTHOHIN_NAVBAR_TITLE'
			)),
			array('module.add', array(
				'acp', 'ORTHOHIN_NAVBAR_TITLE', array(
					'module_basename'	=> '\orthohin\navbar\acp\orthohin_navbar_module',
					'modes'				=> array('config'),
				),
			)),
			array('module.add', array(
				'acp', 'ORTHOHIN_NAVBAR_TITLE', array(
					'module_basename'	=> '\orthohin\navbar\acp\orthohin_navbar_module',
					'modes'				=> array('menu'),
				),
			)),
			array('module.add', array(
				'acp', 'ORTHOHIN_NAVBAR_TITLE', array(
					'module_basename'	=> '\orthohin\navbar\acp\orthohin_navbar_module',
					'modes'				=> array('css'),
				),
			)),
		);
	}
}
