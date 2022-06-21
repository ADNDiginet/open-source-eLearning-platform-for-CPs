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
 * Strings for component 'enrol_database', language 'bn', version '3.11'.
 *
 * @package     enrol_database
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['dbencoding'] = 'ডাটাবেস এনকোডিং';
$string['dbhost'] = 'ডাটাবেস হেস্ট';
$string['dbhost_desc'] = 'ডাটাবেস সার্ভারIP অ্যাড্রেস বা হোস্ট নাম টাইপ করা হয়';
$string['dbname'] = 'ডাটাবেসের নাম';
$string['dbpass'] = 'ডাটাবেস পাসওয়ার্ড';
$string['dbsetupsql'] = 'ডাটাবেস সেটআপ কমান্ড';
$string['dbsetupsql_desc'] = 'বিশেষ ডাটাবেস সেটআপের জন্য SQL কমান্ড, প্রায়ই যোগাযোগ এনকোডিং সেটআপ ব্যবহৃত হয় - MySQL এবং PostgreSQL এর উদাহরণ:<em>SET NAMES \'utf8\'</em>';
$string['dbsybasequoting'] = 'সিবেস কোট ব্যবহার';
$string['dbsybasequoting_desc'] = 'সিবেসের মত একক কোট এসক্যাপিং - Oracle, MS SQL এবং অন্যান্য ডাটাবেসের জন্য প্রয়োজন। MySQL এর জন্য ব্যবহৃত নয়!';
$string['dbtype'] = 'ডাটাবেস ড্রাইভার';
$string['dbtype_desc'] = 'ADOdb ডাটাবেস ড্রাইভারের নাম, বাহ্যিক ডাটাবেস ইঞ্জিন এর ধরণ।';
$string['dbuser'] = 'ডাটাবেস ব্যবহারকারী';
$string['debugdb'] = 'ADOdb ডিবাগ';
$string['debugdb_desc'] = 'বাহ্যিক ডাটাবেসে ADOdb সংযোগ ডিবাগ - লগইন করার সময় ফাঁকা পৃষ্ঠা আসলে ব্যবহার। প্রোডাকশন সাইটের জন্য উপযুক।ত নয়!';
$string['defaultcategory'] = 'পূর্বনির্ধারিত নতুন কোর্সের বিভাগ';
$string['defaultcategory_desc'] = 'স্বয়ংক্রিয়ভাবে তৈরি কোর্সের পূর্বনির্ধারিত বিভাগ। যখন কোনো নতুন বিভাগ নির্দিষ্ট করা না হয় বা খুঁজে পাওয়া না যায় তখন ব্যবহার।';
$string['defaultrole'] = 'পূর্বনির্ধারিত রোল';
$string['defaultrole_desc'] = 'বাহ্যিক টেবিলে অন্য কোনো রোল নির্দিষ্ট করা না থাকলে যে রোল পূর্বনির্ধারিতভাবে এসাইন করা হবে।';
$string['ignorehiddencourses'] = 'আড়ালকৃত কোর্স উপেক্ষা';
$string['ignorehiddencourses_desc'] = 'যদি সক্রিয় করা তাকে তবে ছাত্রদের জন্য পাওয়া যায়না এমন কোর্সে ব্যবহারকারীকেো তালিকাভূক্ত করা হবে না';
$string['localcoursefield'] = 'স্থানীয় কোর্স ক্ষেত্র';
$string['localrolefield'] = 'স্থানীয় কোর্স ক্ষেত্র';
$string['localuserfield'] = 'স্থানীয় ব্যবহাকরীর ক্ষেত্র';
$string['newcoursecategory'] = 'নতুন কোর্স বিভাগ আইডি ক্ষেত্র';
$string['newcoursefullname'] = 'নতুন কোর্সের সম্পূর্ণ নামের ক্ষেত্র';
$string['newcourseidnumber'] = 'নতুন কোর্সের আইডি নাম্বারের ক্ষেত্র';
$string['newcourseshortname'] = 'নতুন কোর্সের ডাক নামের ক্ষেত্র';
$string['newcoursetable'] = 'নতুন কোর্স টেবিল রিমোট';
$string['newcoursetable_desc'] = 'টেবিলের নাম নির্দিষ্ট করুন যেখানে কোর্সের তালিকা থাকে যা স্বয়ংক্রিয়ভাবে তৈরি করা উচিত। ফাঁকা মানে কোনো কোর্স তৈরি হয়নি।';
$string['pluginname'] = 'বাহ্যিক ডাটাবেস';
$string['pluginname_desc'] = 'তালিকা নিয়ন্ত্রন করার জন্য বাহ্যিক ডাটাবেস (যেকোনো ধরণের কাছাকাছি) ব্যবহার। এটা ধারণা করা হয় বাহ্যিক ডাটাবেসে অন্তত একটি ক্ষেত্রে কোর্স আইডি এবং আরেকটিতে ব্যবহারকারীর আইডি থাকবে। এগুলো স্থানীয় কোর্স এবং ব্যবহারকারীর টেবিলে নির্বাচিত ক্ষেত্রের সাথে তুলনা করা হয়।';
$string['remotecoursefield'] = 'কোর্সের ক্ষেত্র রিমোট';
$string['remotecoursefield_desc'] = 'কোর্স টেবিলে এন্ট্রি মিল করার জন্য ব্যবহৃত রিমোট টেবিলের ক্ষেত্রের নাম।';
$string['remoteenroltable'] = 'ব্যবহাকারী তালিকাভূক্ত করার টেবিল রিমোট';
$string['remoteenroltable_desc'] = 'তালিকাভূক্ত ব্যবহারকারী আছে এমন টেবিলের নাম নির্দিষ্ট করা। ফাঁকা মানে কোনো ব্যবহারকারীর তলিকা থাকবে না।';
$string['remoterolefield'] = 'রোলের ক্ষেত্র রিমোট';
$string['remoterolefield_desc'] = 'রোল টেবিলে এন্ট্রি মিল করার জন্য ব্যবহৃত রিমোট টেবিলের ক্ষেত্রের নাম।';
$string['remoteuserfield'] = 'ব্যবহারকারীর ক্ষেত্র রিমোট';
$string['remoteuserfield_desc'] = 'ব্যবহারকারীর টেবিলে এন্ট্রি মিল করার জন্য ব্যবহৃত রিমোট টেবিলের ক্ষেত্রের নাম।';
$string['settingsheaderdb'] = 'বাহ্যিক ডাটাবেস সংযোগ';
$string['settingsheaderlocal'] = 'স্থানীয় ক্ষেত্র ম্যাপিং';
$string['settingsheadernewcourses'] = 'নতুম কোর্স তৈরি';
$string['settingsheaderremote'] = 'সিম্ক তালিকা করা রিমোট';
$string['templatecourse'] = 'নতুন ব্যবহাকারীর টেম্পলেট';
$string['templatecourse_desc'] = 'ঐচ্ছিক: স্বয়ংক্রিয়ভাবে-তৈরি কোর্স টেম্পলেট কোর্স থেকে সেটিং অনুলিপি করতে পারে। টেম্পলেট কোর্সের ডাক নাম এখানে টাইপ করুন।';
