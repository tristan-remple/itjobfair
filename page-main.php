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
        <h1 class="title">Foster your recruiting!</h1>
        <a class="button orange-button" href="">
            Find out more
        </a>
    </div>
    <p><?= $content ?></p>
</div>
<div class="section centered">
    <h3>2024 IT Job Fair and Conference</h3>
    <h4>Pier 21 (Halifax, NS)</h4>
    <h4>February 20, 2024 12:00 PM</h4>
    <img class="map" src="/wp-content/uploads/2024/04/21-map.png" alt="Map of Halifax focused on Pier 21" />
</div>
<div class="section centered">
    <h3>Featured Sponsors</h3>
    <div class="row-wrap">
        <a class="sponsor" href="https://digitalnovascotia.com/">
            <h4>Networking Sponsor</h4>
            <img class="sponsor-img" src="/wp-content/uploads/2024/04/dns_logo-500.png" alt="Digital Nova Scotia" />
        </a>
        <a class="sponsor" href="https://www.melissapike.ca/">
            <h4>Wellness Sponsor</h4>
            <img class="sponsor-img" src="/wp-content/uploads/2024/04/melissa_pike-500.png" alt="Melissa Pike Health & Life Coaching" />
        </a>
        <a class="sponsor" href="https://www.maplewave.com/">
            <img class="sponsor-img" src="/wp-content/uploads/2024/04/maplewave-500.jpg" alt="Maplewave: Amplify your retail performance" />
        </a>
        <a class="sponsor" href="https://www.verbinteractive.com/">
            <img class="sponsor-img" src="/wp-content/uploads/2024/04/verb-black-500.png" alt="Verb" />
        </a>
    </div>
</div>

<?php get_footer(); ?>