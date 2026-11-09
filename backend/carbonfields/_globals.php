
<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Globales')
    ->add_fields([
        Field::make('text', 'logo', 'Logo')->set_required()
            ->set_default_value('JANA GERBER'),

        Field::make('text', 'email', 'E-Mail-Adresse')->set_required( true ),

        Field::make('complex', 'socials', 'Social Media')->set_required( true )
            ->set_layout('tabbed-horizontal')
            ->add_fields([
                Field::make('text', 'platform', 'Plattform'),
                Field::make('text', 'url', 'Profil-Link'),
            ]),

        Field::make('text', 'copyright', 'Copyright')->set_required( true )
            ->set_default_value('© 2026 Jana Gerber'),
    ]);
