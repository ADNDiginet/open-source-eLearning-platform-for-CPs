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
 * Strings for component 'tool_unittest', language 'bn', version '3.11'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'config ফাইলে প্রিফিক্স যোগ';
$string['all'] = 'সব';
$string['codecoverageanalysis'] = 'কোড কভারেক বিশ্লেষণ সম্পন্ন।';
$string['codecoveragecompletereport'] = '(কোড কভারেজ সম্পন্ন হওয়ার রিপোর্ট প্রদর্শন)';
$string['codecoveragedisabled'] = 'এই সার্ভারে কোড কভারেজ সক্রিয় করা যায়নি (মিসিং xdebug বর্ধিতাংশ)।';
$string['codecoveragelatestdetails'] = '({$a->date}, {$a->files} ফাইলের সাথে, {$a->percentage} কভারকৃত)';
$string['codecoveragelatestreport'] = 'কোড কভারেজ সম্পন্ন হওয়ার রিপোর্ট প্রদর্শন';
$string['confignonwritable'] = 'ওয়েব সার্ভারে ফাইল config.php রাইটেবল না। এর অনুমোদন পরিবর্তন বা যথাযথ ব্যবহারকারীর অ্যাকাউন্ট দিয়ে সম্পাদনা, এবং php ট্যাগ বন্ধ করার পূর্বে নিম্নোক্ত লাইন যোগ: <br />
$CFG->unittestprefix = \'tst_\' // Change tst_ আপনার পছন্দের প্রেফিক্সে, $CFG->prefix থেকে আলাদা';
$string['coveredlines'] = 'কভারকৃত লাইন';
$string['coveredpercentage'] = 'ওভারওল কোড কভারেজ';
$string['dbtest'] = 'ব্যবহারিক DB পরীক্ষা';
$string['deletingnoninsertedrecord'] = 'Trying to delete a record that was not inserted by these unit tests (id {$a->id} in table {$a->table}).';
$string['deletingnoninsertedrecords'] = 'Trying to delete records that were not inserted by these unit tests (from table {$a->table}).';
$string['droptesttables'] = 'টেস্ট টেবিল ড্রপ করা';
$string['exception'] = 'এক্সেপশন';
$string['executablelines'] = 'এক্সিকিউটেবল লাইন';
$string['fail'] = 'ব্যর্থ';
$string['ignorefile'] = 'ফাইলে টেস্ট উপেক্ষা করা';
$string['ignorethisfile'] = 'এই টেস্ট ফাইল উপেক্ষা করে রান পুনরায় চালানো।';
$string['installtesttables'] = 'টেস্ট টেবিল ইনস্টল';
$string['moodleunittests'] = 'মুডল ইউনিট টেস্ট: {$a}';
$string['notice'] = 'নোটিশ';
$string['onlytest'] = 'শুধু টেস্ট চালানো হবে';
$string['pass'] = 'পাস';
$string['pathdoesnotexist'] = 'পাথ \'{$a}\' নেই।';
$string['prefix'] = 'ইউনিট টেস্ট টেবিল প্রিফিক্স';
$string['prefixnotset'] = 'ইউনিট টেস্ট ডাটাবেস টেবিল প্রিফিক্স কনফিগার করা হয়নি। এই ফরমটি পূরন করুন এবং config.php এ জমা দিন।';
$string['reinstalltesttables'] = 'টেস্ট টেবিল পুনরায় ইনস্টল';
$string['retest'] = 'টেস্ট পুনরায় চালানো';
$string['retestonlythisfile'] = 'এই টেস্ট ফাইলটি পুনরায় চালানো হবে।';
$string['runall'] = 'সব টেস্ট ফাইল টেস্ট চালানো হবে।';
$string['runat'] = '{$a} তে চালানো।';
$string['runonlyfile'] = 'শুধু এই ফাইলে টেস্ট চালানো হবে';
$string['runonlyfolder'] = 'শুধু এই ফোল্ডারে টেস্ট চালানো হবে';
$string['runtests'] = 'টেস্ট চালানো';
$string['rununittests'] = 'ইউনিট টেস্ট চালানো';
$string['showpasses'] = 'পাস এবং ফেল উভয়ই দেখানো হবে।';
$string['showsearch'] = 'টেস্ট ফাইলের অনুসন্ধান প্রদর্শন।';
$string['skip'] = 'এড়িয়ে যাওয়া';
$string['stacktrace'] = 'স্ট্যাক ট্রেস:';
$string['summary'] = '{$a->run}/{$a->total} test cases complete: <strong>{$a->passes}</strong> passes, <strong>{$a->fails}</strong> fails and <strong>{$a->exceptions}</strong> exceptions.';
$string['tablesnotsetup'] = 'ইউনিট টেস্ট টেবিল এখনও তৈরি করা হয়নি। আপনি কি এখনই আবার তৈরি করতে চান?।';
$string['testdboperations'] = 'টেস্ট ডাটাবেস অপারেশন';
$string['testtablescsvfileunwritable'] = 'টেস্ট টেবিল CSV ফাইল লিখনযোগ্য নয় ({$a->filename})';
$string['testtablesneedupgrade'] = 'টেস্ট ডিবি টেবিল আপগ্রেড করা প্রয়োজন। আপনি কি এখনই আপগ্রেড করতে চান?';
$string['testtablesok'] = 'টেস্ট ডিবি টেবিল সফলভাবে ইনস্টল হয়েছে।';
$string['thorough'] = 'টেস্ট চালানো (সম্ভবত ধীরে)।';
$string['timetakes'] = 'গৃহীত সময়: {$a}.';
$string['totallines'] = 'মোট লাইন';
$string['uncaughtexception'] = 'Uncaught exception [{$a->getMessage()}] in [{$a->getFile()}:{$a->getLine()}] TESTS ABORTED.';
$string['uncoveredlines'] = 'কভার করা হয়নি এমন লাইন';
$string['unittestprefixsetting'] = 'ইউনিট টেস্ট প্রিফিক্স: <strong>{$a->unittestprefix}</strong> (এটি সম্পাদনা করতে config.php এটি পরিবর্তন করুন)।';
$string['unittests'] = 'ইউনিট টেস্ট';
$string['updatingnoninsertedrecord'] = 'এই ইউনিট টেস্ট যোগ করা হয়নি এমন রেকর্ড আপগ্রেড করার চেষ্টা করা হয়েছে (id {$a->id} in table {$a->table})।';
$string['version'] = '<a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a> সংস্করণ ব্যবহার করে {$a}.';
