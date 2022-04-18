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
 * Strings for component 'report_security', language 'bn', version '3.11'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>এটা সুপারিশকৃত যে ইনস্টলেশনের পর config.php এর ফাইল অনুমতি পরিবর্তিত হয়েছে ফলে ওয়েব সার্ভারকর্তৃক কোনো ফাইল পরিবর্তিত করা যাবে না।
অনুগ্রহ করে মনে রাখবেন যে এটা নিরাপত্তা বাড়ানোর নির্দিষ্ট কোনো মাপকাঠি না, যদিও সাধারণভাবে ব্যবহার কিছুটা ধীরগতি বা সীমিত হয়ে যেতে পারে।</p>';
$string['check_configrw_name'] = 'লিখনযোগ্য config.php';
$string['check_configrw_ok'] = 'PHP স্ক্রিপ্ট config.php পরিবর্তন করতে পারে না।';
$string['check_configrw_warning'] = 'PHP স্ক্রিপ্ট config.php পরিবর্তন করতে পারে।';
$string['check_cookiesecure_details'] = '<p>আপনি যদি https যোগাযোগ সক্রিয় করেন তবে নিরাপদ কুকি সক্রিয় করার জন্যও সুপারিশ করা হয়। আপনার উচিত http থেকে https এ স্থায়ী রিডিরেকশন যোগ করা।</p>';
$string['check_cookiesecure_error'] = 'অনুগ্রহ করে নিরাপদ কুকি সক্রিয়';
$string['check_cookiesecure_name'] = 'নিরাপদ কুকি';
$string['check_cookiesecure_ok'] = 'নিরাপদ কুকি সক্রিয়।';
$string['check_crawlers_details'] = '<p> গুগল সেটিং উন্মুক্ত হলে সার্চ ইঞ্জিন অতিথি হিসাবে ব্যবহার সক্রিয় করে। অতিথি হিসাবে লগইন অনুমোদিত না হলে এ সেটিং সক্রিয় করার কোনো প্রয়োজন নেই।</p>';
$string['check_crawlers_error'] = 'সার্চ ইঞ্জিন ব্যবহার অনুমোদিত কিন্তু অতিথি হিসাবে ব্যবহার নিস্ক্রিয়।';
$string['check_crawlers_info'] = 'সার্চ ইঞ্জিন অতিথি হিসাবে ব্যবহার প্রবেশ করতে পারবে।';
$string['check_crawlers_name'] = 'গুগলে উন্মুক্ত';
$string['check_crawlers_ok'] = 'সার্চ ইঞ্জিনে ব্যবহার সক্রিয় নয়।';
$string['check_defaultuserrole_details'] = '<p>সব লগইন করা ব্যবহারকারীকে পূর্বনির্ধারিত ব্যবহারকারী হিসাবে ক্ষমতা দেয়া হয়েছে। অনুগ্রহ করে নিশ্চিত হন যে কোনো ঝুঁকিপূর্ণ ক্ষমতা এ রোলে অনুমোদিত নয়।</p>
<p>পূর্বনির্ধারিত ব্যবহারকারীর রোলের জন্য একমাত্র সমর্থিত লিগাসি ধরণ হল <em>Authenticated user</em>। কোর্স দেখার ক্ষমতা সক্রিয় করা উচিত নয়।</p>';
$string['check_defaultuserrole_error'] = 'পূর্বনির্ধারিত ব্যবহারকারীর রোল "{$a}" ভুলভাবে নির্ধারণ!';
$string['check_defaultuserrole_name'] = 'সব ব্যবহারকারীর জন্য পূর্বনির্ধারিত রোল';
$string['check_defaultuserrole_notset'] = 'পূর্বনির্ধারিত রোল নির্ধারণ করা হয়নি।';
$string['check_defaultuserrole_ok'] = 'সব ব্যবহারকারীর নির্ধারনের জন্য পূর্বনির্ধারিত রোল ঠিক আছে।';
$string['check_displayerrors_details'] = '<p>PHP সেটিং <code>display_errors</code> প্রোডাকশন সাইটে এটা করা ঠিক নয় কারণ ত্রুটি  বার্তায় সার্ভার সম্পর্কিত সংবেদনশীল তথ্য থাকতে পারে।</p>';
$string['check_displayerrors_error'] = 'ত্রুটি দেখার জন্য PHP সেটিং সক্রিয়। এটা নিস্ক্রিয় রাখঅর জন্য সুপারিশ করা হয়।';
$string['check_displayerrors_name'] = 'PHP ত্রুটি প্রদর্শন';
$string['check_displayerrors_ok'] = 'PHP ত্রুটি প্রদর্শন নিস্ক্রিয়।';
$string['check_emailchangeconfirmation_details'] = '<p>ব্যবহারকারী তার প্রোফাইলে ইমেইল ঠিকানা পরিবর্তন করার সময় একটি ইমেইল নিশ্চিতকরণ ধাপ থাকা আবশ্যক বলে সুপারিশ করা হয়। যদি নিস্ক্রিয় থাকে, স্প্যামার স্প্যাম পাঠিয়ে সার্ভারের অপব্যবহার করার চেষ্টা করবে।</p>
<p>প্রমাণীকরণ প্লাগইন থেকে ইমেইল লক হয়ে যেতে পারে, এ সম্ভাবনা এখনে হিসাব করা হয় না।</p>';
$string['check_emailchangeconfirmation_error'] = 'ব্যবহারকারী যেকেনো ইমেইল ঠিকানা ব্যবহার করতে পারবে।';
$string['check_emailchangeconfirmation_info'] = 'ব্যবহারকার কেবল অনুমোদিত ডোমেইন ব্যবহার করে ইমেইল ঠিকানা ব্যবহার করতে পারে।';
$string['check_emailchangeconfirmation_name'] = 'ইমেইল পরিবর্তন নিশ্চিতকরণ';
$string['check_emailchangeconfirmation_ok'] = 'ব্যবহারকারীর প্রোফাইলে ইমেইল ঠিকানা পরিবর্তনের নিশ্চিতকরণ।';
$string['check_embed_details'] = '<p>অসংখ্য অবজেক্ট সন্নিবেশ করা বিপদজ্জনক - যেকোনো নিবন্ধনকৃত ব্যবহারকারী অন্য সার্ভার ব্যবহাকারীর বিরূদ্ধে XSS অ্যাটাক চালাতে পারে। প্রোডাকশন সার্ভারে এ অ্যাকশন নিস্ক্রিয় রাখঅ উচিত।</p>';
$string['check_embed_error'] = 'অসংখ্য অবজেক্ট সন্নিবেশ করা সক্রিয় - বেশিরভাগ সার্ভারের জন্য এটা বিপদজ্জনক।';
$string['check_embed_name'] = 'সন্নিবেশ করা এবং অবজেক্ট অনুমোদন';
$string['check_embed_ok'] = 'অসংখ্য অবজেক্ট সন্নিবেশ করা অনুমোদিত নয়।';
$string['check_frontpagerole_details'] = '<p>ফ্রন্টপেজ অ্যাক্টিভিটিজের জন্য পূর্বনির্ধারিত ফ্রন্টপেজ রোল সব নিবন্ধনকৃত ব্যবহাকরীকে দেয়া আছে। অনুগ্রহ করে নিশ্চিত হন যে কোন ঝুঁকিপূর্ণ ক্ষমতা এ রোলের জন্য অনুমোদিত নয়।</p>
<p>এ কাজের জন্য একটি বিশেস রোল তৈরি করার জন্য সুপারিশ করা হচ্ছে এবং লিগাসি ধরনের রোল ব্যবহার করা হয়নি।</p>';
$string['check_frontpagerole_error'] = 'ভুলভাবে নির্ধারিত ফ্রন্টপেজ রোল "{$a}" সনাক্ত!';
$string['check_frontpagerole_name'] = 'ফ্রন্টপেজ রোল';
$string['check_frontpagerole_notset'] = 'ফ্রন্টপেজ রোল নির্ধারিত নয়।';
$string['check_frontpagerole_ok'] = 'ফ্রন্টপেজ রোল নির্ধারণ ঠিক আছে।';
$string['check_guestrole_details'] = '<p>গেস্ট রোল গেস্ট এর জন্য ব্যবহৃত হয়, লগইন করা ব্যবহারকারী বা অস্থায়ী গেস্ট ব্যবহারকারীর কোর্স ব্যবহার করার জন্য নয়। অনুগ্রহ করে নিশ্চিত হন যে কোনো ঝুঁকিপূর্ণ ক্ষমতা এ রোলে ব্যবহার করা হচ্ছে না।</p>
<p>গেস্ট রোলের একমাত্র লিগাসি ধরণ হল <em>Guest</em>।</p>';
$string['check_guestrole_error'] = 'গেস্ট রোল "{$a}" ভুলভাবে নির্ধারিত!';
$string['check_guestrole_name'] = 'গেস্ট রোল';
$string['check_guestrole_notset'] = 'গেস্ট রোল নির্ধারণ করা নেই।';
$string['check_guestrole_ok'] = 'গেস্ট রোল নির্ধারণ ঠিক আছে।';
$string['check_mediafilterswf_details'] = '<p>স্বয়ংক্রিয় swf সন্নিবেশ খুবই বিপদজ্জনক - যে কোনো নিবন্ধনকৃত ব্যবহাকারী অন্য সার্ভার ব্যবহারকারীর বিরূদ্ধে XSS অ্যাটাক চালাতে পারে। অনুগ্রহ করে প্রোডাকশন সার্ভারে এটা নিস্ক্রিয় করা হয়।</p>';
$string['check_mediafilterswf_error'] = 'ফ্ল্যাশ মিডিয়া ফিল্টার সক্রিয় - বেশিরভাগ সার্ভারের জন্য এটা খুব বিপদজ্জনক।';
$string['check_mediafilterswf_name'] = '.swf মিডিয়া ফিল্টার সক্রিয়';
$string['check_mediafilterswf_ok'] = 'ফ্ল্যাশ মিডিয়া ফিল্টার সক্রিয় নয়।';
$string['check_openprofiles_details'] = '<p> স্প্যামাররা উন্মুক্ত ব্যবহারকারীর প্রোফাইলের দুর্ব্যবহার করতে পারে। <code>Force users to login for profiles</code> বা <code>Force users to login</code> সক্রিয় করার জন্য সুপারিশ করা হয়।</p>';
$string['check_openprofiles_error'] = 'লগিইন করা ছাড়াই যে কেউ ব্যবহারকারীর প্রোফাইল দেখতে পায়।';
$string['check_openprofiles_name'] = 'ব্যবহারকারীর প্রোফাইল খুলুন।';
$string['check_openprofiles_ok'] = 'ব্যবহারকারীর প্রোফাইল দেখার আগে লগইন করা প্রয়োজন।';
$string['check_passwordpolicy_details'] = '<p>পাসওয়ার্ড নীতিমালা নির্ধারন করার জন্য সুপারিশ করা হচ্ছে, কারণ প্রমানীকরণ ছাড়া ব্যবহার করলে পাসওয়ার্ড সম্পর্কে খুব সহজেই ধারণা করা যায়।
কিন্তু এ নীতিমালা এতটাই কঠিন করা উচিত নয় যে, ব্যবহারকারী তা খুব সহজে মনে রাখতে পারেনা এবং হয় ভুলে যায় বা লিখে রাখতে হয়।</p>';
$string['check_passwordpolicy_error'] = 'পাসওয়ার্ড নীতিমালা নির্ধারিত নেই।';
$string['check_passwordpolicy_name'] = 'পাসওয়ার্ড নীতিমালা';
$string['check_passwordpolicy_ok'] = 'পাসওয়ার্ড নীতিমালা সক্রিয়।';
$string['check_riskadmin_detailsok'] = '<p>অনুগ্রহ করে সিস্টেম প্রসাশকের নিম্নোক্ত তালিকা পরীক্ষা করে নিন:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>অনুগ্রহ করে সিস্টেম প্রসাশকের নিম্নোক্ত তালিকা পরীক্ষা করে নিন:</p>{$a->admins}
<p>কেবল সিস্টেম কনটেক্সটে প্রসাশনিক রোল এসাইন করার জন্য সুপারিশ করা হয়েছে। নিম্নোক্ত ব্যবহারকারীর অ্যাডমিন রোল এসাইনমেন্ট (অসমর্থিত) রয়েছে:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'প্রসাশক';
$string['check_riskadmin_ok'] = 'সার্ভার প্রসাশক {$a} খুঁজুন।';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) রোল এসাইনমেন্ট রিভিউ</a>';
$string['check_riskadmin_warning'] = 'সার্ভার {$a->admincount} প্রসাশক এবং অসমর্থিত {$a->unsupcount} অ্যাডমিন রোল এসাইনমেন্ট খুঁজুন।';
$string['check_riskbackup_details_overriddenroles'] = '<p>এ সক্রিয় ওভাররাইড ব্যবহারকারীকে ব্যাকআপে ব্যবহাকারীর ডাটা যোগ করার ক্ষমতা দেয়। অনুগ্রহ করে নিশ্চিত হোন যে, এ অনুমতি আবশ্যক।</p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p>নিম্নোক্ত সিস্টেম রোল বর্তমানে ব্যবহারকারীকে ব্যাকআপে ব্যবহাকারীকে তার ডাটা যোগ করার অনুমোদন দেয়। অনুগ্রহ করে নিশ্চিত হোন যে, এ অনুমতি আবশ্যক।</p> {$a}';
$string['check_riskbackup_details_users'] = '<p>উপরোক্ত রোল বা স্থানীয় ওভাররাইড এর কারণে নিম্নোক্ত ব্যবহারকারীর অ্যাকাউন্টে বর্তমানে কোর্সে সন্নিবিষ্ট যেকোনো ব্যবহাকারীর কাছ থেকে ব্যক্তিগত ডাটার ব্যাকআপ তৈরি করার অনুমোদন আছে। নিশ্চিত হয়ে নিন যে (a) বিশ্বস্ত এবং (b) শক্তিশালী পাসওয়ার্ড দিয়ে সংরক্ষিত:</p> {$a}';
$string['check_riskbackup_detailsok'] = 'কোনো রোল ব্যবহারকারীর ডাটার ব্যাকআপ প্রকাশ করবে না। তদূপুরি, মনে রাখবেন, "যেকোনো কিছু করার" ক্ষমতাসহ অ্যাডমিন এখনও এটা করতে পারে।';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} যার মধ্যে {$a->contextname}</a>';
$string['check_riskbackup_editrole'] = '<a href="{$a->url}">{$a->name}</a>';
$string['check_riskbackup_name'] = 'ব্যবহারকারীর ডাটার ব্যাকআপ';
$string['check_riskbackup_ok'] = 'কোনো রোলের বর্ণনা ব্যবহারকারীর ডাটার অনুমোদন দেয় না';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) যার মধ্যে {$a->contextname}</a>';
$string['check_riskbackup_warning'] = 'রোল {$a->rolecount} খুঁজুন, {$a->overridecount} ওভাররাইড এবং {$a->usercount} ব্যবহাকারী যার ডাটা ব্যকআপের ক্ষমতা রয়েছে।';
$string['check_riskxss_details'] = '<p>RISK_XSS দিয়ে কেবলমাত্র বিশ্বস্ত ব্যবহাকারী যে ডাটা ব্যবহার তার সব ঝুঁকিপূর্ণ ক্ষমতা বুঝায়।</p>
<p>ব্যবহারকারীর নিম্নোক্ত তালিকা অনুগ্রহ করে পরীক্ষা এবং এ সার্ভারে তারা আপনার সম্পূর্ণ বিশ্বস্ত তা নিশ্চিত করে নিন:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS বিশ্বস্ত ব্যবহারকারী';
$string['check_riskxss_warning'] = 'RISK_XSS - {$a} ব্যবহাকারী বিশ্বস্ত।';
$string['check_unsecuredataroot_details'] = '<p>ওয়োব ব্যবহার করে ডাটারুট ডিরেক্টরি ব্যবহার করা যাবে না। পাবলিক ডিরেক্টরির বাহিরে গিয়ে ব্যবহার করে একদম নিশ্চিত হওয়া যায়যে ডিরেক্টরিটি ব্যবহার করা যাচ্ছে না।</p>
<p>আপনি যদি ডিরেক্টরি ব্যবহার করতে চান, আপনার প্রয়োজন <code>config.php</code> এ <code>$CFG->dataroot</code> সেটিং আপডেট করে নেয়া।</p>';
$string['check_unsecuredataroot_error'] = 'আপনার ডাটারুট ডিরেক্টরি <code>{$a}</code> ভুল জায়গায় রাখা আছে এবং ওয়েবে উন্মুক্ত আছে!';
$string['check_unsecuredataroot_name'] = 'অনিরাপদ ডাটারুট';
$string['check_unsecuredataroot_ok'] = 'ওয়েবের সাহায্যে ডাটারুট ডিরেক্টরি ব্যবহার করতে দেয়া উচিত নয়।';
$string['check_unsecuredataroot_warning'] = 'আপনার ডাটারুট ডিরেক্টরি <code>{$a}</code> ভুল জায়গায় রাখা আছে এবং ওয়েবে উন্মুক্ত আছে।';
$string['configuration'] = 'কনফিগারেশন';
$string['description'] = 'বর্ণনা';
$string['details'] = 'বিস্তারিত তথ্য';
$string['issue'] = 'ঘটনা';
$string['pluginname'] = 'নিরাপত্তা পর্যবেক্ষন';
$string['security:view'] = 'নিরাপত্তা রিপোর্ট প্রদর্শন';
$string['timewarning'] = 'ডাটা প্রসেসিং করতে অনেক সময় লাগতে পারে, অনুগ্রহ করে একটু ধৈর্য ধরুন...';
