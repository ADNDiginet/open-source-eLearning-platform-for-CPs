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
 * Strings for component 'condition', language 'bn', version '3.11'.
 *
 * @package     condition
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcompletions'] = 'ফর্মে {no} সক্রিয় অবস্থা সংযুক্ত করা';
$string['addgrades'] = 'ফর্মে {no} গ্রেড অবস্থা সংযুক্ত করা';
$string['availabilityconditions'] = 'প্রাপ্যতা সীমিতকরণ';
$string['availablefrom'] = 'থেকে প্রবেশযোগ্য';
$string['availablefrom_help'] = 'প্রবেশযোগ্য থেকে/তে তারিখ কখন থেকে শিক্ষার্থী কোর্সের পৃষ্ঠার লিঙ্ক হতে প্রকিয়ায় প্রবেশ করতে পারবে তা নির্ধারণ করে।

প্রবেশযোগ্য থেকে/তে তারিখ এবং প্রক্রিয়ার জন্য প্রাপ্তিসাধ্য সেটিং এর মধ্যকার পার্থক্য হলো নির্ধারিত তারিখের বাইরে সাম্প্রতিক শিক্ষার্থীদের প্রক্রিয়ার বর্ণনা প্রদর্শন অনুমোদন করে, আর প্রবেশযোগ্য থেকে/তে তারিখ প্রবেশ সম্পূর্ণভাবে প্রতিরোধ করে।';
$string['availableuntil'] = 'প্রবেশযোগ্য এই পর্যন্ত';
$string['badavailabledates'] = 'অকার্যকর তারিখ। আপনি যদি উভয় তারিখ নির্ধারণ করেন, তাহলে \'পর্যন্ত\' তারিখ দেওয়ার আগে \'বিদ্যমান থেকে‌\' তারিখ দিতে হবে।';
$string['completion_complete'] = 'চিহ্নিত করা অবশ্যই সম্পন্ন হতে হবে';
$string['completion_fail'] = 'অবশ্যই ব্যর্থ গ্রেড দিয়ে সম্পন্ন করতে হবে';
$string['completion_incomplete'] = 'অবশ্যই চিহ্নিত সম্পন্ন করা যাবেনা';
$string['completion_pass'] = 'অবশ্যই পাশ গ্রেড দিয়ে সম্পন্ন করতে হবে';
$string['completioncondition'] = 'সক্রিয় সম্পূর্ণতার শর্ত';
$string['completioncondition_help'] = 'এই সেটিংটি নির্ধারণ করে যেকোন প্রক্রিয়া পরিপূর্ণ অবস্থা যা কিনা অবশ্যই প্রাপ্তিসাধ্য প্রক্রিয়ার নির্দেশক্রমে থাকতে হবে। মনে রাখবেন প্রক্রিয়া পরিপূর্ণ অবস্থা নির্ধারণ হওয়ার আগে পরিপূর্ণ ট্র্যাক নির্ধারণ করতে হবে।

প্রয়োজন হলে একাধিক প্রক্রিয়া পরিপূর্ণ অবস্থা নির্ধারণ করা যাবে। যদি তা হয়, যখন সব প্রক্রিয়া পরিপূর্ণ অবস্থায় মিলবে প্রক্রিয়াটি শুধুমাত্র তখনই উপস্থিত হবে।';
$string['configenableavailability'] = 'যখন সক্রিয় থাকে, কাজটি বিদ্যমান থাকলে এটি নিয়ন্ত্রণ করার জন্য আপনাকে শর্ত নির্ধারণ করতে দেয় (তারিখ, গ্রেড, অথবা সম্পূর্ণতার উপর নির্ভর করে)।';
$string['enableavailability'] = 'শর্তাবলীর প্রাপ্তিসাধ্যতা সক্রিয়';
$string['grade_atleast'] = 'কমপক্ষে অবশ্যই হতে হবে';
$string['grade_upto'] = 'এবং এরও কম';
$string['gradecondition'] = 'গ্রেডের শর্ত';
$string['gradecondition_help'] = 'এই সেটিংটি নির্ধারণ করে যেকোন গ্রেডের অবস্থা যা কিনা অবশ্যই প্রাপ্তিসাধ্য প্রক্রিয়ার নির্দেশক্রমে থাকতে হবে।

প্রয়োজন হলে একাধিক গ্রেড অবস্থা নির্ধারণ করা যাবে। যদি তা হয়, যখন সব গ্রেড শর্ত মিলবে প্রক্রিয়াটি শুধুমাত্র তখনই উপস্থিত হবে।';
$string['none'] = '(কোনটি না)';
$string['notavailableyet'] = 'এখনও বিদ্যমান নয়';
$string['requires_completion_0'] = 'যতক্ষণ পর্যন্ত প্রক্রিয়া <strong>{$a}</strong> অসম্পূর্ণ থাকবে ততক্ষণ পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_completion_1'] = 'যতক্ষণ পর্যন্ত প্রক্রিয়া <strong>{$a}</strong> চিহ্নিত করা না হবে ততক্ষণ পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_completion_2'] = 'যতক্ষণ পর্যন্ত প্রক্রিয়া <strong>{$a}</strong> সম্পন্ন এবং পাশ করা না হবে ততক্ষণ পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_completion_3'] = 'যতক্ষণ পর্যন্ত প্রক্রিয়া <strong>{$a}</strong> সম্পন্ন না করা এবং ব্যর্থ হবে ততক্ষণ পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_date'] = '{$a} থেকে বিদ্যমান।';
$string['requires_date_before'] = '$a} পর্যন্ত বিদ্যমান।';
$string['requires_date_both'] = '{$a->থেকে} হতে {$a->পর্যন্ত} তে বিদ্যমান';
$string['requires_grade_any'] = 'আপনার <strong>{$a}</strong>তে গ্রেড না থাকা পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_grade_max'] = 'আপনি <strong>{$a}</strong>তে উপযুক্ত স্কোর না পাওয়া পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_grade_min'] = 'আপনি <strong>{$a}</strong>তে আবশ্যকীয় স্কোর না পাওয়া পর্যন্ত বিদ্যমান হবেনা।';
$string['requires_grade_range'] = 'আপনি <strong>{$a}</strong>তে নির্দিষ্ট স্কোর না পাওয়া পর্যন্ত বিদ্যমান হবেনা।';
$string['showavailability'] = 'প্রক্রিয়া বিদ্যমান থাকার আগে';
$string['showavailability_hide'] = 'সম্পূর্ণ প্রক্রিয়া আড়াল';
$string['showavailability_show'] = 'প্রক্রিয়াটি ধূসর বর্ণে প্রদর্শন, সীমিতকরণ তথ্য সহ';
$string['userrestriction_hidden'] = 'সীমিতকরণ (সম্পূর্ণ আড়াল, কোন বার্তা নয়): &lsquo;{$a}&rsquo;';
$string['userrestriction_visible'] = 'সীমিতকরণ: &lsquo;{$a}&rsquo;';
