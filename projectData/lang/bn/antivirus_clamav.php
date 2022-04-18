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
 * Strings for component 'antivirus_clamav', language 'bn', version '3.11'.
 *
 * @package     antivirus_clamav
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clamfailed'] = 'ক্লাম AV চলতে অক্ষম। ফিরতি ত্রুটি বার্তা ছিল {$a}। এখানে ক্লাম থেকে আউটপুটঃ';
$string['clamfailureonupload'] = 'ClamAV ব্যর্থতার উপর';
$string['configclamactlikevirus'] = 'ফাইলগুলি ভাইরাসের মত আচরণ করে';
$string['configclamdonothing'] = 'ফাইলগুলি ঠিকভাবে আচরণ করছে';
$string['errorcantopensocket'] = 'ইউনিক্স ডোমেইন সকেট এর সাথে সংযুক্ত হচ্ছে ফলে ত্রুটি দেখা দিয়েছে {$a}';
$string['errorclamavnoresponse'] = 'ClamAV সাড়া দিচ্ছেনা; ডেমন-এর চলমান অবস্থা পরীক্ষা করুন।';
$string['errornounixsocketssupported'] = 'এই সিস্টেমে ইউনিক্স ডোমেইন সকেট পরিবহন সমর্থিত নয়। পরিবর্তে কমান্ড লাইন বিকল্পটি ব্যবহার করুন।';
$string['invalidpathtoclam'] = 'মডুল কনফিগার হয়েছে ফাইল আপলোডে ক্লাম চালানোর জন্য, কিন্তু পাথটি যোগান দেয়া হয়েছে ক্লাম AV কে, {$a}, তা অকার্যকর।';
$string['pathtoclam'] = 'কমান্ড লাইন';
$string['pathtoclamdesc'] = 'যদি চলমান পদ্ধতি "কমান্ড লাইন" সেট করা থাকে, এখানে ClamAV-এর পথটি লিখুন। লিনাক্সে এটি হবে /usr/bin/clamscan বা /usr/bin/clamdscan।';
$string['pathtounixsocket'] = 'ইউনিক্স কার্যক্ষেত্রের সকেট';
$string['pluginname'] = 'ClamAV অ্যান্টিভাইরাস';
$string['quarantinedir'] = 'সঙ্গরোধ নির্দেশক';
$string['runningmethod'] = 'চলতি পদ্ধতি';
$string['runningmethodcommandline'] = 'কমান্ড লাইন';
$string['runningmethodunixsocket'] = 'ইউনিক্স কার্যক্ষেত্রের সকেট';
$string['unknownerror'] = 'এটা ছিল ক্লামের সাথে একটা অপরিচিত ক্রটি।';
