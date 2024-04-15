<?php

get_header();

$id = get_queried_object_id();
$page = get_page($id);
$title = $page->post_title;
$content = $page->post_content;
$thumb_id = get_post_thumbnail_id($id);
$src = wp_get_attachment_image_src($thumb_id, 'full')[0];
$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

?>

<div class="section">
    <div class="title-card">
        <img class="title-img" src="<?= $src ?>" alt="<?= $alt ?>" />
    </div>
    <h3><?= $title ?></h3>

    <div class="contact-card">
        <img class="contact-profile" src="/wp-content/uploads/2024/04/carousel_marc_contact-1000.jpg" alt="Photo of Marc" />
        <div class="block">
            <h3>Marc Scarfone</h3>
            <p>Faculty, IT & Creative Industries</p>
            <p>
                <i></i>
                <a class="plain-link" href="">marc.scarfone@nscc.ca</a>
            </p>
            <p>
                Marc Scarfone is the founder of the IT Job Fair. He is a faculty member teaching Professional Practices to Information Technology students at the NSCC Institute of Technology Campus.
            </p>
        </div>
    </div>

    <p><?= $content ?></p>
</div>

<div class="section centered">
    <h3>Address</h3>
    <p>
        <i></i> Civic Address<br />
        5685 Leeds Street<br />
        Halifax, Nova Scotia, B2K 2T3
    </p>
    <img class="map" src="/wp-content/uploads/2024/04/it-map.png" alt="Map of Halifax focused on NSCC IT Campus" />
</div>

<?php get_footer(); ?>