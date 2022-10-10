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
 * Course renderer.
 *
 * @package    theme_uva
 * @copyright  
 * @license    
 */

namespace theme_uva\output\core;

defined('MOODLE_INTERNAL') || die();

use coursecat_helper;
//use theme_uva\util\extras;
use html_writer;
use moodle_url;
use stdClass;
use core_course_list_element;
use theme_uva\util\course_util;
use core_course_category;

class course_renderer extends \core_course_renderer
{


    /*private function coursecat_courses_carousel($chelper, $courses, $totalcount){
        global $OUTPUT, $CFG;

        $context = array();
        $context["courses"] = array();
        // $context["trails"] = array();
        // $context["cartilhas"] = array();

        foreach ($courses as $course){
            //$relatedcontext = \context_course::instance($course->id);
            //$course_data = extras::get_course_custom_fields(get_course($course->id)->id);

            $current_course = new \stdClass();
            $current_course->link = "$CFG->wwwroot/course/view.php?id=$course->id&page=introduction";
            //$current_course->image = extras::get_course_summary_image($course);
            $current_course->name = $chelper->get_course_formatted_name($course);
            $current_course->description = $course->summary;
            //$current_course->enrolledusers = count_enrolled_users($relatedcontext);
            //$current_course->resources = extras::get_total_resources($course);
            // $current_course->is_trail = $course->format == "trail_mtur";
            // $current_course->is_course = $course->format == "saiteava" || $course->format == "classroom";
            // $current_course->is_cartilha = $course->format == "singleactivity";
            $current_course->coming_soon = $course->startdate > time();
            $current_course->available = !boolval($current_course->coming_soon);

           

            
            array_push ( $context["courses"], $current_course);
            
        }
        $context["courses"] = array_slice($context["courses"], 0, 6);
        // $context["trails"] = array_slice($context["trails"], 0, 6);

        // $context["trails_count"] = sizeof($context["trails"]);
        // $context["cartilhas_count"] = sizeof($context["cartilhas"]); // ! change to cartilhas
        $context["output"] = $OUTPUT;

        return $OUTPUT->render_from_template("theme_uva/frontpage_content", $context);
    }*/

    // protected function coursecat_coursebox_content(coursecat_helper $chelper, $course) {

    //     global $OUTPUT;

    //     if ($course instanceof stdClass) {
    //         $course = new core_course_list_element($course);
    //     }

    //     $courseutil = new course($course);

    //     $coursecontacts = $courseutil->get_course_contacts();

    //     $courseenrolmenticons = $courseutil->get_enrolment_icons();
    //     $courseenrolmenticons = !empty($courseenrolmenticons) ? $this->render_enrolment_icons($courseenrolmenticons) : false;

    //     $courseprogress = $courseutil->get_progress();
    //     $hasprogress = $courseprogress != null;

    //     $data = [
    //         'id' => $course->id,
    //         'fullname' => $chelper->get_course_formatted_name($course),
    //         'visible' => $course->visible,
    //         'image' => $courseutil->get_summary_image(),
    //         'summary' => $courseutil->get_summary($chelper),
    //         'category' => $courseutil->get_category(),
    //         'customfields' => $courseutil->get_custom_fields(),
    //         'hasprogress' => $hasprogress,
    //         'progress' => (int) $courseprogress,
    //         'hasenrolmenticons' => $courseenrolmenticons != false,
    //         'enrolmenticons' => $courseenrolmenticons,
    //         'hascontacts' => !empty($coursecontacts),
    //         'contacts' => $coursecontacts,
    //         'teste' => 'hdiuahgsduiggdag',
    //     ];
        

    //     echo($OUTPUT->render_from_template('theme_uva/frontpage_courses', $data));
    // }

    protected function coursecat_courses(coursecat_helper $chelper, $courses, $totalcount = null){
        
        global  $OUTPUT, $PAGE, $CFG;

        $context = array();
        $context["courses"] = array();
        //$context["trails"] = array();

        foreach ($courses as $course){
            $relatedcontext = \context_course::instance($course->id);
            //$course_data = extras::get_course_custom_fields(get_course($course->id)->id);

            $cat = core_course_category::get($course->category, IGNORE_MISSING);

            if (!$cat) {
                return '';
            }

            
            

            $current_course = new \stdClass();
            $current_course->link = "$CFG->wwwroot/course/view.php?id=$course->id&page=introduction";
            //$current_course->image = course_util::get_summary_image_url();
            $current_course->name = $chelper->get_course_formatted_name($course);
            $current_course->category = $cat->get_formatted_name();
            //$current_course->description = $course->description;
            //$current_course->enrolledusers = count_enrolled_users($relatedcontext);
            //$current_course->resources = extras::get_total_resources($course);
            //$current_course->is_trail = $course->format == "trail_saiteava";
            //$current_course->is_course = $course->format == "saiteava" || $course->format == "classroom";

            if($course->startdate < 0 && $course->enddate > 0){
                $current_course->status = "Online";
            }else{
                $current_course->status = "Offline";
            }

            
            array_push ( $context["courses"], $current_course);
        }
        $context["courses"] = array_slice($context["courses"], 0, 3);
       

        //$courses = $this->filter_subcourses($courses); aqui
        //$totalcount = count($courses);
        
        // frontpage available courses and trails
        /*echo('<pre>');
        var_dump($chelper);
        echo('</pre>');*/
        
        if ($PAGE->pagetype == "site-index"){
            //$totalcount = count($courses);
            //return $this->coursecat_courses_carousel($chelper, $courses, $totalcount);
            //echo('teste');
            return $OUTPUT->render_from_template("theme_uva/frontpage_courses", $context);
        }
    }
}