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
 * Strings for component 'enrol_authorize', language 'bn', version '3.11'.
 *
 * @package     enrol_authorize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'কোন ধরনের ক্রেডিট কার্ড অনুমোদিত হবে?';
$string['adminaccepts'] = 'টাকা পরিশোধ করার পদ্ধতি নির্বাচন অনুমোদিত এবং তাদের ধরণ';
$string['adminauthorizeccapture'] = '&amp; Scheduled-Capture সেটিং রিভিউ বিন্যাস';
$string['adminauthorizeemail'] = 'ইমেইল প্রেরণ সেটিং';
$string['adminauthorizesettings'] = 'Authorize.Net মার্চেন্ট অ্যাকাউন্ট সেটিং';
$string['adminauthorizewide'] = 'সাধারণ সেটিং';
$string['adminconfighttps'] = 'অনুগ্রহ করে নিশ্চিত হন যে, আপনি প্লাগইন <br />in Admin >> Variables >> Security >> HTTP নিরাপত্তার জন্য "<a href="{$a->url}">turned loginhttps ON</a>"  করেছেন।';
$string['adminconfighttpsgo'] = 'প্লাগইন কনফিগার করার জন্য <a href="{$a->url}">secure page</a> এ যান।';
$string['admincronsetup'] = 'গত ২৪ ঘন্টায় cron.php রক্ষণাবেক্ষণ স্ক্রিপ্ট চালানো হয়নি। <br /> scheduled-capture বৈশিষ্ট্য ব্যবহার করতে ক্রন সক্রিয় করা প্রয়োজন। \'Authorize.Net plugin\' <br /><b>সক্রিয়</b> এবং যথাযথভাবে <b>ক্রন নির্ধারন</b>; অথবা পুনরায় <b>রিভিউ পরীক্ষা না করা (_r)</b>।<br />আপনি যদি scheduled-capture নিস্ক্রিয় করেন তবে, আপনি ৩০ দিনের মধ্যে রিভিউ না করলে ট্রানসাংশন বাতিল হয়ে যাবে।<br /><b>রিভিউ (_r)</b> পরীক্ষা বা <b>\'0\' to an_capture_day</b>ক্ষেত্রে দিন<br /> আপনি যদি <b>নিজ হাতে</b> ৩০ দিনের মধ্যে টাকা পরিশোধ গ্রহণ/প্রত্যাখ্যান করতে চান তবে।';
$string['adminemailexpiredsort'] = 'যখন মেয়াদ শেষ হয়ে যাচ্ছে এমন অমীমাংসিত অর্ডার এর সংখ্যা ইমেঔলের মাধ্যমে শিক্ষকের কাছে প্রেরণ করা হয়, তখন কোনটা বেশি জরুরী হবে?';
$string['adminemailexpiredsortcount'] = 'ক্রম গণনা';
$string['adminemailexpiredsortsum'] = 'সর্বমোট পরিমান';
$string['adminemailexpsetting'] = '(0=ইমেইল প্রেরণ নিস্ক্রিয়, পূর্বনির্ধারিত =2, সর্বোচ্চ=5)<br />(ইমেইল প্রেরণের জন্য স্বনির্ধারিত ক্যাপচার সেটিং: cron=enabled, an_review=checked, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'Scheduled-Capture দিন';
$string['adminhelpreviewtitle'] = 'ক্রম রিভিউ';
$string['adminneworder'] = 'প্রিয় প্রসাশন,

  আপনি একটি নতুন অমীমাংসিত অর্ডার পেয়েছেন:

   অর্ডার আইডি: {$a->orderid}
   ট্র্যানজ্যাকশন আইডি: {$a->transid}
   ব্যবহারকারী:{$a->user}
   কোর্স: {$a->course}
   পরিমান: {$a->amount}

   SCHEDULED-CAPTURE ENABLED?: {$a->acstatus}

  যদি scheduled-capture সক্রিয় করা হয়, ক্রেডিট কার্ড {$a->captureon} এ ক্যাপচার করা হবে
 এবং কোর্সে ব্যবহারকারীকে তালিকাভুক্ত করা হয়;অন্যথায় এটা {$a->expireon} এ মেয়াদ শেষ হয়ে যাবে এবং এ দিনের পর থেকে এটা আর ক্যাপচার করা যাবে না।

  আপনি তৎক্ষনাত নিম্নোক্ত লিঙ্কে শিক্ষার্থীদের তালিকাভুক্ত করার জন্য টাকা পরিশোধ করতেও পারেন বা নাও করতে পারেন:
  {$a->url}';
