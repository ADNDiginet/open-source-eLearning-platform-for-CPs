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
 * Strings for component 'auth_email', language 'bn', version '3.11'.
 *
 * @package     auth_email
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_emaildescription'] = 'ইমেইল নিশ্চিতকরন পূর্বনির্ধারিত প্রমাণীকরণ প্রক্রিয়া। যখন ব্যবহারকারী নিজেদের ব্যবহারকারীর নাম ও পাসওয়ার্ড ব্যবহার করে সাইন আপ করে, ব্যবহারকারীর ইমেইল ঠিকানায় নিশ্চিতকরণ ইমেইল পাঠানো হয়। এ ইমেইলে একটি নিরাপদ লিঙ্ক থাকে যেখানে ব্যবহারকারী তার অ্যাকাউন্ট সম্পর্কে নিশ্চিত করে। পরবর্তিতে লগইন করার সময় মডুল ডাটাবেসের সাথে মিলিয়ে ব্যবহারকারীর নাম ও পাসওয়ার্ড পরীক্ষা করা হয়।';
$string['auth_emailnoemail'] = 'ইমেইল পাঠানোর চেষ্টা ব্যর্থ!';
$string['auth_emailrecaptcha'] = 'স্ব-নিবন্ধনকৃত ব্যবহারকারীর ইমেইলে সাইনআপ করার পৃষ্ঠায় ভিজুয়াল/অডিও নিশ্চিতকরণ ফরম এলিমেন্ট যোগ। এটা স্প্যামারস থেকে আপনার সাইটকে রক্ষা করে এবং একটা কার্যকর কারণে অবদান রাখে। আরও বিস্তারিত তথ্যের জন্য http://recaptcha.net/learnmore.html দেখুন। <br /><em>PHP cURL এক্সটেনশন অত্যাবশ্যক।</em>';
$string['auth_emailrecaptcha_key'] = 'reCAPTCHA এলিমেন্ট সক্রিয়';
$string['auth_emailsettings'] = 'সেটিং';
$string['pluginname'] = 'ইমেইল-ভিত্তিক স্ব-নিবন্ধন';
