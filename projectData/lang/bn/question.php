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
 * Strings for component 'question', language 'bn', version '3.11'.
 *
 * @package     question
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminreport'] = 'আপনার প্রশ্নের ডাটাবেসে সম্ভাব্য সমস্যা নিয়ে রিপোর্ট';
$string['availableq'] = 'বিদ্যমান?';
$string['badbase'] = 'পূর্ববর্তী ভুল বেস **: {$a}**';
$string['broken'] = 'এটি একটি "খন্ডায়িত লিঙ্ক", এ দ্বারা অবাস্তব ফাইল বুঝায়।';
$string['byandon'] = '<em>{$a->time}</em> তে <em>{$a->user}</em> দ্বারা';
$string['cannotcopybackup'] = 'ব্যাকআপ ফাইল অনুলিপি করা যায়নি';
$string['cannotcreate'] = 'question_attempts সারণিতে নতুন এন্ট্রি তৈরি করা যায়নি';
$string['cannotcreatepath'] = 'পাথ তৈরি করা যায়নি: {$a}';
$string['cannotdeletecate'] = 'আপনি ঐ বিভাগটি অপসারণ করতে পারেন না, কারণ এটা এই প্রসঙ্গের পূর্বনির্ধারিত বিভাগ হিসাবে রয়েছে।';
$string['cannotdeleteqtypeinuse'] = 'আপনি \'{$a}\' ধরনের প্রশ্ন মুছে ফেলাতে পারেন না। প্রশ্ন ব্যাংকে এ ধরনের আরও প্রশ্ন রয়েছে।';
$string['cannotdeleteqtypeneeded'] = 'আপনি \'{$a}\' ধরনের প্রশ্ন মুছে ফেলতে পারেন না। ইনস্টলকৃত অন্যান্য ধরনের প্রশ্ন এর উপর নির্ভরশীল।';
$string['cannotenable'] = 'প্রশ্নের ধরণ {$a} সরাসরি তৈরি করা যায়না।';
$string['cannotfindcate'] = 'বিভাগীয় রেকর্ড খুঁজে পাওয়া যায়নি';
$string['cannotfindquestionfile'] = 'প্রশ্নের ডাটা ফাইল zip এ খুঁজে পাওয়া যায়নি';
$string['cannotgetdsfordependent'] = 'ডাটাসেট নির্ভরশীল প্রশ্নের জন্য নির্ধারিত ডাটাসেট পাওয়া যায়নি! (প্রশ্ন: {$a[0]},ডাটাসেটআইটেম: {a[1]})';
$string['cannotgetdsforquestion'] = 'গণনাকৃত প্রশ্নের জন্য নির্ধারিত ডাটাসেট পাওয়া যায়নি! (প্রশ্ন: {$a})';
$string['cannothidequestion'] = 'প্রশ্ন আড়াল করা যায়নি';
$string['cannotimportformat'] = 'দুঃখিত, বিন্যাস ইম্পোর্ট করা এখনও বাস্তবায়িত হয়নি!';
$string['cannotinsertquestion'] = 'নতুন প্রশ্ন সংযোজন করা যায়নি!';
$string['cannotinsertquestioncatecontext'] = 'নতুন প্রশ্নের বিভাগ সংযোজন করা যায়নি {$a->cat} অবৈধ কনটেক্সআইডি {$a->ctx}';
$string['cannotloadquestion'] = 'প্রশ্ন লোড করা যায়নি';
$string['cannotmovequestion'] = 'আপনি সেসকল প্রশ্নে বিভিন্ন এরিয়া থেকে ফাইল সংযুক্ত থাকে সেগুলো এ স্ক্রিপ্ট ব্যবহার করে সরাতে পারেন না।';
$string['cannotopenforwriting'] = 'লেখার জন্য খোলা যায়নি: {$a}';
$string['cannotpreview'] = 'এ প্রশ্নগুলো প্রাকদর্শন করা যায়নি!';
$string['cannotread'] = 'ফাইল ইম্পোর্ট পড়তে পারে না (অথবা ফাইল খালি)';
$string['cannotretrieveqcat'] = 'প্রশ্নের বিভাগ উদ্ধার করা যায়নি';
$string['cannotunhidequestion'] = 'প্রশ্ন আড়াল করতে ব্যর্থ।';
$string['cannotunzip'] = 'ফাইল আনজিপ করা যায়নি।';
$string['cannotwriteto'] = '{$a} এক্সপোর্টকৃত প্রশ্ন লিখতে পারেনা';
$string['categories'] = 'বিভাগ';
$string['categorycurrent'] = 'বর্তমান বিভাগ';
$string['categorycurrentuse'] = 'এ বিভাগ ব্যবহার';
$string['categorydoesnotexist'] = 'এ বিভাগের অস্তিত্ব নেই';
$string['categorymoveto'] = 'বিভাগে সংরক্ষণ';
$string['changepublishstatuscat'] = '"{$a->coursename}" কোর্সে <a href="{$a->caturl}"> বিভাগ"{$a->name}"</a> এ এর শেয়ার করা অবস্থান <strong>{$a->changefrom} থেকে পরিবর্তিত হয়ে {$a->changeto}</strong> হয়।';
$string['chooseqtypetoadd'] = 'সংযুক্ত করার জন্য প্রশ্নের একটি ধরণ নির্বাচন';
$string['clicktoflag'] = 'এ প্রশ্ন ফ্ল্যাগ করতে ক্লিক';
$string['clicktounflag'] = 'এ প্রশ্ন আন-ফ্ল্যাগ করতে ক্লিক';
$string['contexterror'] = 'আপনি যদি এ বিভাগকে অন্য কনটেক্সটে সরাতে না চান তবে আপনার এখানে আসা উচিত হয়নি।';
$string['copy'] = '{$a} হতে অনুলিপি করে লিঙ্ক পরিবর্তন';
$string['created'] = 'তৈরি করা';
$string['createdby'] = 'তৈরি করা';
$string['createdmodifiedheader'] = 'তৈরি / শেষবার সংরক্ষণ';
$string['createnewquestion'] = 'নতুন প্রশ্ন তৈরি করা হয়েছে ...';
$string['cwrqpfs'] = 'এলোমেলো প্রশ্ন উপ-বিভাগ থেকে প্রশ্ন নির্বাচন করছে।';
$string['cwrqpfsinfo'] = '<p>মুডল ১.৯ আপগ্রেড করার সময় আমরা প্রশ্নের বিভাগ
বিভিন্ন কনটেক্সটে পৃথক করে নিব। আপনার সাইটের কিছু প্রশ্নের বিভাগ এবং প্রশ্ন এর জন্য তাদের শেয়ারকৃত
পরিবর্তিত স্ট্যাটাস থাকতে হবে। কদাচিৎ কিছু ক্ষেত্রে এটা জরুরী যেখানে কুইজে এক বা একাধিক \'এলোমেলো\' প্রশ্ন
শেয়ারকৃত এবং আনশেয়ারকৃত উভয় বিভাগ থেকে নির্বাচন করার জন্য নির্ধারণ করা হয় (যেমন, এই সাইটের জন্য)। যখন একটি \'এলোমেলো\' প্রশ্ন কোনো উপ-বিভাগ থেকে নির্বাচন করার জন্য নির্ধারণ করা থাকে তখন এমন ঘটে এবং এক বা একাধিক উপ-বিভাগের তার উর্ধ্বস্থ বিভাগের জন্য বিভিন্ন শেয়ার করা স্ট্যাটাস রয়েছে, যেখানে
এলোমেলো প্রশ্ন তৈরি হয়।</p>
<p>মুডল ১.৯ আপগ্রেডে
 নিম্নোক্ত প্রশ্নের বিভাগ, যেখান থেকে উর্ধ্বস্থ বিভাগ এলোমেলো প্রশ্নের জন্য প্রশ্ন নির্বাচন করে,
