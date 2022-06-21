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
 * Strings for component 'tool_uploaduser', language 'bn', version '3.11'.
 *
 * @package     tool_uploaduser
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'মুছে ফেলা অনুমোদন';
$string['allowrenames'] = 'পুনরায় নামকরণ অনুমোদন';
$string['csvdelimiter'] = 'CSV ডেলিমিটার';
$string['defaultvalues'] = 'পূর্বনির্ধারিত মান';
$string['deleteerrors'] = 'ত্রুটি মুছে ফেলা';
$string['encoding'] = 'এনকোডিং';
$string['errors'] = 'ত্রুটি';
$string['nochanges'] = 'কোন পরিবর্তন নেই';
$string['renameerrors'] = 'ত্রুটির পুনঃনামকরণ';
$string['requiredtemplate'] = 'আবশ্যকীয়। আপনি এখানে টেম্পলেট সিনট্যাক্স ব্যবহার করতে পারেন (%l = lastname, %f = firstname, %u = username)। বিস্তারিত তথ্য ও উদাহরণের জন্য সহায়িকা দেখুন।';
$string['rowpreviewnum'] = 'সারি প্রাকদর্শন';
$string['uploadpicture_baduserfield'] = 'উল্লিখিত ব্যবহারকারীর বৈশিষ্ট্যটি কার্যকর নয়। অনুগ্রহ করে, আবার চেষ্টা করুন।';
$string['uploadpicture_cannotmovezip'] = 'অস্থায়ী ডিরেক্টরিতে zip ফাইলটি সরানো যাচ্ছে না।';
$string['uploadpicture_cannotprocessdir'] = 'আনজিপকৃত ফাইল প্রক্রিয়াধীন করা যাচ্ছে না।';
$string['uploadpicture_cannotsave'] = 'ব্যবহারকারী {$a}\'র ছবি সংরক্ষণ করা যাচ্ছে না। ছবির আদি ফাইলটি পরীক্ষা করুন।';
$string['uploadpicture_cannotunzip'] = 'ছবির ফাইল unzip করা যাচ্ছে না।';
$string['uploadpicture_invalidfilename'] = 'ছবির ফাইল {$a}\'র নামে অকার্যকর অক্ষর রয়েছে। উপেক্ষা করা হচ্ছে।';
$string['uploadpicture_overwrite'] = 'ব্যবহারকারীর বিদ্যমান ছবি প্রতিস্থাপন করা হবে কি?';
$string['uploadpicture_userfield'] = 'ছবি মেলানোর জন্য ব্যবহারকারীর যে বৈশিষ্ট্য ব্যবহার করা হবে:';
$string['uploadpicture_usernotfound'] = '\'{$a->uservalue}\'-র \'{$a->userfield}\' মানসহ কোন ব্যবহারকারী বিদ্যমান নেই। উপেক্ষা করা হচ্ছে।';
$string['uploadpicture_userskipped'] = 'ব্যবহারকারী {$a}-কে (ইতিমধ্যেই ছবি রয়েছে) উপেক্ষা করা হচ্ছে।';
$string['uploadpicture_userupdated'] = 'ব্যবহারকারী {$a}\'র ছবি হালনাগাদ করা হয়েছে।';
$string['uploadpictures'] = 'ব্যবহারকারীর ছবি আপলোড';
$string['uploadpictures_help'] = 'ছবির ফাইলের zip ফাইল হিসেবে ব্যবহারকারীর ছবি আপলোড করা যাবে। ছবির ফাইলগুলো chosen-user-attribute.extension বিন্যাসে নামকরণকৃত হতে হবে, উদাহরণস্বরূপ user1234 ব্যবহারকারী নাম সম্বলিত কোন ব্যবহারকারীর জন্য ফাইলের নাম হবে user1234.jpg।';
$string['uploadusers'] = 'ব্যবহারকারী আপলোড';
$string['uploadusers_help'] = 'টেক্সট ফাইলের মাধ্যমে ব্যবহারকারী আপলোড (ঐচ্ছিকভাবে কোর্স অনুযায়ী তালিকাভুক্ত) করা যেতে পারে। ফাইলের ফরম্যাট নিম্ন বর্ণিত হতে হবে:

