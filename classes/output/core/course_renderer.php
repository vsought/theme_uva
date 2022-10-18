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

//require_once($CFG->libdir . '/coursecatlib.php');

class course_renderer extends \core_course_renderer
{


    public function get_summary_image($course) {
        global $CFG, $OUTPUT;

        foreach ($course->get_course_overviewfiles() as $file) {
            if ($file->is_valid_image()) {
                $url = moodle_url::make_file_url("$CFG->wwwroot/pluginfile.php",
                    '/' . $file->get_contextid() . '/' . $file->get_component() . '/' .
                    $file->get_filearea() . $file->get_filepath() . $file->get_filename(), !$file->is_valid_image());

                return $url->out();
            }
        }

        return $OUTPUT->get_generated_image_for_id($course->id);
    }

    protected function coursecat_courses(coursecat_helper $chelper, $courses, $totalcount = null){
        
        global  $OUTPUT, $PAGE, $CFG;

        $context = array();
        $context["courses"] = array();

        foreach ($courses as $course){

            $cat = core_course_category::get($course->category, IGNORE_MISSING);

            if (!$cat) {
                return '';
            }

            
            

            $current_course = new \stdClass();
            $current_course->link = "$CFG->wwwroot/course/view.php?id=$course->id&page=introduction";
            $current_course->image = $this->get_summary_image($course);
            $current_course->name = $chelper->get_course_formatted_name($course);
            $current_course->category = $cat->get_formatted_name()/*$course->category*/;
            $current_course->description = $course->summary;

            
            /*if ($current_course->name === "Curso teste 2") {
                echo('<pre>');
                var_dump($course);
                echo('</pre>');
            }*/
            

            if($course->enddate > time()){
                $current_course->status = "Online";
            }else{
                $current_course->status = "Offline";
            }

            
            array_push( $context["courses"], $current_course);
        }
        $context["courses"] = array_slice($context["courses"], 0, 3);
       

        
        
        /*echo('<pre>');
        var_dump($context["courses"][0]);
        echo('</pre>');*/
        
        if ($PAGE->pagetype == "site-index"){
            //$totalcount = count($courses);
            //return $this->coursecat_courses_carousel($chelper, $courses, $totalcount);
            //echo('teste');
            echo $OUTPUT->render_from_template("theme_uva/frontpage_courses", $context);
        }
    }
}