তাদের শেয়ারকৃত স্ট্যাটাস পরিবর্তন করে \'এলোমেলো\' প্রশ্নের বিভাগের মত একই স্ট্যাটাস থাকবে। নিম্নোক্ত বিভাগে তাদের পরিবর্তিত স্ট্যাটাস থাকবে। যেসকল প্রশ্নে
প্রভাব পড়েছে সেগুলো বিদ্যমান সকল কুইজে কাজ করতে থাকবে যতক্ষন পর্যন্ত না আপনি কুইজগুলো থেকে প্রশ্নগুলো অপসারন করেন।</p>';
$string['cwrqpfsnoprob'] = 'আপনার সাইটে কোনো প্রশ্নের বিভাগে \'উপ-বিভাগ থেকে এলোমেলো প্রশ্ন নির্বাচন\' বিষয়টি কোনো প্রভাব ফেলতে পারেনি।';
$string['defaultfor'] = '{$a} এর জন্য পূর্বনির্ধারিত';
$string['defaultinfofor'] = 'প্রশ্নের জন্য পূর্বনির্ধারিত বিভাগ \'{$a}\' কনটেক্সটে শেয়ার করা হয়েছে।';
$string['deletecoursecategorywithquestions'] = 'প্রশ্ন ব্যাংকে এ কোর্স বিভাগের সাথে সম্পৃক্ত প্রশ্ন রয়েছে। আপনি যদি অগ্রসর হন তবে সেগুলো অপসারিত হয়ে যাবে। আপনি প্রথমে প্রশ্ন ব্যাংক ইন্টারফেস ব্যবহার করে সেগুলোকে সরাতে পারেন।';
$string['deletingqtype'] = 'প্রশ্নের ধরন \'{$a}\' মুছে ফেলা হচ্ছে';
$string['disabled'] = 'নিস্ক্রিয়';
$string['disterror'] = 'বন্টন {$a} এর ফলে সমস্যা হয়েছে';
$string['donothing'] = 'ফাইল অনুলিপি বা সরানো অথবা লিঙ্ক পরিবর্তন করা যাবে না।';
$string['editcategories'] = 'বিভাগ সম্পাদনা';
$string['editcategories_help'] = 'সবগুলো প্রশ্ন একটা বিশাল তালিকায় না রেখে সেগুলোকে বিভিন্ন বিভাগ ও উপ-বিভাগে সাজানো ভাল।

