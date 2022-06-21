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
 * Strings for component 'auth', language 'bn', version '3.11'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'বিদ্যমান প্রমাণীকরণ প্লাগইন';
$string['alternatelogin'] = 'আপনি যদি এখানে URL দেন তবে, এটা এখানে লগইন পৃষ্ঠা হিসাবে এ সাইটে আসবে। পৃষ্ঠাটিতে একটি ফর্ম থাকা উচিত যেখানে <strong>\'{$a}\'</strong> এবং রিটার্ন ফিল্ড <strong>ব্যবহারকারীরনাম</strong> এবং <strong>পাসওয়ার্ড</strong> এ নির্ধারিত কার্যকলাপের বৈশিষ্ট্য থাকে।<br />কোনো ভুল URL দিয়ে এ সাইটের জন্য নিজেকে লক করে ফেলার ব্যাপারে সতর্ক থাকুন।<br />পূর্বনির্ধারিত লগইন পৃষ্ঠা ব্যবহার করার জন্য এ সেটিং ফাঁকা রাখুন।';
$string['alternateloginurl'] = 'বিকল্প লগইন URL';
$string['auth_changepasswordhelp'] = 'পাসওয়ার্ড সহায়তা পরিবর্তন';
$string['auth_changepasswordhelp_expl'] = 'যে ব্যবহারকারীগন তাদের {$a} পাসওয়ার্ড হারিয়ে ফেলেছেন তাদেরকে হারানো পাসওয়ার্ড প্রদর্শন করে সহায়তা করা। এটা <strong>পাসওয়ার্ড পরিবর্তন URL</strong> বা অভ্যন্তরীণ মডিউল পাসওয়ার্ড পরিবর্তন করে প্রদর্শিত হবে।';
$string['auth_changepasswordurl'] = 'পাসওয়ার্ড URL পরিবর্তন';
$string['auth_changepasswordurl_expl'] = 'যে ব্যবহারকারীগন {$a} পাসওয়ার্ড হারিয়েছেন তাদের জন্য URL প্রেরণ নির্দিষ্ট করা। <strong>না</strong> এ <strong>আদর্শ পাসওয়ার্ড পৃষ্ঠা পরিবর্তন ব্যবহার</strong> নির্ধারণ।';
$string['auth_changingemailaddress'] = 'আপনি ইমেইল ঠিকানা {$a->oldemail} থেকে {$a->newemail}পরিবর্তনের জন্য অনুরোধ করেছেন। নিরাপত্তাজনিত কারণে, নতুন ঠিকানায় একটি ইমেইল পাঠিয়ে এটা যে আপনার ঠিকানা তা নিশ্চিত করি। ঐ বার্তায় পাঠানো URL খোলার সাথে সাথেই আপনার ইমেইল ঠিকানাটি হালনাগাদ হয়ে যাবে।';
$string['auth_common_settings'] = 'সাধারণ সেটিং';
$string['auth_data_mapping'] = 'ডাটা ম্যাপিং';
$string['auth_fieldlock'] = 'লক মান';
$string['auth_fieldlock_expl'] = '<p><b>লক মান:</b> যদি সক্রিয় করা হয় তবে তা মুডল ব্যবহারকারী এবং প্রসাশনকে এ এরিয়া সরাসরি সম্পাদনা করা থেকে বিরত রাখবে। আপনি যদি বাহ্যিক অথ সিস্টেমে ডাটা ব্যবস্থাপনার করেন তার জন্য এ অপশন ব্যবহার। </p>';
$string['auth_fieldlocks'] = 'ব্যবহারকারীর ক্ষেত্র লক';
$string['auth_fieldlocks_help'] = '<p>আপনি ব্যবহারকারীর ক্ষেত্র লক করতে পারেন। যে সাইটে ';
$string['auth_invalidnewemailkey'] = 'ত্রুটি : যদি ইমেইল ঠিকানায় কোনো পরিবর্তন নিশ্চিত করার ব্যপারে চেষ্টা করেন তবে, আপনি আমাদের পাঠানো ইমেইল থেকে URL অনুলিপি করতে ভুল করেছেন। অনুগ্রহ করে ঠিকানাটি আবার অনুলিপি করে পুনরায় চেষ্টা করুন।';
$string['auth_multiplehosts'] = 'বিবিধ হোস্ট অথবা ঠিকানা নির্দিষ্ট করা যায় (eg host1.com;host2.com;host3.com) অথবা (eg xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_outofnewemailupdateattempts'] = 'ইমেইল ঠিকানা হালনাগাদ করার সব প্রচেষ্টা শেষ। আপনার হালনাগাদ করার অনুরোধ বাতিল করা হয়েছে।';
$string['auth_passwordisexpired'] = 'পাসওয়ার্ড এর মেয়াদ শেষ। আপনি কি এখন পাসওয়ার্ড পরিবর্তন করতে চান?';
$string['auth_passwordwillexpire'] = 'আপনার পাসওয়ার্ডের মেয়াদ {$a} দিনের মধ্যে শেষ হবে। আপনি কি এখন পাসওয়ার্ড পরিবর্তন করতে চান?';
$string['auth_remove_delete'] = 'সম্পূর্ণ অভ্যন্তরীণ অপসারণ';
$string['auth_remove_keep'] = 'অভ্যন্তরীণ রাখা হয়';
$string['auth_remove_suspend'] = 'অভ্যন্তরীণটা বাতিল';
$string['auth_remove_user'] = 'বহিঃস্থ উৎস থেকে অপসারন করার পর মাস সিনক্রেনাইজেশনের সময় অভ্যন্তরীণ ব্যবহারকারীর অ্যাকাউন্ট দিয়ে কি করা হবে তা নির্দিষ্ট করা। যদি বহিস্কারকৃত ব্যবহারকারীগন আবার বহিঃস্থ উৎসে চলে আসে কেবলমাত্র তখনই তাদেরকে স্বয়ংক্রিয়ভাবে প্রত্যাবর্তন করানো হবে।';
$string['auth_remove_user_key'] = ' ext ব্যবহারকারী অপসারণ করা হয়েছে';
$string['auth_sync_script'] = 'সিনক্রোনাইজেশন স্ক্রিপ্ট ক্রন';
$string['auth_updatelocal'] = 'স্থানীয়টা হালনাগাদ';
$string['auth_updatelocal_expl'] = '<p><b>স্থানীয় হালনাগাদ:</b> যদি সক্রিয় করা হয় তবে প্রত্যেকবার ব্যবহারকারী লগইন করার সময় বা ব্যবহারকারীর সিনক্রোনাইজেশনের সময় ক্ষেত্রটি হালনাগাদ করা হবে। স্থানীয়ভাবে যে ক্ষেত্র হালনাগাদ করা হয়েছে তা লক করা উচিত।</p>';
$string['auth_updateremote'] = 'বাহ্যিকটা হালনাগাদ';
$string['auth_updateremote_expl'] = '<p><b>বাহ্যিক  হালনাগাদ:</b> যদি সক্রিয় করা থাকে তবে, ব্যবহারকারীর রেকর্ড হালনাগাদ করার সময় বাহ্যিক অথ হালনাগাদ করা হবে। সম্পাদনা করার জন্য ক্ষেত্র আনলক লরা হবে।</p>';
$string['auth_updateremote_ldap'] = '<p><b>মনে রাখুন:</b> বাহ্যিক LDAP ডাটাতে binddn এবং bindpw থাকা আবশ্যক যাতে করে সব ব্যবহারকারীর রেকর্ডে সম্পাদনা করা যায়। এটাতে বর্তমানে বিবিধ মানসম্পন্ন প্রতীক থাকে এবং হালনাগাদের সময় অতিরিক্ত মানগুলো অপসারণ করা হয়।</p>';
$string['auth_user_create'] = 'ব্যবহারকারী তৈরি সক্রিয়';
$string['auth_user_creation'] = 'বাহ্যিক প্রমাণীকরণ উৎসে নতুন ব্যবহারকারী তার ব্যবহারকারী অ্যাকাউন্ট তৈরি করতে পারবে এবং ইমেইলের সাহায্যে তা নিশ্চিত করা হবে। আপনি যদি এটা সক্রিয় করেন তবে, নতুন ব্যবহাকারী তৈরি করার সময় সুনির্দিষ্ট-মডিউল অপশন কনফিগার করার কথা মনে রাখতে হবে।';
$string['auth_usernameexists'] = 'নির্বাচিত ব্যবহারকারীর নাম ইতোমধ্যে আছে। অনুগ্রহ করে নতুন একটা নাম বাছাই করুন।';
$string['auth_usernotexist'] = 'বিদ্যমান নয় এমন ব্যবহারকারীকে হালনাগাদ করা যায় না: {$a}';
$string['authenticationoptions'] = 'প্রমাণীকরণ অপশন';
$string['authinstructions'] = 'এখানে আপনি ব্যবহারকারীদের জন্য তথ্য দিতে পারেন, যাতে করে তারা বুঝতে পারে যে ব্যবহারকারীর কোন নাম বা পাসওয়ার্ড ব্যবহার করতে হবে। আপনি এখনে যে টেক্সট দিবেন তাই লগইন পৃষ্ঠায় আসবে। যদি এটা খালি রাখা হয় তবে কোনো তথ্যই মুদ্রিত হবে না।';
$string['auto_add_remote_users'] = 'রিমোট ব্যবহারকারী স্বয়ংক্রিয়ভাবে যোগ';
$string['changepassword'] = 'পাসওয়ার্ড URL পরিবর্তন';
$string['changepasswordhelp'] = 'এখানে একটি জায়গা নির্দিষ্ট করে দেয়া আছে যেখান থেকে ব্যবহারাকরী তার নাম বা পাসওয়ার্ড ভুলে গেলে তা পুনরূদ্ধার করতে পারবে। এ জায়গাটি ব্যবহারকারীর লগইন পৃষ্ঠায় এবং ব্যবহারকারী পৃষ্ঠায় দেয়া থাকবে। আপনি যদি এটা খালি রাখেন তবে এ বোতাম আর মূদ্রিত হবেনা।';
$string['chooseauthmethod'] = 'প্রমাণীকরণ পদ্ধতি নির্বাচন';
$string['chooseauthmethod_help'] = 'ব্যবহারকারী লগইন করার সময় এ সেটিং এর সাহায্যে প্রমাণীকরণ প্রক্রিয়া নির্ধারণ করা হয়। কেবলমাত্র সক্রিয় প্রমাণীকরণ প্লাগইনি নির্বাচন করা উচিত, অন্যথায় ব্যবহারকারী আর লগইন করতে পারবে না। লগইন করা থেকে ব্যবহারকারীকে ব্লক করার জন্য , "লগইন করা হবে না" নির্বাচন।';
$string['createpasswordifneeded'] = 'প্রয়োজন হলে পাসওয়ার্ড তৈরি';
$string['emailchangecancel'] = 'ইমেইল পরিবর্তন বাতিল';
$string['emailchangepending'] = 'মুলতবি করা বাতিল। {$a->preference_newemail} পাঠানো লিঙ্ক খুলুন।';
$string['emailnowexists'] = 'আপনার মূল অনুরোধের কারণে আপনি আপনার প্রোফাইলে যে ইমেইল ঠিকানা এসাইন করতে চেয়েছিলেন তা অন্য একজনের জন্য এসাইন হয়ে গিয়েছে। সুতরাং, ইমেইল ঠিকানা পরিবর্তনের আপনার অনুরোধ বাতিল করা হয়েছে, কিন্তু আপনি ভিন্ন কোনো ঠিকানা দিয়ে পুনরায় চেষ্টা করতে পারেন।';
$string['emailupdate'] = 'ইমেইল ঠিকানা হালনাগাদ';
$string['emailupdatemessage'] = 'প্রিয় {$a->fullname},

