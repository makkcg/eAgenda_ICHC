<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::insert([
            ["code" => "aa", "name" => "Afar", "direction" => "ltr", "local_name" => "Afar"],
            ["code" => "ab", "name" => "Abkhazian", "direction" => "ltr", "local_name" => "Аҧсуа"],
            ["code" => "af", "name" => "Afrikaans", "direction" => "ltr", "local_name" => "Afrikaans"],
            ["code" => "ak", "name" => "Akan", "direction" => "ltr", "local_name" => "Akana"],
            ["code" => "als", "name" => "Alemannic", "direction" => "ltr", "local_name" => "Alemannisch"],
            ["code" => "am", "name" => "Amharic", "direction" => "ltr", "local_name" => "አማርኛ"],
            ["code" => "an", "name" => "Aragonese", "direction" => "ltr", "local_name" => "Aragonés"],
//            ["code" => "ang", "name" => "Angal", "direction" => "ltr", "local_name" => "Angal Heneng"],
            ["code" => "ang", "name" => "Anglo-Saxon / Old English", "direction" => "ltr", "local_name" => "Englisc"],
            ["code" => "ar", "name" => "Arabic", "direction" => "rtl", "local_name" => "العربية"],
            ["code" => "arc", "name" => "Aramaic", "direction" => "rtl", "local_name" => "ܣܘܪܬ"],
            ["code" => "as", "name" => "Assamese", "direction" => "ltr", "local_name" => "অসমীয়া"],
            ["code" => "ast", "name" => "Asturian", "direction" => "ltr", "local_name" => "Asturianu"],
            ["code" => "av", "name" => "Avar", "direction" => "ltr", "local_name" => "Авар"],
            ["code" => "awa", "name" => "Awadhi", "direction" => "ltr", "local_name" => "Awadhi"],
            ["code" => "ay", "name" => "Aymara", "direction" => "ltr", "local_name" => "Aymar"],
            ["code" => "az", "name" => "Azerbaijani", "direction" => "ltr", "local_name" => "Azərbaycanca / آذربايجان"],
            ["code" => "ba", "name" => "Bashkir", "direction" => "ltr", "local_name" => "Башҡорт"],
            ["code" => "bar", "name" => "Bavarian", "direction" => "ltr", "local_name" => "Boarisch"],
            ["code" => "bat-smg", "name" => "Samogitian", "direction" => "ltr", "local_name" => "Žemaitėška"],
            ["code" => "bcl", "name" => "Bikol", "direction" => "ltr", "local_name" => "Bikol Central"],
            ["code" => "be", "name" => "Belarusian", "direction" => "ltr", "local_name" => "Беларуская"],
            ["code" => "be-x-old", "name" => "Belarusian (Taraškievica)", "direction" => "ltr", "local_name" => "Беларуская (тарашкевіца)"],
            ["code" => "bg", "name" => "Bulgarian", "direction" => "ltr", "local_name" => "Български"],
            ["code" => "bh", "name" => "Bihari", "direction" => "ltr", "local_name" => "भोजपुरी"],
            ["code" => "bi", "name" => "Bislama", "direction" => "ltr", "local_name" => "Bislama"],
            ["code" => "bm", "name" => "Bambara", "direction" => "ltr", "local_name" => "Bamanankan"],
            ["code" => "bn", "name" => "Bengali", "direction" => "ltr", "local_name" => "বাংলা"],
            ["code" => "bo", "name" => "Tibetan", "direction" => "ltr", "local_name" => "བོད་ཡིག / Bod skad"],
            ["code" => "bpy", "name" => "Bishnupriya Manipuri", "direction" => "ltr", "local_name" => "ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী"],
            ["code" => "br", "name" => "Breton", "direction" => "ltr", "local_name" => "Brezhoneg"],
            ["code" => "brx", "name" => "Boro", "direction" => "ltr", "local_name" => "बड़"],
            ["code" => "bs", "name" => "Bosnian", "direction" => "ltr", "local_name" => "Bosanski"],
            ["code" => "bug", "name" => "Buginese", "direction" => "ltr", "local_name" => "ᨅᨔ ᨕᨘᨁᨗ / Basa Ugi"],
            ["code" => "bxr", "name" => "Buriat (Russia)", "direction" => "ltr", "local_name" => "Буряад хэлэн"],
            ["code" => "ca", "name" => "Catalan", "direction" => "ltr", "local_name" => "Català"],
            ["code" => "cdo", "name" => "Min Dong Chinese", "direction" => "ltr", "local_name" => "Mìng-dĕ̤ng-ngṳ̄ / 閩東語"],
            ["code" => "ce", "name" => "Chechen", "direction" => "ltr", "local_name" => "Нохчийн"],
            ["code" => "ceb", "name" => "Cebuano", "direction" => "ltr", "local_name" => "Sinugboanong Binisaya"],
            ["code" => "ch", "name" => "Chamorro", "direction" => "ltr", "local_name" => "Chamoru"],
            ["code" => "cho", "name" => "Choctaw", "direction" => "ltr", "local_name" => "Choctaw"],
            ["code" => "chr", "name" => "Cherokee", "direction" => "ltr", "local_name" => "ᏣᎳᎩ"],
            ["code" => "chy", "name" => "Cheyenne", "direction" => "ltr", "local_name" => "Tsetsêhestâhese"],
            ["code" => "ckb", "name" => "Kurdish (Sorani)", "direction" => "rtl", "local_name" => "کوردی"],
            ["code" => "co", "name" => "Corsican", "direction" => "ltr", "local_name" => "Corsu"],
            ["code" => "cr", "name" => "Cree", "direction" => "ltr", "local_name" => "Nehiyaw"],
            ["code" => "cs", "name" => "Czech", "direction" => "ltr", "local_name" => "Česky"],
            ["code" => "csb", "name" => "Kashubian", "direction" => "ltr", "local_name" => "Kaszëbsczi"],
            ["code" => "cu", "name" => "Old Church Slavonic / Old Bulgarian", "direction" => "ltr", "local_name" => "словѣньскъ / slověnĭskŭ"],
            ["code" => "cv", "name" => "Chuvash", "direction" => "ltr", "local_name" => "Чăваш"],
            ["code" => "cy", "name" => "Welsh", "direction" => "ltr", "local_name" => "Cymraeg"],
            ["code" => "da", "name" => "Danish", "direction" => "ltr", "local_name" => "Dansk"],
            ["code" => "de", "name" => "German", "direction" => "ltr", "local_name" => "Deutsch"],
            ["code" => "diq", "name" => "Dimli", "direction" => "ltr", "local_name" => "Zazaki"],
            ["code" => "dsb", "name" => "Lower Sorbian", "direction" => "ltr", "local_name" => "Dolnoserbski"],
            ["code" => "dv", "name" => "Divehi", "direction" => "rtl", "local_name" => "ދިވެހިބަސް"],
            ["code" => "dz", "name" => "Dzongkha", "direction" => "ltr", "local_name" => "ཇོང་ཁ"],
            ["code" => "ee", "name" => "Ewe", "direction" => "ltr", "local_name" => "Ɛʋɛ"],
            ["code" => "el", "name" => "Greek", "direction" => "ltr", "local_name" => "Ελληνικά"],
            ["code" => "en", "name" => "English", "direction" => "ltr", "local_name" => "English"],
            ["code" => "eo", "name" => "Esperanto", "direction" => "ltr", "local_name" => "Esperanto"],
            ["code" => "es", "name" => "Spanish", "direction" => "ltr", "local_name" => "Español"],
            ["code" => "et", "name" => "Estonian", "direction" => "ltr", "local_name" => "Eesti"],
            ["code" => "eu", "name" => "Basque", "direction" => "ltr", "local_name" => "Euskara"],
            ["code" => "ext", "name" => "Extremaduran", "direction" => "ltr", "local_name" => "Estremeñu"],
            ["code" => "fa", "name" => "Persian", "direction" => "rtl", "local_name" => "فارسی"],
            ["code" => "ff", "name" => "Peul", "direction" => "ltr", "local_name" => "Fulfulde"],
            ["code" => "fi", "name" => "Finnish", "direction" => "ltr", "local_name" => "Suomi"],
            ["code" => "fiu-vro", "name" => "Võro", "direction" => "ltr", "local_name" => "Võro"],
            ["code" => "fj", "name" => "Fijian", "direction" => "ltr", "local_name" => "Na Vosa Vakaviti"],
            ["code" => "fo", "name" => "Faroese", "direction" => "ltr", "local_name" => "Føroyskt"],
            ["code" => "fr", "name" => "French", "direction" => "ltr", "local_name" => "Français"],
            ["code" => "frp", "name" => "Arpitan / Franco-Provençal", "direction" => "ltr", "local_name" => "Arpitan / francoprovençal"],
            ["code" => "fur", "name" => "Friulian", "direction" => "ltr", "local_name" => "Furlan"],
            ["code" => "fy", "name" => "West Frisian", "direction" => "ltr", "local_name" => "Frysk"],
            ["code" => "ga", "name" => "Irish", "direction" => "ltr", "local_name" => "Gaeilge"],
            ["code" => "gan", "name" => "Gan Chinese", "direction" => "ltr", "local_name" => "贛語"],
            ["code" => "gbm", "name" => "Garhwali", "direction" => "ltr", "local_name" => "गढ़वळी"],
            ["code" => "gd", "name" => "Scottish Gaelic", "direction" => "ltr", "local_name" => "Gàidhlig"],
            ["code" => "gil", "name" => "Gilbertese", "direction" => "ltr", "local_name" => "Taetae ni kiribati"],
            ["code" => "gl", "name" => "Galician", "direction" => "ltr", "local_name" => "Galego"],
            ["code" => "gn", "name" => "Guarani", "direction" => "ltr", "local_name" => "Avañe'ẽ"],
            ["code" => "got", "name" => "Gothic", "direction" => "ltr", "local_name" => "gutisk"],
            ["code" => "gu", "name" => "Gujarati", "direction" => "ltr", "local_name" => "ગુજરાતી"],
            ["code" => "gv", "name" => "Manx", "direction" => "ltr", "local_name" => "Gaelg"],
            ["code" => "ha", "name" => "Hausa", "direction" => "rtl", "local_name" => "هَوُسَ"],
            ["code" => "hak", "name" => "Hakka Chinese", "direction" => "ltr", "local_name" => "客家語/Hak-kâ-ngî"],
            ["code" => "haw", "name" => "Hawaiian", "direction" => "ltr", "local_name" => "Hawai`i"],
            ["code" => "he", "name" => "Hebrew", "direction" => "rtl", "local_name" => "עברית"],
            ["code" => "hi", "name" => "Hindi", "direction" => "ltr", "local_name" => "हिन्दी"],
            ["code" => "ho", "name" => "Hiri Motu", "direction" => "ltr", "local_name" => "Hiri Motu"],
            ["code" => "hr", "name" => "Croatian", "direction" => "ltr", "local_name" => "Hrvatski"],
            ["code" => "ht", "name" => "Haitian", "direction" => "ltr", "local_name" => "Krèyol ayisyen"],
            ["code" => "hu", "name" => "Hungarian", "direction" => "ltr", "local_name" => "Magyar"],
            ["code" => "hy", "name" => "Armenian", "direction" => "ltr", "local_name" => "Հայերեն"],
            ["code" => "hz", "name" => "Herero", "direction" => "ltr", "local_name" => "Otsiherero"],
            ["code" => "ia", "name" => "Interlingua", "direction" => "ltr", "local_name" => "Interlingua"],
            ["code" => "id", "name" => "Indonesian", "direction" => "ltr", "local_name" => "Bahasa Indonesia"],
            ["code" => "ie", "name" => "Interlingue", "direction" => "ltr", "local_name" => "Interlingue"],
            ["code" => "ig", "name" => "Igbo", "direction" => "ltr", "local_name" => "Igbo"],
            ["code" => "ii", "name" => "Sichuan Yi", "direction" => "ltr", "local_name" => "ꆇꉙ / 四川彝语"],
            ["code" => "ik", "name" => "Inupiak", "direction" => "ltr", "local_name" => "Iñupiak"],
            ["code" => "ilo", "name" => "Ilokano", "direction" => "ltr", "local_name" => "Ilokano"],
            ["code" => "inh", "name" => "Ingush", "direction" => "ltr", "local_name" => "ГӀалгӀай"],
            ["code" => "io", "name" => "Ido", "direction" => "ltr", "local_name" => "Ido"],
            ["code" => "is", "name" => "Icelandic", "direction" => "ltr", "local_name" => "Íslenska"],
            ["code" => "it", "name" => "Italian", "direction" => "ltr", "local_name" => "Italiano"],
            ["code" => "iu", "name" => "Inuktitut", "direction" => "ltr", "local_name" => "ᐃᓄᒃᑎᑐᑦ"],
            ["code" => "ja", "name" => "Japanese", "direction" => "ltr", "local_name" => "日本語"],
            ["code" => "jbo", "name" => "Lojban", "direction" => "ltr", "local_name" => "Lojban"],
            ["code" => "jv", "name" => "Javanese", "direction" => "ltr", "local_name" => "Basa Jawa"],
            ["code" => "ka", "name" => "Georgian", "direction" => "ltr", "local_name" => "ქართული"],
            ["code" => "kg", "name" => "Kongo", "direction" => "ltr", "local_name" => "KiKongo"],
            ["code" => "ki", "name" => "Kikuyu", "direction" => "ltr", "local_name" => "Gĩkũyũ"],
            ["code" => "kj", "name" => "Kuanyama", "direction" => "ltr", "local_name" => "Kuanyama"],
            ["code" => "kk", "name" => "Kazakh", "direction" => "ltr", "local_name" => "Қазақша"],
            ["code" => "kl", "name" => "Greenlandic", "direction" => "ltr", "local_name" => "Kalaallisut"],
            ["code" => "km", "name" => "Cambodian", "direction" => "ltr", "local_name" => "ភាសាខ្មែរ"],
            ["code" => "kn", "name" => "Kannada", "direction" => "ltr", "local_name" => "ಕನ್ನಡ"],
            ["code" => "khw", "name" => "Khowar", "direction" => "rtl", "local_name" => "کھوار"],
            ["code" => "ko", "name" => "Korean", "direction" => "ltr", "local_name" => "한국어"],
            ["code" => "kr", "name" => "Kanuri", "direction" => "ltr", "local_name" => "Kanuri"],
            ["code" => "ks", "name" => "Kashmiri", "direction" => "rtl", "local_name" => "कॉशुर / کٲشُر"],
            ["code" => "ksh", "name" => "Ripuarian", "direction" => "ltr", "local_name" => "Ripoarisch"],
            ["code" => "ku", "name" => "Kurdish (Kurmanji)", "direction" => "ltr", "local_name" => "Kurdî"],
            ["code" => "kv", "name" => "Komi", "direction" => "ltr", "local_name" => "Коми"],
            ["code" => "kw", "name" => "Cornish", "direction" => "ltr", "local_name" => "Kernewek"],
            ["code" => "ky", "name" => "Kirghiz", "direction" => "ltr", "local_name" => "Kırgızca / Кыргызча"],
            ["code" => "la", "name" => "Latin", "direction" => "ltr", "local_name" => "Latina"],
            ["code" => "lad", "name" => "Ladino / Judeo-Spanish", "direction" => "ltr", "local_name" => "Dzhudezmo / Djudeo-Espanyol"],
            ["code" => "lan", "name" => "Lango", "direction" => "ltr", "local_name" => "Leb Lango / Luo"],
            ["code" => "lb", "name" => "Luxembourgish", "direction" => "ltr", "local_name" => "Lëtzebuergesch"],
            ["code" => "lg", "name" => "Ganda", "direction" => "ltr", "local_name" => "Luganda"],
            ["code" => "li", "name" => "Limburgian", "direction" => "ltr", "local_name" => "Limburgs"],
            ["code" => "lij", "name" => "Ligurian", "direction" => "ltr", "local_name" => "Líguru"],
            ["code" => "lmo", "name" => "Lombard", "direction" => "ltr", "local_name" => "Lumbaart"],
            ["code" => "ln", "name" => "Lingala", "direction" => "ltr", "local_name" => "Lingála"],
            ["code" => "lo", "name" => "Laotian", "direction" => "ltr", "local_name" => "ລາວ / Pha xa lao"],
            ["code" => "lzz", "name" => "Laz", "direction" => "ltr", "local_name" => "Lazuri / ლაზური"],
            ["code" => "lt", "name" => "Lithuanian", "direction" => "ltr", "local_name" => "Lietuvių"],
            ["code" => "lv", "name" => "Latvian", "direction" => "ltr", "local_name" => "Latviešu"],
            ["code" => "map-bms", "name" => "Banyumasan", "direction" => "ltr", "local_name" => "Basa Banyumasan"],
            ["code" => "mg", "name" => "Malagasy", "direction" => "ltr", "local_name" => "Malagasy"],
            ["code" => "man", "name" => "Mandarin", "direction" => "ltr", "local_name" => "官話/官话"],
            ["code" => "mh", "name" => "Marshallese", "direction" => "ltr", "local_name" => "Kajin Majel / Ebon"],
            ["code" => "mi", "name" => "Māori", "direction" => "ltr", "local_name" => "Māori"],
            ["code" => "min", "name" => "Minangkabau", "direction" => "ltr", "local_name" => "Minangkabau"],
            ["code" => "mk", "name" => "Macedonian", "direction" => "ltr", "local_name" => "Македонски"],
            ["code" => "ml", "name" => "Malayalam", "direction" => "ltr", "local_name" => "മലയാളം"],
            ["code" => "mn", "name" => "Mongolian", "direction" => "ltr", "local_name" => "Монгол"],
            ["code" => "mo", "name" => "Moldovan", "direction" => "ltr", "local_name" => "Moldovenească"],
            ["code" => "mr", "name" => "Marathi", "direction" => "ltr", "local_name" => "मराठी"],
            ["code" => "mrh", "name" => "Mara", "direction" => "ltr", "local_name" => "Mara"],
            ["code" => "ms", "name" => "Malay", "direction" => "ltr", "local_name" => "Bahasa Melayu"],
            ["code" => "mt", "name" => "Maltese", "direction" => "ltr", "local_name" => "bil-Malti"],
            ["code" => "mus", "name" => "Creek / Muskogee", "direction" => "ltr", "local_name" => "Mvskoke"],
            ["code" => "mwl", "name" => "Mirandese", "direction" => "ltr", "local_name" => "Mirandés"],
            ["code" => "my", "name" => "Burmese", "direction" => "ltr", "local_name" => "Myanmasa"],
            ["code" => "na", "name" => "Nauruan", "direction" => "ltr", "local_name" => "Dorerin Naoero"],
            ["code" => "nah", "name" => "Nahuatl", "direction" => "ltr", "local_name" => "Nahuatl"],
            ["code" => "nap", "name" => "Neapolitan", "direction" => "ltr", "local_name" => "Nnapulitano"],
            ["code" => "nd", "name" => "North Ndebele", "direction" => "ltr", "local_name" => "Sindebele"],
            ["code" => "nds", "name" => "Low German / Low Saxon", "direction" => "ltr", "local_name" => "Plattdüütsch"],
            ["code" => "nds-nl", "name" => "Dutch Low Saxon", "direction" => "ltr", "local_name" => "Nedersaksisch"],
            ["code" => "ne", "name" => "Nepali", "direction" => "ltr", "local_name" => "नेपाली"],
            ["code" => "new", "name" => "Newar", "direction" => "ltr", "local_name" => "नेपालभाषा / Newah Bhaye"],
            ["code" => "ng", "name" => "Ndonga", "direction" => "ltr", "local_name" => "Oshiwambo"],
            ["code" => "nl", "name" => "Dutch", "direction" => "ltr", "local_name" => "Nederlands"],
            ["code" => "nn", "name" => "Norwegian Nynorsk", "direction" => "ltr", "local_name" => "Norsk (nynorsk)"],
            ["code" => "no", "name" => "Norwegian", "direction" => "ltr", "local_name" => "Norsk (bokmål / riksmål)"],
            ["code" => "nr", "name" => "South Ndebele", "direction" => "ltr", "local_name" => "isiNdebele"],
            ["code" => "nso", "name" => "Northern Sotho", "direction" => "ltr", "local_name" => "Sesotho sa Leboa / Sepedi"],
            ["code" => "nrm", "name" => "Norman", "direction" => "ltr", "local_name" => "Nouormand / Normaund"],
            ["code" => "nv", "name" => "Navajo", "direction" => "ltr", "local_name" => "Diné bizaad"],
            ["code" => "ny", "name" => "Chichewa", "direction" => "ltr", "local_name" => "Chi-Chewa"],
            ["code" => "oc", "name" => "Occitan", "direction" => "ltr", "local_name" => "Occitan"],
            ["code" => "oj", "name" => "Ojibwa", "direction" => "ltr", "local_name" => "ᐊᓂᔑᓈᐯᒧᐎᓐ / Anishinaabemowin"],
            ["code" => "om", "name" => "Oromo", "direction" => "ltr", "local_name" => "Oromoo"],
            ["code" => "or", "name" => "Oriya", "direction" => "ltr", "local_name" => "ଓଡ଼ିଆ"],
            ["code" => "os", "name" => "Ossetian / Ossetic", "direction" => "ltr", "local_name" => "Иронау"],
            ["code" => "pa", "name" => "Panjabi / Punjabi", "direction" => "ltr", "local_name" => "ਪੰਜਾਬੀ / پنجابی"],
            ["code" => "pag", "name" => "Pangasinan", "direction" => "ltr", "local_name" => "Pangasinan"],
            ["code" => "pam", "name" => "Kapampangan", "direction" => "ltr", "local_name" => "Kapampangan"],
            ["code" => "pap", "name" => "Papiamentu", "direction" => "ltr", "local_name" => "Papiamentu"],
            ["code" => "pdc", "name" => "Pennsylvania German", "direction" => "ltr", "local_name" => "Deitsch"],
            ["code" => "pi", "name" => "Pali", "direction" => "ltr", "local_name" => "Pāli / पाऴि"],
            ["code" => "pih", "name" => "Norfolk", "direction" => "ltr", "local_name" => "Norfuk"],
            ["code" => "pl", "name" => "Polish", "direction" => "ltr", "local_name" => "Polski"],
            ["code" => "pms", "name" => "Piedmontese", "direction" => "ltr", "local_name" => "Piemontèis"],
            ["code" => "ps", "name" => "Pashto", "direction" => "rtl", "local_name" => "پښتو"],
            ["code" => "pt", "name" => "Portuguese", "direction" => "ltr", "local_name" => "Português"],
            ["code" => "qu", "name" => "Quechua", "direction" => "ltr", "local_name" => "Runa Simi"],
            ["code" => "rm", "name" => "Raeto Romance", "direction" => "ltr", "local_name" => "Rumantsch"],
            ["code" => "rmy", "name" => "Romani", "direction" => "ltr", "local_name" => "Romani / रोमानी"],
            ["code" => "rn", "name" => "Kirundi", "direction" => "ltr", "local_name" => "Kirundi"],
            ["code" => "ro", "name" => "Romanian", "direction" => "ltr", "local_name" => "Română"],
            ["code" => "roa-rup", "name" => "Aromanian", "direction" => "ltr", "local_name" => "Armâneashti"],
            ["code" => "ru", "name" => "Russian", "direction" => "ltr", "local_name" => "Русский"],
            ["code" => "rw", "name" => "Rwandi", "direction" => "ltr", "local_name" => "Kinyarwandi"],
            ["code" => "sa", "name" => "Sanskrit", "direction" => "ltr", "local_name" => "संस्कृतम्"],
            ["code" => "sc", "name" => "Sardinian", "direction" => "ltr", "local_name" => "Sardu"],
            ["code" => "scn", "name" => "Sicilian", "direction" => "ltr", "local_name" => "Sicilianu"],
            ["code" => "sco", "name" => "Scots", "direction" => "ltr", "local_name" => "Scots"],
            ["code" => "sd", "name" => "Sindhi", "direction" => "rtl", "local_name" => "सिंधी / سنڌي‎"],
            ["code" => "se", "name" => "Northern Sami", "direction" => "ltr", "local_name" => "Davvisámegiella"],
            ["code" => "sg", "name" => "Sango", "direction" => "ltr", "local_name" => "Sängö"],
            ["code" => "sh", "name" => "Serbo-Croatian", "direction" => "ltr", "local_name" => "Srpskohrvatski / Српскохрватски"],
            ["code" => "si", "name" => "Sinhalese", "direction" => "ltr", "local_name" => "සිංහල"],
            ["code" => "simple", "name" => "Simple English", "direction" => "ltr", "local_name" => "Simple English"],
            ["code" => "sk", "name" => "Slovak", "direction" => "ltr", "local_name" => "Slovenčina"],
            ["code" => "sl", "name" => "Slovenian", "direction" => "ltr", "local_name" => "Slovenščina"],
            ["code" => "sm", "name" => "Samoan", "direction" => "ltr", "local_name" => "Gagana Samoa"],
            ["code" => "sn", "name" => "Shona", "direction" => "ltr", "local_name" => "chiShona"],
            ["code" => "so", "name" => "Somalia", "direction" => "ltr", "local_name" => "Soomaaliga"],
            ["code" => "sq", "name" => "Albanian", "direction" => "ltr", "local_name" => "Shqip"],
            ["code" => "sr", "name" => "Serbian", "direction" => "ltr", "local_name" => "Српски"],
            ["code" => "ss", "name" => "Swati", "direction" => "ltr", "local_name" => "SiSwati"],
            ["code" => "st", "name" => "Southern Sotho", "direction" => "ltr", "local_name" => "Sesotho"],
            ["code" => "su", "name" => "Sundanese", "direction" => "ltr", "local_name" => "Basa Sunda"],
            ["code" => "sv", "name" => "Swedish", "direction" => "ltr", "local_name" => "Svenska"],
            ["code" => "sw", "name" => "Swahili", "direction" => "ltr", "local_name" => "Kiswahili"],
            ["code" => "ta", "name" => "Tamil", "direction" => "ltr", "local_name" => "தமிழ்"],
            ["code" => "te", "name" => "Telugu", "direction" => "ltr", "local_name" => "తెలుగు"],
            ["code" => "tet", "name" => "Tetum", "direction" => "ltr", "local_name" => "Tetun"],
            ["code" => "tg", "name" => "Tajik", "direction" => "ltr", "local_name" => "Тоҷикӣ"],
            ["code" => "th", "name" => "Thai", "direction" => "ltr", "local_name" => "ไทย / Phasa Thai"],
            ["code" => "ti", "name" => "Tigrinya", "direction" => "ltr", "local_name" => "ትግርኛ"],
            ["code" => "tk", "name" => "Turkmen", "direction" => "ltr", "local_name" => "Туркмен / تركمن"],
            ["code" => "tl", "name" => "Tagalog", "direction" => "ltr", "local_name" => "Tagalog / ᜆᜄᜎᜓᜄ᜔"],
            ["code" => "tlh", "name" => "Klingon", "direction" => "ltr", "local_name" => "tlhIngan-Hol"],
            ["code" => "tn", "name" => "Tswana", "direction" => "ltr", "local_name" => "Setswana"],
            ["code" => "to", "name" => "Tonga", "direction" => "ltr", "local_name" => "Lea Faka-Tonga"],
            ["code" => "tpi", "name" => "Tok Pisin", "direction" => "ltr", "local_name" => "Tok Pisin"],
            ["code" => "tr", "name" => "Turkish", "direction" => "ltr", "local_name" => "Türkçe"],
            ["code" => "ts", "name" => "Tsonga", "direction" => "ltr", "local_name" => "Xitsonga"],
            ["code" => "tt", "name" => "Tatar", "direction" => "ltr", "local_name" => "Tatarça"],
            ["code" => "tum", "name" => "Tumbuka", "direction" => "ltr", "local_name" => "chiTumbuka"],
            ["code" => "tw", "name" => "Twi", "direction" => "ltr", "local_name" => "Twi"],
            ["code" => "ty", "name" => "Tahitian", "direction" => "ltr", "local_name" => "Reo Mā`ohi"],
            ["code" => "udm", "name" => "Udmurt", "direction" => "ltr", "local_name" => "Удмурт кыл"],
            ["code" => "ug", "name" => "Uyghur", "direction" => "ltr", "local_name" => "Uyƣurqə / ئۇيغۇرچە"],
            ["code" => "uk", "name" => "Ukrainian", "direction" => "ltr", "local_name" => "Українська"],
            ["code" => "ur", "name" => "Urdu", "direction" => "rtl", "local_name" => "اردو"],
            ["code" => "uz", "name" => "Uzbek", "direction" => "ltr", "local_name" => "Ўзбек"],
            ["code" => "uz_AF", "name" => "Uzbeki Afghanistan", "direction" => "rtl", "local_name" => "اوزبیکی"],
            ["code" => "ve", "name" => "Venda", "direction" => "ltr", "local_name" => "Tshivenḓa"],
            ["code" => "vi", "name" => "Vietnamese", "direction" => "ltr", "local_name" => "Tiếng Việt"],
            ["code" => "vec", "name" => "Venetian", "direction" => "ltr", "local_name" => "Vèneto"],
            ["code" => "vls", "name" => "West Flemish", "direction" => "ltr", "local_name" => "West-Vlaoms"],
            ["code" => "vo", "name" => "Volapük", "direction" => "ltr", "local_name" => "Volapük"],
            ["code" => "wa", "name" => "Walloon", "direction" => "ltr", "local_name" => "Walon"],
            ["code" => "war", "name" => "Waray / Samar-Leyte Visayan", "direction" => "ltr", "local_name" => "Winaray / Binisaya Lineyte-Samarnon"],
            ["code" => "wo", "name" => "Wolof", "direction" => "ltr", "local_name" => "Wollof"],
            ["code" => "xal", "name" => "Kalmyk", "direction" => "ltr", "local_name" => "Хальмг"],
            ["code" => "xh", "name" => "Xhosa", "direction" => "ltr", "local_name" => "isiXhosa"],
            ["code" => "xmf", "name" => "Megrelian", "direction" => "ltr", "local_name" => "მარგალური"],
            ["code" => "yi", "name" => "Yiddish", "direction" => "rtl", "local_name" => "ייִדיש"],
            ["code" => "yo", "name" => "Yoruba", "direction" => "ltr", "local_name" => "Yorùbá"],
            ["code" => "za", "name" => "Zhuang", "direction" => "ltr", "local_name" => "Cuengh / Tôô / 壮语"],
            ["code" => "zh", "name" => "Chinese", "direction" => "ltr", "local_name" => "中文"],
            ["code" => "zh-classical", "name" => "Classical Chinese", "direction" => "ltr", "local_name" => "文言"],
            ["code" => "zh-min-nan", "name" => "Minnan", "direction" => "ltr", "local_name" => "Bân-lâm-gú"],
            ["code" => "zh-yue", "name" => "Cantonese", "direction" => "ltr", "local_name" => "粵語 / 粤语"],
            ["code" => "zu", "name" => "Zulu", "direction" => "ltr", "local_name" => "isiZulu"],
        ]);
    }
}
