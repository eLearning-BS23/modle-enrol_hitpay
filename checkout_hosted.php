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
 * hitpay enrolment plugin - support for user self unenrolment.
 *
 * @package    enrol_hitpay
 * @copyright  2021 Brain station 23 ltd.
 * @author     Brain station 23 ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


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


use HitPay\Client;
use HitPay\Request;

require_once 'vendor/autoload.php';

$apiKey = 'ac0581fa1e46648f98c1c0a05711e636e1d96bb111448bc739259b31c5fce40f';
$salt = 'nATAXAziQwcvg1Rxtg025UrVrShVOkcbwijtgw0r9yz0q9Q6hrhz4FUR5RvtwoB8';

$hitPayClient = new Client($apiKey, false);

try {
    $request = new Request\CreatePayment();

    $request->setAmount(66)
        ->setCurrency('SGD');

    $result = $hitPayClient->createPayment($request);
    print_r($result);

    header('Location: ' . $result->url);

} catch (\Exception $e) {
    print_r($e->getMessage());
}