<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// -> Konfiguration der verschiedenen Module
Container::make('post_meta', 'Module')
    ->where('post_type', '=', 'page')
    ->add_fields([
        Field::make('complex', 'modules', 'Module')
            // -> example
            ->add_fields('example', 'Beispiel', [
                Field::make('text', 'title', 'Titel')->set_required(),
                Field::make('image', 'image', 'Bild')->set_required(),
            ])
            // -> hero_default
            ->add_fields('hero_default', 'Hero Standard', [
                Field::make('text', 'title', 'Titel')->set_required(),
                Field::make('textarea', 'intro_text', 'Intro Text')->set_required(),
                Field::make('image', 'image', 'Hintergrundbild')->set_required(),
            ])
            // -> plot_navigation
            ->add_fields('plot_navigation', 'Plot Navigation', [
                Field::make('text', 'side_title', 'Vertikaler Seitentitel')->set_default_value('INTRO'),
                Field::make('text', 'link_1_text', 'Link 1 Text')->set_default_value('PLOT'),
                Field::make('text', 'link_1_url', 'Link 1 URL')->set_default_value('#plot'),
                Field::make('text', 'link_2_text', 'Link 2 Text')->set_default_value("DIRECTOR'S NOTE"),
                Field::make('text', 'link_2_url', 'Link 2 URL')->set_default_value('#directors-note'),
                Field::make('text', 'link_3_text', 'Link 3 Text')->set_default_value('OUTRO'),
                Field::make('text', 'link_3_url', 'Link 3 URL')->set_default_value('#outro'),
            ])
            // -> overview_film_projects
            ->add_fields('overview_film_projects', 'Übersicht Filmprojekte', [
                Field::make('text', 'title', 'Titel (Marquee-Wort)')
                    ->set_default_value('FILM')
                    ->set_required(),
                Field::make('complex', 'projects', 'Filmprojekte')
                    ->set_layout('tabbed-horizontal')
                    ->add_fields([
                        Field::make('association', 'project', 'Verknüpftes Projekt (für den Link)')
                            ->set_max(1)
                            ->set_types([
                                [
                                    'type' => 'post',
                                    'post_type' => 'project',
                                ]
                            ]),
                        Field::make('image', 'image', 'Vorschaubild')->set_required(),
                        Field::make('text', 'info_1', 'Box 1 (Projekttitel, z. B. Nachhall)')->set_required(),
                        Field::make('text', 'info_2', 'Box 2 (Kategorie, z. B. Interactive Film)')->set_required(),
                        Field::make('text', 'info_3', 'Box 3 (Rolle, z. B. Role: Camera)')->set_required(),
                    ])
            ])
            // todo: add new modules here
            // -> SETTINGS
            ->set_layout('tabbed-vertical')
    ]);

// -> Funktion, um die Module und die entsprechenden Templates auf der Seite zu laden
function render_modules (): void {
    $modules = carbon_get_the_post_meta('modules');
    if (empty($modules)) {
        return;
    }
    foreach ($modules as $module) {
        // -> Modifiziere die Daten des Moduls, falls nötig, basierend auf dem Modultyp
        switch ($module['_type']) {
            case 'example':
                $module['image'] = get_media_by_id($module['image']);
                break;
            case 'hero_default':
                $module['image'] = get_media_by_id($module['image']);
                break;
            case 'plot_navigation':
                // Keine Bildverarbeitung nötig
                break;
            case 'overview_film_projects':
                if (!empty($module['projects'])) {
                    foreach ($module['projects'] as &$project) {
                        $project['image'] = get_media_by_id($project['image']);
                        $project['permalink'] = !empty($project['project'][0]['id'])
                            ? get_permalink($project['project'][0]['id'])
                            : '#';
                    }
                    unset($project);
                }
                break;
            // todo: add data modifications for modules here as a new case
        }

        // -> Laden des Templates basierend auf dem Modultyp und weitergeben der Daten
        get_template_part(
            'frontend/views/modules/' . $module['_type'],
            null,
            [
                'data' => $module
            ]
        );
    }
}