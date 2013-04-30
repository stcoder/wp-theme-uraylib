<?php get_header() ?>

<?php the_post() ?>

<div class="row-fluid">
    <div class="span8">
        <div class="post-wrap">
            <div class="post-header">
                <a href="<?php the_permalink(); ?>" class="post-header-title"><?php the_title(); ?></a>
            </div>
            <div class="post-content">
                <?php if (has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('multiple-thumb'); ?>
                </div>
                <?php endif; ?>
                <?php the_content() ?>
            </div>
            <div class="post-info">
                <i class="icon-time"></i> <?php echo get_the_date() ?> в <?php echo get_the_time() ?>
                <?php edit_post_link('<i class="icon-edit"></i>'); ?>
            </div>
        </div>
    </div>
    <div class="span4">
        <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer() ?>