<?php get_header() ?>

<div class="row-fluid">

    <div class="span8">
        <?php

        while(have_posts()) {
            the_post();
            if (has_post_format('aside') && in_category(1)) {
                get_template_part('post', 'aside');
                continue;
            }
        }

        while(have_posts()) {
            the_post();
            if (has_post_format('gallery') && in_category(1)) {
                get_template_part('post', 'gallery');
                continue;
            }
        }

        get_posts(array('category' => 1))
        ?>
        <div class="post-section-title">Новости</div>
        <?php
        while(have_posts()) {
            the_post();
            if (!get_post_format() && in_category(1)) {
                get_template_part('post', 'default');
                continue;
            }
        }
        ?>
        <div class="paginator">
            <span class="pull-left"><?php previous_posts_link('« Предыдущие записи'); ?></span>
            <span class="pull-right"><?php next_posts_link('Следующие записи »'); ?></span>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="span4">
        <?php get_sidebar() ?>
    </div>

</div>

<?php get_footer() ?>