প্রত্যেক বিভাগে কনটেক্সট রয়েছে যা নির্ধারণ করে প্রশ্নটি ঐ বিভাগের কোথায় ব্যবহার করা যায়:

* সক্রিয় কনটেক্সট - সক্রিয় মুডলে বিদ্যমান প্রশ্ন
* কোর্স কনটেক্সট - কোর্সের সকল সক্রিয় মুডলে বিদ্যমান প্রশ্ন
* কোর্স বিভাগীয় কনটেক্সট - কোর্স বিভাগের সকল সক্রিয় মুডল এবং কোর্সে বিদ্যমান প্রশ্ন
* সিস্টেম কনটেক্সট - সাইটের সকল কোর্স এবং সক্রিয়তায় বিদ্যমান প্রশ্ন

এলোমেলো প্রশ্নের জন্যও একটি বিভাগ ব্যবহার করা হয় যেহেতু এগুলো একটি নির্দিষ্ট বিভাগ থেকে নির্বািচত হয়।';
$string['editcategories_link'] = 'প্রশ্ন/বিভাগ';
$string['editingcategory'] = 'বিভাগ সম্পাদনা';
$string['editingquestion'] = 'প্রশ্ন সম্পাদনা';
$string['editthiscategory'] = 'এ বিভাগ সম্পাদনা';
$string['emptyxml'] = 'অজানা ত্রুটি  - ফাঁকা imsmanifest.xml';
$string['enabled'] = 'সক্রিয়';
$string['erroraccessingcontext'] = 'প্রসঙ্গ পড়া যাচ্ছে না';
$string['errordeletingquestionsfromcategory'] = '{$a} বিভাগ থেকে প্রশ্ন অপসারনে ত্রুটি';
$string['errorduringpost'] = 'পরবর্তী-প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে!';
$string['errorduringpre'] = 'প্রাক-প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে!';
$string['errorduringproc'] = 'প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে!';
$string['errorduringregrade'] = 'প্রশ্নে {$a->qid} পুরনায় গ্রেড দেয়া যাচ্ছে না, {$a->stateid} অবস্থায় যাচ্ছে।';
$string['errorfilecannotbecopied'] = 'ত্রুটি: ফাইল {$a} অনুলিপি করা যাচ্ছে না।';
$string['errorfilecannotbemoved'] = 'ত্রুটি: ফাইল {$a} সরানো যাচ্ছে না।';
$string['errorfileschanged'] = 'ত্রুটি: ফর্ম প্রদর্শিত হওয়ার কারণে প্রশ্ন পরিবর্তিত হওয়ার সাথে ফাইল সংযুক্তি।';
$string['erroritemappearsmorethanoncewithdifferentweight'] = 'পরীক্ষায় প্রশ্ন ({$a}) একাধিকবার বিভিন্ন জায়গায় বিভিন্ন অর্থ বুঝায়। এটা বর্তমানে পরিসংখ্যান রিপোর্টকর্তৃক সমর্থিত নয় এবং প্রশ্নের জন্য যে পরিসংখ্যান তৈরি করে তা অনির্ভরযোগ্য।';
$string['errormanualgradeoutofrange'] = 'প্রশ্ন {$a->name} এর জন্য গ্রেড {$a->grade}০ থেকে {$a->maxgrade} না। স্কোর এবং মন্তব্য সংরক্ষণ করা হয়নি।';
$string['errormovingquestions'] = 'ids {$a} সহ প্রশ্ন সরানোর সময় ত্রুটি।';
$string['errorpostprocess'] = 'পরবর্তী-প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে!';
$string['errorpreprocess'] = 'প্রাক-প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে!';
$string['errorprocess'] = 'প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে!';
$string['errorprocessingresponses'] = 'আপনার উত্তর প্রক্রিয়াকরণের সময় ত্রুটি হয়েছে।';
$string['errorsavingcomment'] = 'ডাটাবেসে প্রশ্নের {$a->name} মন্তব্য সংরক্ষণে ত্রুটি।';
$string['errorupdatingattempt'] = 'ডাটাবেসে প্রচেষ্টা {$a->id} হালনাগাদ করাতে ত্রুটি।';
$string['export'] = 'এক্সপোর্ট';
$string['exportcategory'] = 'এক্সপোর্ট বিভাগ';
$string['exportcategory_help'] = 'কোন বিভাগ থেকে এক্সপোটকৃত প্রশ্ন নেয়া হবে তা এই সেটিং নির্ধারণ করে।

