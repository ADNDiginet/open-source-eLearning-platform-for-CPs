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
 * Strings for component 'enrol_self', language 'bn', version '3.11'.
 *
 * @package     enrol_self
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customwelcomemessage'] = 'স্বনির্ধারিত স্বাগতম বার্তা';
$string['defaultrole'] = 'পূর্বনির্ধারিত রোল এসাইনমেন্ট';
$string['defaultrole_desc'] = 'স্বতালিকাকরণের সময় ব্যবহারকারীকে যে রোল এসাইন করা হবে তা নির্বাচন';
$string['enrolenddate'] = 'শেষের তারিখ';
$string['enrolenddaterror'] = 'তালিকা করার শেষ তারিখ শুরু করার তারিখের আগে হতে পারেনা';
$string['enrolme'] = 'আমাকে তালিকাভূক্ত করা হয়';
$string['enrolperiod'] = 'তালিকাভূক্ত করার সময়কাল';
$string['enrolperiod_desc'] = 'তালিকাভূক্ত করার সময়কালের পূর্বনির্ধারিত দীর্ঘতা (সেকেন্ডে)';
$string['enrolstartdate'] = 'শুরুর তারিখ';
$string['groupkey'] = 'গ্রুপ তালিকাভূক্ত করার কী ব্যবহার';
$string['groupkey_desc'] = 'পূর্বনির্ধারিতভাবে গ্রুপ তালিকাভূক্ত করার কী ব্যবহার।';
$string['groupkey_help'] = 'যারা এ কী জানে তারাই কেবল কোর্স ব্যবহার করতে পারে, কোনো গ্রুপ তালিকাভূক্তি ব্যবহার মানে হল এ গ্রুপে যারা আছে তারা স্বয়ংক্রিয়ভাবে কোর্সে তালিকাভূক্ত।

গ্রুপ তালিকাভুক্ত করার কী ব্যবহার করার জন্য কোর্স সেটিং এ তালিকাভূক্ত করার কী নির্দিষ্ট করা উচিত এবং গ্রুপ সেটিং এ গ্রুপ তালিকাভূক্ত করার কী নির্দিষ্ট করা উচিত।';
$string['longtimenosee'] = 'তালিকামুক্ত করা নিস্ক্রিয়';
$string['longtimenosee_help'] = 'যদি ব্যবহারকারী অনেকদিন কোনো কোর্স ব্যবহার না করে তবে, তারা স্বয়ংক্রিয়ভাবে তালিকামুক্ত হয়ে যায়। এ প্যারামিটার সময়সীমা নির্দিষ্ট করে।';
$string['maxenrolled'] = 'সর্বোচ্চ তালিকাভূক্ত ব্যবহারকারী';
$string['maxenrolled_help'] = 'ব্যবহারকারীর সর্বোচ্চ সংখ্যা যা নিজে তালিকাভূক্ত করতে পারে। 0 মানে কোনো সীমা নেই।';
$string['maxenrolledreached'] = 'নিজে থেকে তালিকাভূক্ত হওয়ার অনুমতি আছে এমন ব্যবহারকারীর সর্বোচ্চ সংখ্যায় ইতোমধ্যে পৌছে গেছে।';
$string['password'] = 'তালিকাভূক্ত করার কী';
$string['password_help'] = 'তালিকাভূক্ত করার কী দ্বারা কেবল যারা কী টা জানে তাদের কোর্সে অংশগ্রহন করতে পারা সক্রিয় করে।

যদি এ ক্ষেত্র ফাঁকা রাখা হয় তবে, যেকেউ এ কোর্সে তালিকাভূক্ত হতে পারে।

