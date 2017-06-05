

<?
$clone_slider = get_sub_field('content_slider');
$slides = $clone_slider['slides'];

if( have_rows('content_slider_slides') ):?>
    <div class="slider-wrapper">
        <div class="container">
            <div class="owl-carousel owl-carousel-content">
                <?php   // loop through the rows of data
                while ( have_rows('content_slider_slides') ) : the_row();
                    $slider_image           = get_sub_field('slider_image');
                    $slider_header          = get_sub_field('slider_header');
                    $slider_subheader       = get_sub_field('slider_subheader');
                    ?>
                    <div class="item">
                        <img src="<?=$slider_image?>">
                        <h1><?=$slider_header?></h1>
                        <h4><?=$slider_subheader?></h4>
                    </div>
                <?php    endwhile;?>
            </div>
        </div>
    </div>
<?php else :
    // no rows found
endif;?>
