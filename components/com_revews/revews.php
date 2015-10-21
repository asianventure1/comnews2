<?php
/**
 * @version     1.0.0
 * @package     com_revews
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Lala <huyen_5star@yahoo.com> - http://www.asianventure.com
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::register('RevewsFrontendHelper', JPATH_COMPONENT . '/helpers/revews.php');

// Execute the task.
$controller = JControllerLegacy::getInstance('Revews');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
