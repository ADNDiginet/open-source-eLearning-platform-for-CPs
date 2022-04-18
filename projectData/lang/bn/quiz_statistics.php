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
 * Strings for component 'quiz_statistics', language 'bn', version '3.11'.
 *
 * @package     quiz_statistics
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allattempts'] = 'সব অংশগ্রহন';
$string['allattemptsavg'] = 'সব অংশগ্রহনের জন্য গড়মান';
$string['allattemptscount'] = 'সর্বমোট অংশগ্রহনের সংখ্যা';
$string['analysisofresponses'] = 'জবাব বিশ্লেষণ';
$string['analysisofresponsesfor'] = '{$a} জন্য জবাবের বিশ্লেষণ।';
$string['attempts'] = 'অংশগ্রহন';
$string['attemptsall'] = 'সব অংশগ্রহন';
$string['attemptsfirst'] = 'প্রথমবার অংশগ্রহন';
$string['backtoquizreport'] = 'প্রধান পরিসংখ্যান রিপোর্ট পৃষ্ঠায় ফিরে আসা।';
$string['calculatefrom'] = 'পরিসংখ্যান নির্ণয়';
$string['cic'] = 'অভ্যন্তরীণ ধারাবাহিকতা সহগ ({$a} এর জন্য)';
$string['count'] = 'গণনা';
$string['coursename'] = 'কোর্স নাম';
$string['detailedanalysis'] = 'প্রশ্নের জবাবের আরও বিস্তারিত বিশ্লেষণ';
$string['discrimination_index'] = 'বৈষম্যের সূচী';
$string['discriminative_efficiency'] = 'বৈষম্যের কার্যকারিতা';
$string['downloadeverything'] = 'সম্পূর্ণ ডাউনলোড';
$string['duration'] = 'খোলা';
$string['effective_weight'] = 'কার্যকরী অর্থ';
$string['errordeleting'] = 'পুরাতন {$a} রেকর্ড অপসারনে ত্রুটি।';
$string['errormedian'] = 'মধ্যমা আনতে ত্রুটি';
$string['errorpowerquestions'] = 'প্রশ্নের গ্রেডের জন্য ভ্যারিয়েন্স নির্ণয়ের ডাটা আনতে ত্রুটি';
$string['errorpowers'] = 'কুইজ গ্রেডের জন্য ভ্যারিয়েন্স নির্ণয়ের ডাটা আনতে ত্রুটি';
$string['errorrandom'] = 'সাব আইটেম ডাটা পাওয়ায় ত্রুটি';
$string['errorratio'] = 'ত্রুটি অনুপাত ({$a} এর জন্য)';
$string['errorstatisticsquestions'] = 'প্রশ্নের গ্রেডের জন্য পরিসংখ্যান নির্ণয়ের ডাটা আনতে ত্রুটি';
$string['facility'] = 'সুযোগ সুবিধার সূচী';
$string['firstattempts'] = 'প্রথমবার অংশগ্রহন';
$string['firstattemptsavg'] = 'প্রথমবার অংশগ্রহনের জন্য গড় গ্রেড';
$string['firstattemptscount'] = 'প্রথমবার অংশগ্রহনের সংখ্যা';
$string['frequency'] = 'কম্পাঙ্ক';
$string['intended_weight'] = 'ইচ্ছানুসারে অর্থ';
$string['kurtosis'] = 'স্কোর বন্টন কার্তুসীস ({$a}এর জন্য)';
$string['lastcalculated'] = 'সর্বশেষ গণনাকৃত {$a->সর্বশেষ গণনাকৃত} তখন থেকে {$a->count} সংখ্যকবার অংশগ্রহন করা হয়।';
$string['median'] = 'মধ্যমা গ্রেড ({$a}এর জন্য)';
$string['negcovar'] = 'সর্বমোট অংশগ্রহন গ্রেডসহ গ্রেডের ঋনাত্মক কনভ্যারিয়েন্স';
$string['negcovar_help'] = 'অংশগ্রহনের এ সেটের জন্য গ্রেড অন্যান্য যেকোনো অংশগ্রহনের গ্রেডের বিপরীত। সবগুলো অংশগ্রহনের জন্য যে গ্রেড থাকে তা গড় গ্রেডের নিচে এবং এ প্রশ্নের জন্য গ্রেড গড় গ্রেডের উপরে এবং বিপরীতক্রমে একই।

এ ক্ষেত্রে কুইজের জন্য কার্যকর প্রশ্নের ওয়েট সমীকরণ করে বের করা যায় না। এ কুইজে কার্যকর এসব প্রশ্নের ওয়েট এর গণনা অন্যান্য প্রশ্নের ওয়েটের গণনাই হবে যদি হাইলাইটকৃত প্রশ্নের ঋনাত্মক সহভেদাংক এর সর্বোচ্চ গ্রেড শূন্য হয়।

আপনি যদি প্রশ্ন সম্পাদনা করেন এবং এসব প্রশ্নের ঋনাত্মক সহভেদাংক এর সর্বোচ্চ গ্রেড শূন্য রাখেন তবে এ প্রশ্নগুলোর কার্যকর প্রশ্নের ওয়েট শূন্য হবে এবং অন্যান্য প্রশ্নগুলোর কার্যকর প্রশ্নের ওয়েট যেমন গণনা করা হয়েছে তেমনই হবে।';
$string['nostudentsingroup'] = 'এ গ্রুপে এখন পর্যন্ত কোনো শিক্ষার্থী নেই';
$string['optiongrade'] = 'আংশিক ক্রেডিট';
$string['position'] = 'অবস্থান';
$string['positions'] = 'অবস্থান';
$string['questioninformation'] = 'প্রশ্নের তথ্য';
$string['questionname'] = 'প্রশ্নের নাম';
$string['questionnumber'] = 'Q#';
$string['questionstatistics'] = 'প্রশ্নের পরিসংখ্যান';
$string['questiontype'] = 'প্রশ্নের ধরণ';
$string['quizinformation'] = 'কুইজের তথ্য';
$string['quizname'] = 'কুইজের নাম';
$string['quizoverallstatistics'] = 'কুইজের সার্বিক পরিসংখ্যান';
$string['quizstructureanalysis'] = 'কুইজের কাঠামো বিশ্লেষণ';
$string['random_guess_score'] = 'এলোমেলো অনুমান স্কোর';
$string['recalculatenow'] = 'এখন পুনঃগণনা';
$string['response'] = 'উত্তর';
$string['skewness'] = 'স্কোর বন্টন বক্রতা ({$a}এর জন্য)';
$string['standarddeviation'] = 'পরিমিত বিচ্যুতি ({$a}এর জন্য)';
$string['standarddeviationq'] = 'পরিমিত বিচ্যুতি';
$string['standarderror'] = 'আদর্শ ত্রুটি ({$a}এর জন্য)';
$string['statistics'] = 'পরিসংখ্যান';
$string['statistics:view'] = 'পরিসংখ্যান রিপোর্ট প্রদর্শন';
$string['statisticsreport'] = 'পরিসংখ্যান রিপোর্ট';
$string['statisticsreportgraph'] = 'প্রশ্নের অবস্থানের জন্য পরিসংখ্যান';
$string['statsfor'] = 'কুইজ পরিসংখ্যান ({$a}এর জন্য)';
