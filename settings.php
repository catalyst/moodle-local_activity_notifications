<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     local_activity_notifications
 * @category    admin
 * @copyright   2021 Catalyst IT
 * @author      Dmitrii Metelkin (dmitriim@catalyst-au.net)
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

use local_activity_notifications\notification_factory;

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig && $ADMIN->locate('localplugins')) {

    $ADMIN->add('localplugins',
        new admin_category('local_activity_notifications', get_string('pluginname', 'local_activity_notifications'))
    );

    $settings = new admin_settingpage('local_activity_notifications_settings', 'Settings');
    $ADMIN->add('local_activity_notifications', $settings);

    foreach (notification_factory::get_notifications() as $notification) {
        $notification->add_settings($settings);
    }
}
