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
 * hitpay enrolments plugin settings and presets.
 *
 * @package    enrol_hitpay
 * @copyright  2022 Brain station 23 ltd.
 * @author     Brain station 23 ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Settings.
    $settings->add(new admin_setting_heading('enrol_hitpay_settings', '',
        get_string('pluginname_desc', 'enrol_hitpay')));

    $settings->add(new admin_setting_configtext('enrol_hitpay/apikey',
        get_string('apikey', 'enrol_hitpay'),
        get_string('apikey_desc', 'enrol_hitpay'), '', PARAM_TEXT));

    // Production Environment.
    $yesno = array(
        new lang_string('no'),
        new lang_string('yes'),
    );
    $settings->add(new admin_setting_configselect('enrol_hitpay/productionenv',
        new lang_string('productionenv', 'enrol_hitpay'),
        new lang_string('productionenv_desc', 'enrol_hitpay'), 0 , $yesno));
}
