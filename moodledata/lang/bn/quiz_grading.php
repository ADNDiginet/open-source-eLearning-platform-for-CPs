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
 * Strings for component 'quiz_grading', language 'bn', version '3.11'.
 *
 * @package     quiz_grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotloadquestioninfo'] = 'সুনির্দিষ্ট প্রশ্নের ধরণের প্রশ্নের তথ্য লোড করতে পারে না';
$string['essayonly'] = 'নিম্নোক্ত প্রশ্নে নিজহাতে গ্রেড প্রদান করা প্রয়োজন';
$string['gradeall'] = 'সকল অংশগ্রহনে {$a} গ্রেড প্রদান';
$string['graded'] = '(গ্রেডকৃত)';
$string['gradenextungraded'] = 'পরবর্তীতে {$a} গ্রেড দেয়া হয়নি এমন অংশগ্রহনে গ্রেড প্রদান';
$string['gradeungraded'] = 'গ্রেড দেয়া হয়নি এমন সকল {$a} অংশগ্রহনে গ্রেড প্রদান';
$string['grading'] = 'নিজ হাতে গ্রেড প্রদান';
$string['gradingall'] = 'এ প্রশ্ন যতবার {$a} অংশগ্রহন করা হয়েছিল।';
$string['gradingattempt'] = '{$a->পূর্ণনাম} এর জন্য অংশগ্রহনের সংখ্যা {$a->অংশগ্রহন}';
$string['gradingnextungraded'] = 'গ্রেড দেয়া হয়নি এমন পরবর্তী {$a} অংশগ্রহন';
$string['gradingnotallowed'] = 'কুইজের জবাবে নিজ হাতে গ্রেড দেয়ার অনুমতি আপনার নাই';
$string['gradingreport'] = 'নিজ হাতে করা গ্রেডিং রিপোর্ট';
$string['gradingungraded'] = '{$a} গ্রেড দেয়া হয়নি এমন অংশগ্রহন';
$string['gradinguser'] = '{$a} এর অংশগ্রহন';
$string['invalidattemptid'] = 'অংশগ্রহনের এমন কোনো আইডি নেই';
$string['invalidquestionid'] = 'গ্রেড দেয়ার মত {$a} আইডির কোনো প্রশ্ন পাওয়া যায়নি';
$string['questiontitle'] = 'প্রশ্ন {$a->number} : "{$a->name}" ({$a->openspan}{$a->gradedattempts}{$a->closespan} / {$a->totalattempts} অংশগ্রহন {$a->openspan}গ্রেডকৃত{$a->closespan})';
