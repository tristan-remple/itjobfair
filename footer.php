</main>

<?php
    $menu_items = wp_get_nav_menu_items("Footer");
?>

<footer>
    <div class="row">
        <img id="footer-img" src="/wp-content/uploads/2024/04/bird_logo_black.png" alt="Silouette image of a blackbird perched on a branch" />
        <p>
            © 2019-2024 Blackbird Project
        </p>
    </div>
    <div class="row row-end">
        <?php foreach($menu_items as $item) { ?>
            <a class="nav-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
        <?php } // end foreach ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>