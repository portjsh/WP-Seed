<?php $column_count = get_sub_field('columns_column_count'); ?>

<?php if(have_rows('columns_columns')): ?>
    <div class="container">
        <div class="column-wrapper count-<?=$column_count ? "$column_count" : ""?>">
            <?php while (have_rows('columns_columns')) : the_row();
                $header = get_sub_field('header');
                $subheader = get_sub_field('subheader');
                $link = get_sub_field('link');
                $icon = get_sub_field('icon');
                $hover_icon = get_sub_field('hover_icon');
                ?>
                <div class="column">
                    <a href="<?= $link?>">
                        <div class="icon">
                            <?= $icon ? "<img src='$icon' alt='icon'>" : "";?>
                        </div>
                        <div class="hover-icon">
                            <?= $hover_icon ? "<img src='$hover_icon' alt='icon'>" : "";?>
                        </div>
                        <div class="column-content">
                            <?= $header ? "<h1>$header</h1>" : "";?>
                            <?= $subheader; ?>
                        </div>
                    </a>
                </div>
            <?php endwhile?>
        </div>
    </div>
<?php endif ;?>