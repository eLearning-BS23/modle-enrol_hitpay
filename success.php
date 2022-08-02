<?php
//This file is part of Moodle - http://moodle.org/
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

require_once("../../config.php");
//require_once ("checkout.php");

global $DB, $USER, $OUTPUT, $CFG, $PAGE;

$status = required_param('status', PARAM_TEXT);
$reference= required_param('reference', PARAM_RAW);
$courseid= required_param('courseid', PARAM_INT);

//var_dump($status);
//var_dump($reference); die();
$config = get_config('enrol_hitpay');
$get_url = $config->apiurl;
var_dump($courseid); die;


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $get_url.'/'.$reference);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$headers = array();
$headers[] = 'X-Business-Api-Key:'.$config->apikey;
$headers[] = 'X-Requested-With: XMLHttpRequest';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

var_dump($result); die();
//var_dump($COURSE->id); die();

//amount, currency, user check if it's same as before...