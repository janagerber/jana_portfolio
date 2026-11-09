
<?php

// Logo
function get_globals_logo(): string|false {
    $logo = carbon_get_theme_option('logo');
    return $logo ?: false;
}

// E-Mail
function get_globals_email(): string|false {
    $email = carbon_get_theme_option('email');
    return $email ?: false;
}

// Social Media
function get_globals_socials(): array|false {
    $socials = carbon_get_theme_option('socials');

    if (!$socials) {
        return false;
    }

    return $socials;
}

// Copyright
function get_globals_copyright(): string|false {
    $copyright = carbon_get_theme_option('copyright');
    return $copyright ?: false;
}
