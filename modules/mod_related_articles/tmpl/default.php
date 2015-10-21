<?php
// No direct access
defined('_JEXEC') or die;

?>
<br>
<?php
$main_list=array_chunk($list,4);
?>
<div class="row" style="margin-top: 20px">
    <section class="flexslider">
        <ul class="slides ">
            <?php foreach ($main_list as $list) :  ?>
            <li>
                <div class="row">
                    <?php foreach($list as $item){ ?>
                    <div class="col-md-3">
                        <?php echo JLayoutHelper::render('joomla.content.intro_image1', $item); ?>
                        <?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title1', $item); ?>
                    </div><!--end span4-->
                    <?php } ?>
                </div><!--end row-->
                <!--end row-->
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>