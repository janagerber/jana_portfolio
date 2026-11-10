<?php
$data = $args['data'];
if (function_exists('js_log')) {
    js_log($data);
}
?>

<section class="hero-intro-wrapper" data-module="hero_default">
    <div class="hero">
        <?php if (!empty($data['image']['src'])): ?>
            <img class="image" src="<?= esc_url($data['image']['src']) ?>" alt="<?= esc_attr($data['image']['alt'] ?? '') ?>">
        <?php endif; ?>

        <?php if (!empty($data['title'])): ?>
            <h1 class="title">"<?= esc_html($data['title']) ?>"</h1>
        <?php endif; ?>
    </div>

    <?php if (!empty($data['intro_text'])): ?>
        <div class="intro">
            <p class="intro-text"><?= nl2br(esc_html($data['intro_text'])) ?></p>
        </div>
    <?php endif; ?>
</section>