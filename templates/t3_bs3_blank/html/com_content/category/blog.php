<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');
?>
<!--<div style="clear: both">
<div class="col-md-8">
    <h6 class="color-red" style="height: 20px">COLLECTION TRAVEL - THIS MONTH’S TOP STORIES</h6>
    <div class="list_news" style="margin: 0; padding: 10px 0; border-top: 3px solid #006699">
        <div class="onenew" style="border-bottom: 1px dotted #cccccc; min-height: 110px; margin: 10px 0">
            <div class="new-img" style="float: left; width: 40%">
                <img src="images/Chao.jpg" width="170" height="100">
            </div>
            <div class="new-content" style="float: left; width: 60%">
                <p class="font-bold font13">Marsa Malaz Kempinski Introduces Qatar's First Golden High Tea - 10/11/15</p>
                <p>Café Murano, the award winning European gourmet café at Marsa Malaz Kempinski, The Pearl – Doha, has introduced the opulent</p>
            </div>
        </div>
        <div class="onenew" style="border-bottom: 1px dotted #cccccc; min-height: 110px; margin: 10px 0">
            <div class="new-img" style="float: left; width: 40%">
                <img src="images/Chao.jpg" width="170" height="100">
            </div>
            <div class="new-content" style="float: left; width: 60%">
                <p class="font-bold font13">Marsa Malaz Kempinski Introduces Qatar's First Golden High Tea - 10/11/15</p>
                <p>Café Murano, the award winning European gourmet café at Marsa Malaz Kempinski, The Pearl – Doha, has introduced the opulent</p>
            </div>
        </div>
        <div class="onenew" style="border-bottom: 1px dotted #cccccc; min-height: 110px; margin: 10px 0">
            <div class="new-img" style="float: left; width: 40%">
                <img src="images/Chao.jpg" width="170" height="100">
            </div>
            <div class="new-content" style="float: left; width: 60%">
                <p class="font-bold font13">Marsa Malaz Kempinski Introduces Qatar's First Golden High Tea - 10/11/15</p>
                <p>Café Murano, the award winning European gourmet café at Marsa Malaz Kempinski, The Pearl – Doha, has introduced the opulent</p>
            </div>
        </div>
        <div class="onenew" style="border-bottom: 1px dotted #cccccc; min-height: 110px; margin: 10px 0">
            <div class="new-img" style="float: left; width: 40%">
                <img src="images/Chao.jpg" width="170" height="100">
            </div>
            <div class="new-content" style="float: left; width: 60%">
                <p class="font-bold font13">Marsa Malaz Kempinski Introduces Qatar's First Golden High Tea - 10/11/15</p>
                <p>Café Murano, the award winning European gourmet café at Marsa Malaz Kempinski, The Pearl – Doha, has introduced the opulent</p>
            </div>
        </div>
        <div class="onenew" style="border-bottom: 1px dotted #cccccc; min-height: 110px; margin: 10px 0">
            <div class="new-img" style="float: left; width: 40%">
                <img src="images/Chao.jpg" width="170" height="100">
            </div>
            <div class="new-content" style="float: left; width: 60%">
                <p class="font-bold font13">Marsa Malaz Kempinski Introduces Qatar's First Golden High Tea - 10/11/15</p>
                <p>Café Murano, the award winning European gourmet café at Marsa Malaz Kempinski, The Pearl – Doha, has introduced the opulent</p>
            </div>
        </div>
    </div>
</div>
<div class="col-md-4">
    <h4 class="color-blue" style="height:20px">VIETNAM  FEATURES</h4>
    <div class="list_news" style="margin: 0; padding: 10px 0; border-top: 3px solid #006699">
        <div class="list_feature">
            <div class="one_feature" style="margin: 10px 0">
                <img src="images/tripboat.jpg">
                <p class="font-bold font13 margintop5 marginbottom5">LUXURY VOYAGES</p>
                <p>Find out what's new with all the top luxury cruise lines.</p>
            </div>
            <div class="one_feature" style="margin: 10px 0">
                <img src="images/tripboat.jpg">
                <p class="font-bold font13 margintop5 marginbottom5">LUXURY VOYAGES</p>
                <p>Find out what's new with all the top luxury cruise lines.</p>
            </div>
            <div class="one_feature" style="margin: 10px 0">
                <img src="images/tripboat.jpg">
                <p class="font-bold font13 margintop5 marginbottom5">LUXURY VOYAGES</p>
                <p>Find out what's new with all the top luxury cruise lines.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div style="clear: both">
<p></p>
</div>-->

<!-- add code here -->

<?php
$this->intro_items1=$this->intro_items;
$introcount = (count($this->intro_items));
$counter = 0;
?>
<div style="clear: both">
    <div class="col-md-8">
        <h6 class="color-red" style="height: 20px">COLLECTION TRAVEL - THIS MONTH’S TOP STORIES</h6>

        <div class="list_news" style="margin: 0; padding: 10px 0; border-top: 3px solid #006699">
            <!--b leading item-->
            <?php $leadingcount = 0; ?>
            <?php if (!empty($this->lead_items)) : ?>
                <div class="items-leading clearfix">
                    <?php foreach ($this->lead_items as &$item) : ?>
                        <?php
                        $this->item = & $item;
                        echo $this->loadTemplate('item');
                        ?>
                        <?php $leadingcount++; ?>
                    <?php endforeach; ?>
                </div><!-- end items-leading -->
            <?php endif; ?>
            <!--e leading item-->

            <?php if (!empty($this->intro_items)) : ?>
                <?php foreach ($this->intro_items as $key => &$item) : ?>
                    <?php
                    $this->item = & $item;
                    echo $this->loadTemplate('item');
                    ?>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
        <?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
            <div class="pagination">
                <?php if ($this->params->def('show_pagination_results', 1)) : ?>
                <?php endif; ?>
                <?php echo $this->pagination->getPagesLinks(); ?> </div>
        <?php endif; ?>
    </div>

    <div class="col-md-4">
        <h4 class="color-blue" style="height:20px">VIETNAM  FEATURES</h4>
        <div class="list_news" style="margin: 0; padding: 10px 0; border-top: 3px solid #006699">
            <?php foreach($this->featureds as $item1){ ?>
                <div class="list_feature">
                    <div class="one_feature" style="margin: 10px 0">
                        <?php echo JLayoutHelper::render('joomla.content.intro_image1_featured', $item1); ?>
                        <p class="font-bold font13 margintop5" style="margin-bottom: 0"><?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title1', $item1); ?></p>
                        <p style="margin:0; padding: 0"><?php echo JString::sub_string($item1->introtext,70); ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</div>