কিছু নির্দিষ্ট ডাটা বিন্যাস যেমন, GIFT এবং Moodle XML, এক্সপোর্ট ফাইলে বিভাগ ও কনটেক্সট ডাটা সংযুক্ত করার অনুমতি দেয় এবং ইম্পোর্ট এর সময় পুনরায় তৈরি করা (ঐচ্ছিকভাবে) সক্রিয় করে। যদি প্রয়োজন হয় তবে, যথাযথ চেকবক্সে টিক দিতে হবে।';
$string['exporterror'] = 'এক্সপোর্ট করার সময় ত্রুটি!';
$string['exportquestions'] = 'ফাইলে প্রশ্ন এক্সপোর্ট';
$string['exportquestions_help'] = 'এ ফাংশন প্রশ্নের একটি সম্পূর্ন  বিভাগ (এবং একটি উপবিভাগ) ফাইলে এক্সপোর্ট করা সক্রিয় করে। অনুগ্রহ করে মনে রাখুন যে, নির্বাচিত ফাইল বিন্যাসের উপর ভিত্তি করে কিছু প্রশ্নের ডাটা এবং প্রশ্নের ধরণ এক্সপোর্ট নাও করা যেতে পারে।';
$string['exportquestions_link'] = 'প্রশ্ন/এক্সপোর্ট';
$string['filecantmovefrom'] = 'প্রশ্নের ফাইল সরানো যাচ্ছে না কারণ আপনি যেখান থেকে প্রশ্নগুলো সরাতে চাচ্ছেন সেখান থেকে কোনো ফাইল অপসারণ করার অনুমোদন নাই।';
$string['filecantmoveto'] = 'প্রশ্নের ফাইল সরানো যাচ্ছে না বা অনুলিপি করা যাচ্ছে না কারণ আপনি যেখান থেকে প্রশ্নগুলো সরাতে চাচ্ছেন সেখানে কোনো ফাইল যোগ করার অনুমোদন নাই।';
$string['filesareacourse'] = 'কোর্স ফাইল এরিয়া';
$string['filesareasite'] = 'সাইট ফাইল এরিয়া';
$string['filestomove'] = '{$a} ফাইল সরাতে / অনুলিপি করতে চান?';
$string['flagged'] = 'ফ্ল্যাগকৃত';
$string['flagthisquestion'] = 'এ প্রশ্ন ফ্ল্যাগ';
$string['formquestionnotinids'] = 'যেসকল প্রশ্ন প্রশ্নআইডিতে নেই, ফর্মে রয়েছে';
$string['fractionsnomax'] = 'অন্তত একটি উত্তরে ১০০% স্কোর থাকতে হবে, যাতে এ প্রশ্নের জন্য পূর্ন মান পাওয়া সম্ভব হয়।';
$string['getcategoryfromfile'] = 'ফাইল থেকে বিভাগ পাওয়া';
$string['getcontextfromfile'] = 'ফাইল থেকে কনটেক্সট পাওয়া';
$string['ignorebroken'] = 'ভাঙা লিংক উপেক্ষা';
$string['import'] = 'ইম্পোর্ট';
$string['importcategory'] = 'বিভাগ ইম্পোর্ট';
$string['importcategory_help'] = 'ইম্পোর্টকৃত প্রশ্ন কোন বিভাগে রাখা হবে তা এই সেটিং এর সাহায্যে নির্ধারিত হয়।

