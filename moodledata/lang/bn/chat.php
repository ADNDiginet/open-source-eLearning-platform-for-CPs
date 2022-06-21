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
 * Strings for component 'chat', language 'bn', version '3.11'.
 *
 * @package     chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['ajax'] = 'অ্যাজাক্স ব্যবহৃত সংস্করণ';
$string['autoscroll'] = 'স্বয়ংক্রিয় স্ক্রল';
$string['beep'] = 'বীপ';
$string['cantlogin'] = 'কথোপকথন রুমে লগ ইন করা যাচ্ছেনা!!';
$string['chat:chat'] = 'একটি কথোপকথন রুমে প্রবেশ';
$string['chat:deletelog'] = 'কথোপকথন লগ অপসারণ';
$string['chat:exportparticipatedsession'] = 'আপনার অংশগ্রহণকৃত কথোপকথন সেশন এক্সপোর্ট';
$string['chat:exportsession'] = 'যে কোন কথোপকথন সেশন এক্সপোর্ট';
$string['chat:readlog'] = 'কথোপকথন লগ পড়া';
$string['chat:talk'] = 'কথোপকথন এ কথা বলা';
$string['chatintro'] = 'ভূমিকা টেক্সট';
$string['chatname'] = 'কথোপকথন রুমের নাম';
$string['chatreport'] = 'কথোপকথন সেশন';
$string['chattime'] = 'পরবর্তী কথোপকথনের সময়';
$string['configmethod'] = 'অ্যাজাক্স কথোপকথন নিয়মটি অ্যাজাক্স নির্ভর কথোপকথন ইন্টারফেস যোগান দেয়, হালনাগাদ করার জন্য এটি সার্ভারের সাথে নিয়মিত যোগাযোগ করে। হালনাগাদ করার জন্য সাধারণ কথোপকথন নিয়ম ক্লায়েন্টদেরকে সম্পৃক্ত করে নিয়মিত সার্ভারের যোগাযোগ করে। এটির জন্য কোন কনফিগারেশনের প্রয়োজন নেই এবং সব জায়গায় কাজ করবে, কিন্তু এটি অনেক কথোপকথনকৃত ব্যক্তির সাথে সার্ভারে বৃহৎ লোড তৈরি করে। সার্ভার ডেমন ব্যবহার করার জন্য ইউনিক্স এ শেল প্রবেশাধিকার থাকা প্রয়োজন, কিন্তু এটির ফলে দ্রুত পরিবর্তনযোগ্য কথোপকথন পরিবেশ হয়। ';
$string['confignormalupdatemode'] = 'কথোপকথন রুমের হালনাগাদ সাধারনত পরিবেশন করে <em>সক্রিয় রাখা</em>HTTP 1.1 এর বৈশিষ্ট্য দক্ষতার সাথে ব্যবহার করে, কিন্তু সার্ভারে এটি এখনও সম্পূর্ণভাবে ভারী। ব্যবহারকারী ফীড হালনাগাদ করার জন্য আরও উচ্চ পর্যায়ের <em>স্ট্রীম</em>কৌশল ব্যবহার করা। <em>Stream</em>স্কেল ব্যবহার করা অনেক ভালো (কথোপকথন নিয়মের মত) কিন্তু আপনার সার্ভার দ্বারা সমর্থিত নাও হতে পারে।';
$string['configoldping'] = 'ব্যবহারকারী সংযোগ বিছিন্ন করেছে (সেকেন্ডে) এটি সনাক্ত করতে সর্বোচ্চ কত সময় প্রয়োজন হয়? এটি শুধুমাত্র উচ্চসীমা, সাধারনত সংযোগ বিছিন্ন খুব দ্রুতই  সনাক্ত করা হয়। নিম্নতর মান আপনার সার্ভারে আরও বেশি দাবী করবে। যদি সাধারণ নিয়ম ব্যবহার করেন,<strong>কখনো নয়</strong>2 * chat_refresh_room এর নিম্নতর নির্ধারণ করে  ';
$string['configrefreshroom'] = 'কতক্ষণ পর পর কথোপকথন রুম নিজে থেকেই রিফ্রেস হবে? (সেকেন্ডে)। কম নির্ধারণ করলে কথোপকথন রুম আপাতদৃষ্টিতে দ্রুত হবে, কিন্তু যখন অনেক মানুষ কথোপকথন করবে এটি ওয়েব সার্ভারে উচ্চতর লোড রাখতে পারে। যদি <em>স্ট্রীম</em> হালনাগাদ ব্যবহার করেন, তাহলে আপনি উচ্চতর রিফ্রেশ ফ্রিকোয়েন্সি নির্বাচন করতে পারবেন -- ২ এর সাহায্যে চেষ্টা করুন।';
$string['configrefreshuserlist'] = 'কতক্ষণ পর পর ব্যবহারকারীর তালিকা রিফ্রেস হবে? (সেকেন্ডে)';
$string['configserverhost'] = 'কম্পিউটারের হোষ্ট নাম যেখানে সার্ভার ডেমন হলো';
$string['configserverip'] = 'সংখ্যাসূচক IP ঠিকানা যা কিনা উপরের হোষ্টনামের অনুরূপ হয়';
$string['configservermax'] = 'অনুমোদিত ক্লায়েন্টের সর্বোচ্চ সংখ্যা';
$string['configserverport'] = 'ডেমনের জন্য সার্ভারে ব্যবহার করার জন্য পোর্ট ';
$string['currentchats'] = 'কথোপকথন সেশন সক্রিয়';
$string['currentusers'] = 'বর্তমান ব্যবহারকারী';
$string['deletesession'] = 'সেশনটি অপসারণ করুন';
$string['deletesessionsure'] = 'এই সেশনটি অপসারণ করতে আপনি কি নিশ্চিত?';
$string['donotusechattime'] = 'কোন কথোপকথন সময় প্রকাশ করা হবেনা';
$string['enterchat'] = 'এখন কথোপকথনে প্রবেশ করার জন্য এখানে ক্লিক করুন';
$string['errornousers'] = 'কোন ব্যবহারকারী পাওয়া যায়নি!';
$string['explaingeneralconfig'] = 'এই সেটিংসমূহ <strong>সবসময়</strong>ব্যবহৃত হয়';
$string['explainmethoddaemon'] = 'এই সেটিংসমূহ গুরুত্ব দেয় <strong>শুধুমাত্র</strong>যদি আপনি কথোপকথন_নিয়ম এর জন্য "কথোপকথন সার্ভার ডেমন" নির্বাচন করে থাকেন';
$string['explainmethodnormal'] = 'এই সেটিংসমূহ গুরুত্ব দেয় <strong>শুধুমাত্র</strong>যদি আপনি কথোপকথন_নিয়ম এর জন্য "সাধারণ নিয়ম" নির্বাচন করে থাকেন';
$string['generalconfig'] = 'সাধারণ কনফিগারেশন';
$string['idle'] = 'নিষ্ক্রিয়';
$string['inputarea'] = 'ইনপুট ক্ষেত্র';
$string['invalidid'] = 'কথোপকথনের রুম পাওয়া যায়নি!';
$string['list_all_sessions'] = 'সব সেশনের তালিকা করুন।';
$string['list_complete_sessions'] = 'এইমাত্র সম্পন্ন করা সেশনের তালিকা করুন।';
$string['listing_all_sessions'] = 'সব সেশনের তালিকা।';
$string['messagebeepseveryone'] = 'সবাইকে {$a} বীপ!';
$string['messagebeepsyou'] = 'আপনাকে {$a} এইমাত্র বীপ দিলো!';
$string['messageenter'] = 'এই কথোপকথনে {$a} এই মাত্র প্রবেশ করলো';
$string['messageexit'] = '{$a} এই কথোপকথন ছেড়ে গেলো';
$string['messages'] = 'বার্তা';
$string['messageyoubeep'] = 'আপনি বীপ {$a} দিয়েছেন';
$string['method'] = 'কথোপকথনের নিয়ম';
$string['methodajax'] = 'অ্যাজাক্সের নিয়ম';
$string['methoddaemon'] = 'কথোপকথন সার্ভার ডেমন';
$string['methodnormal'] = 'সাধারণ নিয়ম';
$string['modulename'] = 'কথোপকথন';
$string['modulename_help'] = 'কথোপকথন মডিউলটি অংশগ্রহণকারীকে ওয়েবের মাধ্যমে প্রকৃত সময় যুগপৎ আলোচনার অনুমোদন দেয়। প্রত্যেকের ভিন্ন সমঝোতা পাওয়ার জন্যএটি একটি কার্যকর পদ্ধতি এবং বিষয়টি আলোচনা করা হয়েছে - মোডটি
কথোপকথন রুম ব্যবহার এসিনক্রোনাস আলোচনাচক্র হতে একেবারেই ভিন্ন। ';
$string['modulenameplural'] = 'কথোপকথন';
$string['neverdeletemessages'] = 'বার্তা কখনোই অপসারণ করা হবেনা';
$string['nextsession'] = 'পরবর্তী নির্ধারিত সেশন';
$string['no_complete_sessions_found'] = 'সম্পন্ন করা কোন সেশন পাওয়া যায়নি।';
$string['nochat'] = 'কোন কথোপকথন পাওয়া যায়নি';
$string['noguests'] = 'কথোপকথনটি অতিথিদের জন্য খোলা নয়';
$string['nomessages'] = 'এখনও পর্যন্ত কোন বার্তা নেই';
$string['nopermissiontoseethechatlog'] = 'কথোপকথন লগটি আপনার দেখার অনুমতি নেই।';
$string['normalkeepalive'] = 'সক্রিয় রাখা';
$string['normalstream'] = 'স্ট্রীম';
$string['noscheduledsession'] = 'কোন নির্ধারিত সেশন নেই';
$string['notallowenter'] = 'কথোপকথন রুমে প্রবেশের জন্য আপনার অনুমতি নেই।';
$string['notlogged'] = 'আপনি লগ ইন করেননি!';
$string['oldping'] = 'সংযোগ বিছিন্ন করার সময় উত্তীর্ণ';
$string['pastchats'] = 'পূর্ববর্তী কথোপকথন সেশন';
$string['pluginadministration'] = 'কথোপকথন প্রশাসন';
$string['pluginname'] = 'কথোপকথন';
$string['refreshroom'] = 'রিফ্রেশ করুন';
$string['refreshuserlist'] = 'ব্যবহারকারীর তালিকা রিফ্রেশ করুন';
$string['removemessages'] = 'সব বার্তা অপসারণ';
$string['repeatdaily'] = 'প্রত্যেক দিনে একই সময় ';
$string['repeatnone'] = 'কোন পুনরাবৃত্ত নয়-শুধুমাত্র উল্লেখিত সময় প্রকাশ';
$string['repeattimes'] = 'পুনরাবৃত্ত সেশন';
$string['repeatweekly'] = 'প্রত্যেক সপ্তাহে একই সময় ';
$string['saidto'] = 'যাকে বলা হয়েছে';
$string['savemessages'] = 'পূর্ববর্তী সেশন সংরক্ষণ';
$string['seesession'] = 'সেশনটি দেখুন';
$string['send'] = 'পাঠান';
$string['sending'] = 'পাঠান হচ্ছে';
$string['serverhost'] = 'সার্ভারের নাম';
$string['serverip'] = 'সার্ভারের আইপি';
$string['servermax'] = 'সর্বোচ্চ ব্যবহারকারী';
$string['serverport'] = 'সার্ভার পোর্ট';
$string['sessions'] = 'কথোপকথনের সেশন';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports'] = 'প্রত্যকেই পূর্ববর্তী সেশন প্রদর্শন করতে পারবে';
$string['studentseereports_help'] = 'যদি না নির্ধারণ করা হয়, শুধুমাত্র ব্যবহারকারী মড/কথোপকথন থাকবে:যারা লগ পড়তে সক্ষম তারা কথোপকথনের লগ দেখতে পারবে';
$string['talk'] = 'কথা';
$string['updatemethod'] = 'পদ্ধতি হালনাগাদ';
$string['updaterate'] = 'হার হালনাগাদ:';
$string['userlist'] = 'ব্যবহারকারীর তালিকা';
$string['usingchat'] = 'ব্যবহৃত কথোপকথন';
$string['usingchat_help'] = 'কথোপকথনকে আরো সুন্দর করতে মডিউলটি কিছু বৈশিষ্ট্য ধারন করে।

