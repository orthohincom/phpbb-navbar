<?php
/**
*
* common [English]
*
* @package language
* @version 1.0.1
* @copyright (c) htp://www.orthohin.com/
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'IS_COLOR'            				=> 'Enable custom color',
	'BACKGROUND_COLOR'            		=> 'Navbar background color',
	'BACKGROUND_COLOR_EXPLAIN'     		=> '',
	'TEXT_COLOR'            			=> 'Navbar text color',
	'TEXT_COLOR_EXPLAIN'          		=> '',
	'MENU_POSITION'          			=> 'Menu alignment',
	'SELECT_LOGO'	              		=> 'Select logo image',

	'ORTHOHIN_NAVBAR_TITLE'				=> 'Navbar',
	'ORTHOHIN_NAVBAR_CONFIG'			=> 'General Configuration',
	'ORTHOHIN_NAVBAR_BUTTONS'			=> 'Menu Items',
	'ORTHOHIN_NAVBAR_CSS'				=> 'Custom CSS',

	'ORTHOHIN_NAVBAR_ADD_BUTTON'		=> 'Add a New Button',
    'ORTHOHIN_NAVBAR_EDIT_BUTTON'     	=> 'Edit Button',
    'IS_MEGA_ENABLE'					=> 'Enable Mega Menu for this button',
    'MEGA_HTML'							=> 'HTML for mega menu',
    'MEGA_HTML_EXP'						=> 'All Bootstrap component should work here. <a href="https://getbootstrap.com/docs/3.3/components" target="_blank">reference</a><br />Use class name <em>yamm-content</em> for padding',
	'MENU_BUTTON_NAME'	       			=> 'Button Name',
	'MENU_BUTTON_NAME_EXPLAIN' 			=> 'You can use plain text or language variable such as {L_PRIVATE_MESSAGES}',
	'MENU_BUTTON_URL'		      	    => 'URL',
	'MENU_BUTTON_ICON_EXP'		  	    => 'font-awesome icons are available. example: <em>fa fa-home</em>',
	'MENU_BUTTON_URL_EXPLAIN'	 		=> 'You can use URL adress including http:// protocol or template variable such as {U_PRIVATEMSGS}. You can find available template variables in includes/functions.php file around line 4545',
	'MENU_DISPLAY'			      	    => 'Display the Button',
	'MENU_EXTERNAL'			       	    => 'Link will be opened in a new window',
	'MENU_ONLY_REGISTERED'    		    => 'Display only for Registered Users',
	'MENU_ONLY_GUEST'          			=> 'Display only for Guests',
	'MENU_BUTTON_PARENT'       			=> 'Parent Button',
	'MENU_BUTTON_PARENT_EXPLAIN' 		=> 'Select the parent button if you want to have a dropdown section',
	'MOVE_BUTTON_WITH_SUBS'    			=> 'This button can\'t be a sub-button because it contains already sub-buttons.',
	'MENU_NAV'         	       			=> 'Menu',
	'MENU_ICON'          			 	=> 'Icon',
	'DELETE_BUTTON_CONFIRM'    			=> 'Are you sure you want to delete this Button?',
	'DELETE_SUBBUTTONS_CONFIRM'			=> 'Are you sure you want to delete this Button and all its sub-buttons?',
	'NO_BUTTONS'               			=> 'There is no Button to Manage',
	'NO_SUBBUTTONS'            			=> 'There is no sub-button to Manage',
	'BUTTON_UPDATED'           			=> 'Button has been updated Successfully',
	'BUTTON_ADDED'             			=> 'New button has been added Successfully',
	

	'CONFIGURATION_UPDATED'				=> 'Configuration successfully updated.',
	
	
	'IMG_UPLOADED'              		=> 'Image has been uploaded Successfully',
	'IMG_UPLOAD_EXPLAIN'        		=> 'Allowed extensions are png, jpg, jpeg and gif.',
	'IMG_UPLOAD_ERROR'          		=> 'Only png, jpg, jpeg and gif extensions are allowed.',

	'IMAGE_LOGO' 						=> 'Site logo',
	'CHECK_TO_DELETE' 					=> 'Check to Delete then hit the delete button',
	'IMAGE_DELETED' 					=> 'Image has been deleted successfully',


	'ENABLE_CUSTOM_CSS'					=> 'Enable custom CSS',
	'ENABLE_CUSTOM_CSS_EXPLAIN'			=> 'Select Yes to enable usage of custom.css file.',
	'SELECTED_FILE'						=> 'Selected file',
	'SELECTED_FILE_EXP'				=> 'Please note, that submitting this form may alter your custom.css file in an&nbsp;unexpected way. Due to processing limitations, all slashes will be removed, and HTML special characters (as &amp;nbsp; and such) will be replaced by its original character. If you need more advanced editing, please, use FTP to edit file directly. You can find the file in ext/orthohin/navbar/styles/all/theme/custom.css.',
	'CSS_UPDATED'						=> 'CSS successfully updated.',
));
