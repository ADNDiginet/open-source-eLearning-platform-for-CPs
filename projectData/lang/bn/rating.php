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
 * Strings for component 'rating', language 'bn', version '3.11'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'রেটিং এর গড়';
$string['aggregatecount'] = 'রেটিং গণনা';
$string['aggregatemax'] = 'সর্বোচ্চ রেটিং';
$string['aggregatemin'] = 'সর্বনিম্ন রেটিং';
$string['aggregatenone'] = 'কোনো রেটিং নয়';
$string['aggregatesum'] = 'রেটিং এর সমষ্টি';
$string['aggregatetype'] = 'সর্বোমোট ধরণ';
$string['aggregatetype_help'] = 'The aggregate type defines how ratings are combined to form the final grade in the gradebook.

* Average of ratings - The mean of all ratings
* Count of ratings - The number of rated items becomes the final grade. Note that the total cannot exceed the maximum grade for the activity.
* Maximum - The highest rating becomes the final grade
* Minimum - The smallest rating becomes the final grade
* Sum - All ratings are added together. Note that the total cannot exceed the maximum grade for the activity.

If "No ratings" is selected, then the activity will not appear in the gradebook.';
$string['allowratings'] = 'আইটেম রেট করার জন্য অনুমোদন';
$string['allratingsforitem'] = 'সব রেটিং জমা';
$string['capabilitychecknotavailable'] = 'সক্রিয়তা সংরক্ষণ না করা পর্যন্ত ধারণক্ষমতা পরীক্ষা পাওয়া যায়না';
$string['couldnotdeleteratings'] = 'দুঃখিত, যেহেতু একে ইতোমধ্যে রেট করা হয়েছে সুতরাং এটা এখন আর অপসারন করা যাবে না';
$string['norate'] = 'আইটেমের রেটিং অনুমোদিত নয়';
$string['noratings'] = 'কোনো রেটিং জমা করা হয়নি';
$string['noviewanyrate'] = 'আপনি যে আইটেম তৈরি করেছেন কেবল সেগুলোর ফলাফল দেখতে পারেন';
$string['noviewrate'] = 'আইটেম রেটিং দেখার ক্ষমতা আপনার নেই';
$string['rate'] = 'রেট';
$string['ratepermissiondenied'] = 'আইটেম রেট করার অনুমোদন আপনার নেই';
$string['rating'] = 'রেটিং';
$string['ratings'] = 'রেটিং';
$string['ratingtime'] = 'আইটেমে তারিখের সীমা ব্যবহার করে সীমিত রেটিং';
$string['rolewarning'] = 'রেট করার অনুমতি এর অংশ';
$string['rolewarning_help'] = 'রেটিং জমা দিতে ব্যবহারকারীর মুডল/রেটিং আবশ্যক:ক্ষমতা এবং সুনির্দিষ্ট মডিউল ক্ষমতা। ব্যবহারকারী আইটেম রেট করার জন্য নিম্নোক্ত অংশ নিয়োজিত করতে হবে। সেটিং ব্লকে যে অনুমতির লিংক আছে তার সাহায্যে বিভিন্ন অংশের তালিকা সন্নিবিষ্ট করা যেতে পারে।';
