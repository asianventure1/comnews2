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
?>
<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != JFactory::getDbo()->getNullDate())) : ?>
	<div class="system-unpublished">
<?php endif; ?>

        <div class="onenew" style="border-bottom: 1px dotted #cccccc; min-height: 110px; margin: 10px 0">
            <div class="new-img" style="float: left; width: 40%">
                <?php echo JLayoutHelper::render('joomla.content.intro_image1', $this->item); ?>
            </div>
            <div class="new-content" style="float: left; width: 60%">
                <p class="font-bold font13"><?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title1', $this->item); ?>
                    - <?php echo JLayoutHelper::render('joomla.content.info_block.create_date1', $this->item); ?>
                </p>
                <p><?php if (!$params->get('show_intro')) : ?>
                        <?php echo $this->item->event->afterDisplayTitle; ?>
                    <?php endif; ?>
                    <?php echo $this->item->event->beforeDisplayContent; ?> <?php echo JString::sub_string($this->item->introtext,170); ?></p>
            </div>
        </div>


        <?php echo $this->item->event->afterDisplayContent; ?>
