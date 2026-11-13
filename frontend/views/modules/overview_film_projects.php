<?php
$data = $args['data'];
js_log($data);
?>

<section data-module="overview_film_projects">
    <!-- Oberes Marquee-Band mit ZWEI identischen Tracks für lückenlosen Loop -->
    <div class="marquee-bar">
        <div class="marquee-track">
            <?php for ($i = 0; $i < 20; $i++) : ?>
                <span class="marquee-item"><?= esc_html($data['title']) ?></span>
            <?php endfor; ?>
        </div>
        <div class="marquee-track" aria-hidden="true">
            <?php for ($i = 0; $i < 20; $i++) : ?>
                <span class="marquee-item"><?= esc_html($data['title']) ?></span>
            <?php endfor; ?>
        </div>
    </div>

    <!-- Filmprojekt-Slider Bereich -->
    <?php if (!empty($data['projects'])) : ?>
        <div class="projects-slider">
            <?php foreach ($data['projects'] as $index => $project) : ?>
                <article class="project-slide <?= $index === 0 ? 'is-active' : '' ?>">
                    
                    <a href="<?= esc_url($project['permalink']) ?>" class="slide-visual">
                        <?php if (!empty($project['image']['src'])) : ?>
                            <img class="image" src="<?= esc_url($project['image']['src']) ?>" alt="<?= esc_attr($project['image']['alt'] ?? $project['info_1']) ?>">
                        <?php endif; ?>
                    </a>

                    <div class="info-bar">
                        <div class="info-box"><?= esc_html($project['info_1']) ?></div>
                        <div class="info-box"><?= esc_html($project['info_2']) ?></div>
                        <div class="info-box"><?= esc_html($project['info_3']) ?></div>
                    </div>

                </article>
            <?php endforeach; ?>

            <button type="button" class="slider-next" aria-label="Nächstes Filmprojekt">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 32H52M52 32L34 14M52 32L34 50" stroke="currentColor" stroke-width="5" stroke-linecap="square"/>
                </svg>
            </button>
        </div>
    <?php endif; ?>
</section>