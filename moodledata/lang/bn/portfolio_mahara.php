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
 * Strings for component 'portfolio_mahara', language 'bn', version '3.11'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Leap2a পোর্টফোলিও সাপোর্ট সক্রিয় (Mahara 1.3 প্রয়োজন)';
$string['err_invalidhost'] = 'MNet হোস্ট অকার্যকর';
$string['err_invalidhost_help'] = 'প্লাগইনটি ঠিকভাবে কনফিগার করা হয়নি এবং এটা দ্বারা একটি অকার্যকর (অপসারিত) MNet হোস্টকে বুঝায়। এ প্লাগইন মুডল নেটওয়ার্কিং এর উপর নির্ভর করে যা কিনা প্রকাশিত SSO IDP, সাবস্ক্রাইব করা,SSO_SP এবং সাবস্ক্রাইব করা <b>এবং</b> প্রকাশিত পোর্টফোলিও এর সাথে সংযুক্ত।';
$string['err_networkingoff'] = 'মুডল নেটওয়ার্কিং বন্ধ';
$string['err_networkingoff_help'] = 'মুডল নেটওয়ার্কিং সম্পূর্নরূপে বন্ধ। অনুগ্রহ করে এ প্লাগইন কনফিগার করার পূর্বে এটা সক্রিয় করে নেন। এটা সমাধান না হওয়া পর্যন্ত কোনো প্লাগইন এর নমুনা দৃশ্যমান হবে না, এমনভাবে নির্ধারণ করা আছে - আপনাকে নিজ হাতে এগুলোকে দৃশ্যমান হিসাবে নির্ধারণ করতে হবে। এটা না হওয়া পর্যন্ত এগুলো ব্যবহার করা যাবে না';
$string['err_nomnetauth'] = 'MNet প্রমাণীকরণ প্লাগইন নিস্ক্রিয়';
$string['err_nomnetauth_help'] = 'MNet প্রমাণীকরণ প্লাগইন নিস্ক্রিয়, এই সেবার জন্য এটা আবশ্যকীয়';
$string['err_nomnethosts'] = 'মুডল নেটওয়ার্কিং এর উপর নির্ভর করে';
$string['err_nomnethosts_help'] = 'এ প্লাগইন মুডল নেটওয়ার্কিং এর উপর নির্ভর করে যা কিনা প্রকাশিত SSO IDP, সাবস্ক্রাইব করা,SSO SP এবং সাবস্ক্রাইব করা <b>এবং</b> প্রকাশিত পোর্টফোলিও সেবা এমনকি MNet প্রমাণীকরণ প্লাগইন এর সাথে সংযুক্ত। এ শর্তগুলো পূরণ না হওয়া পর্যন্ত এই প্লাগইন এর যেকোনো নমুনা আড়াল করা থাকবে। এগুলো আবার দৃশ্যমান করা জন্য নিজ হাতে নির্ধারণ করতে হবে।';
$string['failedtojump'] = 'রিমোর্ট সার্ভারের সাথে যোগাযোগ শুরু করতে ব্যর্থ';
$string['failedtoping'] = 'রিমোর্ট সার্ভারের সাথে যোগাযোগ শুরু করতে ব্যর্থ: {$a}';
$string['mnet_nofile'] = 'স্থানান্তর অবজেক্ট এর মধ্যে ফাইল খুঁজে পাওয়া যায়নি - অস্বাভাবিক ত্রুটি';
$string['mnet_nofilecontents'] = 'স্থানান্তর অবজেক্ট এর মধ্যে ফাইল খুঁজে পাওয়া গেছে, কিন্তু বিষয়বস্তু পাওয়া যায়নি - অস্বাভাবিক ত্রুটি: {$a}';
$string['mnet_noid'] = 'এ টোকেনের জন্য সমতুল্য স্থানান্তর রেকর্ড খুঁজে পাওয়া যায়নি';
$string['mnet_notoken'] = 'এ স্থানান্তরের সমতুল্য টোকেন খুঁজে পাওয়া যায়নি';
$string['mnet_wronghost'] = 'এ টোকেনের স্থানান্তর রেকর্ডের সাথে রিমোট হোস্টের মিল নাই';
$string['mnethost'] = 'MNet হোস্ট';
$string['pf_description'] = 'ব্যবহারকারী এ হোস্টে মুডল কনটেন্ট দেয়ার অনুমোদন<br />সাবস্ক্রাইব <b>এবং</b> এ সার্ভিস আপনার সাইটে প্রমানীকৃত ব্যবহাকারীকে {$a}<br /><ul><li><em>ডিপন্ডেন্সী</em> এ কনটেন্ট দেয়া অনুমোদন করে: আপনি অবশ্যই {$a} এ SSO (পরিচয় সরবরাহকারী) <strong>প্রকাশ</strong> করেন।</li><li><em>ডিপন্ডেন্সী</em>: আপনি অবশ্যই {$a} এ SSO (সার্ভিস সরবরাহকারী) <strong>সাবস্ক্রাইব</strong> করেন</li><li><em>ডিপন্ডেন্সী</em>: আপনি অবশ্যই  MNet প্রমাণীকরণ প্লাগইন সক্রিয় করেন।</li></ul><br/>';
$string['pf_name'] = 'পোর্টফোলিও সেবা';
$string['pluginname'] = 'Mahara ePortfolio';
$string['senddisallowed'] = 'আপনি এ সময় Mahara এ ফাইল স্থানান্তর করতে পারবেন না';
$string['url'] = 'URL';
