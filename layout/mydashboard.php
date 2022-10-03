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

/*
 * @package   theme_mtur
 * @copyright 2019 Grupo Saite
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG, $PAGE, $OUTPUT, $SITE, $PAGE, $USER;

require_once($CFG->libdir . '/behat/lib.php');

if (isguestuser()){
  redirect($CFG->wwwroot . "/login/logout.php?sesskey=" . $USER->sesskey);
}

//$OUTPUT->check_local_listener_forms_answer();

// if (!count($USER->lastcourseaccess)){
//   redirect($CFG->wwwroot . "/?redirect=0&courses=all");
// }
 
$bodyattributes = $OUTPUT->body_attributes();
//$navbar_menu = $OUTPUT->navbar_menu(true);

$templatecontext = [
  'userid' => $USER->id,
  'sitename' => format_string($SITE->shortname, true, [
    'context' => context_course::instance(SITEID),
    "escape" => false
  ]),

  'output' => $OUTPUT,
  'bodyattributes' => $bodyattributes,

  /*'navbar_menu' => $navbar_menu,*/
];

echo $OUTPUT->render_from_template(
  'theme_uva/mydashboard',
  $templatecontext
);