আপনার {$a->site} এ ব্যবহারকারীর অ্যাকাউন্টে ইমেইল ঠিকানা পরিবর্তন করার জন্য অনুরোধ করা হয়েছে। অনুগ্রহ করে, পরিবর্তন সম্পর্কে নিশ্চিত হতে ব্রাউজারে নিম্নোক্ত URL টি খুলুন।

{$a->url}';
$string['emailupdatesuccess'] = 'ব্যবহারকারী <em>{$a->fullname}</em> এর ইমেইল ঠিকানা <em>{$a->email}</em> এ সফলভাবে হালনাগাদ করা হয়েছে।';
$string['emailupdatetitle'] = '{$a->site} এ ইমেইল হালনাগাদ এর নিশ্চিতকরণ';
$string['errormaxconsecutiveidentchars'] = 'পাসওয়ার্ডে বেশি হলে {$a}টি ধারাবাহিক  সদৃশ অক্ষর থাকতে পারে।';
$string['errorminpassworddigits'] = 'পাসওয়ার্ডে কমপক্ষে {$a} ডিজিট থাকতে হবে।';
$string['errorminpasswordlength'] = 'পাসওয়ার্ড অন্তত {$a} অক্ষর বড় হতে হবে।';
$string['errorminpasswordlower'] = 'পাসওয়ার্ডে অন্তত {$a} ছোট হাতের অক্ষর থাকতে হবে।';
$string['errorminpasswordnonalphanum'] = 'পাসওয়ার্ডে অন্তত {$a} আলফানিউমেরিক অক্ষর নয় এমন অক্ষর থাকতে হবে।';
$string['errorminpasswordupper'] = 'পাসওয়ার্ডে অন্তত {$a} বড় হাতের অক্ষর থাকতে হবে।';
$string['errorpasswordupdate'] = 'পাসওয়ার্ড হালনাগাদে ত্রুটি, পাসওয়ার্ড পরিবর্তিত হয়নি';
$string['forcechangepassword'] = 'পাসওয়ার্ড অবশ্যই পরিবর্তন';
$string['forcechangepassword_help'] = 'মুডলে পরেরবার লগইন করার পরই পাসওয়ার্ড পরিবর্তন করতেই হবে';
$string['forcechangepasswordfirst_help'] = 'মুডলে প্রথমবার লগইন করার পরই পাসওয়ার্ড পরিবর্তন করতেই হবে';
$string['forgottenpassword'] = 'আপনি যদি এখানে একটি URL দেন তবে, সাইটের জন্য এটা হারানো পাসওয়ার্ড পুনরূদ্ধারের পৃষ্টা হিসাবে আসবে। যেসব সাইটে পাসওয়ার্ড মুডলের বাহির থেকেই ব্যবস্থাপনা করা করা তাদের জন্য এটা। পূর্বনির্ধারিতভাবে পাসওয়ার্ড পুনরূদ্ধার করার জন্য এ পৃষ্ঠা খালি রাখা হয়।';
$string['forgottenpasswordurl'] = 'URL পাসওয়ার্ড মনে নাই';
$string['guestloginbutton'] = 'অতিথি লগইন বোতাম';
$string['incorrectpleasetryagain'] = 'ভুল। অনুগ্রহ করে পুনরায় চেষ্টা করুন।';
$string['infilefield'] = 'ফাইলে আবশ্যকীয় ক্ষেত্র';
$string['informminpassworddigits'] = 'অন্তত {$a} সংখ্যা';
$string['informminpasswordlength'] = 'অন্তত {$a} অক্ষর';
$string['informminpasswordlower'] = 'অন্তত {$a} ছোট হাতের অক্ষর';
$string['informminpasswordnonalphanum'] = 'অন্তত {$a} আলফানিউমেরিক নয় এমন অক্ষর';
$string['informminpasswordupper'] = 'অন্তত {$a} বড় হাতের অক্ষর';
$string['informpasswordpolicy'] = 'পাসওয়ার্ডে {$a} থাকা উচিত';
$string['instructions'] = 'নির্দেশনা';
$string['internal'] = 'অভ্যন্তরীণ';
$string['locked'] = 'আবদ্ধ';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'পাসওয়ার্ড পরিবর্তন করা যাবে না';
$string['nopasswordchangeforced'] = 'পাসওয়ার্ড পরিবর্তন না করে অাগানো যাবে না, এটা পরিবর্তন করার জন্য কোনো পৃষ্ঠা নেই। অনুগ্রহ করে আপনার মুডল প্রশাসনের সাথে যোগাযোগ করুন।';
$string['noprofileedit'] = 'প্রোফাইল সম্পাদনা করা যায়না';
$string['ntlmsso_attempting'] = 'NTLM এর মাধ্যমে একক লগইনে অংশগ্রহন...';
$string['ntlmsso_failed'] = 'স্বয়ংক্রিয়-লগইন ব্যর্থ, সাধারণ লগইন পৃষ্ঠায় চেষ্টা...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO নিস্ক্রিয়।';
$string['passwordhandling'] = 'পাসওয়ার্ড ক্ষেত্র ব্যবস্থাপনা';
$string['plaintext'] = 'সরল টেক্সট';
$string['pluginnotenabled'] = 'প্রমাণীকরণ প্লাগইন \'{$a}\' সক্রিয় নয়।';
$string['pluginnotinstalled'] = 'প্রমাণীকরণ প্লাগইন \'{$a}\' ইনস্টলকৃত নয়।';
$string['potentialidps'] = 'এখানে আসার আগে আপনি কি অন্য কোথাও লগইন করেছেন?<br />আপনার নিয়মিত পৃষ্ঠায় লগইন করার জন্য নিম্নোক্ত তালিকা থেকে নির্বাচন করুন:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = 'স্বয়ংক্রিয়ভাবে প্রোগ্রাম থেকে অপব্যবহার প্রতিরোধ করতে এই ক্যাপচা। বাক্সে ক্রমানুসারে এবং একটি করে স্পেস দিয়ে দিয়ে শব্দগুলো দিন।

