<?php if (have_rows('hero_slider_slide')):?>
<div class="hero-wrapper">
    <div class="owl-carousel owl-carousel-hero">
        <?php
        while (have_rows('hero_slider_slide')) : the_row();
            $icon = get_sub_field('icon');
            $header = get_sub_field('header');
            $subheader = get_sub_field('subheader');
            $text_align = get_sub_field('text_align');
            $background = get_sub_field('background');
            ?>
            <div class="item">
                <div class="slide-image" style="background-image: url(<?=$background?>)">
                    <div class="container">
                        <div class="slide-content align-<?=$text_align?>">
                            <div class="slide-icon">
                                <img src="<?=$icon?>">
                            </div>
                            <div class="slider-text">
                                <?=$header ? "<h1>$header</h1>" : "";?>
                                <?=$subheader ? "<h3>$subheader</h3>" : "";?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </div>
</div>
<?php endif ?>