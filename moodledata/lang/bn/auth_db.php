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
 * Strings for component 'auth_db', language 'bn', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbcantconnect'] = 'নির্দিষ্ট প্রমাণীকরণ ডাটাবেসে সংযোগ দিতে পারেনা...';
$string['auth_dbchangepasswordurl_key'] = 'পাসওয়ার্ড-পরিবর্তন URL';
$string['auth_dbdebugauthdb'] = 'ADOdb ডিবাগ করা';
$string['auth_dbdebugauthdbhelp'] = 'বাহ্যিক ডাটাবেস এ  ADOdb সংযোগ ডিবাগ - লগইন করার সময় ফাঁকা পৃষ্ঠা আসলে ব্যবহার। প্রডাকশন সাইটের জন্য উপযুক্ত নয়।';
$string['auth_dbdeleteuser'] = 'অপসারিত ব্যবহারকারীর {$a->name} আইডি {$a->id}';
$string['auth_dbdeleteusererror'] = 'ব্যবহারকারী {$a} অপসারণ করার সময় ত্রুটি';
$string['auth_dbdescription'] = 'এ পদ্ধতিতে একটি বাহ্যিক ডাটাবেস টেবিল থাকে যাতে করে দিয়ে দেয়া ব্যবহারকারীর নাম ও পাসওয়ার্ড কার্যকর কিনা তা পরীক্ষা করা যায়।  অ্যাকাউন্ট যদি নতুন হয়, অন্যান্য  ক্ষেত্র থেকে তথ্য মুডলে অনুলিপি করা যায়।';
$string['auth_dbextencoding'] = 'বাহ্যিক db এনকোডিং';
$string['auth_dbextencodinghelp'] = 'বাহ্যিক ডাটাবেসে ব্যবহৃত এনকোডিং';
$string['auth_dbextrafields'] = 'এ ক্ষেত্রগুলো ঐচ্ছিক। এখানে নির্দিষ্ট করে দেয়া <b> বাহ্যিক ডাটাবেস ক্ষেত্র</b>  থেকে কিছু মুডল ব্যবহারকারীকে তথ্য দিয়ে প্রিফিল করার জন্য নির্বাচন করতে পারেন। <p>আপনি যদি এটা খালি রাখেন তবে, পূর্বনির্ধারিতভাবে যা আছে তা ব্যবহৃত হবে।</p><p>অন্য ক্ষেত্রে, লগইন করার পর ব্যবহারকারী এসব ক্ষেত্রই সম্পাদনা করতে পারবে।</p>';
$string['auth_dbfieldpass'] = 'পাসওয়ার্ড সম্বলিত ক্ষেত্রের নাম';
$string['auth_dbfieldpass_key'] = 'পাসওয়ার্ড এর ক্ষেত্র';
$string['auth_dbfielduser'] = 'ব্যবহারকারীর নাম সম্বলিত ক্ষেত্রের নাম';
$string['auth_dbfielduser_key'] = 'ব্যবহারকারীর ক্ষেত্র';
$string['auth_dbhost'] = 'কম্পিউটার ডাটাবেস সার্ভার হোস্ট করছে।';
$string['auth_dbhost_key'] = 'হোস্ট';
$string['auth_dbinsertuser'] = 'সন্নিবিষ্ট ব্যবহারকারীর {$a->name} আইডি {$a->id}';
$string['auth_dbinsertusererror'] = 'ব্যবহারকারী {$a} সন্নিবেশ করার সময় ত্রুটি ';
$string['auth_dbname'] = 'ডাটাবেসের নিজের নাম';
$string['auth_dbname_key'] = 'DB নাম';
$string['auth_dbpass'] = 'উপরের ব্যবহারকারীর নামের সাথে মিল রেখে পাসওয়ার্ড';
$string['auth_dbpass_key'] = 'পাসওয়ার্ড';
$string['auth_dbpasstype'] = '<p>পাসওয়ার্ড ক্ষেত্রে ব্যবহৃত বিন্যাস নির্দিষ্ট করা। MD5 হ্যাসিং অন্যান্য সাধারণ ওয়েব অ্যাপ্লিকেশন যেমন, PostNuke এর সাথে সংযুক্ত করার জন্য কার্যকর।</p> <p>আপনি যদি চান যে বাহ্যিক DB ব্যবহারকারীর নাম &amp; ইমেইল ঠিকানা ব্যবস্থাপনা করবে এবং মডুল পাসওয়ার্ড ব্যবস্থাপনা করবে তবে, \'অভ্যন্তরীণ\' ব্যবহার করুন। আপনি যদি \'অভ্যন্তরীণ\' ব্যবহার করেন তবে <i>অবশ্যই</i> বাহ্যিক DB এ বহুসংখ্যক ইমেইল ঠিকানা সম্বলিত ক্ষেত্র থাকা উচিত, এবং আপনার dmin/cron.php এবং  auth/db/auth_db_sync_users.php উভয়ই নিয়মিত কার্যকর করা উচিত। মডুল থেকে নতুন ব্যবহাকারীকে অস্থায়ী পাসওয়ার্ড দিয়ে একটি ইমেইল পাঠানো হবে।';
$string['auth_dbpasstype_key'] = 'পাসওয়ার্ড বিন্যাস';
$string['auth_dbreviveduser'] = 'পুনরূদ্ধারকৃত ব্যবহারকারীর {$a->name} আইডি {$a->id}';
$string['auth_dbrevivedusererror'] = 'ব্যবহারকারী {$a} পুনরূদ্ধার করতে ত্রুটি';
$string['auth_dbsetupsql'] = 'SQL সেটআপ কমান্ড ';
$string['auth_dbsetupsqlhelp'] = 'বিশেষ ডাটাবেস সেটআপের জন্য SQL কমান্ড, যোগাযোগ এনকোডিং সেটআপ করার জন্য প্রায়ই ব্যবহার করা হয় - MySQL এবং  PostgreSQL এর উদাহরণস্বরূপ:<em>SET NAMES \'utf8\'</em>';
$string['auth_dbsuspenduser'] = 'বহিস্কারকৃত ব্যবহারকারীর {$a->name} আইডি {$a->id}';
$string['auth_dbsuspendusererror'] = 'ব্যবহারকারী {$a} বহিস্কারের সময় ত্রুটি ';
$string['auth_dbsybasequoting'] = 'sybase quotes ব্যবহার';
$string['auth_dbsybasequotinghelp'] = 'Sybase style single quote escaping - Oracle, MS SQL এবং অন্যান্য ডাটাবেসের জন্য প্রয়োজনীয়। MySQL এর জন্য ব্যবহার করা যাবে না!';
$string['auth_dbtable'] = 'ডাটাবেসে টেবিলের নাম';
$string['auth_dbtable_key'] = 'টেবিল';
$string['auth_dbtype'] = 'ডাটাবেসের ধরণ (বিস্তারিত তথ্যের জন্য <a href="../lib/adodb/readme.htm#drivers">ADOdb documentation</a> দেখুন)';
$string['auth_dbtype_key'] = 'ডাটাবেস';
$string['auth_dbupdatinguser'] = 'ব্যবহারকারীর {$a->name} আইডি {$a->id} হালনাগাদ করা হচ্ছে';
$string['auth_dbuser'] = 'ডাটাবেস পড়ার প্রবেশাধিকার আছে এমন ব্যবহারকারী';
$string['auth_dbuser_key'] = 'DB ব্যবহারকারী';
$string['auth_dbuserstoadd'] = 'সংযোগ করার মত ব্যবহারকারীর এন্ট্রি: {$a}';
$string['auth_dbuserstoremove'] = 'অপসারণ করার মত ব্যবহারকারীর এন্ট্রি: {$a}';
$string['pluginname'] = 'বাহ্যিক ডাটাবেস';
