<?php
$data = $args['data'];
js_log($data);
?>

<section data-module="plot_navigation">
    <?php if ($data['side_title']) : ?>
        <h2 class="side-title"><?= $data['side_title'] ?></h2>
    <?php endif; ?>

    <nav class="nav-links" aria-label="Projekt Navigation">
        <?php if ($data['link_1_text']) : ?>
            <a href="<?= $data['link_1_url'] ?>" class="nav-item"><?= $data['link_1_text'] ?></a>
        <?php endif; ?>

        <?php if ($data['link_2_text']) : ?>
            <a href="<?= $data['link_2_url'] ?>" class="nav-item"><?= $data['link_2_text'] ?></a>
        <?php endif; ?>

        <?php if ($data['link_3_text']) : ?>
            <a href="<?= $data['link_3_url'] ?>" class="nav-item"><?= $data['link_3_text'] ?></a>
        <?php endif; ?>
    </nav>
</section>