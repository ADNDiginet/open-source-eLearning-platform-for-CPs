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
 * Strings for component 'webservice', language 'bn', version '3.11'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'ব্যতিক্রম কন্ট্রোলে প্রবেশ';
$string['actwebserviceshhdr'] = 'ওয়েব সার্ভিস প্রটোকল সক্রিয়';
$string['addaservice'] = 'সার্ভিস যোগ';
$string['addcapabilitytousers'] = 'ব্যবহারকারির সামর্থ পরীক্ষা';
$string['addcapabilitytousersdescription'] = 'ওয়েব সার্ভিস ব্যবহার করতে, ব্যবহারকারীর দুইটি ভিন্ন সামর্থ থাকতে হবে: \'/webservice:createtoken\' এবং ওয়েব সার্ভিস প্রটোকল মিলানোর সামর্থ থাকতে হবে (\'webservice/rest:use\', \'webservice/soap:use\', ...)। <br/>পরামর্শ: এটি নির্ধারন করার একটি পথ হচ্ছে  \'webservice:createtoken\' দিয়ে নতুন একটি \'ওয়েব সার্ভিস\' সিস্টেম ভূমিকা তৈরি করতে হবে এবং কিছু প্রটোকল তৈরি করতে হবে। তারপর ওয়েব সার্ভিস ব্যবহারকারীর জন্য সিস্টেম ভূমিকাটিকে বরাদ্দ করুন।';
$string['addfunction'] = 'ফাংশন যোগ';
$string['addfunctionhelp'] = 'সার্ভিসটিতে যোগ করার জন্য ফাংশন নির্বাচন';
$string['addfunctions'] = 'ফাংশন যোগ';
$string['addfunctionsdescription'] = '<strong>সার্ভিস পরিচালনা</strong> পৃষ্ঠায়, নতুনভাবে তৈরি করা সার্ভিসের জন্য <strong>ফাংশন</strong> লিঙ্কে ক্লিক করুন। কিছু ফাংশন সার্ভিসে যোগ করুন।';
$string['addrequiredcapability'] = 'আবশ্যকীয় সক্ষমতা এস্যাইন/আনএস্যাইন';
$string['addservice'] = 'নতুন সার্ভিস যোগ: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'সার্ভিস "{$a}" তে ফাংশন যোগ';
$string['allusers'] = 'সব ব্যবহারকারি';
$string['apiexplorer'] = 'API এক্সপ্লোরার';
$string['apiexplorernotavalaible'] = 'এখনো পর্যন্ত API এক্সপ্লোরার উপস্থিত হয়নি।';
$string['arguments'] = 'বিশেষ যুক্তি';
$string['authmethod'] = 'প্রমাণীকরণ প্রক্রিয়া';
$string['checkusercapability'] = 'ব্যবহারকারীর সক্ষমতা পরীক্ষা';
$string['checkusercapabilitydescription'] = 'ওয়েব সার্ভিস ব্যবহার করতে, ব্যবহারকারীর দুইটি ভিন্ন সামর্থ থাকতে হবে: \'/webservice:createtoken\' এবং ওয়েব সার্ভিস প্রটোকল মিলানোর সামর্থ থাকতে হবে (\'webservice/rest:use\', \'webservice/soap:use\', ...)। <br/>পরামর্শ: এটি নির্ধারন করার একটি পথ হচ্ছে প্রটোকল সমর্থনে নির্ধারণসহ নতুন একটি \'ওয়েব সার্ভিস\' সিস্টেম ভূমিকা তৈরি করতে হবে। তারপর ওয়েব সার্ভিস ব্যবহারকারীর জন্য সিস্টেম ভূমিকাটিকে বরাদ্দ করুন।';
$string['configwebserviceplugins'] = 'নিরাপত্তার কারনে, শুধুমাত্র যে সব প্রটোকল ব্যবহৃত হচ্ছে তা সক্রিয় থাকতে হবে।';
$string['context'] = 'প্রসঙ্গ';
$string['createservicedescription'] = 'সার্ভিস ওয়েব সার্ভিস ফাংশনের একটি সেট। আপনি ব্যবহারকারীকে নতুন সার্ভিসে প্রবেশের অনুমোদন দিবেন। <strong>সার্ভিস যোগ</strong> পৃষ্ঠায় \'সক্রিয়\' এবং \'অনুমোদিত ব্যবহারকারী\' অপশন নির্বাচন করুন। \'সমর্থন আবশ্যক নয়\' নির্বাচন করুন।';
$string['createserviceforusersdescription'] = 'সার্ভিস ওয়েব সার্ভিস ফাংশনের একটি সেট। আপনি ব্যবহারকারীকে নতুন সার্ভিসে প্রবেশের অনুমোদন দিবেন। <strong>সার্ভিস যোগ</strong> পৃষ্ঠায় \'সক্রিয়\' অপশন নির্বাচন করুন এবং \'অনুমোদিত ব্যবহারকারী\' অপশন অনির্বাচন করুন। \'সমর্থন আবশ্যক নয়\' নির্বাচন করুন।';
$string['createtoken'] = 'টোকেন তৈরি';
$string['createtokenforuser'] = 'ব্যবহারকারীর জন্য একটি টোকেন তৈরি';
$string['createtokenforuserdescription'] = '<strong>টোকেন পরিচালনা</strong> পৃষ্ঠায়, \'যোগ\'এ ক্লিক করুন। তৈরিকৃত ব্যবহারকারী এবং সার্ভিস নির্বাচন করুন।';
$string['createuser'] = 'বিশেষ ব্যবহারকারী তৈরি';
$string['createuserdescription'] = 'সিস্টেম নিয়ন্ত্রন মুডলের জন্য আপনার একজন সুনির্দিষ্ট ব্যবহারকারী তৈরি করতে হবে।';
$string['default'] = '"{$a}" তে পূর্বনির্ধারিত';
$string['deleteaservice'] = 'সার্ভিস মুছে ফেলা';
$string['deleteservice'] = 'সার্ভিসটি মুছে ফেলুন: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'সার্ভিস মুছে ফেললে এই সার্ভিস সম্পর্কিত টোকেনও মুছে ফেলা হবে। আপনি কি বাহ্যিক সার্ভিস "{$a}" অপসারণ করতে চান?';
$string['deletetokenconfirm'] = 'আপনি কি <strong>{$a->service}</strong> সার্ভিসের <strong>{$a->user}</strong>এর জন্য ওয়েব সার্ভিস টোকেন মুছে ফেলতে চান?';
$string['disabledwarning'] = 'সব ওয়েব সার্ভিস প্রটোকল নিষ্ক্রিয়। "সক্রিয় ওয়েব সার্ভিস" সেটিং উচ্চ পর্যায়ের ফিচারে পাওয়া যাবে।';
$string['doc'] = 'নথিবদ্ধকরণ';
$string['docaccessrefused'] = 'আপনি এই টোকেনের জন্য নথিবদ্ধকরণটি দেখতে পারবেননা';
$string['documentation'] = 'ওয়েব সার্ভিস নথিবদ্ধকরণ';
$string['editaservice'] = 'সার্ভিস সম্পাদন';
$string['editservice'] = 'সার্ভিসটি সম্পাদন: {$a->name} (id: {$a->id})';
$string['enabled'] = 'সক্রিয়';
$string['enabledocumentation'] = 'ডেভেলপার নথিবদ্ধকরণ সক্রিয়';
$string['enabledocumentationdescription'] = 'বাহ্যিক সিস্টেম প্রবেশের ডেভলপারদেরকে বিস্তারিত ওয়েব সার্ভিস নথিবদ্ধকরণ পরীক্ষা করতে দিন। যে যে সার্ভিসে ডেভলপারদের প্রবেশাধিকার আছে শুধুমাত্র সেগুলোর নথিবদ্ধকরণ তারা দেখতে পাবে।';
$string['enableprotocols'] = 'প্রটোকল সক্রিয়';
$string['enableprotocolsdescription'] = 'কমপক্ষে একটি প্রটোকল অবশ্যই সক্রিয় থাকতে হবে। পরিপূরক অংশে, যদিও নিরাপত্তার ব্যাপারে মুডল অনেক ভালো লক্ষ্য রাখে, যত বেশি প্রটোকল আপনি সক্রিয় করবেন,  মুডল সাইটে বাহ্যিক আক্রমনের শিকারের সম্ভাব্যতা তত বেশি বেড়ে যাবে।';
$string['enablews'] = 'ওয়েব সার্ভিস সক্রিয়';
$string['enablewsdescription'] = 'উচ্চ পর্যায়ের ফিচারে ওয়েব সার্ভিস অবশ্যই সক্রিয় থাকবে।';
$string['entertoken'] = 'নিরাপত্তা কী/টোকেন দিন:';
$string['error'] = 'ত্রুটি: {$a}';
$string['errorcatcontextnotvalid'] = '(category id:{$a->catid}) বিভাগের প্রসঙ্গে আপনি ফাংশন চালাতে পারবেননা। প্রসঙ্গের ত্রুটি বার্তাটি হলো: {$a->message}';
$string['errorcodes'] = 'ত্রুটি বার্তা';
$string['errorcoursecontextnotvalid'] = '(course id:{$a->courseid}) কোর্সের প্রসঙ্গে আপনি ফাংশন চালাতে পারবেননা। প্রসঙ্গের ত্রুটি বার্তাটি হলো: {$a->message}';
$string['errorinvalidparam'] = 'param "{$a}" অকার্যকর।';
$string['errornotemptydefaultparamarray'] = '\'{$a}\' নামের ওয়েব সার্ভিস বর্ণনা প্যারামিটারটি একটি অথবা একাধিক কাঠামো। পূর্বনির্ধারিতটি শুধুমাত্র ফাঁকা অ্যারে হতে পারবে। ওয়েব সার্ভিস বর্ণনা নির্বাচন করুন।';
$string['erroroptionalparamarray'] = '\'{$a}\' নামের ওয়েব সার্ভিস বর্ণনা প্যারামিটারটি একটি অথবা একাধিক কাঠামো। পূর্বনির্ধারিতটি শুধুমাত্র ফাঁকা অ্যারে হতে পারবে। এটি VALUE_OPTIONAL হিসেবে নির্ধারণ করা যাবেনা। ওয়েব সার্ভিস বর্ণনা নির্বাচন করুন।';
$string['execute'] = 'চালানো';
$string['executewarnign'] = 'সতর্কীকরণ: যদি আপনি চালানো চাপ দিন তাহলে আপনার ডাটাবেস পরিবর্তিত হবে এবং পরিবর্তন সমূহ স্বয়ংক্রিভাবে প্রত্যাবর্তন করতে পারবেনা!';
$string['externalservice'] = 'বাহ্যিক সার্ভিস';
$string['externalservicefunctions'] = 'বাহ্যিক সার্ভিসের ফংশন';
$string['externalservices'] = 'বাহ্যিক সার্ভিস';
$string['externalserviceusers'] = 'বাহ্যিক সার্ভিসের ব্যবহারকারী';
$string['failedtolog'] = 'লগ করতে ব্যর্থ';
$string['function'] = 'ফাংশন';
$string['functions'] = 'ফাংশন';
$string['generalstructure'] = 'সাধারণ কাঠামো';
$string['information'] = 'তথ্য';
$string['invalidextparam'] = 'বাহ্যিক api প্যারামিটার অকার্যকর: {$a}';
$string['invalidextresponse'] = 'বাহ্যিক api উত্তর অকার্যকর: {$a}';
$string['invalidiptoken'] = 'অকার্যকর টোকেন - আপনার  IP সমর্থন করেনা';
$string['invalidtimedtoken'] = 'অকার্যকর টোকেন - টোকেনের মেয়াদ শেষ';
$string['invalidtoken'] = 'অকার্যকর টোকেন - টোকেন পাওয়া যায়নি';
$string['iprestriction'] = 'IP সীমিতকরণ';
$string['iprestriction_help'] = 'তালিকাভুক্ত IP থেকে ব্যবহারকারীর ওয়েব সার্ভিস কল করার প্রয়োজন।';
$string['key'] = 'কী';
$string['keyshelp'] = 'এই কীসমূহ বাহ্যিক এপ্লিকেশন থেকে আপনার মুডল অ্যাকাউন্টে প্রবেশ করতে ব্যবহার করা হয়।';
$string['manageprotocols'] = 'প্রটোকল পরিচালনা';
$string['managetokens'] = 'টোকেন পরিচালনা';
$string['missingcaps'] = 'অনুপস্থিত সক্ষমতা।';
$string['missingcaps_help'] = 'সামর্থ্যের তালিকা যা সার্ভিস ফাংশনের জন্য প্রয়োজন কিন্তু ব্যবহারকারীর সেগুলো নেই। এই সার্ভিস সমূহ ব্যবহার করার জন্য আপনার এই সামর্থ্যসমূহ এই ব্যবহারকারীর সাথে যুক্ত করতে হবে।
মনে রাখবেন: কিছু ক্ষেত্রে "আবশ্যক" সামর্থ্যসমূহ ব্যবহৃত অবস্থার উপর নির্ভর করতে পারে। উদাহরণ স্বরূপ: শুধুমাত্র সাইট-ওয়াইড অনুরোধের জন্য moodle_role_get_enrolled_users() ফাংশনের \'moodle/site:viewparticipants\' সামর্থ্যটি প্রয়োজন।';
$string['missingpassword'] = 'অনুপস্থিত পাসওয়ার্ড';
$string['missingusername'] = 'অনুপস্থিত ব্যবহারকারীর নাম';
$string['nofunctions'] = 'এই সার্ভিসের কোন ফাংশন নেই।';
$string['norequiredcapability'] = 'কোন আবশ্যকীয় সক্ষমতা নেই';
$string['notoken'] = 'টোকেন তালিকা খালি।';
$string['onesystemcontrolling'] = 'টোকেন এর সাথে একটি সিস্টেম নিয়ন্ত্রন মুডল';
$string['onesystemcontrollingdescription'] = 'একটি সিস্টেম নিয়ন্ত্রন মুডল (উদাহরণ শিক্ষার্থী তথ্য সিস্টেম) নির্ধারণ করার জন্য বর্ণিত ধাপ আপনাকে সহায়তা করবে। এই ধাপ সমূহ সুপারিশকৃত টোকেন (নিরাপত্তা কী) প্রমাণীকরণ প্রক্রিয়া নির্ধারণ করতেও সহায়তা করবে।';
$string['operation'] = 'অপারেশন';
$string['optional'] = 'ঐচ্ছিক';
$string['phpparam'] = 'XML-RPC (PHP কাঠামো)';
$string['phpresponse'] = 'XML-RPC (PHP কাঠামো)';
$string['postrestparam'] = 'REST এর জন্য PHP কোড (প্রকাশের অনুরোধ)';
$string['potusers'] = 'অনুমোদিত ব্যবহারকারী নয়';
$string['potusersmatching'] = 'অনুমোদিত ব্যবহারকারী যারা নয় তার সাথে মিলছেনা';
$string['print'] = 'সব মুদ্রণ';
$string['protocol'] = 'প্রটোকল';
$string['removefunction'] = 'অপসারণ';
$string['removefunctionconfirm'] = '"{$a->service}"সার্ভিস থেকে "{$a->function}" ফাংশন অপসারণ করতে আপনি কি নিশ্চিত?';
$string['requireauthentication'] = 'মেথডটি xxx অনুমতি এর প্রমাণীকরণ প্রয়োজন।';
$string['required'] = 'আবশ্যকীয়';
$string['requiredcapability'] = 'আবশ্যকীয় সক্ষমতা';
$string['requiredcapability_help'] = 'যদি নির্ধারিত থাকে, শুধুমাত্র আবশ্যকীয় সক্ষমতাসহ ব্যবহারকারী  সার্ভিসটিতে প্রবেশ করতে পারবে।';
$string['requiredcaps'] = 'আবশ্যকীয় সক্ষমতা';
$string['resettokenconfirm'] = '<strong>{$a->service}</strong> সার্ভিসের <strong>{$a->user}</strong> এর ওয়েব সার্ভিস কী টি পুনঃনির্ধারণ করতে আপনি কি নিশ্চিত?';
$string['resettokenconfirmsimple'] = 'কী টি পুনঃনির্ধারণ করতে আপনি কি নিশ্চিত? পুরানো কী ধারনকৃত কোন লিঙ্ক আর কাজ করবেনা।';
$string['response'] = 'উত্তর';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restparam'] = 'REST (পোস্ট প্যারামিটার)';
$string['restrictedusers'] = 'শুধুমাত্র অনুমোদিত ব্যবহারকারী';
$string['restrictedusers_help'] = 'যদি এই সেটিং নিষ্ক্রিয় থাকে, যে কোন \'moodle/webservice:createtoken\' সামর্থ্যসহ ব্যবহারকারী \'নিরাপত্তা কী\' পৃষ্ঠার এই সার্ভিসের জন্য টোকেন তৈরি করতে সক্ষম হবে।
যদি এই সেটিং সক্রিয় থাকে, এই সার্ভিসে কোন ব্যবহারকারী প্রবেশ করতে পারবে তা আপনি নির্বাচন করতে পারবেন। এই ব্যবহারকারীরা \'নিরাপত্তা কী\' পৃষ্ঠায় নিজস্ব টোকেন তৈরি করতে এখনও তাদের \'moodle/webservice:createtoken\' সামর্থ্যটির প্রয়োজন।';
$string['securitykey'] = 'নিরাপত্তা কী (টোকেন)';
$string['securitykeys'] = 'নিরাপত্তা কী';
$string['selectauthorisedusers'] = 'অনুমোদিত ব্যবহারকারী নির্বাচন';
$string['selectedcapability'] = 'নির্বাচিত';
$string['selectedcapabilitydoesntexit'] = 'সম্প্রতি নির্ধারিত আবশ্যক ({$a}) সামর্থ্যটি আর বিদ্যমান নেই। অনুগ্রহ করে পরিবর্তনটি পরিবর্তন করুন এবং সংরক্ষণ করুন।';
$string['selectservice'] = 'সার্ভিস নির্বাচন';
$string['selectspecificuser'] = 'সুনির্দিষ্ট ব্যবহারকারী নির্বাচন';
$string['selectspecificuserdescription'] = '<strong>সার্ভিস পরিচালনা</strong> পৃষ্ঠায়, \'অনুমোদিত ব্যবহারকারী\' তে ক্লিক করুন এবং অনুমোদিত ব্যবহারকারী তালিকায় ব্যবহারকারী যোগ করুন। আবশ্যকীয় ব্যবহারকারী সামর্থ্য প্রদর্শিত হবে। সুপারিশ করা যাচ্ছে যে এই সার্ভিসের জন্য একটি ভূমিকা তৈরি করুন এবং ভূমিকাতে সামর্থ্য যোগ করুন, তারপর ব্যবহারকারীকে ভূমিকায় নিযুক্ত করুন।';
$string['service'] = 'সার্ভিস';
$string['servicehelpexplanation'] = 'সার্ভিস একটি ফাংশনের সেট। সব বা সুনির্দিষ্ট ব্যবহারকারী সার্ভিসে প্রবেশ করতে পারে। যে সার্ভিসসমূহ আপনি তৈরি করেছেন তা <strong>স্বনির্ধারিত সার্ভিস</strong>। পূর্বনির্ধারিতভাবে মুডলে যুক্ত সার্ভিসসমূহ <strong>পূর্বনির্ধারিত সার্ভিস</strong>। আপনি <strong>পূর্বনির্ধারিত সার্ভিস</strong> থেকে কোন ফাংশন পরিবর্তন করতে পারবেননা।';
$string['servicename'] = 'সার্ভিসের নাম';
$string['servicesbuiltin'] = 'বিল্ট - ইন সার্ভিস';
$string['servicescustom'] = 'স্বনির্ধারিত সার্ভিস';
$string['serviceusers'] = 'অনুমোদিত ব্যবহারকারী';
$string['serviceusersettings'] = 'ব্যবহারকারী সেটিং';
$string['serviceusersmatching'] = 'অনুমোদিত ব্যবহারকারী মিল';
$string['serviceuserssettings'] = 'অনুমোদিত ব্যবহারকারীর জন্য সেটিং পরিবর্তন';
$string['simpleauthlog'] = 'সহজ প্রমাণীকরণ লগ ইন';
$string['step'] = 'ধাপ';
$string['testauserwithtestclientdescription'] = 'ওয়েব সার্ভিস ক্লায়েন্ট ব্যবহার করে সার্ভিসে বাহ্যিক প্রবেশ নকল। সেখানে যাওয়ার আগে, "moodle/webservice:createtoken" সামর্থ্যের সাথে ব্যবহারকারী সেটে লগ ইন করুন, এবং "my moodle" ব্লক থেকে তার নিরাপত্তা কী (টোকেন) পাবেন। পরীক্ষামূলক ক্লায়েন্টে এই টোকেনটি ব্যবহার করবেন। পরীক্ষামূলক ক্লায়েন্টে, টোকেন প্রমাণীকরণসহ সক্রিয় প্রটোকল ও নির্বাচন করুন। <strong>সতর্কীকরণ: যে ফাংশনটি আপনি পরীক্ষা করেছেন এই ব্যবহারকারীর জন্য তা চালানো হবে, সতর্কতার সাথে পরীক্ষা নির্বাচন করুন!!!</strong>';
$string['testclient'] = 'ওয়েব সার্ভিস পরীক্ষামূলক ক্লায়েন্ট';
$string['testclientdescription'] = '* <strong>প্রকৃত</strong> ফাংশনটির জন্য ওয়েব সার্ভিস পরীক্ষামূলক ক্লায়েন্ট <strong>চালায়</strong>। আপনি যে ফাংশনটি যানেননা তা পরীক্ষা করবেননা। <br/>* সব বিদ্যমান ওয়েব সার্ভিস ফাংশন এখনো পরীক্ষামূলক ক্লায়েন্টে বাস্তবায়ন করতে হবে। <br/>* ব্যবহারকারী কিছু ফাংশনে প্রবেশ করতে পারে কিনা তা পরীক্ষা করতে, যে ফাংশন সমূহ আপনি অনুমোদন করেননি তা পরীক্ষা করুন।<br/>* পরিষ্কার ত্রুটি বার্তা দেখতে {$a->atag} এর <strong>{$a->mode}</strong> তে ডিবাগিং নির্ধারণ করুন <br/>*  {$a->amfatag} এ প্রবেশ করুন।';
$string['testwithtestclient'] = 'সার্ভিসটি পরীক্ষা';
$string['testwithtestclientdescription'] = 'ওয়েব সার্ভিস ক্লায়েন্ট ব্যবহার করে সার্ভিসে বাহ্যিক প্রবেশ নকল। টোকেন প্রমাণীকরণসহ সক্রিয় প্রটোকল  ব্যবহার করুন। <strong>সতর্কীকরণ: যে ফাংশনটি আপনি পরীক্ষা করেছেন এই ব্যবহারকারীর জন্য তা চালানো হবে, সতর্কতার সাথে পরীক্ষা নির্বাচন করুন!!!</strong>';
$string['token'] = 'টোকেন';
$string['tokenauthlog'] = 'টোকেন প্রমাণীকরণ';
$string['tokencreatedbyadmin'] = 'শুধুমাত্র প্রশাসক (*) এর দ্বারা পুনঃনির্ধারণ করা যায়';
$string['tokencreator'] = 'নির্মাতা';
$string['updateusersettings'] = 'হালনাগাদ';
$string['userasclients'] = 'টোকেনসহ ক্লায়েন্ট রূপে ব্যবহারকারীরা';
$string['userasclientsdescription'] = 'বর্ণিত ধাপে ক্লায়েন্ট হিসেবে ব্যবহারকারীর জন্য মুডল ওয়েব সার্ভিস নির্ধারণ করতে সহায়তা করে। এই ধাপসমূহ সুপারিশকৃত টোকেন (নিরাপত্তা কী) প্রমাণীকরণ প্রক্রিয়া নির্ধারণ করতে ও সহায়তা করে। এই ব্যবহৃত অবস্থায়, ব্যবহারকারী <strong>নিরাপত্তা কী</strong>প্রোফাইল পৃষ্ঠা থেকে তার টোকেন তৈরি করে।';
$string['usermissingcaps'] = 'অনুপস্থিত সক্ষমতা: {$a}।';
$string['usernotallowed'] = 'ব্যবহারকারীর এই সার্ভিসের অনুমোদন নেই। প্রথমে {$a} অনুমোদিত ব্যবহারকারী প্রশাসন পৃষ্ঠায় এই ব্যবহারকারীকে অনুমোদন দিতে হবে।';
$string['usersettingssaved'] = 'ব্যবহারকারী সেটিং সংরক্ষিত';
$string['validuntil'] = 'কার্যকর এই পর্যন্ত';
$string['validuntil_help'] = 'যদি নির্ধারিত থাকে, এই ব্যবহারকারীর জন্য এই তারিখের পর সার্ভিসটি নিষ্ক্রিয় হয়ে যাবে।';
$string['webservice'] = 'ওয়েব সার্ভিস';
$string['webservices'] = 'ওয়েব সার্ভিস';
$string['webservicesoverview'] = 'সারসংক্ষেপ';
$string['webservicetokens'] = 'ওয়েব সার্ভিস টোকেন';
$string['wrongusernamepassword'] = 'ব্যবহারকারীর নাম অথবা পাসওয়ার্ড ভুল';
$string['wsclientdoc'] = 'মুডল ওয়েব সার্ভিস ক্লায়েন্ট নথিবদ্ধকরণ';
$string['wsdocumentation'] = 'ওয়েব সার্ভিস নথিবদ্ধকরণ';
$string['wsdocumentationdisable'] = 'ওয়েব সার্ভিস নথিবদ্ধকরণ অকার্যকর।';
$string['wsdocumentationintro'] = 'ক্লায়েন্ট তৈরি করতে {$a->doclink} পড়ার জন্য আপনাকে পরামর্শ দেওয়া হচ্ছে';
$string['wsdocumentationlogin'] = 'অথবা আপনার ওয়েব সার্ভিসের ব্যবহারকারী নাম ও পাসওয়ার্ড দিন:';
$string['wspassword'] = 'ওয়েব সার্ভিস পাসওয়ার্ড';
$string['wsusername'] = 'ওয়েব সার্ভিস ব্যবহারকারীর নাম';