যদি কোনো তালিকাভূক্ত করার কী নির্দিষ্ট করা থাকে, তবে কোনো ব্যবহারকারী তালিকাভূক্ত করার আগে আবশ্যক কী দিতে হবে। মনে রাখুন, ব্যবহারকারীকে তালিকাভুক্ত করার সময়  কী একবারই দিতে হয়।';
$string['passwordinvalid'] = 'তালিকাভূক্ত করার ভুল কী, অনুগ্রহ করে পুনরায় চেষ্টা';
$string['passwordinvalidhint'] = 'তালিকাভূক্ত করার ঐ কী ভূল ছিল, অনুগ্রহ করে পুনরায় চেষ্টা<br />
(একটা ইঙ্গিত - এটা \'{$a}\' দিয়ে শুরু)';
$string['pluginname'] = 'স্বতালিকাভূক্তকরণ';
$string['pluginname_desc'] = 'স্বতালিকাকরণ প্লাগইন, ব্যবহারকারী যে কোর্সে অংশগ্রহন করতে চায় তা নির্বাচন করা অনুমোদন করে। তালিকাভূক্ত করার তালিকা একটি কী দিয়ে সুরক্ষিত। অভ্যন্তরীনভাবে স্বনির্ধারিত তালিকা করার প্লাগইন এর মাধ্যমে তালিকাকরণ করা হয় যা আপনার কোর্সে সক্রিয় করা আছে।';
$string['requirepassword'] = 'তালিকাভূক্তকরণের কী আবশ্যক';
$string['requirepassword_desc'] = 'নতুন কোর্সে তালিকাভূক্তকরণের কী আবশ্যক এবং বিদ্যমান কোর্স থেকে তালিকাভূক্তকরণের কী অপসারণে বাধা।';
$string['role'] = 'রোল এসাইন';
$string['self:config'] = 'নিজে তালিকাভূক্ত করার নমুনা কনফিগার';
$string['self:manage'] = 'তালিকাভুক্ত ব্যবহারকারী ব্যবস্থাপনা';
$string['self:unenrol'] = 'কোর্স থেকে তালিকামুক্ত';
$string['self:unenrolself'] = 'কোর্স থেকে নিজেকে তালিকামুক্ত';
$string['sendcoursewelcomemessage'] = 'কোর্সের স্বাগতম বার্তা প্রেরণ';
$string['sendcoursewelcomemessage_help'] = 'যদি সক্রিয় করা থাকে তবে, যখন কোর্সে তালিকাভূক্ত হয় তখন একটি ইমেইলের মাধ্যমে স্বাগতম বার্তা গ্রহন করে।';
$string['showhint'] = 'ইঙ্গিত প্রদর্শন';
$string['showhint_desc'] = 'অতিথি হিসাবে প্রবেশের কী এর প্রথম অক্ষর প্রদর্শন।';
$string['status'] = 'নিজে নিজে তালিকাভূক্তি অনুমোদন';
$string['status_desc'] = 'ব্যবহারকারী পূর্বনির্ধারিতভাবে কোর্সে নিজেকে তালিকাভূক্তকরণ অনুমোদন।';
$string['status_help'] = 'কোনো ব্যবহারকারী নিজেকে কোর্সে তালিকাভূক্ত (এবং যথাযথ অনুমতি থাকলে তালিকামুক্ত করতে পারে) করতে পারবে কিনা তা এ সেটিং দ্বারা নির্ধারিত হয়।';
$string['unenrolselfconfirm'] = 'আপনি কি সত্যিই নিজেকে কোর্স "{$a}" থেকে তালিকামুক্ত করতে চান?';
$string['usepasswordpolicy'] = 'পাসওয়ার্ড নীতিমালা ব্যবহার';
$string['usepasswordpolicy_desc'] = 'তালিকাভূক্ত করার আদর্শ পাসওয়ার্ড নীতিমালা ব্যবহার।';
$string['welcometocourse'] = '{$a} এ স্বাগতম';
$string['welcometocoursetext'] = '{$a->coursename} এ স্বাগতম!

আপনার যদি ইতোমধ্যে সম্পন্ন না হয়ে থাকে, তবে আমরা যাতে আপনার সম্পর্কে আরও তথ্য জানতে পারি তার জন্য প্রোফাইল সম্পাদনা করতে পারেন:

  {$a->profileurl}';
