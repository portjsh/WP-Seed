<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 8/8/2016
 * Time: 11:29 AM
 */


 if(has_post_thumbnail()){
     $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
     ?>
    <div id="imageTitle" <?php echo $thumbnail ? "style='background-image:url($thumbnail[0]);'" : "";?>>
        <?php the_post_thumbnail( 'full' ); ?>
        <div id="postTitle">
            <div id="postTitlewrap"
                <?php if(is_page('Home')){ ?>
                class="homeMessage"
                <?php } ?>  >
                    <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
<?php } else { ?>
     <div id="imageTitle" style="background-image:url(<?php  echo esc_url( get_template_directory_uri() );?>/img/defaultheader.jpg);">
        <div id="postTitle">
            <div id="postTitlewrap">
                <h2><?php the_title();?></h2>
            </div>
        </div>
     </div>
<?php } ?>