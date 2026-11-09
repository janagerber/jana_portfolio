<?php
$project = get_project_by_id(get_the_ID());
?>

<main data-page="project">
    <!-- Erste Bildschirmseite: Hero + Intro -->
    <div class="hero-intro-wrapper">
        <div class="hero">
            <h1 class="title"><?= esc_html($project['hero_title']) ?></h1>
            <?php if (!empty($project['hero_image']['src'])): ?>
                <img class="image" src="<?= esc_url($project['hero_image']['src']) ?>" alt="<?= esc_attr($project['hero_image']['alt']) ?>">
            <?php endif; ?>
        </div>

        <div class="intro">
            <p class="intro-text"><?= nl2br(esc_html($project['intro_text'])) ?></p>
        </div>
    </div>

    <!-- Zweite Bildschirmseite: Plot (Pink) -->
    <div class="plot">
        <?php if (!empty($project['plot_image']['src'])): ?>
            <img class="image" src="<?= esc_url($project['plot_image']['src']) ?>" alt="<?= esc_attr($project['plot_image']['alt']) ?>">
        <?php endif; ?>
        <div class="text">
            <?= wpautop($project['plot_text']) ?>
        </div>
    </div>

    <!-- Dritte Bildschirmseite: Galerie (Blau/Grün) -->
    <div class="gallery">
        <?php if (!empty($project['gallery_image_1']['src'])): ?>
            <img class="image" src="<?= esc_url($project['gallery_image_1']['src']) ?>" alt="<?= esc_attr($project['gallery_image_1']['alt']) ?>">
        <?php endif; ?>

        <?php if (!empty($project['gallery_image_2']['src'])): ?>
            <img class="image" src="<?= esc_url($project['gallery_image_2']['src']) ?>" alt="<?= esc_attr($project['gallery_image_2']['alt']) ?>">
        <?php endif; ?>

        <?php if (!empty($project['gallery_image_3']['src'])): ?>
            <img class="image" src="<?= esc_url($project['gallery_image_3']['src']) ?>" alt="<?= esc_attr($project['gallery_image_3']['alt']) ?>">
        <?php endif; ?>
    </div>
</main>