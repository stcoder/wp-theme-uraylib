<?php get_header() ?>

<?php the_post() ?>
<div class="row-fluid">
    <div class="span8">
        <div class="post-wrap">
            <div class="post-header">
                <a href="<?php the_permalink(); ?>" class="post-header-title"><?php the_title(); ?></a>
                <span class="post-header-meta">
                    <?php echo get_the_category_list(',', '<i class="icon-tag"></i>') ?>
                    <?php edit_post_link('<i class="icon-edit"></i> Редактировать') ?>
                </span>
            </div>
            <div class="post-content">
                <?php if (has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('multiple-thumb'); ?>
                </div>
                <?php endif; ?>
                <?php the_content() ?>
            </div>
        </div>
    </div>
    <div class="span4">
        <?php get_sidebar() ?>
    </div>
</div>

<?php get_footer() ?>