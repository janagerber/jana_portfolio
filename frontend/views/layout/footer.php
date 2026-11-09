
<?php
$email = get_globals_email();
$socials = get_globals_socials();
$copyright = get_globals_copyright();
$menu = get_menu_by_slug('legals');
?>

<footer data-layout="footer">

    <?php if ($email) : ?>
        <a href="mailto:<?= esc_attr($email) ?>">
            <?= esc_html($email) ?>
        </a>
    <?php endif; ?>

    <?php if ($socials) : ?>
        <div class="socials">
            <?php foreach ($socials as $social) : ?>
                <a href="<?= esc_url($social['url']) ?>"
                   target="_blank"
                   rel="noopener noreferrer">
                    <?= esc_html($social['platform']) ?>
                </a>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <nav class="nav-container">
        <ul class="nav">
            <?php if ($menu) : ?>
                <?php foreach ($menu as $item) : ?>
                    <li class="nav-item">
                        <a target="<?= esc_attr($item['target']) ?>"
                           href="<?= esc_url($item['url']) ?>">
                            <?= esc_html($item['title']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </nav>

    <?php if ($copyright) : ?>
        <p><?= esc_html($copyright) ?></p>
    <?php endif; ?>

</footer>
