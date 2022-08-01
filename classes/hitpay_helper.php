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

/*
 * Various helper methods for interacting with the hitpay checkout.
 *
 * @package    enrol_hitpay
 * @copyright  2022 Brain station 23 ltd.
 * @author     Brain station 23 ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace enrol_hitpay;

class hitpay_helper {

    public function __construct(string $apiKey, string $apiurl, string $currency, float $cost, string $email)
    {
        $this->apiKey = $apiKey;
        $this->apiurl = $apiurl;
        $this->currency = $currency;
        $this->cost = $cost;
        $this->email = $email;
    }

    public function checkout_helper () {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->apiurl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "amount=". $this->cost ."&currency=".$this->currency."&email=".$this->email);

        $headers = array();
        $headers[] = 'X-Business-Api-Key: '. $this->apiKey;
        $headers[] = 'X-Requested-With: XMLHttpRequest';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return $result;
    }
}