$string['adminnewordersubject'] = '{$a->course}; নতুন অমীমাংসিত অর্ডার: {$a->orderid}';
$string['adminpendingorders'] = 'আপনি scheduled-capture বৈশিষ্ট্য নিস্ক্রিয় করেছেন।<br /> \'Authorized/Pending Capture\' সহ সর্বমোট {$a->count} ট্রানজ্যাকশন পরীক্ষা না করা পর্যন্ত বাতিল করা হয়।<br />টাকা পরিশোধ গ্রহন/প্রত্যাখান করতে, <a href=\'{$a->url}\'>Payment Management</a> পৃষ্ঠায় যান।';
$string['adminteachermanagepay'] = 'শিক্ষক কোর্সের টাকা পরিশোধের ব্যাপারটি ব্যবস্থাপনা করতে পারে।';
$string['allpendingorders'] = 'সব অমীমাংসিত অর্ডার';
$string['amount'] = 'পরিমান';
$string['anauthcode'] = 'অথকোড পাওয়া';
$string['anauthcodedesc'] = 'যদি সরাসরি ইন্টারনেটে ব্যবহারকারীর ক্রেডিট কার্ড ক্যাপচার করা না যায় তবে, ব্যবহারকারীর ব্যাংক থেকে ফোনের সাহায্যে অথোরাইজেশন কোড নিতে হবে।';
$string['anavs'] = 'ঠিকানার সত্যতা যাচাই এর সিস্টেম';
$string['anavsdesc'] = 'আপনার authorize.Net অ্যাকাউন্টে ঠিকানার সত্যতা যাচাই এর সিস্টেম (AVS) যদি সক্রিয় করা থাকে তবে এটা পরীক্ষা করে নিন। এর জন্য ঠিকানায় বিভিন্ন বিষয় প্রয়োজন, যেমন:রাস্তা, প্রদেশ, দেশ এবং ব্যবহারকারী যখন টাকা পরিশোধের ফরম পূরণ করে তখন জিপ।';
$string['ancaptureday'] = 'ক্যাপচার এর দিন';
$string['ancapturedaydesc'] = 'নির্ধারিত দিনের মধ্যে শিক্ষক বা প্রশাসক অর্ডার রিভিউ না করা পর্যন্ত স্বয়ংক্রিয়ভাবে ক্রেডিট কার্ড ক্যাপচার। CRON MUST BE ENABLED।<br />(0 দিন মানে এটা scheduled-capture নিস্ক্রিয় করবে, আরও বুঝায় যে, শিক্ষক বা প্রশাসক স্বনির্ধরিতভাবে অর্ডার রিভিউ করবে। scheduled-capture নিষ্ক্রিয় করা হলে অথবা ৩০ দিনের মধ্যে এটা রিভিউ না করলে ট্র্যানজ্যাকশন বাতিল হয়ে যাবে।)';
$string['anemailexpired'] = 'মেয়াদ শেস হওয়ার ঘোষণা';
$string['anemailexpireddesc'] = 'এটা \'স্বনির্ধারিত-ক্যাপচার\' এর জন্য উপকারী। প্রসাশনকে অমীমাংসিত অর্ডারের মেয়াদ শেষ হওয়ার নির্দিষ্ট দিনের সংখ্যা প্রসাশনকে ঘোষনা দিয়ে জানানো হবে।';
$string['anemailexpiredteacher'] = 'মেয়াদ শেষ হওয়ার ঘোষনা - শিক্ষক';
$string['anemailexpiredteacherdesc'] = 'আপনি যদি স্বনির্ধারিত-ক্যাপচার (উপরে দেখুন) সক্রিয় করেন এবং শিক্ষক টাকা পরিশোধ এর ব্যবস্থাপনা করতে পারে, তবে অমীমাংসিত অর্ডারের মেয়াদ শেষ হওয়ার ব্যাপারে তাদেরকে ঘোষনা দেয়া হবে। অমীমাংসিত অর্ডারের মেয়াদ শেষ হওয়ার ব্যাপারে প্রত্যেক কোর্সের শিক্ষককে ইমেইল এর সাহায্যে জানানো হবে।';
$string['anlogin'] = 'Authorize.Net: লগইন নাম';
$string['anpassword'] = 'Authorize.Net: পাসওয়ার্ড';
$string['anreferer'] = 'রেফারার';
$string['anrefererdesc'] = 'আপনি যদি authorize.Net মার্চেন্ট অ্যাকাউন্টে নির্ধারন করা থাকলে URL রেফারার বর্ণনা করুন। এটা ওয়েবহোস্টে একটি লাইন "Referer: URL" সন্নিবেশ করা হবে।';
$string['anreview'] = 'রিভিউ';
$string['anreviewdesc'] = 'ক্রেডিট কার্ড প্রক্রিয়াধীন করার আগে অর্ডার রিভিউ করা হয়।';
$string['antestmode'] = 'টেস্ট মোড';
$string['antestmodedesc'] = 'কেবল টেস্ট মোডে ট্রানজ্যাকশন চালানো হয় (কোনো টাকা তোলা হবে না)';
$string['antrankey'] = 'Authorize.Net: ট্র্যানজ্যাকশন কী';
$string['approvedreview'] = 'অনুমোদিত রিভিউ';
$string['authcaptured'] = 'অনুমোদিত / ক্যাপচারকৃত';
$string['authcode'] = 'অনুমোদনের কোড';
$string['authorize:config'] = 'Authorize.Net তালিকাভুক্ত নমুনা কনফিগার';
$string['authorize:manage'] = 'তালিকাভুক্ত ব্যবহারকারী ব্যবস্থাপনা';
$string['authorize:managepayments'] = 'টাকা পরিশোধ ব্যবস্থাপনা';
$string['authorize:unenrol'] = 'কোর্স থেকে ব্যবহারকারী তালিকাভুক্ত করা';
$string['authorize:unenrolself'] = 'কোর্স থেকে নিজেকে তালিকাভুক্ত করা';
$string['authorize:uploadcsv'] = 'CSV ফাইল আপলোড';
$string['authorizedpendingcapture'] = 'অনুমোদিত / অমীমাংসিত ক্যাপচার';
$string['authorizeerror'] = 'Authorize.Net ত্রুটি : {$a}';
$string['avsa'] = 'ঠিকানা (রাস্তা) মিলে, কিন্তু পোস্টাল কোড মিলে না';
$string['avsb'] = 'ঠিকানার তথ্য দেয়া নেই';
$string['avse'] = 'ঠিকানার সত্যতা যাচাই এর সিস্টেমে ত্রুটি';
$string['avsg'] = 'U.S. নয় এমন কার্ড ইস্যুকারী ব্যাংক';
$string['avsn'] = 'ঠিকানার (রাস্তা) বা পোস্টাল কোডের কোনোটিরই মিল নেই';
$string['avsp'] = 'ঠিকানার সত্যতা যাচাই এর সিস্টেম প্রয়োগযোগ্য নয়';
$string['avsr'] = 'পুনরায় চেষ্টা - সিস্টেম নেই বা সময় শেষ';
$string['avsresult'] = 'AVS ফলাফল: {$a}';
$string['avss'] = 'ইস্যুাকারী সার্ভিস সমর্থন করে না';
$string['avsu'] = 'ঠিকানার তথ্য বিদ্যমান নয়';
$string['avsw'] = '৯ সংখ্যার পোস্টাল কোডে মিল আছে, ঠিকানার (রাস্তার) নেই';
$string['avsx'] = 'ঠিকানা (রাস্তা) এবং ৯ সংখ্যার পোস্টাল কোডে মিল রয়েছে';
$string['avsy'] = 'ঠিকানা (রাস্তা) এবং ৫ সংখ্যার পোস্টাল কোডে মিল রয়েছে';
$string['avsz'] = '৫ সংখ্যার পোস্টাল কোডে মিল আছে, ঠিকানার (রাস্তার) নেই';
$string['canbecredit'] = '{$a->upto} এ পুনরায় জমা দেয়া যায়';
$string['cancelled'] = 'বাতিল';
$string['capture'] = 'ক্যাপচার';
$string['capturedpendingsettle'] = 'ক্যাপচার / অমিমাংসিত পরিশোধ';
$string['capturedsettled'] = 'ক্যাপচার / পরিশোধিত';
$string['captureyes'] = 'ক্রেডিট কার্ড ক্যাপচার করা হবে এবং ছাত্রদের কোর্সে তালিকা করা হবে। আপনি কি নিশ্চিত?';
$string['cccity'] = 'শহর';
$string['ccexpire'] = 'মেয়াদ শেষ হওয়ার তারিখ';
$string['ccexpired'] = 'ক্রেডিট কার্ডের মেয়াদ শেষ';
$string['ccinvalid'] = 'অকার্যকর কার্ড নাম্বার';
$string['cclastfour'] = 'CC শেষ চার';
$string['ccno'] = 'ক্রেডিট কার্ড নাম্বার';
$string['ccstate'] = 'অবস্থা';
$string['cctype'] = 'ক্রেডিট কার্ডের ধরণ';
$string['ccvv'] = 'কার্ড পরীক্ষা';
$string['ccvvhelp'] = 'কার্ডের পেছনে দেখুন (শেষ তিন ডিজিট)';
$string['choosemethod'] = 'আপনি যদি কোর্সে তালিকাকরণের কী জানেন তবে, অনুগ্রহ করে নিম্নে এটা যোগ করুন;<br />অন্যথায় আপনাকে এ কোর্সের জন্য টাকা পরিশোধ করতে হবে।';
$string['chooseone'] = 'নিচের দুই ক্ষেত্রের মধ্যে একটি বা উভয়টি পূরণ করুন। পাসওয়ার্ড প্রদর্শন করা হচ্ছে না।';
$string['cost'] = 'মূল্য';
$string['costdefaultdesc'] = 'কোর্সের মূল্যের ক্ষেত্রে পূর্বনির্ধারিত মূল্য ব্যবহার করতে <strong>কোর্স সেটিং এ, ১-দিন</strong>';
$string['currency'] = 'মূদ্রা';
$string['cutofftime'] = 'কাটার সময়';
$string['cutofftimedesc'] = 'ট্র্যানজ্যাকশন কাটার সময়। পরিশোধের জন্য কখন সর্বশেষ ট্র্যানজ্যাকশন করা হয়?';
$string['dataentered'] = 'যে ডাটা দেয়া হয়েছে';
$string['delete'] = 'ধ্বংস';
$string['description'] = 'Authorize.Net মডিউল আপনাকে টাকা পরিশোধকারীর মাধ্যমে পেইড কোর্স নির্ধারন করার অনুমতি দেয়। কোর্সের মূল্য নির্ধারন করার দুটি উপায় আছে (১) সম্পূর্ণ সাইটের জন্য পূর্বনির্ধারিত সাইট-ওয়াইড মূল্য অথবা (২) একটি কোর্স সেটিং যার সাহায্যে প্রত্যেকটি কোর্সের জন্য আলাদাভাবে নির্ধারণ করতে হবে। কোর্সের মূল্য সাইটের মূল্যকে উপেক্ষা করে।';
$string['echeckabacode'] = 'ব্যাংক ABA নাম্বার';
$string['echeckaccnum'] = 'ব্যাংক অ্যাকাউন্ট নাম্বার';
$string['echeckacctype'] = 'ব্যাংক অ্যাকাউন্টের ধরণ';
$string['echeckbankname'] = 'ব্যাংকের নাম';
$string['echeckbusinesschecking'] = 'ব্যবসা পরীক্ষা';
$string['echeckchecking'] = 'পরীক্ষা';
$string['echeckfirslasttname'] = 'ব্যাংক অ্যাকাউন্ট এর মালিক';
$string['echecksavings'] = 'সংরক্ষণ';
$string['enrolenddate'] = 'শেষের তারিখ';
$string['enrolenddaterror'] = 'তালিকা শেষ করার তারিখ শুরু হওয়ার তারিখের চেয়ে আগে হতে পারে না';
$string['enrolname'] = 'Authorize.Net পেমেন্ট গেইটওয়ে';
$string['enrolperiod'] = 'তালিকার করার সময়কাল';
$string['enrolstartdate'] = 'শুরুর তারিখ';
$string['expired'] = 'মেয়াদ শেষ';
$string['expiremonth'] = 'মেয়াদ শেষ হওয়ার মাস';
$string['expireyear'] = 'মেয়াদ শেষ হওয়ার বছর';
$string['firstnameoncard'] = 'কার্ডের প্রথম নাম';
$string['haveauthcode'] = 'আমার ইতোমধ্যে একটি অনুমোদিত কোড আছে';
$string['howmuch'] = 'কত?';
$string['httpsrequired'] = 'আমরা দুঃখের সাথে জানাচ্ছি যে, আপনার অনুরোধ এখন রাখা যাচ্ছে না। ফাইলের কনফিগারেশন সঠিকভাবে নির্ধারণ করা যায়নি।<br /><br />অনুগ্রহ করে আপনার ব্রাউজারে নিচে একটি হলুদ লক না দেখা পর্যন্ত ক্রেডিট কার্ডের নাম্বার দিবেন না। যদি চিহ্নটি আসে তবে এটা বুঝায় যে এ পৃষ্ঠা সব ডাটা ক্লায়েন্ট এবং সার্ভারের মধ্যেই এনক্রিপ্ট করে। সুতরাং, ট্র্যানজ্যাকশন এর সময় তথ্য দুটি কম্পিউটারের মধ্যেই সুরক্ষিত থাকবে, তাহলে আপনার ক্রেডিট কার্ডের নাম্বার ইন্টারনেট ক্যাপচার করতে পারেনা।';
$string['invalidaba'] = 'অকার্যকর ABA নাম্বার';
$string['invalidaccnum'] = 'অকার্যকর অ্যাকাউন্ট নাম্বার';
$string['invalidacctype'] = 'অকার্যকর অ্যাকাউন্ট এর ধরণ';
$string['isbusinesschecking'] = 'এটা কি ব্যবসায়িক পরীক্ষা?';
$string['lastnameoncard'] = 'কার্ডে নামের শেষ অংশ';
$string['logindesc'] = 'এ অপশন সচল রাখা উচিত। <br /><br />অনুগ্রহ করে নিশ্চিত হন যে, আপনি Admin >> Variables >> Security এ <a href="{$a->url}">loginhttps ON</a> চালু করেছেন।<br /><br />লগইন এবং টাকা পরিশোধ পৃষ্ঠার জন্য মুডল এটা চালু করে নিরাপদ https সংযোগ ব্যবহার করতে পারে।';
$string['logininfo'] = 'Authorize.Net অ্যাকাউন্ট কনফিগার করার সময়, লগইন নাম আবশ্যক এবং আপনাকে অবশ্যই যথাযথ বাক্সে <strong>হয়</strong> ট্র্যানজ্যাকশন কী <strong>বা</strong> পাসওয়ার্ড দিতে হবে। নিরাপত্তাজনিত কারণে আমরা আপনাকে ট্র্যানজ্যাকশন কীই দিতে বলবো।';
$string['methodcc'] = 'ক্রেডিট নাম';
$string['methodccdesc'] = 'ক্রেডিট কার্ড নির্বাচন এবং নিম্নে অনুমোদিত ধরণ';
$string['methodecheck'] = 'eCheck (ACH)';
$string['methodecheckdesc'] = 'eCheck নির্বাচন এবং নিম্নে অনুমোদিত ধরণ';
$string['missingaba'] = 'অনুপস্থিত ABA নাম্বার';
$string['missingaddress'] = 'অনুপস্থিত ঠিকানা';
$string['missingbankname'] = 'অনুপস্থিত ব্যাংক নাম';
$string['missingcc'] = 'অনুপস্থিত কার্ড নাম্বার';
$string['missingccauthcode'] = 'অনুপস্থিত অনুমোদিত কোড';
$string['missingccexpiremonth'] = 'অনুপস্থিত মেয়াদ শেষ হওয়ার মাস';
$string['missingccexpireyear'] = 'অনুপস্থিত মেয়াদ শেষ হওয়ার বছর';
$string['missingcctype'] = 'অনুপস্থিত কার্ডের ধরণ';
$string['missingcvv'] = 'অনুপস্থিত সত্যতা যাচাই এর নাম্বার';
$string['missingzip'] = 'অনুপস্থিত পোস্টাল কোড';
$string['mypaymentsonly'] = 'কেবল আমার পেমেন্ট প্রদর্শন';
$string['nameoncard'] = 'কার্ডে নাম';
$string['new'] = 'নতুন';
$string['nocost'] = 'Authorize.Net হয়ে কোর্সে তালিকাভুক্ত করার সাথে কোনো মূল্য সম্পর্কিত ব্যাপার সম্পৃক্ত নয়!';
$string['noreturns'] = 'কোনো রিটার্ন নেই';
$string['notsettled'] = 'মীমাংসিত নয়';
$string['orderdetails'] = 'ক্রমের বিস্তারিত তথ্য';
$string['orderid'] = 'ক্রমআইডি';
$string['paymentmanagement'] = 'টাকা পরিশোধ ব্যবস্থাপনা';
$string['paymentmethod'] = 'টাকা পরিশোধ করার পদ্ধতি';
$string['paymentpending'] = '{$a->orderid} অর্ডার নাম্বারের আইডির কোর্সের টাকা পরিশোধ করা হয়নি। <a href=\'{$a->url}\'>Order Details</a> দেখুন।';
$string['pendingecheckemail'] = 'প্রিয় ব্যবস্থাপক,