আপনি যদি শব্দগুলো ঠিকভাবে না বুঝতে পারেন তবে অন্য একটি ক্যাপচা বা অডিও ক্যাপচা দিয়ে চেষ্টা করুন।';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'নিরাপত্তা প্রশ্ন';
$string['selfregistration'] = 'স্বয়ং নিবন্ধন';
$string['selfregistration_help'] = 'যদি একটি প্রমাণীকরণ প্লাগইন, যেমন ইমেইল ভিত্তিক স্ব-নিবন্ধন, নির্বাচন করা হয় তবে, সম্ভাব্য ব্যবহারকারীর জন্য নিবন্ধন করে অ্যাকাউন্ট তৈরি করা সক্রিয় করে। এর ফলে স্পামারগনের  স্পামে ফোরাম পোস্ট এবং ব্লগ এন্ট্রি ব্যবহার করার সম্ভাবনা থাকে। এ ঝুঁকি এড়ানোর জন্য <em>অনুমোদিত ইমেইল ডোমেইন</em> সেটিং এর সাহায্যে স্ব-নিবন্ধন নিস্ক্রিয় বা সীমিত করা উচিত';
$string['sha1'] = 'SHA-1 hash';
$string['showguestlogin'] = 'লগইন পৃষ্ঠায় আপনি অতিথির লগইন বোতাম আড়াল বা প্রদর্শন করতে পারেন।';
$string['stdchangepassword'] = 'পাসওয়ার্ড পরিবর্তন করার জন্য আদর্শ পৃষ্ঠা ব্যবহার';
$string['stdchangepassword_expl'] = 'যদি বাহ্যিক প্রমাণীকরণ সিস্টেম মুডলের সাহায্যে পাসওয়ার্ড পরিবর্তন অনুমোদন করে, পরিবর্তন করে হ্যাঁ করুন। এ সেটিং \'URL পাসওয়ার্ডপরিবর্তন\' উপেক্ষা করে।';
$string['stdchangepassword_explldap'] = 'মনে রাখুন: LDAP সার্ভার রিমোট হলে SSL এনক্রিপ্টকৃত টানেলে (ldaps://)  LDAP ব্যবহার সুপারিশকৃত।';
$string['suspended'] = 'এ্যাকাউন্ট  সাসপেন্ড';
$string['unlocked'] = 'অনবরূদ্ধ';
$string['unlockedifempty'] = 'যদি ফাঁকা থাকে তবে অনবরূদ্ধ করা';
$string['update_never'] = 'কখনো নয়';
$string['update_oncreate'] = 'তৈরিতে';
$string['update_onlogin'] = 'প্রতিবার লগইন করার সময়';
$string['update_onupdate'] = 'হালনাগাদ করার সময়';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() নির্বাচিত ব্যবহারকারীর ধরণ সমর্থন করে না: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_activate() নির্বাচিত ব্যবহারকারীর ধরণ সমর্থন করে না (..এখন পর্যন্ত)';
