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
 * Strings for component 'url', language 'bn', version '3.11'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'চলক নির্বাচন';
$string['clicktoopen'] = 'URL টি খুলতে {$a} ক্লিক করুন';
$string['configdisplayoptions'] = 'বিদ্যমান সব অপশন নির্বাচন করুন, বিদ্যমান সেটিংসমূহ পরিবর্তিত নয়।  গুণিতক ক্ষেত্র নির্বাচন করতে CTRL কী ধরে রাখুন।';
$string['configframesize'] = 'ফ্রেমের মধ্যে যখন একটি ওয়েব পেজ অথবা আপলোডকৃত ফাইল প্রদর্শিত হয়, মানটি শীর্ষ ফ্রেমের উচ্চতা (পিক্সেলের)(যাকিনা ন্যাভিগেশন ধারণ করে)।';
$string['configrolesinparams'] = 'যদি আপনি বিদ্যমান প্যারামিটার চলক তালিকায় স্থানীয়করণ ভূমিকার নাম যুক্ত করতে চান তাহলে সক্রিয় করুন।';
$string['configsecretphrase'] = 'এই গোপন শব্দসমষ্টি এনক্রিপ্টকৃত কোডের মান তৈরিতে ব্যবহৃত হয় যা কিছু সার্ভাের প্যারামিটার হিসেবে পাঠানো যাবে। গোপন শব্দসমষ্টির সাথে সংযোজিত বর্তমান ব্যবহারকারীর আইপি ঠিকানা md5 মান এনক্রিপ্টকৃত কোডটি  দ্বারা তৈরি হয়। যেমন কোড = md5(IP.secretphrase)। অনুগ্রহ করে নোট করুন যে এটি বিশ্বাসযোগ্য নয় কারন আইপি ঠিকানা পরিবর্তিত হতে পারে এবং প্রায়ই অন্য কম্পিউটার দ্বারা শেয়ার করা হয়।';
$string['contentheader'] = 'বিষয়বস্তু';
$string['displayoptions'] = 'বিদ্যমান প্রদর্শন অপশন';
$string['displayselect'] = 'প্রদর্শন';
$string['displayselect_help'] = 'সেটিংটি, URL এর ফাইলের ধরণ এবং ব্রাউজারের অনুমতি সন্নিবেশিত কিনা তা যুক্ত করে, URL টি কিভাবে প্রদর্শিত হবে তা নির্দিষ্ট করে। অপশন অন্তর্ভুক্ত করতে পারে:

* স্বয়ংক্রিয়- URL টির জন্য সর্বোত্তম প্রদর্শনের অপশন স্বয়ংক্রিভাবে নির্বাচিত হবে
* সন্নিবেশিত-যেকোন ব্লক এবং URL বর্ণনাসহ ন্যাভিগেশন বারের নিচে পৃষ্ঠায় URLটি প্রদর্শিত হবে
*জোরপূর্বক ডাউনলোড-URL ফাইলটি ব্যবহারকারীকে মনে করিয়ে দেওয়া হবে
* খুলুন-ব্রাউজার উইন্ডোতে URLটি শুধুমাত্র প্রদর্শিত হবে
* পপ-আপ- মেনু অথবা ঠিকানা বার ছাড়া URL টি নতুন ব্রাউজার উইন্ডোতে প্রদর্শিত হবে
*  ফ্রেমে-ন্যাভিগেশন বারএবং URL বর্ণনার নিম্নে ফ্রেমে URL টি প্রদর্শিত হবে
* নতুন উইন্ডো-মেনু অথবা ঠিকানা বার সহ URL টি নতুন ব্রাউজার উইন্ডোতে প্রদর্শিত হবে';
$string['displayselectexplain'] = 'প্রদর্শনের ধরণ নির্বাচন, দুর্ভাগ্যবশত সব URL এর জন্য সব ধরণ উপযুক্ত নয়।';
$string['externalurl'] = 'বাহ্যিক URL';
$string['framesize'] = 'ফ্রেমের উচ্চতা';
$string['modulename'] = 'URL';
$string['modulenameplural'] = 'URL';
$string['parameterinfo'] = 'প্যারামিটার=চলক';
$string['parametersheader'] = 'প্যারামিটার';
$string['pluginadministration'] = 'URL মডিউল প্রশাসন';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'পপ আপ উচ্চতা (পিক্সেলে)';
$string['popupheightexplain'] = 'পপ আপ উইন্ডোর পূর্বনির্ধারিত উচ্চতা উল্ল্যেখ।';
$string['popupwidth'] = 'পপ আপ প্রস্থ (পিক্সেলে)';
$string['popupwidthexplain'] = 'পপ আপ উইন্ডোর পূর্বনির্ধারিত প্রস্থ উল্ল্যেখ।';
$string['printintro'] = 'URL বর্ণনা প্রদর্শন';
$string['printintroexplain'] = 'নিম্নের বিষয়বস্তুর URL বর্ণনা প্রদর্শন? যদি সক্রিয় থাকে তবুও কিছু প্রদর্শনের ধরণ প্রদর্শনের বর্ণনা নাও করতে পারে।';
$string['rolesinparams'] = 'প্যারামিটারে ভূমিকার নাম অনর্ভুক্ত';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'সার্ভারের URL';
$string['url:view'] = 'URL প্রদর্শন';
