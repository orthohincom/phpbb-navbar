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
* Migration stage 4: Add menu links
*/
class m4_add_sample_menu_data extends \phpbb\db\migration\migration
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
		return array('\orthohin\navbar\migrations\v10x\m3_initial_data');
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
			array('custom', array(array($this, 'insert_sample_menu_data'))),
		);
	}

	/**
	 * Custom function to add sample menu data
	 *
	 * @return null
	 * @access public
	 */
	public function insert_sample_menu_data()
	{
		$sample_menu_data = array(
			array	(
				'button_id'					=>	'1',
				'button_url'				=>	'{U_SEARCH}',
				'button_name'				=>	'{L_SEARCH}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'23',
				'right_id'					=>	'32',
				'parent_id'					=>	'0',
				'icon'						=>	'',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'2',
				'button_url'				=>	'{U_SEARCH}',
				'button_name'				=>	'{L_SEARCH_ADV}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest		'	=>	'0',
				'left_id'					=>	'24',
				'right_id'					=>	'25',
				'parent_id'					=>	'1',
				'icon'						=>	'fa	fa-search',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'3',
				'button_url'				=>	'{U_SEARCH_SELF}',
				'button_name'				=>	'{L_SEARCH_SELF}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'26',
				'right_id'					=>	'27',
				'parent_id'					=>	'1',
				'icon'						=>	'fa	fa-sort-numeric-asc',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'4',
				'button_url'				=>	'',
				'button_name'				=>	'Menu2',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'0',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'21',
				'right_id'					=>	'22',
				'parent_id'					=>	'0',
				'icon'						=>	'',
				'is_mega'					=>	'1',
				'mega_html'					=>	'&lt;div class=&quot;col-sm-8&quot;&gt;
  &lt;div class=&quot;yamm-content&quot;&gt;
    &lt;ul class=&quot;media-list&quot;&gt;
      &lt;li class=&quot;media&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;pull-right&quot;&gt;&lt;img src=&quot;https://via.placeholder.com/64x64&quot; alt=&quot;64x64&quot; class=&quot;media-object&quot;&gt;&lt;/a&gt;
        &lt;div class=&quot;media-body&quot;&gt;
          &lt;h4 class=&quot;media-heading&quot;&gt;Media heading&lt;/h4&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante.
        &lt;/div&gt;
      &lt;/li&gt;
      &lt;li class=&quot;media&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;pull-right&quot;&gt;&lt;img src=&quot;https://via.placeholder.com/64x64&quot; alt=&quot;64x64&quot; class=&quot;media-object&quot;&gt;&lt;/a&gt;
        &lt;div class=&quot;media-body&quot;&gt;
          &lt;h4 class=&quot;media-heading&quot;&gt;Media heading&lt;/h4&gt;Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque.
        &lt;/div&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-4&quot;&gt;
  &lt;div class=&quot;yamm-content&quot;&gt;
    &lt;form action=&quot;send.php&quot;&gt;
      &lt;div class=&quot;form-group&quot;&gt;
        &lt;input id=&quot;inputName&quot; type=&quot;text&quot; placeholder=&quot;Name&quot; class=&quot;form-control&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-group&quot;&gt;
        &lt;input id=&quot;inputEmail&quot; type=&quot;password&quot; placeholder=&quot;Email&quot; class=&quot;form-control&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-group&quot;&gt;
        &lt;textarea placeholder=&quot;Write your message..&quot; class=&quot;form-control&quot;&gt;&lt;/textarea&gt;
      &lt;/div&gt;
      &lt;div class=&quot;form-group&quot;&gt;
        &lt;button type=&quot;submit&quot; class=&quot;btn btn-success&quot;&gt;Send&lt;/button&gt;
      &lt;/div&gt;
    &lt;/form&gt;
  &lt;/div&gt;
&lt;/div&gt;',
			),
			array	(
				'button_id'					=>	'5',
				'button_url'				=>	'{U_INDEX}',
				'button_name'				=>	'{L_HOME}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'0',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'1',
				'right_id'					=>	'2',
				'parent_id'					=>	'0',
				'icon'						=>	'fa	fa-home',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'6',
				'button_url'				=>	'',
				'button_name'				=>	'Forum',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'0',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'3',
				'right_id'					=>	'20',
				'parent_id'					=>	'0',
				'icon'						=>	'',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'7',
				'button_url'				=>	'{U_SEARCH_UNANSWERED}',
				'button_name'				=>	'{L_SEARCH_UNANSWERED}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'4',
				'right_id'					=>	'5',
				'parent_id'					=>	'6',
				'icon'						=>	'',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'8',
				'button_url'				=>	'{U_SEARCH_UNREAD}',
				'button_name'				=>	'{L_SEARCH_UNREAD}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'6',
				'right_id'					=>	'7',
				'parent_id'					=>	'6',
				'icon'						=>	'fa	fa-comment',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'9',
				'button_url'				=>	'{U_SEARCH_NEW}',
				'button_name'				=>	'{L_SEARCH_NEW}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'8',
				'right_id'					=>	'9',
				'parent_id'					=>	'6',
				'icon'						=>	'fa	fa-thumbs-up',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'10',
				'button_url'				=>	'{U_SEARCH_ACTIVE_TOPICS}',
				'button_name'				=>	'{L_SEARCH_ACTIVE_TOPICS}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'10',
				'right_id'					=>	'11',
				'parent_id'					=>	'6',
				'icon'						=>	'fa	fa-star',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'11',
				'button_url'				=>	'{U_FAQ}',
				'button_name'				=>	'{L_FAQ}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'12',
				'right_id'					=>	'13',
				'parent_id'					=>	'6',
				'icon'						=>	'fa	fa-question-circle',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'12',
				'button_url'				=>	'{U_MEMBERLIST}',
				'button_name'				=>	'{L_MEMBERLIST}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'14',
				'right_id'					=>	'15',
				'parent_id'					=>	'6',
				'icon'						=>	'fa	fa-group',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'13',
				'button_url'				=>	'{U_TEAM}',
				'button_name'				=>	'{L_THE_TEAM}',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'1',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'16',
				'right_id'					=>	'17',
				'parent_id'					=>	'6',
				'icon'						=>	'fa	fa-trophy',
				'is_mega'					=>	'0',
				'mega_html'					=>	'',
			),
			array	(
				'button_id'					=>	'14',
				'button_url'				=>	'',
				'button_name'				=>	'MegaMenu',
				'button_desc'				=>	'',
				'button_external'			=>	'0',
				'button_display'			=>	'1',
				'button_only_registered'	=>	'0',
				'button_only_guest'			=>	'0',
				'left_id'					=>	'33',
				'right_id'					=>	'34',
				'parent_id'					=>	'0',
				'icon'						=>	'',
				'is_mega'					=>	'1',
				'mega_html'					=>	'&lt;div class=&quot;row yamm-content&quot;&gt;
	&lt;div class=&quot;col-md-3&quot;&gt;
		&lt;h4&gt;Your title&lt;/h4&gt;
		&lt;p&gt;Here you can see mega dropdown example!&lt;br /&gt;&lt;br /&gt;It can acts like a normal space and it supports site grid&lt;/p&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-md-3&quot;&gt;
		&lt;h4&gt;Your title&lt;/h4&gt;
		&lt;img class=&quot;img-responsive&quot; src=&quot;https://via.placeholder.com/194x194&quot; class=&quot;pull-left&quot; alt=&quot;&quot;&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-md-3&quot;&gt;
		&lt;h4&gt;Your title&lt;/h4&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;First dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt; Second Dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;br /&gt;
			&lt;ul&gt;
				&lt;button class=&quot;btn btn-primary&quot;&gt;Example&lt;/button&gt;
				&lt;button class=&quot;btn btn-default&quot;&gt;Example&lt;/button&gt;
				&lt;button class=&quot;btn btn-default&quot;&gt;&lt;i class=&quot;fa fa-bomb&quot;&gt;&lt;/i&gt;&lt;/button&gt;
			&lt;/ul&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
	&lt;div class=&quot;col-md-3&quot;&gt;
		&lt;h4&gt;Your title&lt;/h4&gt;
		&lt;ul&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;First dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt; Second Dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt; Second Dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt; Second Dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt; Second Dropdown item&lt;/a&gt;&lt;/li&gt;
			&lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-rocket&quot;&gt;&lt;/i&gt; Second Dropdown item&lt;/a&gt;&lt;/li&gt;
		&lt;/ul&gt;
	&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row yamm-content&quot;&gt;
	&lt;div class=&quot;col-md-12&quot;&gt;
		&lt;div class=&quot;text-center&quot; style=&quot;padding: 36px; background-color: #dcdcdc&quot;&gt;
			Mega Menu Info Box
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/div&gt;',
			),
		);

		$this->db->sql_multi_insert($this->table_prefix . 'orthohin_navbar_menu', $sample_menu_data);
	}
}
