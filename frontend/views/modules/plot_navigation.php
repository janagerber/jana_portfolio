<?php
$data = $args['data'];
if (function_exists('js_log')) {
    js_log($data);
}
?>

<section class="plot-navigation-wrapper" data-module="plot_navigation">
    <?php if (!empty($data['side_title'])) : ?>
        <h2 class="side-title"><?= esc_html($data['side_title']) ?></h2>
    <?php endif; ?>

    <nav class="nav-links" aria-label="Projekt Navigation">
        <?php if (!empty($data['link_1_text'])) : ?>
            <a href="<?= esc_url($data['link_1_url'] ?? '#') ?>" class="nav-item">
                <?= esc_html($data['link_1_text']) ?>
            </a>
        <?php endif; ?>

        <?php if (!empty($data['link_2_text'])) : ?>
            <a href="<?= esc_url($data['link_2_url'] ?? '#') ?>" class="nav-item">
                <?= esc_html($data['link_2_text']) ?>
            </a>
        <?php endif; ?>

        <?php if (!empty($data['link_3_text'])) : ?>
            <a href="<?= esc_url($data['link_3_url'] ?? '#') ?>" class="nav-item">
                <?= esc_html($data['link_3_text']) ?>
            </a>
        <?php endif; ?>
    </nav>
</section>