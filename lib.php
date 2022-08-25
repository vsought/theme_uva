<?php

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.

function theme_uva_get_main_scss_content($theme)
{
    global $CFG;

    $scss = '';
    $filename = !empty($theme->settings->preset) ? $theme->settings->preset : null;
    $fs = get_file_storage();

    $context = context_system::instance();
    if ($filename == 'default.scss')
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.
        $scss .= file_get_contents($CFG->dirroot . '/theme/saiteava/scss/preset/default.scss');
    else if ($filename == 'plain.scss')
        // We still load the default preset files directly from the boost theme. No sense in duplicating them.
        $scss .= file_get_contents($CFG->dirroot . '/theme/saiteava/scss/preset/plain.scss');
    else if ($filename && ($presetfile = $fs->get_file($context->id, 'theme_saiteava', 'preset', 0, '/', $filename)))
        // This preset file was fetched from the file area for theme_saiteava and not theme_boost (see the line above).
        $scss .= $presetfile->get_content();
    else
        // Safety fallback - maybe new installs etc.
        $scss .= file_get_contents($CFG->dirroot . '/theme/saiteava/scss/preset/default.scss');

    
    // // Pre CSS - this is loaded AFTER any prescss from the setting but before the main scss.                                        
    // $pre = file_get_contents($CFG->dirroot . '/theme/photo/scss/pre.scss');                                                         
    // // Post CSS - this is loaded AFTER the main scss but before the extra scss from the setting.                                    
    // $post = file_get_contents($CFG->dirroot . '/theme/photo/scss/post.scss');                                                       
                                                                                                                                    
    // // Combine them together.                                                                                                       
    // return $pre . "\n" . $scss . "\n" . $post;
    
    $uva = file_get_contents($CFG->dirroot . '/theme/uva/scss/style.scss');

    // Combine them together.
    return $scss . "\n" . $uva;


}

// Function to return the SCSS to prepend to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function and we don't want namespace clashes.
function theme_uva_get_pre_scss($theme) {
    // Load the settings from the parent.                                                                                           
    $theme = theme_config::load('boost');                                                                                           
    // Call the parent themes get_pre_scss function.                                                                                
    return theme_boost_get_pre_scss($theme);  
}

// Function to return the SCSS to append to our main SCSS for this theme.
// Note the function name starts with the component name because this is a global function and we don't want namespace clashes.
function theme_uva_get_extra_scss($theme) {
    // Load the settings from the parent.                                                                                           
    $theme = theme_config::load('boost');                                                                                           
    // Call the parent themes get_extra_scss function.                                                                                
    return theme_boost_get_extra_scss($theme);                         
}