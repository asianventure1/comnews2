<?php

/**
 * @version     1.0.0
 * @package     com_revews
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Lala <huyen_5star@yahoo.com> - http://www.asianventure.com
 */
// No direct access
defined('_JEXEC') or die;

/**
 * Revews helper.
 */
class RevewsHelper {

    /**
     * Configure the Linkbar.
     */
    public static function addSubmenu($vName = '') {
        		JHtmlSidebar::addEntry(
			JText::_('COM_REVEWS_TITLE_RCONTENTS'),
			'index.php?option=com_revews&view=rcontents',
			$vName == 'rcontents'
		);

    }

    /**
     * Gets a list of the actions that can be performed.
     *
     * @return	JObject
     * @since	1.6
     */
    public static function getActions() {
        $user = JFactory::getUser();
        $result = new JObject;

        $assetName = 'com_revews';

        $actions = array(
            'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.own', 'core.edit.state', 'core.delete'
        );

        foreach ($actions as $action) {
            $result->set($action, $user->authorise($action, $assetName));
        }

        return $result;
    }


}
