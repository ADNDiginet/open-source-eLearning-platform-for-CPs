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
 * Strings for component 'auth_ldap', language 'bn', version '3.11'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'সক্রিয় ডিরেক্টরিতে কোনো নতুন অ্যাকাউন্ট তৈরি করা যায়নি। এ ব্যাপারটি কাজ করানোর জন্য সব অত্যাবশ্যকীয়তা যাতে পূরণ করা হয় তা নিশ্চিত হতে হবে (LDAPS সংযোগ, যথাযথ অধিকারসহ ব্যবহারকারীকে সংযুক্ত করে রাখে, ইত্যাদি।)';
$string['auth_ldap_attrcreators'] = 'এট্রিবিউট তৈরি করতে অনুমোদিত গ্রুপ বা কনটেক্সট এর তালিকা। বিবিধ গ্রুপ \';\' দিয়ে আলাদা করা। সাধারণত \'cn=teachers,ou=staff,o=myorg\' এর মত কিছু।';
$string['auth_ldap_attrcreators_key'] = 'এট্রিবিউট তৈরিকারক';
$string['auth_ldap_auth_user_create_key'] = 'বাহ্যিকভাবে ব্যবহারকারী তৈরি';
$string['auth_ldap_bind_dn'] = 'ব্যবহারকারী অনুসন্ধান করতে ব্যবহারকারী-বাইন্ড ব্যবহার করতে চাইলে, এখানে এটা নির্দিষ্ট করা হয়। \'cn=ldapuser,ou=public,o=org\' এর মত কিছু';
$string['auth_ldap_bind_dn_key'] = 'সনাক্ত করা নাম';
$string['auth_ldap_bind_pw'] = 'ব্যবহারকারী-বাইন্ডের জন্য পাসওয়ার্ড';
$string['auth_ldap_bind_pw_key'] = 'পাসওয়ার্ড';
$string['auth_ldap_bind_settings'] = 'বাইন্ড সেটিং';
$string['auth_ldap_changepasswordurl_key'] = 'পাসওয়ার্ড-পরিবর্তন URL';
$string['auth_ldap_contexts'] = 'ব্যবহারকারী বিদ্যমান এমন কনটেক্সটের তালিকা। বিভিন্ন সনটেক্সট \';\' দিয়ে পৃথক করা। উদাহরণস্বরূপ: \'ou=users,o=org; ou=others,o=org';
$string['auth_ldap_contexts_key'] = 'কনটেক্সট';
$string['auth_ldap_create_context'] = 'ইমেইল নিশ্চিতকরণের মাধ্যমে আপনি যদি ব্যবহারকারী তৈরি সক্রিয় করেন তবে, যেখানে ব্যবহারকারী তৈরি হয় সে কনটেক্সট সুনির্দিষ্ট করতে হয়। নিরাপত্তাজনিত কারণে অন্যান্য ব্যবহারকারী থেকে এ কনটেক্সট আলাদা হতে হবে। ldap_context-variable  এটা যোগ করার দরকার নাই, মুডল স্বয়ংক্রিয়ভাবে এ কনটেক্সট থেকে ব্যবহারকারী অনুসন্ধান করে নিবে।<br /><b>মনে রাখুন!</b> ব্যবহারকারীর কাজ তৈরি করতে auth/ldap/auth.php এ user_create() পদ্ধতি পরিবর্তন করতে হবে';
$string['auth_ldap_create_context_key'] = 'নতুন ব্যবহারকারীর জন্য কনটেক্সট';
$string['auth_ldap_create_error'] = 'LDAP এ ব্যবহারকারী তৈরি করার সময় ত্রুটি।';
$string['auth_ldap_expiration_desc'] = 'নিষ্ক্রিয় মেয়াদর্ত্তীন্ন পাসওয়ার্ড পরীক্ষা করার সংখ্যা নির্বাচন বা সরাসরি LDAP থেকে passwordexpiratio সময় পড়ার জন্য LDAP';
$string['auth_ldap_expiration_key'] = 'মেয়াদ উর্ত্তীন্ন';
$string['auth_ldap_expiration_warning_desc'] = 'পাসওয়ার্ড মেয়াদ উর্ত্তীন্ন হওয়ার সতর্কবানী দেয়ার আগে দিনের সংখ্যা।';
$string['auth_ldap_expiration_warning_key'] = 'মেয়াদ উর্ত্তীন্ন হওয়ার সতর্কবানী';
$string['auth_ldap_expireattr_desc'] = 'ঐচ্ছিক:ldap-এট্রিবিউট উপেক্ষা করা হয় যা পাসওয়ার্ড মেয়াদ উর্ত্তীন্ন হওয়ার সময় সংরক্ষণ';
$string['auth_ldap_expireattr_key'] = 'মেয়াদ উর্ত্তীন্ন হওয়ার এট্রিবিউট';
$string['auth_ldap_graceattr_desc'] = 'ঐচ্ছিক: gracelogin এট্রিবিউট উপেক্ষা';
$string['auth_ldap_gracelogin_key'] = 'গ্রেস লগইন এট্রিবিউট';
$string['auth_ldap_gracelogins_desc'] = 'LDAP gracelogin সাপোর্ট  সক্রিয়। পাসওয়ার্ডের মেয়াদ শেষ হওয়ার পর gracelogin 0 গণনা হওয়া পর্যন্ত ব্যবহারকারী লগইন করতে পারে। এ সেটিং সক্রিয় করা থাকলে পাসওয়ার্ড এর মেয়াদ শেষ হওয়ার পর গ্রেস লগইন বার্তা প্রদর্শন করে।';
$string['auth_ldap_gracelogins_key'] = 'গ্রেস লগইন';
$string['auth_ldap_groupecreators'] = 'নতুন কোর্স তৈরি করতে অনুমোদিত গ্রুপ বা কনটেক্সট এর তালিকা। বিবিধ গ্রুপ \';\' দিয়ে আলাদা করা। সাধারণত \'cn=teachers,ou=staff,o=myorg\' এর মত কিছু।';
$string['auth_ldap_groupecreators_key'] = 'গ্রুপ তৈরিকাারক';
$string['auth_ldap_host_url'] = 'URL হিসাবে  LDAP হোস্ট নির্ধারন যেমন,\'ldap://ldap.myorg.com/\' বা \'ldaps://ldap.myorg.com/\' ফেইলওভার সমর্থন নেয়ার জন্য multipleservers \';\' দিয়ে আলাদা করা।';
$string['auth_ldap_host_url_key'] = 'হোস্ট URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP সার্ভার ব্যবহার করে এনকোডিং নির্দিষ্ট করা। খুব সম্ভবত, utf-8, MS AD v2 পূর্বনির্ধারিত প্লাটফর্ম এনকোডিং যেমন, cp1252, cp1250, ইত্যাদি ব্যবহার করে।';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP এনকোডিং';
$string['auth_ldap_login_settings'] = 'লগইন সেটিং';
$string['auth_ldap_memberattribute'] = 'ঐচ্ছিক: যখন ব্যবহারকারী কোনো গ্রুপের সদস্য থাকে তখন ব্যবহারকারীর সদস্য এট্রিবিউট উপেক্ষা করে। সাধারণত \'সদস্য';
$string['auth_ldap_memberattribute_isdn'] = 'ঐচ্ছিক: ব্যবহারকারীর সদস্য এট্রিবিউট মান ব্যবস্থাপনা উপেক্ষা করে, 0 বা 1';
$string['auth_ldap_memberattribute_isdn_key'] = 'সদস্য এট্রিবিউট dn ব্যবহার করে';
$string['auth_ldap_memberattribute_key'] = 'সদস্য এট্রিবিউট';
$string['auth_ldap_no_mbstring'] = 'সক্রিয় ডিরেক্টরি তৈরি করতে mbstring এক্সটেনশন তৈরি করা দরকার।';
$string['auth_ldap_noconnect'] = 'LDAP-মডিউল সার্ভারের সাথে সংযুক্ত করতে পারেনা: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-মডিউল সার্ভারের সাথে সংযুক্ত করতে পারেনা: {$a}';
$string['auth_ldap_noextension'] = '<em>PHP LDAP মডিউল বিদ্যমান আছে বলে মনে হচ্ছেনা। আপনি প্রমাণীকরণ প্লাগইন ব্যবাহর করে চাইলে অনুগ্রহ করে এটা ইনস্টল এবং সক্রিয় করার ব্যাপারে নিশ্চিত হন।</em>';
$string['auth_ldap_objectclass'] = 'ঐচ্ছিক: ldap_user_type এ ব্যবহারকারীর নাম দিতে/অনুসন্ধান করতে objectClass ব্যবহার উপেক্ষা। সাধারণত এটা পরিবর্তন করার প্রয়োজন পড়েনা।';
$string['auth_ldap_objectclass_key'] = 'অবজেক্ট ক্লাস';
$string['auth_ldap_opt_deref'] = 'অনুসন্ধান করার সময় কিভাবে ডাকনাম ব্যবস্থাপনা করা হয় তা নির্ধারণ। নিম্নোক্ত যেকোনো একটি মান নির্বাচন: "না" (LDAP_DEREF_NEVER) অথবা "হ্যাঁ" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'ডাকনাম ডিরেফারেন্স';
$string['auth_ldap_passtype'] = 'LDAP সার্ভারে নতুন বা পরিবর্তিত পাসওয়ার্ড এর বিন্যাস নির্দিষ্ট করা।';
$string['auth_ldap_passtype_key'] = 'পাসওয়ার্ড বিন্যাস';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP পাসওয়ার্ড এর মেয়াদ শেষ হওয়ার সেটিং।';
$string['auth_ldap_preventpassindb'] = 'মুডলের DB তে পাসওয়ার্ড সংরক্ষন হওয়া থেকে বিরত রাখতে হ্যাঁ নির্বাচন।';
$string['auth_ldap_preventpassindb_key'] = 'পাসওয়ার্ড আড়াল';
$string['auth_ldap_search_sub'] = 'সাবকনটেক্সট থেকে ব্যবহারকারী অনুসন্ধান।';
$string['auth_ldap_search_sub_key'] = 'সাবকনটেক্সট অনুসন্ধান';
$string['auth_ldap_server_settings'] = 'LDAP সার্ভার সেটিং';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() নির্বাচিত ব্যবহারকারীর ধরণ সাপোর্ট  করে না: {$a}';
$string['auth_ldap_update_userinfo'] = 'LDAP থেকে মুডলে ব্যবহারকারীর তথ্য হালনাগাদ (firstname, lastname, address..)। আপনার প্রয়োজনানুসারে "ডাটা ম্যাপিং" নির্দিষ্ট।';
$string['auth_ldap_user_attribute'] = 'ঐচ্ছিক: ব্যবহারকারীর নাম/ অনুসন্ধান করতে এট্রিবিউট ব্যবহার উপেক্ষা। সাধারনত \'cn\'।';
$string['auth_ldap_user_attribute_key'] = 'ব্যবহারকারীর এট্রিবিউট';
$string['auth_ldap_user_exists'] = 'LDAP ব্যবাহকারীর নাম ইতোমধ্যে বিদ্যমান।';
$string['auth_ldap_user_settings'] = 'ব্যবহারকারী লুকআপ সেটিং';
$string['auth_ldap_user_type'] = 'LDAP কিভাবে ব্যবহার কারী সংরক্ষিত থাকে তা নির্বাচন। লগইন এর কিভােপ মেয়াদ শেষ হয়, গ্রেস লগইন এবল ব্যবহারকারী তৈরি কিভাবে কাজ করে তা এ সেটিং দিয়ে নির্দিষ্ট করা হয়।';
$string['auth_ldap_user_type_key'] = 'ব্যবহারকারীর ধরণ';
$string['auth_ldap_usertypeundefined'] = 'config.user_type নির্ধারিত নয় অথবা ldap_expirationtime2unix ফাংশন নির্বাচিত ধরণ সমর্থন করে না!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type নির্ধারিত নয় অথবা ldap_unixi2expirationtime ফাংশন নির্বাচিত ধরণ সমর্থন করে না!';
$string['auth_ldap_version'] = 'আপনার সার্ভারে ব্যবহৃত LDAP প্রটোকলের সংস্করণ।';
$string['auth_ldap_version_key'] = 'সংস্করণ';
$string['auth_ldapdescription'] = 'বাহ্যিক LDAP সার্ভার এর সাথে এ পদ্ধতি প্রমাণীকরণ দেয়।
                                  যদি দিয়ে দেয়া ব্যবহারকারীর নাম ও পাসওয়ার্ড কার্যকর হয় তবে, মুডল নতুন ব্যবহারকারীর এন্ট্রি
                                  ডাটাবেসে তৈরি করে। এ মডিউল LDAP এবং প্রিফিল
                                  থেকে ব্যবহারকারীর অ্যাট্রিবিউট পড়তে পারে। নিম্নোক্ত লগইনের জন্য ব্যবহারকারী নাম এবং
                                  পাসওয়ার্ড পরীক্ষা করা হয়।';
