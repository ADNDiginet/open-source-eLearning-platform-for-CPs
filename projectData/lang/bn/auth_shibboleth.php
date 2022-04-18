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
 * Strings for component 'auth_shibboleth', language 'bn', version '3.11'.
 *
 * @package     auth_shibboleth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = 'প্রমাণীকরণ প্রক্রিয়ার নাম';
$string['auth_shib_auth_method_description'] = 'আপনার ব্যবহারকারীর কাছে পরিচিত Shibboleth প্রমাণীকরণ প্রক্রিয়ার একটি নাম দিন। এটা আপনার Shibboleth ফেডারেশনেরও নাম হতে পারে, উদাহরণস্বরূপ, <tt>SWITCHaai Login</tt> or <tt>InCommon Login</tt> বা এমন কিছু।';
$string['auth_shib_changepasswordurl'] = 'পাসওয়ার্ড-পরিবর্তন URL';
$string['auth_shib_convert_data'] = 'ডাটা পরিবর্তন API';
$string['auth_shib_convert_data_description'] = 'Shibboleth এ দেয়া ডাটা পরিবর্তন করতে এ API ব্যবহার করতে পারেন। আরও তথ্যের জন্য <a href="../auth/shibboleth/README.txt">README</a> পড়ুন।';
$string['auth_shib_convert_data_warning'] = 'ফাইল নেই বা ওয়েবসার্ভার প্রক্রিয় তা পড়তে পারেনা!';
$string['auth_shib_idp_list'] = 'পরিচয় সরবরাহকারী';
$string['auth_shib_idp_list_description'] = 'ব্যবহারকারীরা যাতে লগইন পৃষ্ঠাতেই নির্বাচন করতে পারে তার জন্য পরিচয় সরবরাহকারী entityID এর তালিকা থাকে।<br />IdP (Shibboleth metadata ফাইল দেখুন)  এর entityID এর টাপেল অবশ্যই কমা দিয়ে প্রত্যেক লাইন আলাদা করা এবং ড্রপডাউন তালিকায় প্রদর্শিত IdP এর নাম।<br />যদি আপনার মুডল ইনস্টলেশন কোনো মাল্টি ফেডারেশন সেটআপের অংশ হয়ে থাকে তবে ঐচ্ছিক তৃতীয় প্যারামিটার হিসাবে Shibboleth সেশন ইনিশিয়েটর এর অবস্থান যোগ করা হবে।';
$string['auth_shib_instructions'] = 'আপনার প্রতিষ্ঠান সমর্থন করলে, Shibboleth হয়ে প্রবেশাধিকার পাওয়ার জন্য <a href="{$a}">Shibboleth লগইন</a> ব্যবহার।<br />অন্যথায়, এখানে যেভাবে প্রদর্শিত আছে সেভাবে সাধারণ লগইন করুন।';
$string['auth_shib_instructions_help'] = 'Shibboleth ব্যাখ্যা করার জন্য এখানে স্বনির্ধারিত নির্দেশনা দেয়া আছে। নির্দেশনা বিভাগে এটা লগইন পৃষ্ঠায় এটা প্রদর্শিত হবে। নির্দেশনায় একটি লিঙ্ক থাকে "<b>{$a}</b>" যেখানে ব্যবহারকারী লগইন করার জন্য ক্লিক করতে পারে।';
$string['auth_shib_integrated_wayf'] = 'Moodle WAYF সার্ভিস';
$string['auth_shib_integrated_wayf_description'] = 'আপনি যদি এটা পরীক্ষা করেন, Shibboleth এর জন্য কনফিগার করাটা ব্যবহার না করে মডুল নিজের WAYF সার্ভিস ব্যবহার করে। বিকল্প লগইন পৃষ্ঠায় মুডল ড্রপডাউন তালিকা প্রদর্শন করে যেখানে ব্যবহারকারীর নিজেকেই পরিচয় সরবরাহকারী নির্বাচন করতে হয়।';
$string['auth_shib_logout_return_url'] = 'বিকল্প লগআউট রিটার্ন URL';
$string['auth_shib_logout_return_url_description'] = 'এমন URL সরবরাহ করে যা লগিং আউট করার পর Shibboleth ব্যবহারকারীকে রিডিরেক্ট করা হবে।<br />যদি ফাঁকা থাকে, মুডল এর ব্যবহারকারীকে ঐ অবস্থানে রিডিরেক্ট করবে';
$string['auth_shib_logout_url'] = 'Shibboleth সার্ভিস সরবরাহকারী লগআউট হ্যান্ডলার URL';
$string['auth_shib_logout_url_description'] = 'Shibboleth সার্ভিস সরবরাহকারী লগআউট হ্যান্ডলার এ URL সরবরাহ। এটা সাধারণত <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'আপনি যদি ইন্টিগ্রেটেড WAYF সার্ভিস ব্যবহার করতে চান তবে, আপনাকে অবশ্যই কমা দিয়ে পৃথক করা পরিচয় সরবরাহকারী entityID, তাদের নাম এবং ঐচ্ছিকভাবে সেশন ইনিশিয়েটরও সরবরাহ করতে হবে।';
$string['auth_shib_only'] = 'শুধু Shibboleth';
$string['auth_shib_only_description'] = 'Shibboleth প্রমাণীকরণ চাওয়া হলে এ অপশন পরীক্ষা';
$string['auth_shib_username_description'] = 'ওয়েবসার্ভার এনভায়রনমেন্ট ভেরিয়েবল এর নাম দিন যা মুডল ব্যবহারকারীর নাম হিসাবে ব্যবহৃত হবে';
$string['auth_shibboleth_errormsg'] = 'আপনি যে অর্গানাইজেশনের সদস্য অনুগ্রহ করে তা নির্বাচন করুন!';
$string['auth_shibboleth_login'] = 'Shibboleth লগইন';
$string['auth_shibboleth_login_long'] = 'Shibboleth হয়ে মুডলে লগইন';
$string['auth_shibboleth_manual_login'] = 'স্বনির্ধারিত লগইন';
$string['auth_shibboleth_select_member'] = 'আমি সদস্য ...';
$string['auth_shibboleth_select_organization'] = 'Shibboleth হয়ে প্রমাণীকরণের জন্য, অনুগ্রহ করে আপনার অর্গানাইজেশনের নাম তালিকায় দিন:';
$string['auth_shibbolethdescription'] = 'এ পদ্ধতি ব্যবহার করে ব্যবহারকারী তৈরি হয় এবং <a href="http://shibboleth.internet2.edu/">Shibboleth</a> ব্যবহার করে প্রমানীকরন করা হয়।<br />Shibboleth দিয়ে কিভাবে মুডল নির্ধারণ করতে হবে তা <a href="../auth/shibboleth/README.txt">README</a> থেকে পড়ে নিশ্চিত হয়ে নিতে হবে';
$string['pluginname'] = 'Shibboleth';
$string['shib_no_attributes_error'] = 'আপনাকে Shibboleth প্রমানীকৃত মনে হচ্ছে কিন্তু মুডল কোনো ব্যবহারকারী এট্রিবিউট পায়নি। অনুগ্র করে, চলমান সার্ভিস সরবরাহকারী মুডলে পরিচয় সরবরাহকারী প্রয়োজনীয় এট্রিবিউট ({$a})  রিলিজ করেছে কিনা তা পরীক্ষা করুন অথবা সার্ভারের ওয়েবমাস্টার কে জানান।';
$string['shib_not_all_attributes_error'] = 'আপনার ক্ষেত্রে বিদ্যমান নেই এমন নির্দিষ্ট কিছু Shibboleth এট্রিবিউট মুডলে প্রয়োজন। এট্রিবিউটগুলো হল: {$a}<br />অনুগ্রহ করে সার্ভারের ওয়েবমাস্টার এর সাথে অথবা আপনার পরিচয় সরবরাহকারীর সাথে যোগাযোগ করুন।';
$string['shib_not_set_up_error'] = 'Shibboleth প্রমাণীকরণ ঠিকভাবে নির্ধারণ করা নাই কারণ এ পৃষ্ঠার জন্য Shibboleth এনভায়রনমেন্ট ভেরিয়েবল নেই। অনুগ্রহ করে, Shibboleth প্রমাণীকরণ কিভাবে নির্ধারণ করতে হয় সে সম্পর্কে আরও তথ্যের জন্য <a href="README.txt">README</a> এ যোগাযোগ করুন বা মুডল ইনস্টলেশনের ওয়েবমাস্টারের সাথে যোগাযোগ করুন।';
