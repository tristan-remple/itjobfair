<?php

get_header();

$id = get_queried_object_id();
$page = get_page($id);
$content = $page->post_content;
$thumb_id = get_post_thumbnail_id($id);
$src = wp_get_attachment_image_src($thumb_id, 'full')[0];
$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

?>

<div class="section">
    <div class="title-card">
        <img class="title-img" src="<?= $src ?>" alt="<?= $alt ?>" />
    </div>
    <p><?= $content ?></p>
</div>

<?php get_footer(); ?>