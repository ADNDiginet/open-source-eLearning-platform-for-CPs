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
 * Strings for component 'auth_cas', language 'bn', version '3.11'.
 *
 * @package     auth_cas
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['CASform'] = 'প্রমাণীকরণ পছন্দ';
$string['accesCAS'] = 'CAS ব্যবহারকারী';
$string['accesNOCAS'] = 'অন্যান্য ব্যবহারকারী';
$string['auth_cas_auth_user_create'] = 'বাহ্যিকভাবে ব্যবহারকারী তৈরি';
$string['auth_cas_baseuri'] = 'সার্ভারের  URI (baseUri যদি না থাকে তবে কিছুনা)<br />উদাহরণস্বরূপ, যদি  CAS সার্ভার host.domaine.fr/CAS/তারপর <br />cas_baseuri = CAS/ এ জবাব দেয়';
$string['auth_cas_baseuri_key'] = 'বেস URI';
$string['auth_cas_broken_password'] = 'পাসওয়ার্ড পরিবর্তন না করে অগ্রসর হতে পারবেন না, যদিও এটা পরিবর্তন করার মত কোনো পৃষ্ঠা নেই। অনুগ্রহ করে আপনার মুডল প্রশাসকের সাথে যোগাযোগ করুন।';
$string['auth_cas_cantconnect'] = 'CAS-মডিউলের LDAP অংশ সার্ভারের সাথে সংযুক্ত করা যাচ্ছে না: {$a}';
$string['auth_cas_casversion'] = 'সংস্করণ';
$string['auth_cas_certificate_check_key'] = 'সার্ভার বৈধতা';
$string['auth_cas_certificate_path_key'] = 'সার্টিফিকেট পাথ';
$string['auth_cas_changepasswordurl'] = 'পাসওয়ার্ড-পরিবর্তন URL';
$string['auth_cas_create_user'] = 'মুডল ডাটাবেসে CAS-প্রমানিকৃত ব্যবহারকারী সংযোজন করতে চাইলে এটা চালান। যদি না হয় মুডল ডাটাবেসে ইতোমধ্যে বিদ্যমান ব্যবহারকারীরাই কেবল লগইন করতে পারবে।';
$string['auth_cas_create_user_key'] = 'ব্যবহারকারী তৈরি';
$string['auth_cas_enabled'] = ' CAS প্রমাণীকরণ ব্যবহার করতে চাইলে এটা চালান';
$string['auth_cas_hostname'] = 'CAS সার্ভারের হোস্টনাম <br />eg: host.domain.fr';
$string['auth_cas_hostname_key'] = 'হোস্টনাম';
$string['auth_cas_invalidcaslogin'] = 'দুঃখিত, আপনার লগইন ব্যর্থ - আপনি অনুমোদিত নন';
$string['auth_cas_language'] = 'নির্বাচিত ভাষা';
$string['auth_cas_language_key'] = 'ভাষা';
$string['auth_cas_logincas'] = 'নিরাপদ সংযোগে প্রবেশাধিকার';
$string['auth_cas_logoutcas'] = 'মুডল থেকে সংযোগ বিছিন্ন করার সময় CAS লগআউট করতে চাইলে \'হ্যাঁ\' দিন';
$string['auth_cas_logoutcas_key'] = 'CAS লগআউট';
$string['auth_cas_multiauth'] = 'বিবিধ-প্রমাণীকরণ নিতে চাইলে \'হ্যাঁ\' দিন (CAS + অন্যান্য প্রমাণীকরণ)';
$string['auth_cas_multiauth_key'] = 'বিবিধ-প্রমাণীকরণ';
$string['auth_cas_port'] = 'CAS সার্ভার এর পোর্ট';
$string['auth_cas_port_key'] = 'পোর্ট';
$string['auth_cas_proxycas'] = 'CASin প্রক্সি-মোড ব্যবহার করতে চাইলে \'হ্যাঁ\' দিন';
$string['auth_cas_proxycas_key'] = 'প্রক্সি মোড';
$string['auth_cas_server_settings'] = 'CAS সার্ভার কনফিগারেশন';
$string['auth_cas_text'] = 'নিরাপদ সংযোগ';
$string['auth_cas_use_cas'] = 'CAS ব্যবহার';
$string['auth_cas_version'] = 'CAS এর সংস্করণ';
$string['auth_casdescription'] = 'সিঙ্গেল সাইন অন এনভায়রনমেন্টে (SSO) ব্যবহারকারী প্রমানীকরণের জন্য এ পদ্ধতি CAS সার্ভার (সেন্ট্রাল অথেনটিকেশন সার্ভিস) ব্যবহার করে। আপনি সাধারণ LDAP প্রমাণীকরণও ব্যবহার করতে পারেন। যদি CAS অনুযায়ী দেয়া ব্যবহারকারীর নাম ও পাসওয়ার্ড কার্যকর হয় তবে, মুডল প্রয়োজন হলে LDAP থেকে প্রতীক নিয়ে ডাটাবেসে নতুুন ব্যবহারকারীর এন্ট্রি তৈরি করতে পারে। নিম্নোক্ত লগইনে কেবলমাত্র ব্যবহারকারীর নাম ও পাসওয়ার্ড পরীক্ষা করা হয়।';
$string['auth_casnotinstalled'] = 'CAS প্রমাণীকরণ ব্যবহার করা যায়না। PHP LDAP মডিউল ইন্সটল করা নেই।';
$string['pluginname'] = 'CAS সার্ভার (SSO)';
