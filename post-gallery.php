<?php
/**
 * Author: Karadaras
 * Uri: http://karadaras.com
 */
?>
<div class="post-wrap">
    <div id="post<?php the_ID(); ?>">
        <div class="post-content post-type-gallery">
            <?php the_content('') ?>
            <?php edit_post_link('<i class="icon-edit"></i>'); ?>
        </div>
    </div>
</div>