$string['auth_ldapextrafields'] = 'এ ক্ষেত্রগুলো ঐচ্ছিক। আপনি এখানে নির্দিষ্ট করা <b>LDAP ক্ষেত্র</b> থেকে তথ্য দিয়ে মুডল ব্যবহারকারীর ক্ষেত্র প্রিফিল করা নির্বাচন করতে পারেন। <p>আপনি যদি এ ক্ষেত্র ফাঁকা রাখেন তবে, LDAP থেকে কিছুই স্থানান্তর হবে না এবং তার পরিবর্তে পূর্বনির্ধারিত মুডল ব্যবহৃত হবে।</p><p>যেকোনো ক্ষেত্রে, লগইন করার পর ব্যবহারকারী সব ক্ষেত্রই সম্পাদনা করতে পারবে।</p>';
$string['auth_ldapnotinstalled'] = 'LDAP প্রমাণীকরণ তৈরি করতে পারেনা। PHP LDAP মডিউল ইন্সটল করা নেই।';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'NTLM ডোমেইনে Single Sign On ব্যবহার করার জন্য হ্যাঁ নির্ধারণ। <strong>মনে রাখুন:</strong> এটাতে ওয়েবসার্ভার কাজ করাতে অতিরিক্ত সেটআপ প্রয়োজন, <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a> দেখুন';
$string['auth_ntlmsso_enabled_key'] = 'সক্রিয়';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO ফাস্ট পাথ সক্রিয় করতে হ্যাঁ নির্ধারণ (নির্দিষ্ট কিছু ধাপ অতিক্রম এবং যদি ক্লায়েন্টের ব্রাউজার MS ইন্টারনেট এক্সপ্লোরার হয় শুধু তখন কাজ করবে)।';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE ফাস্ট পাথ?';
$string['auth_ntlmsso_remoteuserformat_key'] = 'দূরবর্তী ব্যবহারকারীর নামের ধরন';
$string['auth_ntlmsso_subnet'] = 'যদি নির্ধারণ করা থাকে তবে, সাবনেটে ক্লায়েন্টসহ SSO এ অংশগ্রহন করবে।বিন্যাস: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'সাবনেট';
$string['auth_ntlmsso_type'] = 'ব্যবহারকারীকে প্রমাণীকরণের জন্য ওয়েব সার্ভারে প্রমাণীকরণ প্রক্রিয়া কনফিগার করা হয়েছে (যদি সন্দেহ থাকে তবে, NTLM নির্বাচন)';
$string['auth_ntlmsso_type_key'] = 'প্রমাণীকরণের ধরণ';
$string['connectingldap'] = 'LDAP সার্ভারে সংযুক্ত করা হচ্ছে...';
$string['creatingtemptable'] = 'অস্থায়ী টেবিল {$a} তৈরি';
$string['didntfindexpiretime'] = 'password_expire() মেয়াদ শেষ হওয়ার সময় খুঁজে পায়নি।';
$string['didntgetusersfromldap'] = 'LDAP থেকে কোনো উত্তর পায়নি -- ত্রুটি ?  -- বিদ্যমান';
$string['gotcountrecordsfromldap'] = 'LDAP থেকে {$a} রেকর্ড পাওয়া গেছে';
$string['morethanoneuser'] = 'অদ্ভূত! ldap এ একাধিক ব্যবহারকারীর রেকর্ড আছে। শুধুমাত্র প্রথমটা ব্যবাহর করা হচ্ছে।';
$string['needbcmath'] = 'সক্রিয় ডিরেক্টরিতে গ্রেস লগইন ব্যবহার করার জন্য BCMath এক্সটেনশন প্রয়োজন';
$string['needmbstring'] = 'সক্রিয় ডিরেক্টরি পাসওয়ার্ড পরিবর্তন করার জন্য mbstring এক্সটেনশন প্রয়োজন';
$string['nodnforusername'] = 'ser_update_password() এ ত্রুটি। DN এর নম্বর: {$a->username}';
$string['noemail'] = 'ইমেইল পাঠানোর চেষ্টা ব্যর্থ!';
$string['notcalledfromserver'] = 'ওয়েব সার্ভার থেকে কল করা উচিত নয়!';
$string['noupdatestobedone'] = 'কিছু হালনাগাদ করা হবে না';
$string['nouserentriestoremove'] = 'ব্যবহারকারীর কোনো এন্ট্রি অপসারণ করা হবেনা';
$string['nouserentriestorevive'] = 'ব্যবহারকারীর কোনো এন্ট্রি পুনরায় সংরক্ষন করা হবেনা';
$string['nouserstobeadded'] = 'কোনো ব্যবহারকারী যোগ করা হবে না';
$string['ntlmsso_attempting'] = 'NTLM হয়ে Single Sign On এ অংশগ্রহন করা হচ্ছে...';
$string['ntlmsso_failed'] = 'স্বয়ংক্রিয় লগইন ব্যর্থ, সাধারণ লগইন পৃষ্ঠা ব্যবহার...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO নিস্ক্রিয়।';
$string['ntlmsso_unknowntype'] = 'অজানা ধরণের ntlmsso!';
$string['pagesize_key'] = 'পৃষ্ঠার আঁকার';
$string['pluginname'] = 'LDAP সার্ভার';
$string['pluginnotenabled'] = 'প্লাগইন সক্রিয় নয়!';
$string['renamingnotallowed'] = 'LDAP এ ব্যবহারকারীর নাম পরিবর্তন অনুমোদিত নয়';
$string['rootdseerror'] = 'সক্রিয় ডিরেক্টরির জন্য rootDSE অনুসন্ধানে ত্রুটি';
$string['start_tls_key'] = 'TLS ব্যবহার';
$string['updatepasserror'] = 'user_update_password() এ ত্রুটি। ত্রুটি কোড: {$a->errno};ত্রুটি  স্ট্রিং: {$a->errstring}';
$string['updatepasserrorexpire'] = 'পাসওয়ার্ডের মেয়াদ শেষ হওয়ার সময় user_update_password() এ ত্রুটি। ত্রুটি  কোড: {$a->errno};ত্রুটি  স্ট্রিং: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'user_update_password() when modifying expirationtime বা gracelogins এ ত্রুটি। ত্রুটি কোড: {$a->errno}; ত্রুটি  স্ট্রিং: {$a->errstring}';
$string['updateremfail'] = 'LDAP রেকর্ড হালনাগাদ করা সময় ত্রুটি। ত্রুটি কোড: {$a->errno}; ত্রুটি  স্ট্রিং: {$a->errstring}<br/>Key ({$a->key}) - old moodle value: \'{$a->ouvalue}\' new value: \'{$a->nuvalue}\' ';
$string['updateremfailamb'] = 'অনিশ্চিত ক্ষেত্রসহ {$a->key} LDAP হালনাগাদ করতে ব্যর্থ; পুরাতন মুডল মান: \'{$a->ouvalue}\', নতুন মান: \'{$a->nuvalue}';
$string['updateusernotfound'] = 'বাহ্যিকভাবে হালনাগাদ করার সময় ব্যবহারকারী খুঁজতে পারে না। নিম্নোক্ত বিস্তারিত তথ্য: \'{$a->userdn}\'; ফিল্টার অনুসন্ধান: \'(objectClass=*)\'; অনুসন্ধান এট্রিবিউট: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() নির্বাচিত ব্যবহাকারীর ধরণ সমর্থন করে না: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() নির্বাচিত ব্যবহাকারীর ধরণ সমর্থন করে না: {$a}';
$string['useracctctrlerror'] = '{$a} এর জন্য userAccountControl পেতে ত্রুটি';
$string['userentriestoadd'] = 'ব্যবহারকারীর এন্ট্রি যোগ করতে হবে: {$a}';
$string['userentriestoremove'] = 'ব্যবহারকারীর এন্ট্রি অপসারণ করতে হবে: {$a}';
$string['userentriestorevive'] = 'ব্যবহারকারীর এন্ট্রি পুনরায় সংরক্ষন করতে হবে: {$a}';
$string['userentriestoupdate'] = 'ব্যবহারকারীর এন্ট্রি হালনাগাদ করতে হবে: {$a}';
$string['usernotfound'] = 'LDAP এ ব্যবহারকারী খুঁজে পাওয়া যায়নি';