*হাসি - যেকোন স্মাইলি চেহারা (ইমোটিকন) যা মুডলে টাইপ করা যায় তা এখানেও টাইপ করা যাবে, উদাহরণস্বরূপ :-)
*লিঙ্ক- ওয়েবসাইট ঠিকানা স্বয়ংক্রিভাবে লিঙ্ক হয়ে যাবে
*অভিব্যক্তি -অভিব্যক্তি প্রকাশের জন্য "/me" অথবা ":" দিয়ে আপনি একটি লাইন শুরু করতে পারেন, উদাহরণস্বরূপ যদি আপনার নাম কিম হয় এবং আপনি ":laughs!" অথবা "/me laughs!" টাইপ করেন তাহলে প্রত্যেকে "Kim laughs!" দেখতে পাবে
*শব্দ সংকেত- আপনি অন্যান্য অংশগ্রহণকারীকে তােদর নামের পাশে "শব্দ সংকেত" ক্লিক করে শব্দ পাঠাতে পারবেন। সব মানুষকে একইসাথে শব্দ সংকেত পাঠাতে কার্যকর শর্টকাট হলো "শব্দ সংকেত সবাইকে"।
* HTML- যদি আপনি কিছু HTML কোড জানেন, তাহলে আপনি ছবি সংযোজন, শব্দ চালান অথবা ভিন্ন রং এর টেক্সট তৈরি করতে এটি ব্যবহার করতে পারেন';
$string['viewreport'] = 'পূর্ববর্তী কথোপকথন সেশন প্রদর্শন';
