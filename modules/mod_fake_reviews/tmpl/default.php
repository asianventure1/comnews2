<?php
// No direct access
defined('_JEXEC') or die;

?>
<div style="margin-top:-90px; margin-bottom: 40px; border: 1px solid #cccccc; background: #f9f9f9; border-top: none; padding:0px 10px;" >
    <div style="width: 100%; height:50px;" class="row">
        <img src="images/bg.jpg" style="width: 102%">
    </div>
    <?php foreach($list_reviews as $item){ ?>
    <div class="row" style="margin:0 0 30px 0">
        <div class="avatar">
            <a class="user">
                <img src="images/noneuser.png"></a>
        </div>
        <div style="margin:0; padding:0 0 0 60px;">
            <p class="font-bold text-info font12"><?php echo $item->name; ?> <span style="padding-left: 10px"> <?php echo $item->date; ?></span></p>
            <p><?php echo $item->reviewtext; ?></p>
        </div>
    </div>
    <?php } ?>
</div>