এখন {$a->count} সংখ্যক অমীমাংসিত ইচেক আছে এবং তালিকাভুক্ত ব্যবহারকারী পাওয়ার জন্য csv ফাইল আপলোড।

পৃষ্ঠায় সহায়তা ফাইল পড়ার জন্য লিঙ্ক ক্লিক করুন:
{$a->url}';
$string['pendingechecksubject'] = '{$a->course}: অমীমাংসিত ইচেক({$a->count})';
$string['pendingordersemail'] = 'প্রিয় প্রসাশন,

"{$a->course}" কোর্সের জন্য {$a->days} দিনের মধ্যে টাকা পরিশোধ অনুমোদন না করলে {$a->pending} ট্র্যানজ্যাকশন মেয়াদ শেষঅ হয়ে যাবে।

এটি একটি সতর্ক বার্তা, কারণ আপনি scheduled-capture সক্রিয় করেননি।
তার মানে হচ্ছে আপনাকে টাকা পরিশোধ এর ব্যাপার নিজ হাতে গ্রহন বা প্রত্যাখান করতে হবে।

অমীমাংসিত টাকা পরিশোধের ব্যাপার গ্রহন বা প্রত্যাখান করতে:
{$a->url} এ যান

scheduled-capture সক্রিয় করা হলে বুঝায় যে, আর কোনো সতর্ক বার্তা আসবে না,:

