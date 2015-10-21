<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);
jimport('joomla.string.string');
?>


<?php if (($this->item->state == 1) && ($this->item->featured == 1)):?>
    <div class="one_feature" style="margin: 10px 0; clear:both;">
        <?php echo JLayoutHelper::render('joomla.content.intro_image1_featured', $this->item); ?>
        <p class="font-bold font13 margintop5 marginbottom5" style="clear: both"><?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title1', $this->item); ?></p>
        <p><?php echo $this->item->event->beforeDisplayContent; ?> <?php echo JString::sub_string($this->item->introtext,50); ?></p>
    </div>
<?php endif; ?>

