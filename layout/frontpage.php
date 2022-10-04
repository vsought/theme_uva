<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Frontpage layout for the uva theme.
 *
 * @package    theme_uva
 * @copyright
 * @license
 */

defined('MOODLE_INTERNAL') || die();

global $DB, $PAGE, $USER, $CFG;

user_preference_allow_ajax_update('drawer-open-nav', PARAM_ALPHA);
require_once($CFG->libdir . '/behat/lib.php');

/*$navdraweropen = false;
frontpage_set_page_title();*/

//$bodyattributes = $OUTPUT->body_attributes([]);

$templatecontext = [
    "sitename" => format_string($SITE->shortname, true, [
        "content" => context_course::instance(SITEID),
        "escape" => false
      ]),
    'output' => $OUTPUT,
    /*'bodyattributes' => $bodyattributes*/
];

/*$navbar_menu = $OUTPUT->navbar_menu(true);
$templatecontext["header"] = $navbar_menu;*/

$courseslength = $DB->count_records_select('course', 'visible = 1');
$userslength = $DB->count_records_select('user', 'confirmed = 1 AND suspended = 0 AND deleted = 0');
$resourceslength = $DB->count_records_select('course_modules', '');
/*$templatecontext["all_courses"] = ( array_key_exists("search", $_GET) 
  || (array_key_exists("courses", $_GET) 
    && ($_GET["courses"] === "all" 
    || $_GET["courses"] === "open" 
    || $_GET["courses"] === "close"
    || $_GET["courses"] === "comingsoon"
    || isset($_GET["search"])));*/
$templatecontext["courseslength"] = $courseslength - 1;
$templatecontext["userslength"] = $userslength;
$templatecontext["resourceslength"] = $resourceslength;

if (isloggedin()){
    echo $OUTPUT->render_from_template('theme_uva/frontpage', $templatecontext);
}else{
    redirect($CFG->wwwroot . "/login/index.php");
    //echo $OUTPUT->render_from_template('theme_uva/auth', $templatecontext);
}
