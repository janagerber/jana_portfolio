<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('post_meta', 'Projekt')
    ->where('post_type', '=', 'project')
    ->add_fields([
        // 1. Hero / Header Bereich
        Field::make('image', 'project_hero_image', 'Hero Hintergrundbild')
            ->set_required(true),

        Field::make('text', 'project_hero_title', 'Projekttitel')
            ->set_required(true),

        // 2. Intro Sektion (Grüner Bereich oben)
        Field::make('textarea', 'project_intro_text', 'Intro Text')
            ->set_rows(3)
            ->set_default_value("Get to know\nthe project")
            ->set_required(true),

        // 3. Plot / Inhalt Sektion (Rosaroter Bereich)
        Field::make('image', 'project_plot_image', 'Plot Bild (links)')
            ->set_required(true),

        Field::make('rich_text', 'project_plot_text', 'Plot Beschreibungstext (rechts)')
            ->set_required(true),

        // 4. Director's Note / Galerie Sektion (Grüner Bereich unten)
        Field::make('image', 'project_gallery_image_1', 'Galerie Bild 1 (links oben)')
            ->set_required(true),

        Field::make('image', 'project_gallery_image_2', 'Galerie Bild 2 (links unten)')
            ->set_required(true),

        Field::make('image', 'project_gallery_image_3', 'Galerie Bild 3 (rechts hochkant)')
            ->set_required(true),
    ]);