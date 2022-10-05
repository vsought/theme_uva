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
 * Overriden theme boost core renderer.
 *
 * @package    theme_uva
 * @copyright  
 * @license    
 */

namespace theme_uva\output;

defined('MOODLE_INTERNAL') || die;

use theme_config;
use context_course;
//use moodle_url;
//use html_writer;
//use theme_uva\output\core_course\activity_navigation;

use action_menu;
use html_writer;
use moodle_url;
use block_contents;
use coding_exception;
use single_button;
use stdClass;
//use theme_uva\util\extras;


require_once($CFG->dirroot . '/user/profile/lib.php');

/**
 * Renderers to align Moodle's HTML with that expected by Bootstrap
 *
 * @package    theme_moove
 * @copyright  2022 Willian Mano {@link https://conecti.me}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class core_renderer extends \theme_boost\output\core_renderer {
    

    /**
     * Get the main logo URL.
     *
     * @return string
     */
    public function get_logo() {
        $logo = $this->get_theme_logo_url();

        if ($logo) {
            return $logo;
        }

        $logo = $this->get_logo_url();

        if ($logo) {
            return $logo->out(false);
        }

        return false;
    }

    /**
     * Get the main logo URL.
     *
     * @return string
     */
    public function get_theme_logo_url() {
        $theme = theme_config::load('uva');

        return $theme->setting_file_url('logo', 'logo');
    }

    /**
     * Renders the login form.
     *
     * @param \core_auth\output\login $form The renderable.
     * @return string
     */
    public function render_login(\core_auth\output\login $form) {
        global $SITE, $CFG;

        $context = $form->export_for_template($this);

        $context->errorformatted = $this->error_text($context->error);
        $context->logourl = $this->get_logo();
        $context->sitename = format_string($SITE->fullname, true,
            ['context' => context_course::instance(SITEID), "escape" => false]);

        if (!$CFG->auth_instructions) {
            $context->instructions = null;
            $context->hasinstructions = false;
        }

        $context->hastwocolumns = false;
        if ($context->hasidentityproviders || $CFG->auth_instructions) {
            $context->hastwocolumns = true;
        }

        if ($context->identityproviders) {
            foreach ($context->identityproviders as $key => $provider) {
                $isfacebook = false;

                if (strpos($provider['iconurl'], 'facebook') !== false) {
                    $isfacebook = true;
                }

                $context->identityproviders[$key]['isfacebook'] = $isfacebook;
            }
        }

        return $this->render_from_template('core/loginform', $context);
    }

    /*public function render_coursecard(\core_auth\output\login $form) {
      global $SITE, $CFG;

      $context = $form->export_for_template($this);

      $context->errorformatted = $this->error_text($context->error);
      $context->logourl = $this->get_logo();
      $context->sitename = format_string($SITE->fullname, true,
          ['context' => context_course::instance(SITEID), "escape" => false]);

      if (!$CFG->auth_instructions) {
          $context->instructions = null;
          $context->hasinstructions = false;
      }

      $context->hastwocolumns = false;
      if ($context->hasidentityproviders || $CFG->auth_instructions) {
          $context->hastwocolumns = true;
      }

      if ($context->identityproviders) {
          foreach ($context->identityproviders as $key => $provider) {
              $isfacebook = false;

              if (strpos($provider['iconurl'], 'facebook') !== false) {
                  $isfacebook = true;
              }

              $context->identityproviders[$key]['isfacebook'] = $isfacebook;
          }
      }

      return $this->render_from_template('core/loginform', $context);
    }*/

    /**
   * Creates the links for the navbar.
   *
   * Add the links to all courses, dashboard, notifications and messages.
   *
   * @return HTML string
   */
  /*protected function navbar_links()
  {
    global $CFG;

    $templatecontext = [
      'allcoursesurl' => $CFG->wwwroot . '/course',
      'mydashboardurl' => $CFG->wwwroot,
      'alltrailsurl' => new moodle_url("$CFG->wwwroot", ["redirect" => 0, "trails" => "all"]),
      'tutorialurl' => $CFG->wwwroot . '/local/tutorial/',
    ];

    $nav_html = $this->render_from_template('theme_mtur/navbar_links', $templatecontext);

    return $nav_html . $this->navbar_plugin_output();
  }*/

    /**
   * Creates the navbar menu (links and user menu, with toggle to the sidebar).
   *
   * Create the navbar.
   *
   * @param bool $withlinks if the allcourses/mydashboard links should be added
   * @param bool $incourse if the menu incourse should be added
   * @return string
   */
  public function navbar_menu()
  {
    global $USER, $COURSE;

    //$links = $withlinks ? $this->navbar_links() : "";

    //$userpic = extras::get_profile_picture();

    //$links_incourse = $incourse ? $this->navbar_links_incourse(false) : "";
    /*foreach ($courses as $course) {
      if (trim($course["name"]) == "Pré-teste") {
        if (count($course["activities"]) != 0) {
          $result = false;
          foreach ($course["activities"] as $activity) {
            if ($activity["completed"] == "1") {
              $links_incourse = $incourse ? $this->navbar_links_incourse() : "";
            }
          }
        }
      }
    }*/

    $templatecontext = [
      'course_name' => $COURSE->fullname,
      //'userpic' => $userpic,
      'username' => $USER->firstname . ' ' . $USER->lastname,
      //'navbar_links' => $links,
      /*'links_incourse' => $links_incourse,*/
      /*'navbar_support' => $this->render_from_template('theme_mtur/navbar_support', null),*/
      'is_admin' => is_siteadmin(),
      'is_guest' => isguestuser(),
      //'incourse' => $incourse,
    ];
    return $this->render_from_template('theme_uva/header', $templatecontext);
  }

}
