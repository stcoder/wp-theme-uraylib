<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
?>
<div class="post-wrap">
    <div id="post<?php the_ID(); ?>">
        <div class="post-header">
            <a href="<?php the_permalink(); ?>" class="post-header-title"><?php the_title(); ?></a>
        </div>
        <div class="post-content">
            <?php if (has_post_thumbnail()): ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('multiple-thumb'); ?>
            </div>
            <?php endif; ?>
            <?php the_content('') ?>
        </div>
        <div class="post-info">
            <i class="icon-time"></i> <?php echo get_the_date() ?> в <?php echo get_the_time() ?>

            <?php if (comments_open()): ?>
            <span class="comments">
                <?php comments_popup_link('<i class="icon-comment"></i> Комментировать', '<i class="icon-comment"></i> 1 комментарий', '<i class="icon-comment"></i> Комментариев %'); ?>
            </span>
            <?php endif; ?>
            <?php edit_post_link('<i class="icon-edit"></i>'); ?>
            <a href="<?php the_permalink(); ?>" class="pull-right">Читать</a>
        </div>
    </div>
</div>