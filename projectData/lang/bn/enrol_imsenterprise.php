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
 * Strings for component 'enrol_imsenterprise', language 'bn', version '3.11'.
 *
 * @package     enrol_imsenterprise
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aftersaving...'] = 'একবার আপনি আপনার সেটিং সংরক্ষন করেন, তবে আপনি আশা করতে পারেন';
$string['allowunenrol'] = 'IMS ডাটা ছাত্র/শিক্ষক  <strong>তালিকামুক্ত করা</strong> অনুমোদন করে';
$string['allowunenrol_desc'] = 'যদি সক্রিয় করা হয় তবে, এন্টারপ্রাইজ ডাটা নির্ধারন করার সময় কোর্স তালিকা করা অপসারন করা হয়।';
$string['basicsettings'] = 'মূল সেটিং';
$string['coursesettings'] = 'কোর্স ডাটা অপশন';
$string['createnewcategories'] = 'যদি মুডল পাওয়া না যায় তবে নতুন (আড়ালকৃত) কোর্সের বিভাগ তৈরি';
$string['createnewcategories_desc'] = 'যদি <org><orgunit> এলিমেন্ট আসন্ন ডাটায় থাকে তবে, এর কনটেন্ট বিভাগ নির্দিষ্ট করে যদি কোর্স স্ক্র্যাচ থেকে তৈরি হয়ে থাকে। এ প্লাগইন বিদ্যমান কোর্সকে পুনরায় কোনো বিভাগে ফেলবে না।

যদি প্রত্যাশিত নামে কোনো ক্যাটাগরি না থকে তবে, একটি আড়াল করা বিভাগ তৈরি হবে।';
$string['createnewcourses'] = 'যদি মুডল পাওয়া না যায় তবে নতুন (আড়ালকৃত) কোর্সের বিভাগ তৈরি';
$string['createnewcourses_desc'] = 'যদি সক্রিয় করা থাকে তবে, IMS এন্টারপ্রাইজ তালিকাকরণ প্লাগইন মডুল ডাটাবেসে নেই কিন্তু IMS ডাটা খঁজে পায় এমন নতুন কোর্স তৈরি করতে পারে। যেকোনো নতুনভাবে তৈরি কোর্স প্রাথমিকভাবে আড়াল করা আছে।';
$string['createnewusers'] = 'মডুলে নিবন্ধন করা নেই এমন ব্যবহাকারীর অ্যাকাউন্ট তৈরি';
$string['createnewusers_desc'] = 'IMS এন্টারপ্রাইজ তালিকা করার ডাটা নির্দিষ্ট করে ব্যবহারকারীর একটি সেট বর্ণনা করে। যদি সক্রিয় করা হয়, মুডল ডাটাবেসে পাওয়া যায়নি এমন কোনো ব্যবহারকারীর জন্য অ্যাকাউন্ট তৈরি করা যায়।

