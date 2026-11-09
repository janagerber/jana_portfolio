
<?php
$menu = get_menu_by_slug('main');
$logo = get_globals_logo();
?>

<header data-layout="header">

    <a href="/" class="logo">
        <?= esc_html($logo ?: 'JANA GERBER') ?>
    </a>

    <nav class="nav-container">
        <ul class="nav">
            <?php foreach ($menu as $item) : ?>
                <li class="nav-item">
                    <a target="<?= esc_attr($item['target']) ?>"
                       href="<?= esc_url($item['url']) ?>">
                        <?= esc_html($item['title']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

</header>
