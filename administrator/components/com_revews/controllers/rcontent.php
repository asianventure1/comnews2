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

jimport('joomla.application.component.controllerform');

/**
 * Rcontent controller class.
 */
class RevewsControllerRcontent extends JControllerForm
{

    function __construct() {
        $this->view_list = 'rcontents';
        parent::__construct();
    }

}