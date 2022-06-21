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
 * Strings for component 'enrol_ldap', language 'bn', version '3.11'.
 *
 * @package     enrol_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = '\'{$a->course_shortname}\' কোর্সে \'{$a->user_username}\' ব্যবহারকারীকে \'{$a->role_shortname}\' ভূমিকা এসাইন (id {$a->course_id})';
$string['assignrolefailed'] = '\'{$a->course_shortname}\' (id {$a->course_id}) কোর্সে \'{$a->user_username}\' ব্যবহারকারীর রোল \'{$a->role_shortname}\'  এসাইন করতে ব্যর্থ';
$string['autocreate'] = '<p>স্বয়ংক্রিয়ভাবে কোর্স তৈরি করা যায় যদি মুডলে বিদ্যমান নেই এমন কোর্সে কোনো তালিকা থাকে তবে</p><p>আপনি যদি স্বয়ংক্রিয়ভাবে কোর্স তৈরি করা ব্যবহার করেন তবে উপরোক্ত চারটি নির্দিষ্ট কোর্সে (আইডি নাম্বার, ডাকনাম, পুরোনাম এবং সারাংশ)কোনো পরিবর্তন প্রতিরোধ করার জন্য সম্পর্কিত ক্ষেত্রে নিম্নোক্ত সমর্থনগুলো অপসারণ করার জন্য সুপারিশ করা হচ্ছে: মুডল/কোর্স:আইডিনাম্বার পরিবর্তন, মুডল/কোর্স:ডাকনাম পরিবর্তন, মুডল/কোর্স:সারাংশপরিবর্তন এবং মুডল/কোর্স:সারাংশপরিবর্তন।</p>';
$string['autocreate_key'] = 'স্বয়ংক্রিয়ভাবে তৈরি';
$string['autocreation_settings'] = 'স্বয়ংক্রিয় কোর্স তৈরির সেটিং';
$string['bind_dn'] = 'আপনি যদি ব্যবহারকারী অনুসন্ধান করতে বাইন্ড ব্যবহারকারী ব্যবহার করতে চান, এখানে তা নির্ধদরণ করুন। \'cn=ldapuser,ou=public,o=org\' এর মত কিছু';
$string['bind_dn_key'] = 'ব্যবহারকারীর সনাক্তকারীর নাম বাইন্ড';
$string['bind_pw'] = 'বাইন্ড ব্যবহারকারীর পাসওয়ার্ড';
$string['bind_pw_key'] = 'পাসওয়ার্ড';
$string['bind_settings'] = 'বাইন্ড সেটিং';
$string['cannotcreatecourse'] = 'কোর্স তৈরি করা যায়নি: LDAP রেকর্ড থেকে আবশ্যকীয় ডাটা অনুপস্থিত!';
$string['category'] = 'স্বয়ংক্রিয়ভাবে-তৈরি কোর্সের বিভাগ';
$string['category_key'] = 'বিভাগ';
$string['contexts'] = 'LDAP কনটেক্সট';
$string['couldnotfinduser'] = '\'{$a}\' ব্যবহারকারী খুঁজে পাওয়া যাচ্ছে না, বাদ দেয়া হচ্ছে';
$string['course_fullname'] = 'ঐচ্ছিক: সম্পূর্ণ নাম পাওয়ার জন্য LDAP এট্রিবিউট নিন';
$string['course_fullname_key'] = 'সম্পূর্ণ নাম';
$string['course_idnumber'] = 'কোর্স আইডি পাওয়ার জন্য LDAP এট্রিবিউট নিন। সাধারণত \'cn\' বা \'uid\'।';
$string['course_idnumber_key'] = 'আইডি নাম্বার';
$string['course_search_sub'] = 'সাবকনটেক্সট থেকে সদস্য গ্রুপ অনুসন্ধান';
$string['course_search_sub_key'] = 'সাবকনটেক্সট অনুসন্ধান';
$string['course_settings'] = 'কোর্স তালিকাভুক্ত করার সেটিং';
$string['course_shortname'] = 'ঐচ্ছিক: ডাক নাম নেয়ার জন্য LDAP এট্রিবিউট';
$string['course_shortname_key'] = 'ডাক নাম';
$string['course_summary'] = 'ঐচ্ছিক: সারাংশ নেয়ার জন্য LDAP এট্রিবিউট';
$string['course_summary_key'] = 'সারাংশ';
$string['coursenotexistskip'] = 'কোর্স \'{$a}\' বিদ্যমান নেই এবং স্বয়ংক্রিয়তৈরি নিস্ক্রিয়, বাদ দেয়া হচ্ছে';
$string['createcourseextid'] = 'বিদ্যমান নেই এমন কোর্সে \'{$a->courseextid}\' ব্যবহারকারীর তালিকা তৈরি';
$string['createnotcourseextid'] = 'বিদ্যমান নেই এমন কোর্সে \'{$a->courseextid}\' ব্যবহারকারীর তালিকা';
$string['creatingcourse'] = '\'{$a}\' কোর্স তৈরি করা হচ্ছে...';
$string['editlock'] = 'লক মান';
$string['emptyenrolment'] = '\'{$a->course_shortname}\' কোর্সে \'{$a->role_shortname}\' ভূমিকার জন্য তালিকা ফাঁকা করা হবে';
$string['enrolname'] = 'LDAP';
$string['enroluser'] = '\'{$a->course_shortname}\' কোর্সে \'{$a->user_username}\' ব্যবহারকারীর তালিকা তৈরি (id {$a->course_id})';
$string['enroluserenable'] = '\'{$a->course_shortname}\' কোর্সে \'{$a->user_username}\' ব্যবহারকারীর তালিকা সক্রিয় (id {$a->course_id})';
$string['explodegroupusertypenotsupported'] = 'ldap_explode_group() নির্বাচিত ধরণের ব্যবহারকারী সমর্থন করেনা: {$a}';
$string['extcourseidinvalid'] = 'কোর্সের বাহ্যিক আইডি অকার্যকর!';
$string['extremovedsuspend'] = '\'{$a->course_shortname}\' কোর্সে \'{$a->user_username}\' ব্যবহারকারীর তালিকা নিস্ক্রিয় (id {$a->course_id})';
$string['extremovedsuspendnoroles'] = '\'{$a->course_shortname}\' কোর্সের \'{$a->user_username}\' ব্যবহারকারীর জন্য ভূমিকা তালিকা করা বা অপসারণ করা নিস্ক্রিয় (id {$a->course_id})';
$string['extremovedunenrol'] = '\'{$a->course_shortname}\' কোর্স থেকে \'{$a->user_username}\' ব্যবহারকারী তালিকামুক্ত করা (id {$a->course_id})';
$string['failed'] = 'ব্যর্থ!';
$string['general_options'] = 'সাধারণ অপশন';
$string['group_memberofattribute'] = 'এট্রিবিউট এর নাম থেকে নির্ধারন করা যায় যে কোনো গ্রুপ কোন ব্যবহারকারী বা গ্রুপে আছে (যেমন, memberOf, groupMembership, ইত্যাদি।)';
$string['group_memberofattribute_key'] = 'এট্রিবিউটের \'সদস্য';
$string['host_url'] = 'URL-হিসাবে LDAP হোস্ট নির্দিষ্ট করতে যেমন://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/';
$string['host_url_key'] = 'হোস্ট URL';
$string['idnumber_attribute'] = 'গ্রুপ সদস্যদের যদি নির্দিষ্ট নাম থাকে তবে, LDAP প্রমাণীকরণ সেটিং এ যে ব্যবহারকারী \'আইডি নাম্বার\' ম্যাপিং ব্যবহার করেছেন তা নির্দিষ্ট করুন';
$string['idnumber_attribute_key'] = 'আইডি নাম্বার এট্রিবিউট';
$string['ldap:manage'] = 'LDAP তালিকার নমুনা ব্যবস্থাপনা';
$string['ldap_encoding'] = 'LDAP সার্ভারে ব্যবহৃত এনকোডিং নির্দিষ্ট। খুব সম্ভবত utf-8, MS AD v2 পূর্বনির্ধারিত প্ল্যাটফর্ম এনকোডিং যেমন cp1252, cp1250, ইত্যাদি ব্যবহার করা হয়।';
$string['ldap_encoding_key'] = 'LDAP এনকোডিং';
$string['memberattribute'] = 'LDAP সদস্য এট্রিবিউট';
$string['memberattribute_isdn'] = 'গ্রুপ সদস্যদের যদি নির্দিষ্ট নাম থাকে তবে, এখানে নির্দিষ্ট করে দিন। যদি এমন হয়, এ বিভাগের অবশিষ্ট সেটিং কনফিগার করা প্রয়োজন';
$string['memberattribute_isdn_key'] = 'সদস্য এট্রিবিউট dn ব্যবহার করে';
$string['nested_groups'] = 'আপনি কি তালিকাভূক্ত করার জন্য নেস্টেড গ্রুপ (গ্রুপের গ্রুপ) ব্যবহার করতে চান?';
$string['nested_groups_key'] = 'নেস্টেড গ্রুপ';
$string['nested_groups_settings'] = 'নেস্টেড গ্রুপ সেটিং';
$string['nosuchrole'] = 'এমন কোনো ভূমিকা নয়: \'{$a}';
$string['objectclass'] = 'কোর্স অনুসন্ধান করার জন্য অবজেক্টক্লাস ব্যবহার। সাধারণত \'গ্রুপ\' বা \'পসিক্সগ্রুপ';
$string['objectclass_key'] = 'অবজেক্ট ক্লাস';
$string['ok'] = 'ঠিক আছে!';
$string['opt_deref'] = 'যদি গ্রুপ সদস্যের পৃথক নাম থাকে তবে, অনুসন্ধান করার সময় ডাকনাম কিভাবে ব্যবস্থাপনা করা হবে তা নির্ধারন। নিম্নোক্ত একটি মান নির্বাচন: \'না\' (LDAP_DEREF_NEVER) বা \'হ্যাঁ\' (LDAP_DEREF_ALWAYS)';
$string['opt_deref_key'] = 'ভিন্ন ডাকনাম';
$string['phpldap_noextension'] = '<em>PHP LDAP মডিউল আছে বলে মনে হচ্ছে না। অনুগ্রহ করে এটা ইনস্টল করা নিশ্চিত করুন এবং আপনি যদি তালিকা করা প্লাগইন ব্যবহার করতে চান তবে তা সক্রিয় করুন।</em>';
$string['pluginname'] = 'LDAP তালিকাকরণ';
$string['pluginname_desc'] = '<p>আপনার তালিকা নিয়ন্ত্রন করার জন্য একটি LDAP সার্ভার ব্যবহার করতে পারেন। আপনার LDAP ট্রীতে এমন গ্রুপ রয়েছে যা কোর্সে ম্যাপ করে এবং ছাত্রদের কাছে ম্যাপ করার জন্য প্রত্যেক গ্রুপ/কোর্সের সদস্য এন্ট্রি থাকার কথা।</p><p>এটা মনে করা হয় যে, কোর্স LDAP এ গ্রুপ হিসাবে রয়েছে, প্রত্যেক গ্রুপে বিবিধ গ্রুপের সদস্য হওয়ার ক্ষেত্র আছে (<em>member</em> বা <em>memberUid</em>) যেখানে ব্যবহারকারীর একটি অনন্য পরিচিতি থাকে।</p><p>LDAP তালিকা তৈরি করতে, আপনার ব্যবহাকারীর <strong>অবশ্যই</strong> একটি কার্যকরী আইডিনাম্বারের ক্ষেত্র থাকে। LDAP গ্রুপের কোর্সে তালিকাভূক্ত করার জন্য সদস্যের ক্ষেত্রে ঐ আইডি নাম্বার থাকতে হবে। এটা তখনই ঠিকভাবে কাজ করবে যখন আপনি পূর্বেই একবার LDAP প্রমাণীকরণ ইতোমধ্যে ব্যবহার করে থাকবেন।</p><p>ব্যবহারকারী লগইন করার সময় তালিকাকরণ হালনাগাদ করা হবে। তলিকাকরণ সিঙ্কে রাখার জন্য আপনি স্ক্রিপ্ট চালাতে পারেন। <em>enrol/ldap/cli/sync.php</em> দেখুন।</p><p>LDAP এ নতুন গ্রুপ আসলে এ প্লাগইন স্বয়ংক্রিয়ভাবে নতুন কোর্স তৈরি করার জন্য নির্ধারণ করতে পারবে।</p>';
$string['pluginnotenabled'] = 'প্লাগইন সক্রিয় করা নেই!';
$string['role_mapping'] = '<p>প্রত্যেকটি রোল যা আপনি LDAP থেকে এসাইন করতে চান, তা যখন রোল কোর্সের গ্রুপের স্থান নির্ধারন করা হয় তখন কনটেক্সট এর তালিকা নির্ধারণ করা প্রয়োজন। বিভিন্ন কনটেক্সট \';\' দিয়ে পৃথক করা থাকে।</p><p>LDAP সার্ভার গ্রুপের সদস্যদের ধরে রাখতে আপনাকে এট্রিবিউট নির্দিষ্ট করতে হবে। সাধারণত \'member\' বা \'memberUid\'</p>';
$string['role_mapping_key'] = 'LDAP থেকে রোল ম্যাপ';
$string['roles'] = 'রোল ম্যাপিং';
$string['server_settings'] = 'LDAP সার্ভার সেটিং';
$string['synccourserole'] = '== রোল \'{$a->role_shortname}\' এর জন্য \'{$a->idnumber}\' কোর্স সিঙ্ক করা হচ্ছে';
$string['template'] = 'ঐচ্ছিক: স্বয়ংক্রিয়ভাবে-তৈরি কোর্স টেম্পলেট কোর্স থেকে সেটিং অনুলিপি করতে পারে';
$string['template_key'] = 'টেম্পলেট';
$string['unassignrole'] = '\'{$a->course_shortname}\' (id {$a->course_id}) কোর্স আইডি থেকে \'{$a->user_username}\' এ \'{$a->role_shortname}\' রোল এসাইন না করা';
$string['unassignrolefailed'] = '\'{$a->course_shortname}\' (id {$a->course_id}) কোর্স আইডি থেকে \'{$a->user_username}\' এ \'{$a->role_shortname}\' রোল এসাইন না করতে ব্যর্থ';
$string['unassignroleid'] = 'ব্যবহারকারী আইডি \'{$a->user_id}\' এ রোল আইডি \'{$a->role_id}\' এসাইন না করা';
$string['updatelocal'] = 'স্থানীয় ডাটা হালনাগাদ করা';
$string['user_attribute'] = 'যদি গ্রুপের সদস্যদের জন্য পৃথক নাম থাকে তবে ব্যবহারকারীর নামের এট্রিবিউট/ব্যবহারকারী অনুসন্ধান নির্দিষ্ট করতে হয়। আপনি যদি LDAP প্রমাণীকরণ ব্যবহার করেন তবে, LDAP প্রমাণীকরণ প্লাগইন এ \'আইডি নাম্বার\' ম্যাপিং এর নির্দিষ্ট করা এট্রিবিউটের সাথে এ মান মিলবে';
$string['user_attribute_key'] = 'আইডি নাম্বার এট্রিবিউট';
$string['user_contexts'] = 'যদি গ্রুপের সদস্যদের জন্য পৃথক নাম থাকে তবে ব্যবহারকারীর অবস্থিত কনটেক্সট এর তালিকা নির্দিষ্ট করা হয়। কনটেক্সট আলাাদা করতে \';\' ব্যবহার। উদাহরণস্বরূপ: \'ou=users,o=org; ou=others,o=org';
$string['user_contexts_key'] = 'কনটেক্সট';
$string['user_search_sub'] = 'যদি গ্রুপের সদস্যদের জন্য পৃথক নাম থাকে তবে সাবকনটেক্সটেও ব্যবহারকারী অনুসন্ধান করা নির্দিষ্ট করা হয়';
$string['user_search_sub_key'] = 'সাবকনটেক্সট অনুসন্ধান';
$string['user_settings'] = 'ব্যবহারকারীর লুকআপ সেটিং';
$string['user_type'] = 'যদি গ্রুপের সদস্যদের জন্য পৃথক নাম থাকে তবে, LDAP এ কিভাবে ব্যবহারকারী সংরক্ষিত থাকবে তা নির্ধারণ';
$string['user_type_key'] = 'ব্যবহারকারীর ধরণ';
$string['version'] = 'আপনি যে সার্ভার ব্যবহার করছেন তার LDAP প্রটোকলের সংস্করণ';
$string['version_key'] = 'সংস্করণ';