কিছু নির্ধারিত ইম্পোর্ট বিন্যাস, যেমন: GIFT এবং মুডল XML, ফাইল ইম্পোর্টে বিভাগ ও কনটেক্সট ডাটা সংযুক্ত করতে পারে। নির্বাচিত বিভাগ এর চেয়ে এ ডাটা ব্যবহার করার জন্য উপযুক্ত চেকবক্সে টিক চিহ্ন দিতে হবে। যদি ফাইল ইম্পোর্টে কোনো বিভাগ নির্ধারিত না থাকে তবে তা তৈরি করা হবে।';
$string['importquestions'] = 'ফাইল থেকে প্রশ্ন ইম্পোর্ট';
$string['importquestions_help'] = 'এ ফাংশন বিভিন্ন বিন্যাসে প্রশ্ন পাঠ্য ফাইল আকারে ইম্পোর্ট করতে সক্রিয় করে। মনে রাখবেন, ফাইল যাতে UTF-8 এনকোডিংকৃত থাকে।';
$string['importquestions_link'] = 'প্রশ্ন/ইম্পোর্ট';
$string['impossiblechar'] = 'অস্বাভাবিক অক্ষর {$a} প্যারাসিনথেসিস অক্ষর হিসাবে চিহ্নিত';
$string['invalidarg'] = 'কোনো কার্যকরী মান পাঠানো হয়নি বা ভুল সার্ভার কনফিগারেশন রয়েছে';
$string['invalidcategoryidforparent'] = 'প্যারেন্ট এর জন্য অকার্যকর বিভাগ আইডি!';
$string['invalidcategoryidtomove'] = 'সরানোর জন্য অকার্যকর বিভাগীয় আইডি!';
$string['invalidconfirm'] = 'নিশ্চিতকরণ স্ট্রিংটি ভুল ছিল';
$string['invalidcontextinhasanyquestions'] = 'অকার্যকর কনটেক্সট question_context_has_any_questions পাঠানো হয়েছে।';
$string['invalidwizardpage'] = 'ভুল অথবা কোনো উইজার্ড পৃষ্ঠা নির্দিষ্ট করা নাই!';
$string['lastmodifiedby'] = 'সর্বশেষ পরিবর্তিত';
$string['linkedfiledoesntexist'] = 'সংযুক্ত ফাইল {$a} নেই';
$string['makechildof'] = '{$a} এর চাইল্ড তৈরি';
$string['maketoplevelitem'] = 'শীর্ষ স্তরে সরানো হয়েছে';
$string['matchgrades'] = 'গ্রেডের মিল';
$string['matchgrades_help'] = 'ইম্পোর্টকৃত গ্রেড অবশ্যই কার্যকর গ্রেডের নির্ধারিত তালিকার সাথে মিলতে হবে - ১০০, ৯০, ৮০, ৭৫, ৭০, ৬৬.৬৬৬, ৬০, ৫০, ৪০, ৩৩.৩৩৩, ৩০, ২৫, ২০, ১৬.৬৬৬, ১৪.২৮৫৭, ১২.৫, ১১.১১১, ১০, ৫, ০ (ঋনাত্মক মানও রয়েছে)। যদি তা না হয়, তবে দুটি অপশন রয়েছে:

