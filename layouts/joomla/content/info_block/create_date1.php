<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>

<?php echo  JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $displayData->created, JText::_('DATE_FORMAT_LC3')));  ?>