{$a->enrolurl} এ যান';
$string['pendingordersemailteacher'] = 'প্রিয় শিক্ষক,

{$a->days} দিনের মধ্যে টাকা পরিশোধের ব্যাপার গ্রহন বা প্রত্যাখান না করলে "{$a->course}" কোর্সের জন্য {$a->currency} {$a->sumcost} মুল্যের {$a->pending} ট্যানজ্যাকশন এর মেয়াদ শেষ হয়ে যাবে।

নিজ হাতে টাকা পরিশোধ গ্রহন বা পরিত্যাগ করতে হবে কারণ প্রসাশন scheduled-capture সক্রিয় করেনি।

{$a->url}';
$string['pendingorderssubject'] = 'সতর্কীকরণ: {$a->course}, {$a->days} দিনের মধ্যে {$a->pending} অর্ডার এর মেয়াদ শেষ হয়ে যাবে।';
$string['pluginname'] = 'অনুমোদিত';
$string['reason11'] = 'নকল ট্র্যানজ্যাকশন জমা হয়েছে।';
$string['reason13'] = 'মার্চেন্ট লগইন আইডি অকার্যকর বা অ্যাকাউন্ট সক্রিয় নেই।';
$string['reason16'] = 'ট্র্যানজ্যাকশন পাওয়া যায়নি।';
$string['reason17'] = 'মার্চেন্ট এ ধরনের ক্রেডিট কার্ড গ্রহণ করেনা।';
$string['reason245'] = 'টাকা পরিশোধের গেইটওয়ে হোস্টকৃত ফরম ব্যবহার করার সময় এ ইচেকের ধরণ অনুমোদিত নয়।';
$string['reason246'] = 'এ ধরণের ইচেক অনুমোদিত নয়।';
$string['reason27'] = 'এ ট্র্যানজ্যাকশন এ AVS অমিল দেখা দেয়। কার্ডের-মালিকের বিল প্রদান করার ঠিকানার সাথে সরবরাহকৃত ঠিকানা মিলে না।';
$string['reason28'] = 'মার্চেন্ট এ ধরণের ক্রেডিট কার্ড গ্রহন করে না।';
$string['reason30'] = 'প্রসেসর এর কনফিগারেশন অকার্যকর। মার্চেন্ট সার্ভিস সরবরাহককে কল করুন।';
$string['reason39'] = 'সরবরাহকৃত মূদ্রার কোড হতে পারে অকার্যকর, সমর্থিত নয়, এ মার্চেন্টের জন্য অনুমোদিত নয় বা কোনো এক্সচেঞ্জ এর হার নেই।';
$string['reason43'] = 'প্রসেসর এ মার্চেন্ট ঠিকভাবে সেটআপ করা নেই। মার্চেন্ট সার্ভিস সরবরাহককে কল করুন।';
$string['reason44'] = 'ট্র্যানজ্যাকশন বাতিল করা হয়েছে। কার্ড কোড ফিল্টার ত্রুটি!';
$string['reason45'] = 'ট্র্যানজ্যাকশন বাতিল করা হয়েছে। কার্ড কোড / AVS ফিল্টার ত্রুটি!';
$string['reason47'] = 'মিটমাট করার জন্য যে পরিমান টাকা জন্য অনুরোধ করা হয়েছে তা অনুমোদিত টাকার পরিমানের চেয়ে বেশি নাও হতে পারে।';
$string['reason5'] = 'আবশ্যক কার্যকর পরিমান।';
$string['reason50'] = 'এ ট্র্যানজ্যাকশন পরিশোধের জন্য অপেক্ষামান এবং রিফান্ড করা যায়না।';
$string['reason51'] = 'এ ট্র্যানজ্যাকশনের বিপরীতে যত ক্রেডিট আছে তার যোগফল প্রকৃত ট্র্যানজ্যাকশনের পরিমানের চেয়ে বেশি হতে হবে।';
$string['reason54'] = 'ক্রেডিট ইস্যু করার জন্য যে বৈশিষ্ট্য থাকা দরকার তা এই রেফারেন্সকৃত ট্র্যানজ্যাকশনে নেই।';
$string['reason55'] = 'এ রেফারেন্সকৃত ট্র্যানজ্যাকশনের বিপরীতে ক্রেডিটের যোগফল প্রকৃত ডেবিটের পরিমানের চেয়ে বেশি হতে হয়।';
$string['reason56'] = 'এ বাণিজ্য সংক্রান্ত ব্যাপারে কেবল eCheck (ACH) ট্র্যানজ্যাকশন গ্রহন করা হয়; কোনো ক্রেডিট কার্ড ট্র্যানজ্যাকশন গৃহীত হয় না।';
$string['refund'] = 'রিফান্ড';
$string['refunded'] = 'রিফান্ডকৃত';
$string['returns'] = 'রিটার্ন';
$string['reviewfailed'] = 'রিভিউ করা ব্যর্থ';
$string['reviewnotify'] = 'আপনার টাকা পরিশোধ রিভিউ করা হবে।';
$string['sendpaymentbutton'] = 'পেমেন্ট প্রেরণ';
$string['settled'] = 'ঠিকঠাক';
$string['settlementdate'] = 'পরিশোধের তারিখ';
$string['shopper'] = 'ক্রেতা';
$string['status'] = 'Autorize.net তালিকা করা অনুমোদিত';
$string['subvoidyes'] = 'রিফান্ডকৃত ট্র্যানজ্যাকশন ({$a->transid}) বাতিল হতে যাচ্ছে এবং এটা আপনার অ্যাকাউন্টে {$a->amount} ক্রেডিট করতে পারে। আপনি কি নিশ্চিত?';
$string['tested'] = 'পরীক্ষিত';
$string['testmode'] = '[TEST MODE]';
$string['testwarning'] = 'টেস্ট মোডে Capturing/Voiding/Refunding কাজ করছে বলে মনে হচ্ছে, কিন্তু ডাটাবেসে কোনো রেকর্ড হালানাগাদ বা সন্নিবেশ করা হয়নি।';
$string['transid'] = 'ট্র্যানজাকশনআইডি';
$string['underreview'] = 'রিভিউ করা হচ্ছে';
$string['unenrolselfconfirm'] = 'আপনি কি সত্যিই এ কোর্স "{$a}" থেকে তালিকামুক্ত হতে চান?';
$string['unenrolstudent'] = 'শিক্ষার্থীকে তালিকামুক্ত?';
$string['uploadcsv'] = 'CSV ফাইল আপলোড';
$string['usingccmethod'] = '<a href="{$a->url}"><strong>ক্রেডিট কার্ড</strong></a> ব্যবহার করে তালিকা করা';
$string['usingecheckmethod'] = '<a href="{$a->url}"><strong>eCheck</strong></a> ব্যবহার করে তালিকা করা';
$string['verifyaccount'] = 'আপনার authorize.Net বাণিজ্য সংক্রান্ত অ্যাকাউন্ট পরীক্ষা';
$string['verifyaccountresult'] = '<b>সত্যতা যাচাই এর ফলাফল:</b> {$a}';
$string['void'] = 'বাতিল';
$string['voidyes'] = 'ট্র্যানজ্যাকশন বাতিল হয়ে যাবে। আপনি কি নিশ্চিত?';
$string['welcometocoursesemail'] = 'প্রিয় {$a->name},

টাকা পরিশোধের জন্য ধন্যবাদ। আপনি এ কোর্সগুলোতে তালিকাভুক্ত হয়েছেন:

{$a->courses}

আপনি টাকা পরিশোধের সব তথ্য দেখতে পাবেন এবং প্রোফাইল সম্পাদনা করতে পারেন:
 {$a->paymenturl}
 {$a->profileurl}';
$string['youcantdo'] = 'আপনি এ কাজ করতে পারেন না: {$a->action}';
$string['zipcode'] = 'জিপ কোড';