*  গ্রেডের তালিকা না করা হলে ত্রুটি - যদি কোনো প্রশ্নে তালিকার বাহিরে গ্রেড দেয়া হয় তবে একটি ত্রুটি প্রদর্শিত হয় এবং প্রশ্নটি ইম্পোর্ট করা হয়না
* সবচেয়ে কাছাকাছি গ্রেডও যদি তালিকায় না থাকে - যদি তালিকার মানের সাথে মিল রেখে গ্রেড পাওয়া না যায় তবে তালিকার মানের সবচেয়ে কাছাকাছি মানে পরিবর্তিত হয়';
$string['missingcourseorcmid'] = 'print_question এ কোর্সআইডি বা cmid সরবরাহ করা প্রয়োজন।';
$string['missingcourseorcmidtolink'] = 'get_question_edit_link এ কোর্সআইডি বা cmid সরবরাহ করা প্রয়োজন।';
$string['missingimportantcode'] = 'এ প্রশ্নের ধরনে গুরুত্বপূর্ন কোড অনুপস্থিত: {$a}';
$string['missingoption'] = 'ক্লোজ প্রশ্নে {$a} এর অপশন অনুপস্থিত';
$string['modified'] = 'শেষবার সংরক্ষিত';
$string['move'] = '{$a} থেকে সরিয়ে লিংক পরিবর্তন।';
$string['movecategory'] = 'বিভাগ সরানো';
$string['movedquestionsandcategories'] = 'প্রশ্ন এবং প্রশ্নের বিভাগ {$a->পুরাতনস্থান} থেকে {$a->নতুনস্থান} এ পরিবর্তন।';
$string['movelinksonly'] = 'লিংক যেখানে নির্দেশ করে সেখানে পরিবর্তন, ফাইল সরানো বা অনুলিপি করা হবে না।';
$string['moveq'] = 'প্রশ্ন সরানো';
$string['moveqtoanothercontext'] = 'প্রশ্ন অন্য কনটেক্সটে সরানো।';
$string['movingcategory'] = 'বিভাগ সরানো হচ্ছে';
$string['movingcategoryandfiles'] = 'আপনি কি বিভাগ {$a->name} এবং সকল চাইল্ড বিভাগ, "{$a->contextto}" এর কনটেক্সটে সরানোর ব্যাপারে নিশ্চিত?<br /> {$a->fromareaname} এর প্রশ্নের সাথে সংযুক্ত ফাইল আমরা সনাক্ত {$a->urlcount} করেছি, আপনি কি এগুলো অনুলিপি করে বা সরিয়ে {$a->toareaname} এ নিতে চান?';
$string['movingcategorynofiles'] = 'আপনি কি বিভাগ "{$a->name}" এবং সকল চাইল্ড বিভাগ সরিয়ে "{$a->contextto}" এর কনটেক্সটে নেয়ার ব্যাপারে নিশ্চিত?';
$string['movingquestions'] = 'প্রশ্ন এবং যেকোনো ফাইল সরানো হচ্ছে';
$string['movingquestionsandfiles'] = 'আপনি কি প্রশ্ন {$a->questions}, <strong>"{$a->tocontext}"</strong> এর কনটেক্সটে সরিয়ে নেয়ার ব্যাপারে নিশ্চিত?<br /> আমরা {$a->fromareaname} এর প্রশ্নের সাথে সংযুক্ত <strong>{$a->urlcount} ফাইল সনাক্ত করেছি, আপনি কি এগুলো অনুলিপি করে বা সরিয়ে {$a->toareaname} এ নিতে চান?';
$string['movingquestionsnofiles'] = 'আপনি কি <strong>"{$a->tocontext}"</strong> এর কনটেক্সটে প্রশ্ন {$a->questions} সরিয়ে নেয়ার নিশ্চিত?<br />{$a->fromareaname} এর প্রশ্নের সাথে সংযুক্ত <strong>কোনো ফাইল</strong> নেই।';
$string['needtochoosecat'] = 'এ প্রশ্ন সরিয়ে নেয়ার জন্য আপনার একটি বিভাগ নির্বাচন করা প্রয়োজন অথবা \'বাতিল\' চাপুন।';
$string['nocate'] = 'এমন কোনো বিভাগ {$a} নেই!';
$string['nopermissionadd'] = 'এখানে প্রশ্ন সংযুক্ত করার অনুমতি আপনার নেই।';
$string['nopermissionmove'] = 'এখানে প্রশ্ন স্থানান্তর করার অনুমতি আপনার নেই। আপনাকে এ বিভাগে প্রশ্ন সংরক্ষণ করতে হবে অথবা নতুন প্রশ্ন হিসাবে সংরক্ষণ করতে হবে।';
$string['noprobs'] = 'আপনার প্রশ্নের ডাটাবেসে কোনো সমস্যা পাওয়া যায়নি।';
$string['noquestionsinfile'] = 'ফাইল ইম্পোর্টে কোনো প্রশ্ন নেই';
$string['notenoughdatatoeditaquestion'] = 'কোনো প্রশ্নের আইডি বা কোনো বিভাগীয় আইডি এবং কোনো প্রশ্নের ধরণ নির্ধারণ হয়নি।';
$string['notenoughdatatomovequestions'] = 'আপনি যে প্রশ্ন স্থানান্তর করতে চান তার প্রশ্ন আইডি আপনাকে সরবরাহ করতে হবে।';
$string['notflagged'] = 'ফ্লাগকৃত নয়';
$string['novirtualquestiontype'] = '{$a} ধরণের প্রশ্নের জন্য কোনো ভারচুয়াল প্রশ্ন নেই';
$string['numquestions'] = 'নং প্রশ্ন';
$string['numquestionsandhidden'] = '{$a->numquestions} (+{$a->numhidden} আড়াল)';
$string['parentcategory'] = 'প্যারেন্ট বিভাগ';
$string['parentcategory_help'] = 'নতুন বিভাগ যোগ করার জায়গা হল প্যারেন্ট বিভাগ। "শীর্ষ" মানে হল এ বিভাগে অন্য আর কোনো বিভাগ নেই। বিভাগীয় কনটেক্সট গাঢ় অক্ষরে প্রদর্শিত হয়। প্রত্যেক কনটেক্সটে অন্তত একটি বিভাগ থাকতে হয়।';
$string['parentcategory_link'] = 'প্রশ্ন/বিভাগ';
$string['parenthesisinproperclose'] = '** যখন {$a}** এ যথাযথভাবে বন্ধ করা হয়নি তার পূর্ববর্তী প্যারেনথেসিস';
$string['parenthesisinproperstart'] = '** যখন {$a}** এ যথাযথভাবে শুরু করা হয়নি তার পূর্ববর্তী প্যারেনথেসিস';
$string['penaltyfactor'] = 'শাস্তি ফ্যাক্টর';
$string['penaltyfactor_help'] = 'এ সেটিং এর সাহায্যে প্রত্যেক ভুল উত্তরের জন্য আর্কাইভ স্কোরের কত ভগ্নাংশ বিয়োগ হবে তা নির্ধারণ করা হয়। কুইজ যদি অ্যাডাপটিভ মোডে চলে তবেই এটা প্রয়োগযোগ্য হবে।

 প্যানাল্টি ফ্যাক্টরটি ০ থেকে ১ এর মধ্যেই হতে হবে। প্যানাল্টি ফ্যাক্টর ১ মানে হল কোনো ক্রেডিট পেতে হলে প্রত্যেক শিক্ষার্থীকে প্রথমবারেই সঠিক উত্তর দিতে হবে। প্যানাল্টি ফ্যাক্টর ০ মানে হল শিক্ষার্থী যতবার খুশি ততবার চেষ্টা করতে পারবে এবং তারপরও সঠিক উত্তরের জন্য পূর্ণমান পাবেন।';
