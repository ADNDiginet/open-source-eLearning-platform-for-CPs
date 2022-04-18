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
 * Strings for component 'mnet', language 'bn', version '3.11'.
 *
 * @package     mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['RPC_HTTPS_SELF_SIGNED'] = 'HTTPS (স্ব-স্বাক্ষরিত)';
$string['RPC_HTTPS_VERIFIED'] = 'HTTPS (স্বাক্ষরিত)';
$string['RPC_HTTP_PLAINTEXT'] = 'HTTP আনএনক্রিপ্টকৃত';
$string['RPC_HTTP_SELF_SIGNED'] = 'HTTP (স্ব-স্বাক্ষরিত)';
$string['RPC_HTTP_VERIFIED'] = 'HTTP (স্বাক্ষরিত)';
$string['aboutyourhost'] = 'আপনার সার্ভার সম্পর্কে';
$string['accesslevel'] = 'প্রবেশাধিকার মাত্রা';
$string['addhost'] = 'হোস্ট যোগ';
$string['addnewhost'] = 'নতুন হোস্ট যোগ';
$string['addtoacl'] = 'কন্ট্রোল প্রবেশাধিকারে যোগ';
$string['allhosts_no_options'] = 'একাধিক হোস্ট দেখার সময় কোনো অপশন পাওয়া যায়না';
$string['allow'] = 'অনুমোদন';
$string['applicationtype'] = 'অ্যাপ্লিকেশনের ধরণ';
$string['authfail_nosessionexists'] = 'প্রমানীকরণ ব্যর্থ: mnet সেশন আর নেই।';
$string['authfail_sessiontimedout'] = 'প্রমানীকরণ ব্যর্থ: mnet সেশনের সময় শেষ।';
$string['authfail_usermismatch'] = 'প্রমানীকরণ ব্যর্থ: ব্যবহারকারীর সাথে মিল নাই।';
$string['authmnetdisabled'] = 'MNet প্রমানীকরণ প্লাগইন <strong>নিস্ক্রিয়</strong>';
$string['badcert'] = 'এটা কার্যকর সনদ নয়।';
$string['certdetails'] = 'Cert এর বিস্তারিত তথ্য';
$string['configmnet'] = 'MNet এই সার্ভারের সাথে অন্য সার্ভার ও সেবার যোগাযোগ স্থাপন করে।';
$string['couldnotgetcert'] = '<br />{$a} এ কোনো সনদ পাওয়া যায়নি। <br /> হোস্ট ডাউনও হতে পারে বা সঠিকভাবে কনফিগার করা নাও থাকতে পারে।';
$string['couldnotmatchcert'] = 'ওয়েবসার্ভার থেকে প্রকাশিত সাম্প্রতিক সনদের সাথে মিল নাই।';
$string['courses'] = 'কোর্স';
$string['courseson'] = 'চলামন কোর্স';
$string['current_transport'] = 'বর্তমান যোগাযোগ ব্যবস্থা';
$string['currentkey'] = 'বর্তমান পাবলিক কী';
$string['databaseerror'] = 'ডাটাবেসে বিস্তারিত লিখতে পারছে না।';
$string['deleteaserver'] = 'সার্ভার অপসারন করা হচ্ছে';
$string['deletehost'] = 'হোস্ট অপসারণ';
$string['deletekeycheck'] = 'আপনি কি পুরোপুরি নিশ্চিত যে আপনি এই কী অপসারণ করতে চান?';
$string['deleteoutoftime'] = 'এই কী অপসারনের জন্য যে ৬০-সেকেন্ডের উইন্ডো আসছিল তার সময় শেষ। অনুগ্রহ করে পুনরায় শুরু।';
$string['deleteuserrecord'] = 'SSO ACL: {$a->host} থেকে ব্যবহারকারীর \'{$a->ব্যবহারকারী}\' জন্য রেকর্ড অপসারন ।';
$string['deletewrongkeyvalue'] = 'ত্রুটি ঘটেছে। আপনি যদি সার্ভারের SSL কী অপসারন করার চেষ্টা না করেন, তবে বিদ্বেষপূর্ণ আক্রমণের শিকার হতে পারেন। কোনো পদক্ষেপ নেয়া হয়নি।';
$string['deny'] = 'প্রত্যাখ্যান';
$string['description'] = 'বর্ণনা';
$string['duplicate_usernames'] = 'ব্যবহারকারীর টেবিলে "mnethostid" এবং "username" কলামের ইনডেক্স তৈরি করতে ব্যর্থ।<br /> আপনার ব্যবহারকারী টেবিলে <a href="{$a}" target="_blank"> একই নামের দুজন ব্যবহারকারী থাকলে এটা হবে</a>। আপনার আপগ্রেড সফলভাবে সম্পন্ন হওয়া প্রয়োজন। উপরের লিংকে ক্লিক করলে এ সমস্যা সমাধনের জন্য নতুন একটি উইন্ডো আসবে। আপগ্রেড শেষ হওয়ার পরও আপনি এটা দেখতে পারেন।<br />';
$string['enabled_for_all'] = '(সকল হোস্টের জন্য এই সেবা সক্রিয় করা হয়েছে)।';
$string['enterausername'] = 'ব্যবহারকারীর নাম বা কমা দিয়ে দিয়ে আলাদা করা ব্যবহারকারীর নামের তালিকা দিন।';
$string['error7020'] = 'রিমোট সাইট যদি আপনার জন্য ভুল wwwroot দিয়ে কোনো রেকর্ড তৈরি করে সাধারনত তখন এই ধরণের ত্রুটি ঘটে, যেমন, http://www.yoursite.com এর পরিবর্তে http://yoursite.com। আপনার হোস্টের জন্য আপডেট চেয়ে  আপনি আপনার wwwroot (config.php এ নির্দিষ্ট করে দেয়া) থেকে আপনার রিমোট হোস্টের প্রশাসকের সাথে যেগাযোগ।';
$string['error7022'] = 'রিমোট হোস্টকে পাঠানো বার্তা যথাযথ ভাবে এনক্রিপ্ট করা হয়েছে, কিন্তু স্বাক্ষর করা হয়নি। এটা খুবই অনাকাংঙ্ক্ষিত; এরকম কিছু ঘটলে আপনি একটি বাগ ফাইল করতে পারেন (অ্যাপ্লিকেশন সংস্করণ সম্পর্কে প্রশ্ন আকারে যতটুককু সম্ভব তথ্য দিয়ে,ইত্যাদি।';
$string['error7023'] = 'আপনার সাইটের জন্য রেকর্ডে যতগুলো কী ছিল সবগুলো দিয়ে রিমোট সাইট আপনার বার্তা ডিক্রিপ্ট করার চেষ্টা করেছে। সবগুলো ব্যর্থ হয়েছে। আপনি রিমোট সাইটে নতুন করে কী দিয়ে এ সমস্যার সমাধান করতে পারেন। এমনও হতে পারে যে কয়েক মাসের জন্য আপনার সাথে আপনার রিমোর্ট সাইটের সংযোগ বিচ্ছিন্ন হয়ে যাচ্ছে।';
$string['error7024'] = 'রিমোট সাইটে একটি আনক্রিপ্টকৃত বার্তা পাঠান, কিন্তু রিমোট সাইট আপনার সাইট থেকে আনক্রিপ্টকৃত যোগাযোগ গ্রহন করেনা। এটা খুবই অনাকাংঙ্ক্ষিত; এরকম কিছু হলে বাগ ফাইল করা উচিৎ (অ্যাপ্লিকেশন সংস্করণ সম্পর্কে প্রশ্ন আকারে যতটুককু সম্ভব তথ্য দিয়ে,ইত্যাদি।';
$string['error7026'] = 'রিমোট হোস্টে আপনার সার্ভারের জন্য যে কী আছে তা থেকে আপনার বার্তায় স্বাক্ষরিত কী আলাদা। পরবর্তীতে রিমোট হোস্ট বর্তমান কী আনার চেষ্টা করে ব্যর্থ হয়। অনুগ্রহ করে রিমোট হোস্টে নতুন করে কী নিজ হাতে কী দেয়ার চেষ্টা।';
$string['error709'] = 'আপনার কাছ থেকে রিমোট সাইট SSL কী পেতে ব্যর্থ হয়েছে।';
$string['expired'] = 'এই কী এর সময়সীমা শেষ';
$string['expires'] = 'পর্যন্ত কার্যকর';
$string['expireyourkey'] = 'এই কী অপসারণ';
$string['expireyourkeyexplain'] = 'মুডল নিজে থেকেই আপনার কী প্রতি ২৮ দিন পর পর পরিবর্তন করে (পূর্বনির্ধারিতভাবে) কিন্তু যে কোনো সময় এ কী পরিবর্তন <em>নিজ হাতে</em> করার অপশন আপনার আছে। এটা কাজে দিবে যদি আপনি মনে করেন যে এ কী টা সমন্বয় করা আছে। সাথে সাথে স্বয়ংক্রিয়ভাবে এর বদলি কিছু চলে আসবে। <br /> এই কী অপসারন করলে আপনি আর অন্য কোনো অ্যাপ্লিকেশন এর সাথেই যোগাযোগ করতে পারবেন না, যতক্ষন না পর্যন্ত আপনি নিজ হাতে এক এক করে প্রত্যেক প্রসাশনের সাথে যোগাযোগ করে আপনার কী টা দিয়ে না দেন।';
$string['exportfields'] = 'এক্সপোর্ট করার ক্ষেত্র';
$string['failedaclwrite'] = 'ব্যবহারকারীর তালিকার \'{$a}\' Mnet প্রবেশাধিকার কন্ট্রোলে লিখতে ব্যর্থ।...';
$string['findlogin'] = 'লগইন খুঁজুন';
$string['forbidden-function'] = 'RPC এর জন্য এ ফাংশনটি সক্রিয় করা হয়নি।';
$string['forbidden-transport'] = 'আপনি যে স্থানান্তরকরন প্রক্রিয়া ব্যবহার করার চেষ্টা করছেন তা অনুমোদিত নয়।';
$string['forcesavechanges'] = 'জোরপূর্বক পরিবর্তন সংরক্ষণ';
$string['helpnetworksettings'] = 'MNet যোগাযোগ কনফিগার';
$string['hidelocal'] = 'স্থানীয় ব্যবহারকারীদের আড়াল';
$string['hideremote'] = 'রিমোট ব্যবহারকারীদের আড়াল';
$string['host'] = 'হোস্ট';
$string['hostcoursenotfound'] = 'হোস্ট বা কোর্স পাওয়া যায়নি';
$string['hostdeleted'] = 'Ok - হোস্ট অপসারিত';
$string['hostexists'] = 'ইতিমধ্যেই এই হোস্টনামের একজন হোস্ট আছে (এটা অপসারিত হয়ে যেতে পারে)। রেকর্ড সম্পাদনা করতে <a href="{$a}">এখানে ক্লিক</a>';
$string['hostlist'] = 'নেটওয়ার্ককৃত হোস্টের তালিকা';
$string['hostname'] = 'হোস্টনাম';
$string['hostnamehelp'] = 'রিমোট হোস্টের সম্পূর্ন যোগ্য একটি ডোমেইন নাম, যেমন, www.example.com';
$string['hostnotconfiguredforsso'] = 'রিমোট লগইন এর জন্য এ সার্ভার কনফিগার করা নাই।';
$string['hostsettings'] = 'হোস্ট সেটিং';
$string['http_self_signed_help'] = 'সংযোগ অনুমোদনের জন্য রিমোট হোস্টের একটি স্ব-স্বাক্ষরিত DIY SSL সনদ ব্যবহার।';
$string['http_verified_help'] = 'সংযোগ অনুমোদনের জন্য রিমোট হোস্টের একটি স্ব-স্বাক্ষরিত DIY SSL সনদ ব্যবহার, কিন্তু http এর (https নয়)';
$string['https_self_signed_help'] = 'সংযোগ অনুমোদনের জন্য http এর রিমোট হোস্টের একটি স্ব-স্বাক্ষরিত DIY SSL সনদ ব্যবহার।';
$string['https_verified_help'] = 'সংযোগ অনুমোদনের জন্য রিমোট হোস্টের একটি স্ব-স্বাক্ষরিত SSL সনদ ব্যবহার।';
$string['id'] = 'আইডি';
$string['idhelp'] = 'এ মান স্বয়ংক্রিয়ভাবে ঠিক করে দেয়া এবং পরিবর্তনশীল নয়';
$string['importfields'] = 'ইম্পোর্ট করার মত ক্ষেত্র';
$string['inspect'] = 'পরীক্ষা';
$string['installnosuchfunction'] = 'কোডিং ত্রুটি! কোনো একটা ফাইল থেকে mnet xmlrpc ফাংশন ({$a->method}) ইনস্টল করার চেষ্টা করা হচ্ছে কিন্তু তা পাওয়া যাচ্ছেনা।';
$string['installnosuchmethod'] = 'কোডিং ত্রুটি! কোনো একটা ক্লাসে mnet xmlrpc পদ্ধতি ({$a->method}) ইনস্টল করার চেষ্টা করা হচ্ছে কিন্তু তা পাওয়া যাচ্ছেনা।';
$string['installreflectionclasserror'] = 'কোডিং ত্রুটি! এ পদ্ধতি জন্য \'{$a->ক্লাস}\' ক্লাসের MNet পরীক্ষা ব্যর্থ \'{$a->পদ্ধতি}\'। প্রকৃত ত্রুটি বার্তা, যদি এটা কোনো ধরনের সাহায্য করতে পারে তবে:  \'{$a->ত্রুটি }';
$string['installreflectionfunctionerror'] = 'কোডিং ত্রুটি! \'{$a->file}\' ফাইলে এ ফাংশনের জন্য MNet পরীক্ষা ব্যর্থ। প্রকৃত ত্রুটি বার্তা, যদি এটা কোনো ধরনের সাহায্য করতে পারে তবে:  \'{$a->ত্রুটি }';
$string['invalidaccessparam'] = 'প্রবেশাধিকারের অকার্যকর প্যারামিটার।';
$string['invalidactionparam'] = 'কাজের অকার্যকর প্যারামিটার।';
$string['invalidhost'] = 'আপনাকে একটি কার্যকর হোস্ট শনাক্তকারী যোগান দিতে হবে';
$string['invalidpubkey'] = 'এই কী কার্যকর SSL কী না। ({$a})';
$string['invalidurl'] = 'অকার্যকর URL প্যারামিটারঁ';
$string['ipaddress'] = 'IP অ্যাড্রেস';
$string['is_in_range'] = 'IP অ্যাড্রেস <code>{$a}</code> দ্বারা কার্যকর বিশ্বস্ত হোস্টকে বুঝায়।';
$string['ispublished'] = '{$a} আপনার জন্য এই সেবা সক্রিয় করেছে।';
$string['issubscribed'] = '{$a} আপনার হোস্টে এই সেবা চালু করছে।';
$string['keydeleted'] = 'আপনার কী সফলভাবে অপসারিত হয়েছে এবং প্রতিস্থাপিতও হয়েছে।';
$string['keymismatch'] = 'আপনি এ হোস্টের জন্য যে পাবলিক কী ব্যবহার করছেন তা বর্তমানে যে পাবলিক কী প্রকাশ পাচ্ছে তা থেকে ভিন্ন। সাম্প্রতিক সময়ে প্রকাশিত পাবলিক কী হল:';
$string['last_connect_time'] = 'সর্বশেষ যোগাযোগের সময়';
$string['last_connect_time_help'] = 'শেষবার আপনি যখন এ হোস্টের সাথে সংযুক্ত ছিলেন।';
$string['last_transport_help'] = 'শেষবার এ হোস্টের সাথে যোগাযোগের জন্য আপনি যোগাযোগের যে মাধ্যম ব্যবহার  করেছেন।';
$string['leavedefault'] = 'তার পরিবর্তে পূর্বনির্ধারিত সেটিংস';
$string['listservices'] = 'সেবার তালিকা';
$string['loginlinkmnetuser'] = '<br />আপনি যদি MNet রিমোট ব্যবহারকারী হয়ে থাকেন এবং <a href="{$a}">এখানে আপনার ইমেইল ঠিকানা নিশ্চিত করতে পারেন</a>, তবে সরাসরি লগইন পৃষ্ঠায় চলে যেতে পারবেন।<br />';
$string['logs'] = 'লগ';
$string['managemnetpeers'] = 'সমকক্ষ ব্যাপারগুলো পরিচালনা';
$string['method'] = 'পদ্ধতি';
$string['methodhelp'] = '{$a} এর সাহায্যকারী পদ্ধতি';
$string['methodsavailableonhost'] = '{$a} এ প্রাপ্ত পদ্ধতি';
$string['methodsavailableonhostinservice'] = '{$a->হোস্ট} এ {$a->সেবা} এর জন্য প্রাপ্ত পদ্ধতি';
$string['methodsignature'] = '{$a} এর জন্য পদ্ধতি স্বাক্ষর';
$string['mnet'] = 'MNet';
$string['mnet_concatenate_strings'] = '৩ টা পর্যন্ত স্ট্রিং কনক্যাটেনেট করে ফলাফলে রিটার্ন';
$string['mnet_session_prohibited'] = 'হোম সার্ভারের ব্যবহারকারী এখনও {$a} এ রোম করার অনুমতি পায়নি।';
$string['mnetdisabled'] = 'MNet <strong>নিস্ক্রিয়</strong> আছে।';
$string['mnetidprovider'] = 'MNet আইডি সরবরাহকারী';
$string['mnetidproviderdesc'] = 'আপনি যদি আগেরবার যে ব্যবহারকরীর নাম দিয়ে লগইন করার চেষ্টা করেছিলেন সেই ব্যবহারকারীর নামের সাথে মিল রেখে সঠিক ইমেইল ঠিকানা দিতে পারেন তবে আপনার লগইন করার লিংকটি উদ্ধার করতে পারেন।';
$string['mnetidprovidermsg'] = 'আপনার {$a} সরবরাহকারীতে লগইন করতে পারা উচিৎ।';
$string['mnetidprovidernotfound'] = 'দুঃখিত, আর কোনো তথ্য পাওয়া যায়নি।';
$string['mnetpeers'] = 'সমকক্ষ';
$string['mnetservices'] = 'সেবা';
$string['mnetsettings'] = 'MNet সেটিং';
$string['moodle_home_help'] = 'রিমোট হোস্টের MNet অ্যাপ্লিকেশনের প্রধান পাতার পাথ, যেমন, /moodle/।';
$string['name'] = 'নাম';
$string['net'] = 'নেটওয়ার্কিং';
$string['networksettings'] = 'নেটওয়ার্ক সেটিং';
$string['never'] = 'কখনো নয়';
$string['noaclentries'] = 'SSO প্রবেশাধিকার কন্ট্রোল তালিকায় প্রবেশের অনুমতি নেই';
$string['noaddressforhost'] = 'দুঃখিত, হোস্টনাম ({$a}) পাওয়া যায়নি!';
$string['nocurl'] = 'PHP cURL লাইব্রেরি ইনস্টল করা হয়নি';
$string['nolocaluser'] = 'রিমোট ব্যবহারকারীর জন্য কোনো স্থানীয় রেকর্ড নাই এবং এটা তৈরিও করা যাবেনা কারণ এ হোস্ট স্বয়ংক্রিয়ভাবে ব্যবহারকারী তৈরি করেনা। অনুগ্রহ করে প্রশাসক সাথে যোগাযোগ!';
$string['nomodifyacl'] = 'MNet প্রবেশাধিকার কন্ট্রোল তালিকা পরিবর্তন করার অনুমতি নাই।';
$string['nonmatchingcert'] = 'সনদের বিষয়: <br /><em>{$a->বিষয়}</em><br />যেহোস্ট থেকে আসছে তার সাথে মিল নাই:<br /><em>{$a->হোস্ট}</em>।';
$string['nopubkey'] = 'পাবলিক কী পুনরূদ্ধার করার ক্ষেত্রে সমস্যা।<br />সম্ভবত হোস্ট MNet অনুমোদন দেয় না বা কী অকার্যকরও হতো পারে।';
$string['nosite'] = 'সাইট-সংস্করণ কোর্স খুঁজে পায়নি';
$string['nosuchfile'] = 'ফাইল/ফাংশন {$a} নেই।';
$string['nosuchfunction'] = 'ফাংশনের অবস্থান চিহ্নিতকরণ করা যাচ্ছে না, অথবা RPC এর জন্য ফাংশনটি নিষিদ্ধ।';
$string['nosuchmodule'] = 'ফাংশনের ঠিকানা ভুল দেয়া হয়েছিল বলে অবস্থান বের করা যায়নি। অনুগ্রহ করে
mod/modulename/lib/functionname বিন্যাস ব্যবহার।';
$string['nosuchpublickey'] = 'স্বাক্ষরের সত্যতা যাচাই এর জন্য পাবলিক কী পাওয়া যাচ্ছে না।';
$string['nosuchservice'] = 'এই হোস্টে RPC সেবা কাজ করছে না।';
$string['nosuchtransport'] = 'আইডির সাথে যোগাযোগের মাধ্যম নেই।';
$string['notBASE64'] = 'স্ট্রিংটি base64 এনকোডেড বিন্যাসের নয়। এটা কার্যকর কী হতে পারে না।';
$string['notPEM'] = 'এই কী PEM বিন্যাসে নাই। এটা কাজ করবে না।';
$string['not_in_range'] = 'IP অ্যাড্রেস <code>{$a}</code> দ্বারা কোনো কার্যকর ও বিশ্বস্ত হোস্টকে নির্দেশ করেনা।';
$string['notenoughidpinfo'] = 'একাউন্ট তৈরি বা আপডেট করার মত যথার্থ তথ্য আপনার পরিচয় সরবরাহকারী থেকে পাওয়া যাচ্ছেনা। দুঃখিত!';
$string['notinxmlrpcserver'] = 'MNet রিমোট ক্লায়েন্টে প্রবেশ করার চেষ্টা, তবে XMLRPC সার্ভার কাজ করার সময় নয়';
$string['notmoodleapplication'] = 'সতর্কীকরণ: এটা কোনো মুডল অ্যাপ্লিকেশন নয়, সুতরাং কিছু পরিদর্শন পদ্ধতি কাজ নাও করতে পারে।';
$string['notpermittedtojump'] = 'এই মুডল সার্ভার থেকে রিমোট সেশন চালু করার অনুমতি নাই।';
$string['notpermittedtoland'] = 'রিমোট সেশন চালু করার অনুমতি নাই।';
$string['off'] = 'বন্ধ';
$string['on'] = 'চালু';
$string['options'] = 'অপশন';
$string['peerprofilefielddesc'] = 'যখন নতুন ব্যবহারকারী তৈরি হয় তখন এখানে গ্লোবাল সেটিং যার জন্য প্রোফাইলের ক্ষেত্র পাঠাতে ও ইম্পোর্ট করতে হয় তা উপেক্ষা করতে পারেন';
$string['permittedtransports'] = 'অনুমোদিত যোগাযোগের ব্যবস্থা';
$string['phperror'] = 'অভ্যন্তরীণ PHP ত্রুটির কারণে আপনার অনুরোধ রাখা যাচ্ছে না।';
$string['position'] = 'অবস্থান';
$string['postrequired'] = 'অপসারণ ফাংশনের জন্য পোস্ট অনুরোধ প্রয়োজন।';
$string['profileexportfields'] = 'ক্ষেত্র প্রেরণ';
$string['profilefielddesc'] = 'ব্যবহারকারীর অ্যাকাউন্ট তৈরি করা ও আপডেট করার সময় Mnet এ যে প্রোফাইল ক্ষেত্র পাঠানো বা গ্রহন করা হয় তা আপনি এখঅনে কনফিগার করতে পারেন। আপনি প্রত্যেক Mnet সমকক্ষের জন্য আলাদ করে এটা অগ্রাহ্য করতে পারেন। মনে রাখবেন, এ ক্ষেত্রগুলো সবসময়ই পাঠানো হয় এবং এগুলো ঐচ্ছিক না: {$a}';
$string['profilefields'] = 'প্রোফাইল ক্ষেত্র';
$string['profileimportfields'] = 'ক্ষেত্র ইম্পোর্ট';
$string['promiscuous'] = 'বৈষম্যহীন';
$string['publickey'] = 'পাবলিক কী';
$string['publickey_help'] = 'রিমোট সার্ভার থেকে স্বয়ংক্রিয়ভাবে পাবলিক কী পাওয়া যায়।';
$string['publish'] = 'প্রকাশ';
$string['reallydeleteserver'] = 'সার্ভার অপসারণ করার ব্যাপারে কি আপনি নিশ্চিত';
$string['receivedwarnings'] = 'নিম্নোক্ত সতর্কবানী পাওয়া গিয়েছিল';
$string['recordnoexists'] = 'রেকর্ড নেই';
$string['reenableserver'] = 'না - সার্ভার পুনরায় সক্রিয় করার জন্য এ অপশন নির্বাচন।';
$string['registerallhosts'] = 'সকল হোস্টের নিবন্ধন (মিশ্র মোড)';
$string['registerallhostsexplain'] = 'যেসকল হোস্ট আপনার সাথে স্বয়ংক্রিয়ভাবে সংযুক্ত হতে চায় তাদেরকে নিবন্ধন করতে পারেন। তার মানে  আপনার সাথে সংযুক্ত করা যেকোনো সাইটের জন্য আপানর হোস্ট লিস্টে রেকর্ড তলো আসবে এবং আপনার পাবলিক কী এর জন্য অনুরোধ করবে।<br />এ সেবা "সকল হোস্ট" এর জন্য কনফগার করার অপশন আপনার আছে এবং সেখানে কিছু সেবা সক্রিয় করে দিয়ে আপনি যেকোনো রিমোট সার্ভারে এ সেবাগুলো দিতে পারেন।';
$string['registerhostsoff'] = 'সকল হোস্টের নিবন্ধন বর্তমানে <b>বন্ধ</b>';
$string['registerhostson'] = 'সকল হোস্টের নিবন্ধন বর্তমানে <b>সচল</b>';
$string['remotecourses'] = 'রিমোট কোর্স';
$string['remotehost'] = 'রিমোট হোস্ট';
$string['remotehosts'] = 'রিমোট হোস্ট';
$string['remoteuserinfo'] = 'রিমোট {$a->remotetype} ব্যবহারকারী - <a href="{$a->remoteurl}">{$a->remotename}</a> থেকে নেয়া প্রোফাইল';
$string['requiresopenssl'] = 'নেটওয়ার্কিং এর জন্য OpenSSL এক্সটেনশন প্রয়োজন';
$string['restore'] = 'পুনরুদ্ধার';
$string['returnvalue'] = 'ফিরতি মূল্য';
$string['reviewhostdetails'] = 'হোস্টের বিস্তারিত তথ্য রিভিউ';
$string['reviewhostservices'] = 'হোস্টের সেবা রিভিউ';
$string['selectaccesslevel'] = 'অনুগ্রহ করে তালিকা থেকে প্রবেশের ধাপ নির্বাচন।';
$string['selectahost'] = 'অনুগ্রহ করে রিমোট হোস্ট নির্বাচন।';
$string['service'] = 'সেবার নাম';
$string['serviceid'] = 'সেবার আইডি';
$string['servicesavailableonhost'] = '{$a} এ প্রাপ্ত সেবা';
$string['serviceswepublish'] = '{$a} এ প্রকাশিত সেবা।';
$string['serviceswesubscribeto'] = '{$a} গ্রাহক হওয়ার ফলে প্রাপ্ত সেবা।';
$string['settings'] = 'সেটিং';
$string['showlocal'] = 'স্থানীয় ব্যবহারকারী প্রদর্শন';
$string['showremote'] = 'রিমোট ব্যবহারকারী প্রদর্শন';
$string['ssl_acl_allow'] = 'SSO ACL: {$a->হোস্ট} হতে ব্যবহারকারী {$a->ব্যবহারকারী}অনুমোদন';
$string['ssl_acl_deny'] = 'SSO ACL:{$a->হোস্ট} হতে ব্যবহারকারী {$a->ব্যবহারকারী} প্রত্যাখান';
$string['ssoaccesscontrol'] = 'SSO প্রবেশাধিকার কন্ট্রোল';
$string['ssoacldescr'] = 'Mnet হোস্ট থেকে নির্দিষ্ট ব্যবহারকারীতে প্রবেশ/প্রত্যাখান করতে এ পৃষ্ঠা ব্যবহার। আপনি যখন কোনো রিমোট ব্যবহারকারীকে SSO সেবা নেয়ার প্রস্তাব দেন তখন এটা কাজে দিবে। অন্যান্য হোস্টের রোম করার ক্ষেত্রে ব্যবহারকারীর <em>স্থানীয়</em> কার্যক্ষমতা কন্ট্রোল করার জন্য তাদের <em>mnetlogintoremote</em> কর্মদক্ষতা দেখানোর জন্য রোল সিস্টেম ব্যবহার।';
$string['ssoaclneeds'] = 'এ ফাংশনটা কাজ করানোর জন্য আপনার নেটওয়ার্কিং চালু থাকতে হবে এবং MNet প্রমাণীকরণ প্লাগইন সক্রিয় থাকতে হবে।';
$string['strict'] = 'নিয়মনিষ্ঠ';
$string['subscribe'] = 'গ্রাহক হওয়া';
$string['system'] = 'সিস্টেম';
$string['testclient'] = 'MNet পরীক্ষামূল ক্লায়েন্ট';
$string['testtrustedhosts'] = 'ঠিকানা ঠিকানা';
$string['testtrustedhostsexplain'] = 'হোস্টের বিশ্বস্ততা পরীক্ষা করার জন্য একটা IP অ্যাড্রেস দিন।';
$string['theypublish'] = 'তারা প্রকাশ করে';
$string['theysubscribe'] = 'তারা গ্রাহক হয়';
$string['transport_help'] = 'অপশনগুলো পারস্পরিক, সুতরাং আপনি আপনার রিমোট হোস্টে তখনই স্বাক্ষরিত SSL cert ব্যবহার করতে পারবেন যদি আপনার সার্ভারেও স্বাক্ষরিত SSL cert থাকে।';
$string['trustedhosts'] = 'XML-RPC হোস্ট';
$string['trustedhostsexplain'] = '<p>বিশ্বস্ত হোস্ট মেকানিজম মুডল API এর যে কোনোখান থেকে নির্দিষ্ট মেশিনের সাহায্যে XML-RPC মাধ্যমে কল কার যায়। স্ক্রিপ্টের জন্য এটা পাওয়া যায় যা মুডলের ব্যবহার কন্ট্রোল করে এবং সক্রিয় করটা খুবই বিপদ্দজনক হতে পারে। কোনো সন্দেহ থেকে থাকলে এটা বন্ধ রাখুন। </p>
<p><strong>কোনো আদর্শ Mnet বৈশিষ্টের জন্য এর প্রয়োজনীয়তা নাই!</strong>আপনি কি করতে তা বুঝার পরই এটা  চালু করবেন।</p>
<p>চালু করতে IP অ্যাড্রেস বা ঠিকানার তালিকা দিন,
প্রত্যেক লাইনে একটি করে। উদারহরণস্বরূপ, </p>
আপনার স্থানীয় হোস্ট:<br />127.0.0.1<br />আপনার স্থানীয় হোস্ট(নেটওয়ার্ক ব্লকসহ):<br />127.0.0.1/32<br />কেবলমাত্র 192.168.0.7 IP অ্যাড্রেসসহ হোস্ট:<br />192.168.0.7/32<br />192.168.0.1 এবং 192.168.0.255 IP অ্যাড্রেসের মধ্যে যেকোনো হোস্ট:<br />192.168.0.0/24<br />যেকোনো হোস্ট:<br />192.168.0.0/0<br />অবশ্যই শেষ উদাহারণটি সুপারিশকৃত কনফিগারেশনের <strong>নয়</strong>';
$string['turnitoff'] = 'বন্ধ';
$string['turniton'] = 'চালু করুন';
$string['type'] = 'ধরণ';
$string['unknown'] = 'অজানা';
$string['unknownerror'] = 'আলোচনার সময় কোনো অজানা ত্রুটি হয়েছে।';
$string['usercannotchangepassword'] = 'আপনি যেহেতু রিমোট ব্যবহারকারী তাই পাসওয়ার্ড পরিবর্তন করতে পারবেন না।';
$string['userchangepasswordlink'] = '<br />আপনি <a href="{$a->wwwroot}/login/change_password.php">{$a->description}</a> সরবরাহকারীতে আপনার পাসওয়ার্ড পরিবর্তন করতে পারেন।';
$string['usernotfullysetup'] = 'আপনার ব্যবহারকারীর একাউন্ট অসম্পূর্ণ। আপনাকে আপনার তথ্য সরবরাহকারীতে</a> ফেরত <a href="{$a}"> যেতে হবে এবং প্রোফাইল সম্পন্ন করা আছে কিনা নিশ্চিত হতে হবে। এটা ঠিকভাবে কাজ করছে কিনা তা দেখার জন্য একবার লগআউট করে আবার লগইন করতে হবে।';
$string['usersareonline'] = 'সতর্কীকরণ: ঐ সার্ভার থেকে কিছু ব্যবহারকারী {$a} আপনার সাইটে  লগঅন করা আছে।';
$string['validated_by'] = 'নেটওয়ার্ক থেকে কার্যকর আছে: <code>{$a}</code>';
$string['verifysignature-error'] = 'স্বাক্ষরের সত্যতা যাচাই ব্যর্থ। কোনো ত্রুটি ঘটেছে।';
$string['verifysignature-invalid'] = 'স্বাক্ষরের সত্যতা যাচাই ব্যর্থ। মনে হচ্ছে এ পেলোডে আপনি স্বাক্ষর  করেননি।';
$string['version'] = 'সংস্করণ';
$string['warning'] = 'সতর্কীকরণ';
$string['wrong-ip'] = 'আমাদের রেকর্ডের সাথে আপনার IP অ্যাড্রেসের সাথে মিল নাই।';
$string['xmlrpc-missing'] = 'আপনার PHP বিল্ডে অবশ্যই XML-RPC ইনস্টল করে নিন যাতে করে এ বৈশিষ্ট্যটি ব্যবহার করতে পারেন।';
$string['yourhost'] = 'আপনার হোস্ট';
$string['yourpeers'] = 'আপনার সমকক্ষ';
