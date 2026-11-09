<?php

function get_project_by_id($id): array {
    // Hilfsfunktion: Falls es schon ein Array ist oder eine URL/ID
    $format_image = function($value) {
        if (empty($value)) return ['src' => '', 'alt' => ''];
        if (is_array($value)) return $value;
        // Wenn es eine URL ist (altes Carbon Fields Format)
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return ['src' => $value, 'alt' => ''];
        }
        // Wenn es eine Bild-ID ist
        return get_media_by_id($value);
    };

    return [
        'title'           => get_the_title($id),
        'hero_title'      => carbon_get_post_meta($id, 'project_hero_title'),
        'hero_image'      => $format_image(carbon_get_post_meta($id, 'project_hero_image')),
        'intro_text'      => carbon_get_post_meta($id, 'project_intro_text'),
        'plot_image'      => $format_image(carbon_get_post_meta($id, 'project_plot_image')),
        'plot_text'       => carbon_get_post_meta($id, 'project_plot_text'),
        'gallery_image_1' => $format_image(carbon_get_post_meta($id, 'project_gallery_image_1')),
        'gallery_image_2' => $format_image(carbon_get_post_meta($id, 'project_gallery_image_2')),
        'gallery_image_3' => $format_image(carbon_get_post_meta($id, 'project_gallery_image_3')),
    ];
}