$string['permissionedit'] = 'এ প্রশ্ন সম্পাদনা';
$string['permissionmove'] = 'এ প্রশ্ন সরানো';
$string['permissionsaveasnew'] = 'নতুন প্রশ্ন হিসাবে সংরক্ষণ';
$string['permissionto'] = 'আপনার অনুমতি রয়েছে:';
$string['published'] = 'শেয়ারকৃত';
$string['qtypeveryshort'] = 'T';
$string['questionaffected'] = '<a href="{$a->qurl}">প্রশ্ন "{$a->name}" ({$a->qtype})</a> এ বিভাগের প্রশ্ন কিন্তু অন্য কোর্সের "{$a->coursename}"  <a href="{$a->qurl}">quiz "{$a->quizname}" </a> এ ব্যবহৃত হচ্ছে।';
$string['questionbank'] = 'প্রশ্ন ব্যাংক';
$string['questioncategory'] = 'প্রশ্নের বিভাগ';
$string['questioncatsfor'] = '\'{$a}\' এর জন্য প্রশ্নের বিভাগ';
$string['questiondoesnotexist'] = 'এ প্রশ্ন নেই';
$string['questionname'] = 'প্রশ্নের নাম';
$string['questionsaveerror'] = 'প্রশ্ন - ({$a}) সংরক্ষণ করার সময় ত্রুটি';
$string['questionsmovedto'] = 'এখনও যে প্রশ্নগুলো ব্যবহৃত হচ্ছে সেগুলো প্যারেন্ট কোর্স বিভাগের "{$a}" এ সরানো হয়েছে।';
$string['questionsrescuedfrom'] = 'কনটেস্কট {$a} হতে সংরক্ষিত প্রশ্ন।';
$string['questionsrescuedfrominfo'] = 'যখন কনটেক্সট অপসারন করা হয়েছিল তখন এ প্রশ্নগুলো (যার মধ্যে কিছু প্রশ্ন আড়াল করা থাকতে পারে) সংরক্ষণ করা হয়েছিল কারণ এগুলো এখনও কিছু প্রশ্ন বা অন্যান্য কার্যকরণে ব্যবহার করা হচ্ছে।';
$string['questiontype'] = 'প্রশ্নের ধরণ';
$string['questionuse'] = 'এ কার্যকরণে প্রশ্ন ব্যবহার';
$string['saveflags'] = 'ফ্ল্যাগের অবস্থান সংরক্ষণ';
$string['selectacategory'] = 'বিভাগ নির্বাচন:';
$string['selectaqtypefordescription'] = 'বর্ণনা দেখার জন্য প্রশ্নের ধরণ নির্বাচন';
$string['selectcategoryabove'] = 'উপরে একটি বিভাগ নির্বাচন';
$string['selectquestionsforbulk'] = 'বাল্ক অ্যাকশনের জন্য প্রশ্ন নির্বাচন';
$string['shareincontext'] = '{$a} এর কনটেক্টটে শেয়ার';
$string['stoponerror'] = 'ত্রুটি দেখে থামুন';
$string['stoponerror_help'] = 'এ সেটিং নির্ধারণ করে, কোনো ত্রুটি সনাক্ত করা হলে ইম্পোর্ট প্রক্রিয়া থেমে যাবে কিনা, ফলস্বরূপ কোনো প্রশ্ন ইম্পোর্ট করা হয় না অথবা ত্রুটি আছে এমন প্রশ্ন উপেক্ষা করা হয়  এবং অন্য যেকোনো কার্যকর প্রশ্ন ইম্পোর্ট করা হয়।';
$string['tofilecategory'] = 'ফাইল বিভাগ লেখা';
$string['tofilecontext'] = 'ফাইল কনটেক্সট লেখা';
$string['uninstallqtype'] = 'এই ধরনের প্রশ্ন আনইনস্টল করা হবে।';
$string['unknown'] = 'অজানা';
$string['unknownquestiontype'] = 'অজানা প্রশ্নের ধরণ: {$a}।';
$string['unknowntolerance'] = 'অজানা সহিষ্ণুতার ধরণ {$a}';
$string['unpublished'] = 'শেয়ারকৃত নয়';
$string['unusedcategorydeleted'] = 'বিভাগটি অপসারন করা হয়েছে কারণ, কোর্স অপসারন করার পর প্রশ্নটি আর ব্যবহৃত হয়নি।';
$string['upgradeproblemcategoryloop'] = 'প্রশ্নের বিভাগ আপগ্রেড করার সময় সমস্যা সনাক্ত করা হয়েছে। বিভাগীয় ট্রিতে একটি পুনরাবৃত্তি আছে। প্রভাবিত বিভাগ আইডি হল {$a}।';
$string['upgradeproblemcouldnotupdatecategory'] = 'প্রশ্নের বিভাগ {$a->name} ({$a->id}) হালনাগাদ করা যায়নি।';
$string['upgradeproblemunknowncategory'] = 'প্রশ্নের বিভাগ আপগ্রেড করার সময় সমস্যা সনাক্ত করা হয়েছে। বিভাগ {$a->id}, যা প্যারেন্ট {$a->parent} কে বুঝায় তা অনুপস্থিত। সমস্যা সমাধান করার জন্য প্যারেন্ট পরিবর্তন করা হয়।';
$string['wrongprefix'] = 'ভুলভাবে বিন্যাসিত নামপ্রিফিক্স {$a}';
$string['youmustselectaqtype'] = 'আপানকে অবশ্যই প্রশ্নের একটি ধরণ নির্বাচন করতে হবে।';
$string['yourfileshoulddownload'] = 'আপনার এক্সপোর্ট ফাইল খুব দ্রুত ডাউনলোড করা শুরু করা উচিত। যদি না করে তবে অনুগ্রহ করে <a href="{$a}">এখানে ক্লিক</a>';
