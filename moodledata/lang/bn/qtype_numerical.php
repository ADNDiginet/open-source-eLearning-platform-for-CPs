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
 * Strings for component 'qtype_numerical', language 'bn', version '3.11'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreanswerblanks'] = 'আরও উত্তরের জন্য ফাঁকা স্থান';
$string['addmoreunitblanks'] = 'আরও এককের জন্য ফাঁকা স্থান';
$string['answermustbenumberorstar'] = 'উত্তরটি অবশ্যই একটি সংখ্যা বা \'*\'।';
$string['answerno'] = 'উত্তর {$a}';
$string['decfractionofquestiongrade'] = 'প্রশ্নের গ্রেডের দশমিক ভগ্নাংশ (0-1)';
$string['decfractionofresponsegrade'] = 'উত্তর গ্রেডের দশমিক ভগ্নাংশ (0-1)';
$string['editableunittext'] = 'টেক্সট ইনপুট উপাদান';
$string['errornomultiplier'] = 'আপনাকে অবশ্যই এই এককের জন্য একটি গুনিতক নির্দিষ্ট করতে হবে।';
$string['errorrepeatedunit'] = 'একই নামের দুটি একক থাকতে পারেনা।';
$string['leftexample'] = '$1.00 অবশিষ্ট';
$string['manynumerical'] = 'ঐচ্ছিক এককের সাহায্যে কেবলমাত্র সংখ্যাবাচক উত্তরে গ্রেড দেয়া হবে';
$string['noneditableunittext'] = '১নল এককে অসম্পাদনযোগ্য টেক্সট';
$string['nonvalidcharactersinnumber'] = 'সংখ্যায় অকার্যকর অক্ষর';
$string['notenoughanswers'] = 'আপনার অন্তত একটি উত্তর দেয়া উচিত।';
$string['nounitdisplay'] = 'একক গ্রেডিং নয়';
$string['numericalmultiplier'] = 'গুনিতক';
$string['numericalmultiplier_help'] = 'গুনিতক এমন একটি ফ্যাক্টর যার সাহায্যে সঠিক সংখ্যাবাচক উত্তর গুন করা যায়।

প্রথম এককে (একক ১) পূর্বনির্ধারিত গুনিতক হিসাবে ১ আছে। অতএব, যদি সঠিক সংখ্যাবাচক উত্তর ৫৫০০ হয় এবং একক ১ হিসাবে আপনি যদি W নির্ধারণ করেন যার পূর্বনির্ধারিত গুনিতক হিসাবে ১ রয়েছ তবে সঠিক উত্তর হবে ৫৫০০ W।

আপনি যদি একক হিসাবে kW এবং গুনিতক হিসাবে ০.০০১ দেন তবে সঠিক উত্তর হিসাবে ৫.৫ kW যোগ হবে। এতে বুঝায়, ৫৫০০ W বা ৫.৫ kW সঠিক উত্তর হিসাবে চিহ্নিত।

মনে রাখবেন গৃহীত ত্রুটিও গুন করা হয়, সুতরাং ত্রুটি ১০০W ত্রুটি ০.১ kW হিসাবে গৃহিত হবে।';
$string['oneunitshown'] = 'শুধুমাত্র সংখ্যাবাচক উত্তরে গ্রেড দেয়া হবে, একক ১ প্রদর্শিত হবে';
$string['onlynumerical'] = 'শুধুমাত্র সংখ্যাবাচক উত্তরে গ্রেড দেয়া হবে, একক থাকবে না';
$string['rightexample'] = '১.০০ সেমি বামে';
$string['selectunit'] = 'একটি একক নির্বাচন';
$string['selectunits'] = 'একক নির্বাচন';
$string['studentunitanswer'] = 'একক হিসাবে উত্তর প্রদর্শিত';
$string['unitappliedpenalty'] = 'এ নাম্বারে ভুল এককের জন্য শাস্তিস্বরূপ {$a} ও সংযুক্ত আছে।';
$string['unitchoice'] = 'বহুনির্বাচনী (রেডিও উপাদান)';
$string['unitedit'] = 'একক সম্পাদনা';
$string['unitgraded'] = 'সংখ্যাবাচক উত্তর এবং একক হিসাবে উত্তরে গ্রেড দেয়া হবে';
$string['unitmandatory'] = 'অত্যাবশ্যক';
$string['unitmandatory_help'] = '* লিখিত একক ব্যবহার করে এ উত্তরে গ্রেড দেয়া হবে।

*একক এর ক্ষেত্র যদি ফাঁকা থাকে তবে এককের ভুলের জন্য শাস্তি যোগ করার হয়';
$string['unitnotselected'] = 'একক নির্বাচিত হয়নি';
$string['unitoptional'] = 'ঐচ্ছিক একক';
$string['unitoptional_help'] = 'এককের ক্ষেত্র যদি ফাঁকা না থাকে তবে, এ একক ব্যবহার করে উত্তরে গ্রেড দেয়া হয়।

* একক যদি ঠিকভাবে লেখা না হয় অথবা অপরিচিত হয় তবে উত্তরটি অকার্যকর হবে';
$string['unitpenalty'] = 'একক এর শাস্তিস্বরূপ';
$string['unitpenalty_help'] = 'একক উত্তর উপাদানে যদি

* অনির্ধারিত এককের নাম দেয়া হয় অথবা
* নাম্বার উত্তর উপাদনে একটি এককের নাম দেয়া হয় তবে শাস্তি প্রয়োগ করা হয়';
$string['unitposition'] = 'এককের অবস্থান';
$string['validnumberformats'] = 'কার্যকর সংখ্যা বিন্যাস';
$string['validnumberformats_help'] = '* স্বাভাবিক সংখ্যা  13500.67 : 13 500.67 : 13500,67: 13 500,67

*আপনি যদি হাজার বিভাজক হিসাবে  *সর্বদা* ব্যবহার করেন তবে
 13,500.67 : 13,500দশমিক . ব্যবহার করা হয়।

* সূচকের জন্য যেমন 1.350067 * 10<sup>4</sup>,
 1.350067 E4 : 1.350067 E04ব্যবহার করা হয়';
$string['validnumbers'] = '13500.67 : 13 500.67 : 13,500.67 : 13500,67: 13 500,67 : 1.350067 E4 : 1.350067 E04';
