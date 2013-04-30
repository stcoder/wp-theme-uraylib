<?php
    $postFormat = get_post_format();

    if ($postFormat === 'aside') {
        get_template_part('post', 'aside');
    } elseif ($postFormat === 'gallery') {
        get_template_part('post', 'gallery');
    } else {
        get_template_part('post', 'default');
    }

?>