* ফাইলের প্রতিটি লাইনে একটি রেকর্ড থাকবে
* প্রতিটি রেকর্ড হবে কমা (বা অন্যান্য বিভাজক) দ্বারা পৃথককৃত ডাটার ধারা
* প্রথম রেকর্ডে ক্ষেত্রের নামের তালিকা থাকবে যাতে ফাইলের অবশিষ্ট অংশের বিন্যাস নির্ধারণ করা থাকে
* প্রয়োজনীয় ক্ষেত্রের নামগুলো হলো ব্যবহারকারীর নাম, পাসওয়ার্ড, নামের প্রথমাংশ, নামের শেষাংশ, ইমেইল';
$string['uploaduserspreview'] = 'ব্যবহারকারীদের প্রাকদর্শন আপলোড';
$string['uploadusersresult'] = 'ব্যবহারকারীদের ফলাফল আপলোড';
$string['useraccountupdated'] = 'হালনাগাদকৃত ব্যবহারকারী';
$string['userdeleted'] = 'মুছে ফেলা ব্যবহারকারী';
$string['userrenamed'] = 'পুনরায় নামকরণকৃত ব্যবহারকারী';
$string['userscreated'] = 'তৈরিকৃত ব্যবহারকারী';
$string['usersdeleted'] = 'মুছে ফেলা ব্যবহারকারী';
$string['usersrenamed'] = 'পুনরায় নামকরণকৃত ব্যবহারকারী';
$string['usersskipped'] = 'উপেক্ষিত ব্যবহারকারী';
$string['usersupdated'] = 'হালনাগাদকৃত ব্যবহারকারী';
$string['usersweakpassword'] = 'দুর্বল পাসওয়ার্ড সম্বলিত ব্যবহারকারী';
$string['uubulk'] = 'বাল্ক অপারেশনের জন্য নির্বাচন করুন';
$string['uubulkall'] = 'সব ব্যবহারকারী';
$string['uubulknew'] = 'নতুন ব্যবহারকারী';
$string['uubulkupdated'] = 'হালনাগাদকৃত ব্যবহারকারী';
$string['uucsvline'] = 'CSV লাইন';
$string['uulegacy1role'] = '(Original Student) typeN=1';
$string['uulegacy2role'] = '(Original Teacher) typeN=2';
$string['uulegacy3role'] = '(Original Non-editing teacher) typeN=3';
$string['uunoemailduplicates'] = 'অনুরূপ ইমেইলের ঠিকানা প্রতিরোধ';
$string['uuoptype'] = 'আপলোডের ধরন';
$string['uuoptype_addinc'] = 'সব যোগ করুন, প্রয়োজন হলে ব্যবহারকারীর নামের শেষে সংখ্যা যোগ করুন';
$string['uuoptype_addnew'] = 'বিদ্যমান ব্যবহারকারীদের উপেক্ষা করে, শুধুমাত্র নতুনদের যোগ করা হবে ';
$string['uuoptype_addupdate'] = 'নতুন ব্যবহারকারী যোগ ও বিদ্যমান ব্যবহারকারীদের হালনাগাদ করা হবে';
$string['uuoptype_update'] = 'শুধুমাত্র বিদ্যমান ব্যবহারকারীদের হালনাগাদ করা হবে';
$string['uupasswordnew'] = 'নতুন ব্যবহারকারীর পাসওয়ার্ড';
$string['uupasswordold'] = 'বিদ্যমান ব্যবহারকারীর পাসওয়ার্ড';
$string['uuupdateall'] = 'ফাইল ও পূর্বনির্ধারিত\'র সাথে উপেক্ষা করা হবে';
$string['uuupdatefromfile'] = 'ফাইলসহ উপেক্ষা';
$string['uuupdatemissing'] = 'ফাইল ও পূর্বনির্ধারিত থেকে অনুপস্থিতগুলো ভরাট করা হবে';
$string['uuupdatetype'] = 'বিদ্যমান ব্যবহারকারীর বিস্তারিত তথ্য';