ব্যবহাকরীদের প্রথমে তাদের আইডি নাম্বার দিয়ে খোঁজা হয়, দ্বিতীয়ত তাদের মুডল ব্যবহাকারীর নাম দিয়ে। IMS এন্টারপ্রাইজ প্লাগইন দিয়ে পাসওয়ার্ড ইম্পোর্ট করা হয় না। প্রমাণীকরণ প্লাগইনের ব্যবহারকারী প্রমানীকরণের জন্য সুপারিশ করা হয়।';
$string['cronfrequency'] = 'প্রক্রিয়াধীন করার ফ্রিকোয়েন্সি';
$string['deleteusers'] = 'IMS ডাটায় নির্ধারিত হওয়ার পর';
$string['deleteusers_desc'] = 'যদি সক্রিয় করা থাকে, IMS এন্টারপ্রাইজ ডাটা ব্যবহারকারীর অ্যাকাউন্ট নির্দিষ্ট করতে পারে (যদি "recstatus" ফ্ল্যাগ 3 এ নির্ধারন করা থাকলে ব্যবহারকারীর অ্যাকাউন্ট মুছে ফেলা বুঝায়)। মুডলে আদর্শ হিসাবে, ব্যবহারকারীর অ্যাকাউন্ট মুডল ডাটাবেস থেকে মুছে ফেলা যায়না, কিন্তু অ্যাকাউন্টে মুছে ফেলা হয়েছে এমনভাবে ফ্ল্যাগ দিয়ে চিহ্নিত করে দিতে হবে।';
$string['doitnow'] = 'এখন IMS এন্টারপ্রাইজ ইম্পোর্ট চালান';
$string['filelockedmail'] = 'আপনি যে IMS-ফাইল-ভিত্তিক তালিকা করা ({$a}) টেক্সট ফাইল ক্রন প্রক্রিয়া মুছা যায় না। সাধারণভাবে বুঝা যায় যে এর অনুমোদনে ভুল আছে। অনুগ্রহ করে অনুমোদন ঠিক করুন যাতে, মুডল ফাইল অপসারণ করতে পারে, অন্যথায় এটা বার বার প্রক্রিয়াধীন হতে থাকবে।';
$string['filelockedmailsubject'] = 'গুরুত্বপূর্ণ ত্রুটি: ফাইল তালিকাভূক্ত করা';
$string['fixcasepersonalnames'] = 'ব্যক্তিগত নাম শিরোনাম অক্ষরে পরিবর্তন';
$string['fixcaseusernames'] = 'ব্যবহারকারীর নাম ছোটহাতের অক্ষরে পরিবর্তন';
$string['ignore'] = 'উপেক্ষা';
$string['importimsfile'] = 'IMS এন্টারপ্রাইজ ফাইল ইম্পোর্ট';
$string['imsrolesdescription'] = 'IMS এন্টারপ্রাইজ সুনির্দিষ্ট করাতে 8 ধরণের রোল থাকে। অনুগ্রহ করে আপনি এদের কোনোটাকে উপেক্ষা করে কিভাবে  মুডলে এদের এসাইন করবেন তা চান তা নির্বাচন।';
$string['location'] = 'ফাইলের অবস্থান';
$string['logtolocation'] = 'ফাইলের আউটপুট লোকেশন লগ (লগইন না করার জন্য ফাঁকা রাখা হয়)';
$string['mailadmins'] = 'প্রসাশনকে ইমেইল দিয়ে জানান';
$string['mailusers'] = 'ব্যবহাকারীকে ইমেইল দিয়ে জানান';
$string['miscsettings'] = 'বিবিধ';
$string['pluginname'] = 'IMS এন্টারপ্রাইজ ফাইল';
$string['pluginname_desc'] = 'এ পদ্ধতি আপনার নির্দিষ্ট করা অবস্থানে বিশেষভাবে-বিন্যস্ত টেক্সট ফাইল বার বার পরীক্ষা এবং প্রক্রিয়াকরণ করবে। এ ফাইল অবশ্যই ব্যক্তি, গ্রুপ, এবং XML এলিমেন্ট সদস্যপদ নির্দিষ্ট করা সহ IMS এন্টারপ্রাইজ অনুসরণ করে।';
$string['processphoto'] = 'প্রোফাইলে ব্যবহারকারীর ফটো ছবি ডাটা যোগ';
$string['processphotowarning'] = 'সতর্কীকরণ: চিত্র প্রক্রিয়াকরণ সার্ভারে বেশ চাপ সৃষ্টি করে। যদি বিপুল সংখ্যক ছাত্র এ প্রক্রিয়াধীন হতে চায় তবে আপনাকে এ অপশন সক্রিয় না করার জন্য অনুরোধ করা হয়।';
$string['restricttarget'] = 'যদি নিম্নোক্ত টার্গেট নির্দিষ্ট করা হয় তবেই ডাটা প্রক্রিয়াধীন করা হয়';
$string['restricttarget_desc'] = 'IMS এন্টারপ্রাইজ ডাটা ফাইলের ক্ষেত্রে  বিবিধ "টার্গেট" করা হয় - বিভিন্ন LMSes, অথবা স্কুল/বিশ্ববিদ্যালয় এর বিভিন্ন সিস্টেম। <target>যার মধ্যে ট্যাগ আছে<properties>ট্যাগে নামকরণ করে এন্টারপ্রাইজ ফাইল নির্দিষ্ট করা সম্ভব যেন ডাটা এক বা একাধিক টার্গেট সিস্টেমে নির্দিষ্ট করা যায়।

