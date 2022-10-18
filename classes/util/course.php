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
 * Course class utility class
 *
 * @package    theme_moove
 * @copyright  2022 Willian Mano {@link https://conecti.me}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_mtur\util;

use cm_info;
use course_modinfo;
use section_info;
use completion_info;
use context_module;
use core_course_list_element;
use moodle_url;
use stdClass;

defined('MOODLE_INTERNAL') || die;

/**
 * Course class utility class
 *
 * @package    theme_uva
 * @copyright  
 * @license    
 */
class course_util {
    /**
     * @var \stdClass $course The course object.
     */
    protected $course;

    /**
     * Class constructor
     *
     * @param core_course_list_element $course
     *
     */
    public function __construct($course) {
        $this->course = $course;
    }

    /**
   * Get total modules of the course, completed modules by the user, and the forum.
   *
   * @return array
   */
  public function get_course_info() {
    global $USER;
    $forumlink = null;

    $modinfo = get_fast_modinfo($this->course->id);
    $cms_infos = $modinfo->get_cms();
    $completion = new \completion_info($this->course);

    $total = count($cms_infos);
    $finished = 0;

    foreach($cms_infos as $cm_info) {
      $completion_state = $completion->get_data($cm_info, true, $USER->id)->completionstate;

      if ($cm_info->modname == 'forum' && !$cm_info->deletioninprogress) {
        $forumlink = $cm_info->url;
        $total--;
        continue;
      }
      if ($cm_info->deletioninprogress
        || !$cm_info->visible
        || !$cm_info->visibleoncoursepage
        || !$cm_info->available
      ) {
        $total--;
        continue;
      }

      if ($completion_state != 0) {
        $finished++;
      }
    }

    $percentage = $total == 0 ? 0 : (int)(($finished * 100) / $total);

    $info = [
      "finished" => $finished,
      "total" => $total,
      "forum" => $forumlink,
      "percentage" => $percentage
    ];
    return $info;
  }

    

    /**
     * Returns HTML to display course category name.
     *
     * @return string
     *
     * @throws \moodle_exception
     */
    public function get_category(): string {
        $cat = core_course_category::get($this->course->category, IGNORE_MISSING);

        if (!$cat) {
            return '';
        }

        return $cat->get_formatted_name();
    }

    /**
     * Returns course summary.
     *
     * @param coursecat_helper $chelper
     */
    public function get_summary_image_url() {
        $courselist = new core_course_list_element($this->course);
    
        foreach ($courselist->get_course_overviewfiles() as $file) {
          if ($file->is_valid_image()) {
            $pathcomponents = [
              '/pluginfile.php',
              $file->get_contextid(),
              $file->get_component(),
              $file->get_filearea() . $file->get_filepath() . $file->get_filename()
            ];
            $path = implode('/', $pathcomponents);
    
            return (new moodle_url($path))->out();
          }
        }
    
        return (new moodle_url('/theme/mtur/pix/theme/default-course.jpg'))->out();
      }
    
      public function get_progress() {
        global $USER;
        return floor(\core_completion\progress::get_course_progress_percentage($this->course, $USER->id));
      }
}
