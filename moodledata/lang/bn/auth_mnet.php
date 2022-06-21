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
 * Strings for component 'auth_mnet', language 'bn', version '3.11'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'যখন হ্যাঁ নির্ধারণ করা হয়, প্রথমবারের মত রিমোট ব্যবহারকারী লগইন করলে স্থানীয় ব্যবহারকারীর রেকর্ড স্বয়ংক্রিয়ভাবে তৈরি হয়।';
$string['auth_mnet_roamin'] = 'এ হোস্ট ব্যবহারকারীগন আপনার সাইটে রোম করতে পারে';
$string['auth_mnet_roamout'] = 'ব্যবহারকারীগন এ হোস্টে রোম করতে পারে';
$string['auth_mnet_rpc_negotiation_timeout'] = 'XMLRPC ট্রান্সপোর্টে প্রমাণীকরণের জন্য সেকেন্ডে সময় উত্তীর্ণ।';
$string['auth_mnetdescription'] = 'আপনার মুডল নেটওয়ার্ক সেটিং এ নির্ধারিত ট্রাস্টের ওয়েব অনুসারে ব্যবহারকারীগন প্রমানীকৃত।';
$string['auto_add_remote_users'] = 'স্বয়ংক্রিয়ভাবে রিমোট ব্যবহারকারী যোগ';
$string['pluginname'] = 'মুডল নেটওয়ার্ক প্রমাণীকরণ';
$string['rpc_negotiation_timeout'] = 'RPC সমঝোতার সময় উত্তীর্ণ';
$string['sso_idp_description'] = 'পুনরায় লগইন না করে ব্যবহারকারী যাতে {$a} মুডল সাইটে রোম করতে পারে তার অনুমোদনের জন্য এ সার্ভিস প্রকাশ। <ul><li><em>ডিপেন্ডেন্সী</em>: আপনাকে অবশ্যই {$a} এ  SSO (সার্ভিস সরবরাহকারী) সার্ভিসে <strong>সাবস্ক্রাইভ</strong> করতে হবে।</li></ul><br /> {$a} এ র প্রমানীকৃত ব্যবহারকারী যাতে পুনরায় লগইন করা ছাড়াই আপনার সাইটে প্রবেশ করতে পারে তার জন্য এ সার্ভিসে সাবস্ক্রাইভ করা যায়। <ul><li><em>ডিপেন্ডেন্সী</em>: আপনার অবশ্যই {$a} এ SSO (সার্ভিস সরবরাহকারী) সার্ভিস <strong>প্রকাশ</strong> করতে পারে।</li></ul><br />';
$string['sso_idp_name'] = 'SSO  (পরিচয় সরবরাহকারী)';
$string['sso_mnet_login_refused'] = '{$a->host} থেকে ব্যবহারকারীর নাম {$a->user} লগইন করা অনুমোদিত নয়।';
$string['sso_sp_description'] = 'পুনরায় লগইন করা ছাড়াই {$a} এ প্রবেশ করার জন্য প্রমানীকৃত ব্যবহারকারীকে অনুমোদন দেয়ার জন্য এ সার্ভিস প্রকাশ। <ul><li><em>ডিপেন্ডেন্সী</em>:  আপনাকে অবশ্যই {$a} এ  SSO (পরিচয় সরবরাহকারী) সার্ভিসে <strong>সাবস্ক্রাইভ</strong> করতে হবে।</li></ul><br /> {$a} এ র প্রমানীকৃত ব্যবহারকারী যাতে পুনরায় লগইন করা ছাড়াই মুডল সাইটে প্রবেশ করতে পারে তার জন্য এ সার্ভিসে সাবস্ক্রাইভ করা যায়। <ul><li><em>ডিপেন্ডেন্সী</em>: আপনার অবশ্যই {$a} এ SSO (পরিচয় সরবরাহকারী) সার্ভিস <strong>প্রকাশ</strong> করতে পারে।</li></ul><br />';
$string['sso_sp_name'] = 'SSO  (সার্ভিস সরবরাহকারী)';
