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
 * Strings for component 'tool_xmldb', language 'bn', version '3.11'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'প্রকৃত';
$string['aftertable'] = 'টেবিলের পরে:';
$string['back'] = 'পূর্ববর্তী';
$string['backtomainview'] = 'প্রধানে ফিরে যাওয়া';
$string['cannotuseidfield'] = '"আইডি" ক্ষেত্র সংযোজন করা যাচ্ছেনা। এটি একটি অটোনিউম্যারিক কলাম';
$string['change'] = 'পরিবর্তন';
$string['charincorrectlength'] = 'char ক্ষেত্রের জন্য ভুল দৈর্ঘ্য';
$string['check_bigints'] = 'ভুল ডিবি ইন্টিজার খোঁজা';
$string['check_defaults'] = 'সঙ্গতিহীন পূর্বনির্ধারিত মান খোঁজা';
$string['check_foreign_keys'] = 'ফরেন কী লঙ্ঘন খোঁজা';
$string['check_indexes'] = 'অনুপস্থিত DB সূচী খোঁজা';
$string['checkbigints'] = 'bigints পরীক্ষা';
$string['checkdefaults'] = 'পূর্বনির্ধারিত পরীক্ষা';
$string['checkforeignkeys'] = 'ফরেন কী পরীক্ষা';
$string['checkindexes'] = 'সূচী পরীক্ষা';
$string['completelogbelow'] = '(নিম্নের অনুসন্ধানে সম্পন্নকৃত কার্যবিবরণী দেখুন)';
$string['confirmcheckbigints'] = 'ফাংশনালিটিটি অনুসন্ধান করবে <a href="http://tracker.moodle.org/browse/MDL-11038">সম্ভাব্য ভুল ইন্টিজার ক্ষেত্র</a>আপনার মুডল সার্ভারে, আপনার DB তে সব ইন্টিজার সঠিকভাবে নির্ধারণ করতে প্রয়োজনীয় SQL বক্তব্য স্বয়ংক্রিভাবে তৈরি হবে (চালানো হবেনা!)।<br /><br />
একবার তৈরি হলে আপনি কিছু বক্তব্য অনুলিপি করতে পারবেন এবং আপনার প্রিয় SQL ইন্টারফেস দিয়ে নিরাপদভাবে চালাতে পারবেন (এটি করার আগে আপনার ডাটা ব্যাকআপ রাখতে ভুলবেননা)।<br /><br />
অনুপস্থিত সূচী অনুসন্ধান চালানোর আগে আপনার মুডল রিলিজ (1.8, 1.9, 2.x ...) এর বিদ্যমান সাম্প্রতিক (+ সংস্করণ) চালানোর জন্য সুপারিশ করা যাচ্ছে।<br /><br />
ফাংশনালিটিটি DB এর বিপক্ষে কোন কাজ সম্পন্ন করবেনা (শুধুমাত্র এখান থেকে পড়বে), তাই যে কোন সময় নিরাপদভাবে চালানো যাবে।';
$string['confirmcheckdefaults'] = 'ফাংশনালিটিটি আপনার মুডল সার্ভারে সামঞ্জস্যহীন পূর্বনির্ধারিত মান অনুসন্ধান করবে, সব পূর্বনির্ধারিত মান সঠিকভাবে নির্ধারণের জন্য প্রয়োজনীয় SQL বক্তব্য তৈরি হবে (চালানো হবেনা!)।<br /><br />
একবার তৈরি হলে আপনি কিছু বক্তব্য অনুলিপি করতে পারবেন এবং আপনার প্রিয় SQL ইন্টারফেস দিয়ে নিরাপদভাবে চালাতে পারবেন (এটি করার আগে আপনার ডাটা ব্যাকআপ রাখতে ভুলবেননা)।<br /><br />
অনুপস্থিত সূচী অনুসন্ধান চালানোর আগে আপনার মুডল রিলিজ (1.8, 1.9, 2.x ...) এর বিদ্যমান সাম্প্রতিক (+ সংস্করণ) চালানোর জন্য সুপারিশ করা যাচ্ছে।<br /><br />
ফাংশনালিটিটি DB এর বিপক্ষে কোন কাজ সম্পন্ন করবেনা (শুধুমাত্র এখান থেকে পড়বে), তাই যে কোন সময় নিরাপদভাবে চালানো যাবে।';
$string['confirmcheckforeignkeys'] = 'ফাংশনালিটিটি ফরেন কী এ সম্ভাব্য লঙ্ঘন অনুসন্ধান করে যা install.xml সংজ্ঞায় সংজ্ঞায়িত করা আছে। (মুডল বর্তমানে ডাটাবেসে প্রকৃত ফরেন কী সীমাবদ্ধতা তৈরি করেনা, যার কারনে অকার্যকর ডাটা উপস্থিত হয়।)<br /><br />
অনুপস্থিত সূচী অনুসন্ধান চালানোর আগে আপনার মুডল রিলিজ (1.8, 1.9, 2.x ...) এর বিদ্যমান সাম্প্রতিক (+ সংস্করণ) চালানোর জন্য সুপারিশ করা যাচ্ছে।<br /><br />
ফাংশনালিটিটি DB এর বিপক্ষে কোন কাজ সম্পন্ন করবেনা (শুধুমাত্র এখান থেকে পড়বে), তাই যে কোন সময় নিরাপদভাবে চালানো যাবে।';
$string['confirmcheckindexes'] = 'ফাংশনালিটিটি আপনার মুডল সার্ভারে সম্ভাব্য অনুপস্থিত সূচী অনুসন্ধান করবে, সবকিছু হালনাগাদ রাখতে প্রয়োজনীয় SQL বক্তব্য স্বয়ংক্রিভাবে তৈরি হবে (চালানো হবেনা!)।<br /><br />
একবার তৈরি হলে আপনি কিছু বক্তব্য অনুলিপি করতে পারবেন এবং আপনার প্রিয় SQL ইন্টারফেস দিয়ে নিরাপদভাবে চালাতে পারবেন (এটি করার আগে আপনার ডাটা ব্যাকআপ রাখতে ভুলবেননা)।<br /><br />
অনুপস্থিত সূচী অনুসন্ধান চালানোর আগে আপনার মুডল রিলিজ (1.8, 1.9, 2.x ...) এর বিদ্যমান সাম্প্রতিক (+ সংস্করণ) চালানোর জন্য সুপারিশ করা যাচ্ছে।<br /><br />
ফাংশনালিটিটি DB এর বিপক্ষে কোন কাজ সম্পন্ন করবেনা (শুধুমাত্র এখান থেকে পড়বে), তাই যে কোন সময় নিরাপদভাবে চালানো যাবে।';
$string['confirmdeletefield'] = 'ক্ষেত্রটি মুছে ফেলতে আপনি কি সম্পূর্ণভাবে নিশ্চিত:';
$string['confirmdeleteindex'] = 'সূচীটি মুছে ফেলতে আপনি কি সম্পূর্ণভাবে নিশ্চিত:';
$string['confirmdeletekey'] = 'কীটি মুছে ফেলতে আপনি কি সম্পূর্ণভাবে নিশ্চিত:';
$string['confirmdeletetable'] = 'টেবিলটি মুছে ফেলতে আপনি কি সম্পূর্ণভাবে নিশ্চিত:';
$string['confirmdeletexmlfile'] = 'ফাইলটি মুছে ফেলতে আপনি কি সম্পূর্ণভাবে নিশ্চিত:';
$string['confirmrevertchanges'] = 'সম্পন্ন কাজটির পরিবর্তন প্রত্যাবর্তন করতে আপনি কি সম্পূর্ণভাবে নিশ্চিত:';
$string['create'] = 'তৈরি';
$string['createtable'] = 'টেবিল তৈরি:';
$string['defaultincorrect'] = 'পূর্বনির্ধারিত ভুল';
$string['delete'] = 'মুছে ফেলা';
$string['delete_field'] = 'ক্ষেত্র মুছে ফেলা';
$string['delete_index'] = 'সূচী মুছে ফেলা';
$string['delete_key'] = 'কী মুছে ফেলা';
$string['delete_table'] = 'টেবিল মুছে ফেলা';
$string['delete_xml_file'] = 'XML ফাইল মুছে ফেলা';
$string['doc'] = 'Doc';
$string['docindex'] = 'নথিবদ্ধকরণের সূচী:';
$string['documentationintro'] = 'XMLDB ডাটাবেস সংজ্ঞা থেকে স্বয়ংক্রিভাবে নথিবদ্ধকরণটি তৈরি হয়। এটি শুধুমাত্র ইংরেজিতে পাওয়া যাবে।';
$string['down'] = 'নীচে';
$string['duplicate'] = 'প্রতিলিপি';
$string['duplicatefieldname'] = 'এই নামে অন্য ক্ষেত্র বিদ্যমান';
$string['duplicatekeyname'] = 'এই নামে অন্য কী বিদ্যমান';
$string['edit'] = 'সম্পাদন';
$string['edit_field'] = 'ক্ষেত্র সম্পাদন';
$string['edit_field_save'] = 'ক্ষেত্র সংরক্ষণ';
$string['edit_index'] = 'সূচী সম্পাদন';
$string['edit_index_save'] = 'সূচী সংরক্ষণ';
$string['edit_key'] = 'কী সম্পাদন';
$string['edit_key_save'] = 'কী সংরক্ষণ';
$string['edit_table'] = 'টেবিল সম্পাদন';
$string['edit_table_save'] = 'টেবিল সংরক্ষণ';
$string['edit_xml_file'] = 'XML ফাইল সম্পাদন';
$string['enumvaluesincorrect'] = 'enum ক্ষেত্রের জন্য মান ভুল';
$string['expected'] = 'প্রত্যাশিত';
$string['extensionrequired'] = 'দু:খিত - এই পদক্ষেপের জন্য \'{$a}\' PHP এক্সটেনশনটি আবশ্যক। এই বৈশিষ্ট্যটি ব্যবহার করতে চাইলে অনুগ্রহ করে এক্সটেনশনটি ইনস্টল করুন।';
$string['field'] = 'ক্ষেত্র';
$string['fieldnameempty'] = 'নামের ক্ষেত্র খালি';
$string['fields'] = 'ক্ষেত্র';
$string['fieldsnotintable'] = 'ক্ষেত্রটি টেবিলে বিদ্যমান নয়';
$string['fieldsusedinkey'] = 'ক্ষেত্রটি কী হিসেবে ব্যবহৃত হবে।';
$string['filenotwriteable'] = 'ফাইল লিখার মত নয়';
$string['fkviolationdetails'] = '{$a->tablename} টেবিলে {$a->keyname} ফরেন কী {$a->numrows} সারির মধ্যে {$a->numviolations} দ্বারা লঙ্ঘন করেছে।';
$string['float2numbernote'] = 'বিজ্ঞপ্তি: যদিও XMLDB দ্বারা "ফ্লোট " ক্ষেত্র ১০০% সমর্থিত, "সংখ্যা" ক্ষেত্রে বদলে নিতে সুপারিশ করা হচ্ছে।';
$string['floatincorrectdecimals'] = 'ফ্লোট ক্ষেত্রের জন্য দশমিকের সংখ্যা ভুল';
$string['floatincorrectlength'] = 'ফ্লোট ক্ষেত্রের জন্য দৈর্ঘ্য ভুল';
$string['generate_all_documentation'] = 'সব নথিবদ্ধকরণ';
$string['generate_documentation'] = 'নথিবদ্ধকরণ';
$string['gotolastused'] = 'সর্বশেষ ব্যবহৃত ফাইলে যান';
$string['incorrectfieldname'] = 'ভুল নাম';
$string['index'] = 'সূচী';
$string['indexes'] = 'সূচী';
$string['integerincorrectlength'] = 'ইন্টিজার ক্ষেত্রের জন্য দৈর্ঘ্য ভুল';
$string['key'] = 'কী';
$string['keys'] = 'কী';
$string['listreservedwords'] = 'সংরক্ষিত শব্দের তালিকা<br />(ব্যবহৃত রাখতে<a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>হালনাগাদ)';
$string['load'] = 'লোড';
$string['main_view'] = 'প্রধান প্রদর্শন';
$string['masterprimaryuniqueordernomatch'] = 'রেফারেন্স টেবিলে ইউনিক কী যেই বিন্যাসে তালিকাভুক্ত আছে অবশ্যই সেই একই বিন্যাসে ফরেন কী এর ক্ষেত্র তালিকাভুক্ত করতে হবে।';
$string['missing'] = 'অনুপস্থিত';
$string['missingindexes'] = 'অনুপস্থিত সূচী পাওয়া গিয়েছে';
$string['mustselectonefield'] = 'ক্ষেত্র সম্পর্কিত পদক্ষেপ দেখতে আপনাকে অবশ্যই একটি ক্ষেত্র নির্বাচন করতে হবে!';
$string['mustselectoneindex'] = 'সূচী সম্পর্কিত পদক্ষেপ দেখতে আপনাকে অবশ্যই একটি সূচী নির্বাচন করতে হবে!';
$string['mustselectonekey'] = 'কী সম্পর্কিত পদক্ষেপ দেখতে আপনাকে অবশ্যই একটি কী নির্বাচন করতে হবে!';
$string['new_table_from_mysql'] = 'MySQL থেকে নতুন টেবিল';
$string['newfield'] = 'নতুন ক্ষেত্র';
$string['newindex'] = 'নতুন সূচী';
$string['newkey'] = 'নতুন কী';
$string['newtable'] = 'নতুন টেবিল';
$string['newtablefrommysql'] = 'MySQL থেকে নতুন টেবিল';
$string['nomasterprimaryuniquefound'] = 'ফরেন কী রেফারেন্স কলামে অবশ্যই একটি প্রাথমিক অথবা রেফারেন্স টেবিলে ইউনিক কী সংযুক্ত করতে হবে। মনে রাখবেন, অনন্য সূচীর কলাম খুব একটা ভালো নয়।';
$string['noviolatedforeignkeysfound'] = 'কোন লঙ্ঘনকৃত ফরেন কী পাওয়া যায়নি';
$string['nowrongdefaultsfound'] = 'কোন সামঞ্জস্যহীন পূর্বনির্ধারিত মান পাওয়া যায়নি, আপনার DB তে আরও পদক্ষেপের প্রয়োজন নেই।';
$string['nowrongintsfound'] = 'কোন ভুল ইন্টিজার পাওয়া যায়নি, আপনার DB তে আরও পদক্ষেপের প্রয়োজন নেই।';
$string['numberincorrectdecimals'] = 'সংখ্যা ক্ষেত্রের জন্য দশমিকের সংখ্যা ভুল';
$string['numberincorrectlength'] = 'সংখ্যার ক্ষেত্রের জন্য ভুল দৈর্ঘ্য';
$string['pendingchanges'] = 'মনে রাখুন: আপনি এই ফাইলে কিছু পরিবর্তন করেছেন। যে কোন মূহুর্তে তা সংরক্ষিত হবে।';
$string['pendingchangescannotbesaved'] = 'এই ফাইলে কিছু পরিবর্তন হয়েছে কিন্তু তা সংরক্ষণ করা যাবেনা! অনুগ্রহ করে ডিরেক্টরি এবং "install.xml" উভয়েরই ওয়েব সার্ভারে লিখার অনুমতি আছে কিনা যাচাই করে দেখুন।';
$string['pendingchangescannotbesavedreload'] = 'এই ফাইলে কিছু পরিবর্তন হয়েছে কিন্তু তা সংরক্ষণ করা যাবেনা! অনুগ্রহ করে ডিরেক্টরি এবং "install.xml" উভয়েরই ওয়েব সার্ভারে লিখার অনুমতি আছে কিনা যাচাই করে দেখুন। তারপর পৃষ্ঠাটি পুনরায় লোড করুন এবং আপনি সেই পরিবর্তনগুলো সংরক্ষণ করতে পারবেন।';
$string['pluginname'] = 'XMLDB সম্পাদক';
$string['reserved'] = 'সংরক্ষিত';
$string['reservedwords'] = 'সংরক্ষিত শব্দ';
$string['revert'] = 'প্রত্যাবর্তন';
$string['revert_changes'] = 'পরিবর্তন প্রত্যাবর্তন';
$string['save'] = 'সংরক্ষণ';
$string['searchresults'] = 'অনুসন্ধানের ফলাফল';
$string['selectaction'] = 'পদক্ষেপ নির্বাচন:';
$string['selectdb'] = 'ডাটাবেস নির্বাচন:';
$string['selectfieldkeyindex'] = 'ক্ষেত্র/কী/সূচী নির্বাচন:';
$string['selectonecommand'] = 'অনুগ্রহ করে, PHP কোডটি প্রদর্শনের জন্য তালিকা হতে একটি পদক্ষেপ নির্বাচন করুন';
$string['selectonefieldkeyindex'] = 'অনুগ্রহ করে, PHP কোডটি প্রদর্শনের জন্য তালিকা হতে একটি ক্ষেত্র/কী/সূচী নির্বাচন করুন';
$string['selecttable'] = 'টেবিল নির্বাচন:';
$string['table'] = 'টেবিল';
$string['tables'] = 'টেবিল';
$string['unload'] = 'লোড না করা';
$string['up'] = 'উপরে';
$string['view'] = 'প্রদর্শন';
$string['view_reserved_words'] = 'সংরক্ষিত শব্দ প্রদর্শন';
$string['view_structure_php'] = 'কাঠামো PHP প্রদর্শন';
$string['view_structure_sql'] = 'কাঠামো SQL প্রদর্শন';
$string['view_table_php'] = 'টেবিল PHP প্রদর্শন';
$string['view_table_sql'] = 'টেবিল SQL প্রদর্শন';
$string['viewedited'] = 'সম্পাদিত প্রদর্শন';
$string['vieworiginal'] = 'প্রকৃতটি প্রদর্শন';
$string['viewphpcode'] = 'PHP কোড প্রদর্শন';
$string['viewsqlcode'] = 'SQL কোড প্রদর্শন';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'লঙ্ঘনকৃত ফরেন কী';
$string['violatedforeignkeysfound'] = 'লঙ্ঘনকৃত ফরেন কী পাওয়া গিয়েছে';
$string['violations'] = 'লঙ্ঘন';
$string['wrong'] = 'ভুল';
$string['wrongdefaults'] = 'ভুল পূর্বনির্ধারিত পাওয়া গিয়েছে';
$string['wrongints'] = 'ভুল ইন্টিজার পাওয়া গিয়েছে';
$string['wronglengthforenum'] = 'enum ক্ষেত্রের জন্য ভুল দৈর্ঘ্য';
$string['wrongreservedwords'] = 'বর্তমানে সংরক্ষিত শব্দ ব্যবহার করা হচ্ছে<br />(মনে রাখবেন যে টেবিলের নাম গুরুত্বপূর্ণ নয় যদি $CFG->উপসর্গ ব্যবহার করা হয়)';
$string['yesmissingindexesfound'] = 'আপনার DB তে কিছু অনুপস্থিত সূচী পাওয়া গিয়েছে। এখানে তাদের বিস্তারিত তথ্য আছে এবং প্রয়োজনীয় সব SQL বক্তব্য ঠিক করতে আপনার পছন্দের SQL ইন্টারফেসের সাহায্যে চালানো হবে (এটি করার আগে আপনার ডাটা ব্যাকআপ রাখতে ভুলবেননা)।<br /><br />এটি করার পরে, আর কোন অনুপস্থিত সূচী পাওয়া যাচ্ছে কিনা তা পরীক্ষা করতে এই ইউটিলিটিটি আবার চালানোর জন্য সুপারিশ করা যাচ্ছে।';
$string['yeswrongdefaultsfound'] = 'আপনার DB তে কিছু সামঞ্জস্যহীন পূর্বনির্ধারিত পাওয়া গিয়েছে। এখানে তাদের বিস্তারিত তথ্য আছে এবং প্রয়োজনীয় সব SQL বক্তব্য ঠিক করতে আপনার পছন্দের SQL ইন্টারফেসের সাহায্যে চালানো হবে (এটি করার আগে আপনার ডাটা ব্যাকআপ রাখতে ভুলবেননা)।<br /><br />এটি করার পরে, আর কোন সামঞ্জস্যহীন পূর্বনির্ধারিত পাওয়া যাচ্ছে কিনা তা পরীক্ষা করতে এই ইউটিলিটিটি আবার চালানোর জন্য সুপারিশ করা যাচ্ছে।';
$string['yeswrongintsfound'] = 'আপনার DB তে কিছু ভুল ইন্টিজার পাওয়া গিয়েছে। এখানে তাদের বিস্তারিত তথ্য আছে এবং প্রয়োজনীয় সব SQL বক্তব্য তৈরি করতে আপনার পছন্দের SQL ইন্টারফেসের সাহায্যে চালানো হবে (এটি করার আগে আপনার ডাটা ব্যাকআপ রাখতে ভুলবেননা)।<br /><br />এটি করার পরে, আর কোন ভুল ইন্টিজার পাওয়া যাচ্ছে কিনা তা পরীক্ষা করতে এই ইউটিলিটিটি আবার চালানোর জন্য সুপারিশ করা যাচ্ছে।';
