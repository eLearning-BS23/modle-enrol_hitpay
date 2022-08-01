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
 * @copyright  2021 Brain station 23 ltd.
 * @author     Brain station 23 ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {

    // Settings.
    $settings->add(new admin_setting_heading('enrol_hitpay_settings', '',
        get_string('pluginname_desc', 'enrol_hitpay')));

    $settings->add(new admin_setting_configtext('enrol_hitpay/apiurl',
        get_string('apiurl', 'enrol_hitpay'),
        get_string('apiurl_desc', 'enrol_hitpay'), '', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('enrol_hitpay/apikey',
        get_string('apikey', 'enrol_hitpay'),
        get_string('apikey_desc', 'enrol_hitpay'), '', PARAM_TEXT));

    $settings->add(new admin_setting_configtext('enrol_hitpay/productionenv',
        get_string('productionenv', 'enrol_hitpay'),
        get_string('productionenv_desc', 'enrol_hitpay'), 'False', PARAM_TEXT));


//    $settings->add(new admin_setting_configcheckbox('enrol_hitpay/mailstudents',
//        get_string('mailstudents', 'enrol_hitpay'), '', 0));
//
//    $settings->add(new admin_setting_configcheckbox('enrol_hitpay/mailteachers',
//        get_string('mailteachers', 'enrol_hitpay'), '', 0));
//
//    $settings->add(new admin_setting_configcheckbox('enrol_hitpay/mailadmins',
//        get_string('mailadmins', 'enrol_hitpay'), '', 0));
//
//    // Note: let's reuse the ext sync constants and strings here, internally it is very similar,
//    // it describes what should happen when users are not supposed to be enrolled any more.
//    $options = array(
//        ENROL_EXT_REMOVED_KEEP => get_string('extremovedkeep', 'enrol'),
//        ENROL_EXT_REMOVED_SUSPENDNOROLES => get_string('extremovedsuspendnoroles', 'enrol'),
//        ENROL_EXT_REMOVED_UNENROL => get_string('extremovedunenrol', 'enrol'),
//    );
//    $settings->add(new admin_setting_configselect('enrol_hitpay/expiredaction',
//        get_string('expiredaction', 'enrol_hitpay'),
//        get_string('expiredaction_help', 'enrol_hitpay'), ENROL_EXT_REMOVED_SUSPENDNOROLES, $options));
//
//    // Enrol instance defaults.
//    $settings->add(new admin_setting_heading('enrol_hitpay_defaults',
//        get_string('enrolinstancedefaults', 'admin'), get_string('enrolinstancedefaults_desc', 'admin')));
////
//    $options = array(ENROL_INSTANCE_ENABLED => get_string('yes'),
//        ENROL_INSTANCE_DISABLED => get_string('no'));
////
//    $settings->add(new admin_setting_configselect('enrol_hitpay/status',
//        get_string('status', 'enrol_hitpay'), get_string('status_desc', 'enrol_hitpay'),
//        ENROL_INSTANCE_ENABLED, $options));
////
//    $settings->add(new admin_setting_configtext('enrol_hitpay/cost',
//        get_string('cost', 'enrol_hitpay'), '', 0, PARAM_FLOAT, 4));
//
//    $hitpaycurrencies = enrol_get_plugin('hitpay')->get_currencies();
//    $settings->add(new admin_setting_configselect('enrol_hitpay/currency',
//        get_string('currency', 'enrol_hitpay'), '', 'USD', $hitpaycurrencies));
//
//    if (!during_initial_install()) {
//        $options = get_default_enrol_roles(context_system::instance());
//        $student = get_archetype_roles('student');
//        $student = reset($student);
//        $settings->add(new admin_setting_configselect('enrol_hitpay/roleid',
//            get_string('defaultrole', 'enrol_hitpay'),
//            get_string('defaultrole_desc', 'enrol_hitpay'),
//            $student->id ?? null,
//            $options));
//    }
//
//    $settings->add(new admin_setting_configduration('enrol_hitpay/enrolperiod',
//        get_string('enrolperiod', 'enrol_hitpay'),
//        get_string('enrolperiod_desc', 'enrol_hitpay'), 0));
}