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
 * Customgr enrol plugin external functions and service definitions.
 *
 * @package   enrol_customgr
 * @copyright 2024 David Herney @ Engagement
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$functions = array(
    'enrol_customgr_get_instance_info' => array(
        'classname'   => 'enrol_customgr_external',
        'methodname'  => 'get_instance_info',
        'classpath'   => 'enrol/customgr/externallib.php',
        'description' => 'self enrolment instance information.',
        'type'        => 'read',
        'services'    => array(MOODLE_OFFICIAL_MOBILE_SERVICE),
    ),

    'enrol_customgr_enrol_user' => array(
        'classname'   => 'enrol_customgr_external',
        'methodname'  => 'enrol_user',
        'classpath'   => 'enrol/customgr/externallib.php',
        'description' => 'Self enrol the current user in the given course.',
        'type'        => 'write',
        'services'    => array(MOODLE_OFFICIAL_MOBILE_SERVICE),
    )
);
