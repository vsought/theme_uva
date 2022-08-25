<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
                                                                                                                                    
// This is the version of the plugin.                                                                                               
$plugin->version = '2022102100';                                                                                                    
                                                                                                                                    
// This is the version of Moodle this plugin requires.                                                                              
$plugin->requires = '2022070700';                                                                                                   
                                                                                                     
// This is the component name of the plugin - it always starts with 'theme_'                                                        
// for themes and should be the same as the name of the folder.                                                                     
$plugin->component = 'theme_uva';

// This is the named version.
$plugin->release = '0.0.1';

// This is a stable release.
$plugin->maturity = MATURITY_STABLE;
                                                                                                                                    
// This is a list of plugins, this plugin depends on (and their versions).                                                          
$plugin->dependencies = [                                                                                                           
    'theme_boost' => '2018120300'
];