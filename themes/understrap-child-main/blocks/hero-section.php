<?php 

$subtitle_1 = get_field('subtitle_1');
$heading = get_field('heading');
$subtitle_2 = get_field('subtitle_2');
$shortcode = get_field('shortcode');
$text_after_button = get_field('text_after_button');
?>
<div class="heroWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">            
                <div class="subtitleWrap">
                    <h4><?php echo $subtitle_1; ?></h4>
                </div>
                <div class="headingWrap">
                    <h1><?php echo $heading; ?></h1>
                </div>
                <div class="subtitle2Wrap">
                    <p><?php echo $subtitle_2; ?></p>
                </div>
                <div class="row buttonsWrap">
                    <div class="col-4">
                        <?php echo do_shortcode(''.$shortcode.''); ?>
                    </div>
                    <div class="col-6 m-a-0">
                        <p><?php echo $text_after_button; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="imgWrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/illustration-devices.svg">
                </div>
            </div>
        </div>
    </div>
</div>