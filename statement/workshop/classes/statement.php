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
 * Workshop statement class.
 *
 * @package     integritystmt_workshop
 * @copyright   2021 Catalyst IT
 * @author      Dmitrii Metelkin (dmitriim@catalyst-au.net)
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace integritystmt_workshop;

use local_integrity\statement_base;

defined('MOODLE_INTERNAL') || die;

/**
 * Workshop statement class.
 *
 * @package     integritystmt_workshop
 * @copyright   2021 Catalyst IT
 * @author      Dmitrii Metelkin (dmitriim@catalyst-au.net)
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class statement extends statement_base {

    /**
     * Get a list of URL to fire off the statement on.
     *
     * @return string[]
     */
    public function get_display_urls(): array {
        return [
            '/mod/workshop/index.php',
            '/mod/workshop/view.php',
            '/mod/workshop/submission.php',
        ];
    }

}
