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
 * Strings for component 'enrol_mnet', language 'bn', version '3.11'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'MNet এর তালিকাভূক্ত কিছু প্লাগইনের নমুনা ইতোমধ্যে এ হোস্টে আছে। প্রতি হোস্টের জন্য একটি নমুনা এবং/অথবা \'সব হোস্টের\' জন্য কেবল একটি নমুনা অনুমোদিত।';
$string['instancename'] = 'তালিকাভূক্ত করার পদ্ধতির নাম';
$string['instancename_help'] = 'আপনি ঐচ্ছিকভাবে MNet এর তালিকাভূক্ত করার পদ্ধতির পুনরায় নামকরণ করতে পারেন। আপনি যদি এ ক্ষেত্র ফাঁকা রাখেন তবে, নমুনার পূর্বনির্ধারিত নাম ব্যবহৃত হবে, রিমোট হোস্ট এবং ব্যবহাকারীর জন্য এসাইনকৃত রোলের নামসহ।';
$string['mnet_enrol_description'] = 'আপনার সার্ভারে তৈরি করা কোর্সে ছাত্র তালিকাভূক্ত করতে এ সার্ভিস {$a} এ প্রসাশককে অনুমোদন দেয়।<br/><ul><li><em>ডিপেন্ডেন্সী</em>: আপনার উচিত {$a} এ সার্ভিস SSO (সার্ভিস সরবরাহকারী) <strong>প্রকাশ করা</strong>।</li><li><em>ডিপেন্ডেন্সী</em>: আপনার উচিত {$a} এ সার্ভিস SSO (সার্ভিস সরবরাহকারী) <strong>সাবস্ক্রাইব করা</strong>।</li></ul><br/>এ সার্ভিসে সাবস্ক্রাইব করলে {$a} এ কোর্সে ছাত্রদের তালিকাভূক্ত করা যাবে।<br/><ul><li><em>ডিপেন্ডেন্সী</em>: আপনার উচিত {$a} এ সার্ভিস SSO (সার্ভিস সরবরাহকারী) <strong>সাবস্ক্রাইব করা</strong>।</li><li><em>ডিপেন্ডেন্সী</em>: আপনার উচিত {$a} এ সার্ভিস SSO (সার্ভিস সরবরাহকারী) <strong>প্রকাশ করা</strong>।</li></ul><br/>';
$string['mnet_enrol_name'] = 'তালিকাভূক্ত করার রিমোট সার্ভিস';
$string['pluginname'] = 'MNet রিমোট তালিকাভুক্তকরণ';
$string['pluginname_desc'] = 'সব রিমোট MNet হোস্ট কোর্সে ব্যবহারকারীকে তালিকাভূক্ত করা অনুমোদন।';
$string['remotesubscriber'] = 'রিমোট হোস্ট';
$string['remotesubscriber_help'] = 'সব MNet এর সমকক্ষ ব্যবহারকারী যাদের আমরা রিমোট তালিকাভূক্ত করার সার্ভিস প্রস্তাব করি তাদের ক্ষেত্রে এ কোর্স উন্মুক্ত করার জন্য \'সব হোস্ট\' নির্বাচন। অথবা একক হোস্ট নির্বাচন করে কেবল তাদের ব্যবহারকারীর জন্য এ কোর্স উন্মুক্ত করা যায়।';
$string['remotesubscribersall'] = 'সব হোস্ট';
$string['roleforremoteusers'] = 'তাদের ব্যবহারকারীর জন্য রোল';
$string['roleforremoteusers_help'] = 'নির্বাচিত হোস্ট থেকে রিমোট ব্যবহারকারী কি রোল পাবে।';
