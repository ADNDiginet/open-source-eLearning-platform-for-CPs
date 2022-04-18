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
 * Strings for component 'tool_bloglevelupgrade', language 'bn', version '3.11'.
 *
 * @package     tool_bloglevelupgrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bloglevelupgradedescription'] = '<p>এই সাইটটি সম্প্রতি মুডল ২.০-তে আপগ্রেড করা হয়েছে।</p>
<p>২.০-তে ব্লগের দৃশ্যমানতা আরও সহজ করা হয়েছে, কিন্তু আপনার সাইটটি এখনও পুরোনো ধরনের দৃশ্যমানতা ব্যবহার করে।</p>
<p>আপনার সাইটে ব্লগ এন্ট্রিগুলোর কোর্স-ভিত্তিক বা গ্রুপ-ভিত্তিক দৃশ্যমানতা বজায় রাখতে, আপনাকে নিম্নের আপগ্রেড স্ক্রিপ্টটি চালাতে হবে, যা প্রতিটি কোর্সের তালিকাভুক্ত ব্যবহারকারীদের ব্লগ এন্ট্রি পোস্ট করার পর বিশেষ ধরনের "ব্লগ" ফোরাম তৈরি করবে, এবং এই বিশেষ ফোরামে ব্লগ এন্ট্রিগুলো অনুলিপি করবে।</p>
<p>এরফলে সাইট লেভেলে ব্লগ পুরোপুরি বন্ধ হয়ে যাবে। প্রসেসে কোন ব্লগ এন্ট্রি শনাক্ত করা যাবে না।</p>
<p>আপনি ব্লগ লেভেলের আপগ্রেড পৃষ্ঠা <a href="{$a->fixurl}">দেখেও স্ক্রিপ্টটি চালাতে পারেন</a>।</p>';
$string['bloglevelupgradeinfo'] = '২.০-তে ব্লগের দৃশ্যমানতা আরও সহজ করা হয়েছে, কিন্তু আপনার সাইটটি এখনও পুরোনো ধরনের দৃশ্যমানতা ব্যবহার করে। আপনার সাইটে ব্লগ এন্ট্রিগুলোর কোর্স-ভিত্তিক বা গ্রুপ-ভিত্তিক দৃশ্যমানতা বজায় রাখতে, আপনাকে নিম্নের আপগ্রেড স্ক্রিপ্টটি চালাতে হবে, যা প্রতিটি কোর্সের তালিকাভুক্ত ব্যবহারকারীদের ব্লগ এন্ট্রি পোস্ট করার পর বিশেষ ধরনের "ব্লগ" ফোরাম তৈরি করবে, এবং এই বিশেষ ফোরামে ব্লগ এন্ট্রিগুলো অনুলিপি করবে। এরফলে সাইট লেভেলে ব্লগ পুরোপুরি বন্ধ হয়ে যাবে। প্রসেসে কোন ব্লগ এন্ট্রি শনাক্ত করা যাবে না।';
$string['bloglevelupgradeprogress'] = 'রূপান্তরের অগ্রগতি: {$a->userscount} জন ব্যবহারকারী পর্যালোচনা করেছে, {$a->blogcount} টি ভুক্তি রূপান্তরিত।';
$string['pluginname'] = 'ব্লগের দৃশ্যমানতা আপগ্রেড';
