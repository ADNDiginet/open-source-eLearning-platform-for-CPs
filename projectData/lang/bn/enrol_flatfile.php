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
 * Strings for component 'enrol_flatfile', language 'bn', version '3.11'.
 *
 * @package     enrol_flatfile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['filelockedmail'] = 'আপনি ফাইল-ভিত্তিক তালিকা ({$a}) এর জন্য আপনি যে টেক্সট ফাইল ব্যবহার করছেন তা ক্রন প্রক্রিয়ায় অপসারণ করা যায় না। এ থেকে বুঝা যায় এর অনুমোদনে কোনো ভুল আছে। অনুগ্রহ করে অনুমোদন ঠিক করুন যাতে করে মুডল ফাইল অপসারণ করতে পারে, অন্যথায় এটা বার বার প্রক্রিয়াধীন হতে থাকবে।';
$string['filelockedmailsubject'] = 'গুরুত্বপূর্ণ ত্রুটি: তালিকা ফাইল';
$string['location'] = 'ফাইলের অবস্থান';
$string['mapping'] = 'ফ্ল্যাট ফাইল ম্যাপিং';
$string['pluginname'] = 'ফ্ল্যাট ফাইল (CSV)';
$string['pluginname_desc'] = 'এ পদ্ধতি বার বার আপনার নির্দিষ্ট করে দেয়া বিশেষভাবে-বিনস্ত টেক্সট ফাইল পরীক্ষা করবে এবং প্রক্রিয়াধীন করবে।
ফাইলটি কমা দিয়ে দিয়ে পৃথক করা একটি ফাইল যার প্রতি লাইনে চার বা ছয়টি করে ক্ষেত্র থাকে:
ব্যবহারকারীর টেবিলে <pre class="informationbox">
*  operation, role, idnumber(user), idnumber(course) [, starttime, endtime]
where:
*  operation        = add | del
*  role             = student | teacher | teacheredit
*  idnumber(user)   = idnumber  NB  id
*  idnumber(course) = idnumber in the course table NB not id
*  starttime        = start time (in seconds since epoch)নয়- optional
*  endtime          = end time (সেকেন্ডে কারণ ইপোক) - optional
</pre>
এটা দেখতে এমন কিছু হয়:
<pre class="informationbox">
   add, student, 5, CF101
   add, teacher, 6, CF101
   add, teacheredit, 7, CF101
   del, student, 8, CF101
   del, student, 17, CF101
   add, student, 21, CF101, 1091115000, 1091215000
</pre>';