সাধরনভাবে, আপনার এটা নিয়ে চিন্তার কিছু নেই। সেটিং ফাঁকা রাখুন এবং মুডল সবসময় ডাটা ফাইল প্রক্রিয়াধীন করে নিবে, টার্গেট নির্দিষ্ট হোক বা না হোক। অন্যথায় একদম সঠিক একটি নাম দিন যা <target> ট্যাগের ভিতরে আউটপুট হবে।';
$string['roles'] = 'রোল';
$string['sourcedidfallback'] = 'ব্যক্তির ব্যবহারকারীর আইডি ক্ষেত্র &quot;userid&quot; যদি না পাওয়া যায় তবে &quot;sourcedid&quot; ব্যবহার';
$string['sourcedidfallback_desc'] = 'IMS ডাটায়, <sourcedid> ক্ষেত্র, সোর্স সিস্টেমে ব্যবহৃত ব্যবহাকারী হিসাবে কোনো ব্যক্তির নির্দিষ্ট আইডি কোড বুঝায়। <userid> ক্ষেত্র একটি পৃথক ক্ষেত্র যেখানে কোনো ব্যবহাকারী লগইন করার সময় তার ব্যবহৃত আইডি কোড থাকতে হয়। অনেক ক্ষেত্রে এ দুই কোড একি হতে পারে - কিন্তু সবসময় নয়।

ছাত্রদের কিছু তথ্যের সিস্টেম <userid> ক্ষেত্র আউটপুট করতে ব্যর্থ। যদি এমনই হয় তবে, মুডল ব্যবহারকারীর আইডি হিসাবে <sourcedid> ব্যবহার করার জন্য সেটিং সক্রিয় করা অনুমোদন করা উচিত, অন্যথায়, এ সেটিং ফাঁকা রাখা হয়।';
$string['truncatecoursecodes'] = 'কোর্সের কোড এ দৈর্ঘ্যে সংকুচিত করা';
$string['truncatecoursecodes_desc'] = 'কিছু কিছু ক্ষেত্রে আপনি কিছু কোর্স কোড প্রক্রিয়াধীন হওয়ার আগেই দৈর্ঘ্যে ছোট করে নিতে পারেন। যদি এমন হয় তবে বক্সে অক্ষরের সংখ্যা দিন। অন্যথায়, বক্স ফাঁকা রাখুন এবং কোনো সংক্ষিপ্তকরণ হবে না।';
$string['usecapitafix'] = '&quot;Capita&quot;  ব্যবহার করতে থাকলে বক্সে টিক দিন (তাদের XML বিন্যাস কিঞ্চিত ভুল আছে)';
$string['usecapitafix_desc'] = 'ক্যাপিটা দিয়ে তৈরি শিক্ষার্থীদের ডাটা সিস্টেমে XML আউটপুটে কিঞ্চিত ত্রুটি আছে। আপনি যদি ক্যাপিটা ব্যবহার করেন তবে এ সেটিং সক্রিয় করা উচিত - নতুবা এটাতে টিক দেয়ার দরকার নেই।';
$string['usersettings'] = 'ব্যবহারকারী ডাটা অপশন';
$string['zeroisnotruncation'] = '0 দিয়ে বুঝায় কোনো কিছু সংক্ষিপ্ত হবে না';
