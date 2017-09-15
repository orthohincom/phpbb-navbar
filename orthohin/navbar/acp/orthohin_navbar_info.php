<?php
/**
*
* Navbar extension for the phpBB Forum Software package.
*
* @copyright http://www.orthohin.com
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace orthohin\navbar\acp;

class orthohin_navbar_info
{
    public function module()
    {
        return array(
            'filename'  => '\orthohin\navbar\acp\orthohin_navbar_module',
            'title'     => 'ORTHOHIN_NAVBAR_TITLE',
            'modes'     => array(
                'config'        => array('title' => 'ORTHOHIN_NAVBAR_CONFIG', 'auth' => 'ext_orthohin/navbar', 'cat' => array('ACP_CAT_DOT_MODS')),
                'menu'          => array('title' => 'ORTHOHIN_NAVBAR_BUTTONS', 'auth' => 'ext_orthohin/navbar', 'cat' => array('ACP_CAT_DOT_MODS')),
                'upload'        => array('title' => 'ORTHOHIN_NAVBAR_UPLOAD', 'auth' => 'ext_orthohin/navbar', 'cat' => array('ACP_CAT_DOT_MODS')),
                'css'           => array('title' => 'ORTHOHIN_NAVBAR_CSS', 'auth' => 'ext_orthohin/navbar', 'cat' => array('ACP_CAT_DOT_MODS')),
            ),
        );
    }
}
