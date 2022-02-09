<?php

namespace PhpIso\ISO639;

class ISO639_1
{
    public const CODES = [
        'ab' => ['Abkhazian', 'аҧсуа бызшәа, аҧсшәа', 'abk', 'abk', 'abk'],
        'aa' => ['Afar', 'Afaraf', 'aar', 'aar', 'aar'],
        'af' => ['Afrikaans', 'Afrikaans', 'afr', 'afr', 'afr'],
        'ak' => ['Akan', 'Akan', 'aka', 'aka', 'aka'],
        'sq' => ['Albanian', 'Shqip', 'sqi', 'alb', 'sqi'],
        'am' => ['Amharic', 'አማርኛ', 'amh', 'amh', 'amh'],
        'ar' => ['Arabic', 'العربية	ara', 'ara', 'ara'],
        'an' => ['Aragonese', 'aragonés', 'arg', 'arg', 'arg'],
        'hy' => ['Armenian', 'Հայերեն', 'hye', 'arm', 'hye'],
        'as' => ['Assamese', 'অসমীয়া', 'asm', 'asm', 'asm'],
        'av' => ['Avaric', 'авар мацӀ, магӀарул мацӀ', 'ava', 'ava', 'ava'],
        'ae' => ['Avestan', 'avesta', 'ave', 'ave', 'ave'],
        'ay' => ['Aymara', 'aymar aru', 'aym', 'aym', 'aym'],
        'az' => ['Azerbaijani', 'azərbaycan dili, تۆرکجه', 'aze', 'aze', 'aze'],
        'bm' => ['Bambara', 'bamanankan', 'bam', 'bam', 'bam'],
        'ba' => ['Bashkir', 'башҡорт теле', 'bak', 'bak', 'bak'],
        'eu' => ['Basque', 'euskara, euskera', 'eus', 'baq', 'eus'],
        'be' => ['Belarusian', 'беларуская мова', 'bel', 'bel', 'bel'],
        'bn' => ['Bengali', 'বাংলা', 'ben', 'ben', 'ben'],
        'bi' => ['Bislama', 'Bislama', 'bis', 'bis', 'bis'],
        'bs' => ['Bosnian', 'bosanski jezik', 'bos', 'bos', 'bos'],
        'br' => ['Breton', 'brezhoneg', 'bre', 'bre', 'bre'],
        'bg' => ['Bulgarian', 'български език', 'bul', 'bul', 'bul'],
        'my' => ['Burmese', 'ဗမာစာ', 'mya', 'bur', 'mya'],
        'ca' => ['Catalan, Valencian', 'català, valencià', 'cat', 'cat', 'cat'],
        'ch' => ['Chamorro', 'Chamoru', 'cha', 'cha', 'cha'],
        'ce' => ['Chechen', 'нохчийн мотт', 'che', 'che', 'che'],
        'ny' => ['Chichewa, Chewa, Nyanja', 'chiCheŵa, chinyanja', 'nya', 'nya', 'nya'],
        'zh' => ['Chinese', '中文 (Zhōngwén), 汉语, 漢語', 'zho', 'chi', 'zho'],
        'cv' => ['Chuvash', 'чӑваш чӗлхи', 'chv', 'chv', 'chv'],
        'kw' => ['Cornish', 'Kernewek', 'cor', 'cor', 'cor'],
        'co' => ['Corsican', 'corsu, lingua corsa', 'cos', 'cos', 'cos'],
        'cr' => ['Cree', 'ᓀᐦᐃᔭᐍᐏᐣ', 'cre', 'cre', 'cre + 6'],
        'hr' => ['Croatian', 'hrvatski jezik', 'hrv', 'hrv', 'hrv'],
        'cs' => ['Czech', 'čeština, český jazyk', 'ces', 'cze', 'ces'],
        'da' => ['Danish', 'dansk', 'dan', 'dan', 'dan'],
        'dv' => ['Divehi, Dhivehi, Maldivian', 'ދިވެހި	div', 'div', 'div'],
        'nl' => ['Dutch, Flemish', 'Nederlands, Vlaams', 'nld', 'dut', 'nld'],
        'dz' => ['Dzongkha', 'རྫོང་ཁ', 'dzo', 'dzo', 'dzo'],
        'en' => ['English', 'English', 'eng', 'eng', 'eng'],
        'eo' => ['Esperanto', 'Esperanto', 'epo', 'epo', 'epo'],
        'et' => ['Estonian', 'eesti, eesti keel', 'est', 'est', 'est'],
        'ee' => ['Ewe', 'Eʋegbe', 'ewe', 'ewe', 'ewe'],
        'fo' => ['Faroese', 'føroyskt', 'fao', 'fao', 'fao'],
        'fj' => ['Fijian', 'vosa Vakaviti', 'fij', 'fij', 'fij'],
        'fi' => ['Finnish', 'suomi, suomen kieli', 'fin', 'fin', 'fin'],
        'fr' => ['French', 'français', 'fra', 'fre', 'fra'],
        'ff' => ['Fulah', 'Fulfulde, Pulaar, Pular', 'ful', 'ful', 'ful'],
        'gl' => ['Galician', 'Galego', 'glg', 'glg', 'glg'],
        'ka' => ['Georgian', 'ქართული', 'kat', 'geo', 'kat'],
        'de' => ['German', 'Deutsch', 'deu', 'ger', 'deu'],
        'el' => ['Greek, Modern (1453–)	Ελληνικά', 'ell', 'gre', 'ell'],
        'gn' => ['Guarani', 'Avañe\'ẽ', 'grn', 'grn', 'grn'],
        'gu' => ['Gujarati', 'ગુજરાતી', 'guj', 'guj', 'guj'],
        'ht' => ['Haitian, Haitian Creole', 'Kreyòl ayisyen', 'hat', 'hat', 'hat'],
        'ha' => ['Hausa', '(Hausa) هَوُسَ	hau', 'hau', 'hau'],
        'he' => ['Hebrew', 'עברית', 'heb', 'heb', 'heb'],
        'hz' => ['Herero', 'Otjiherero', 'her', 'her', 'her'],
        'hi' => ['Hindi', 'हिन्दी, हिंदी', 'hin', 'hin', 'hin'],
        'ho' => ['Hiri Motu', 'Hiri Motu', 'hmo', 'hmo', 'hmo'],
        'hu' => ['Hungarian', 'magyar', 'hun', 'hun', 'hun'],
        'ia' => ['Interlingua', 'Interlingua', 'ina', 'ina', 'ina'],
        'id' => ['Indonesian', 'Bahasa Indonesia', 'ind', 'ind', 'ind'],
        'ie' => ['Interlingue', 'Interlingue', 'ile', 'ile', 'ile'],
        'ga' => ['Irish', 'Gaeilge', 'gle', 'gle', 'gle'],
        'ig' => ['Igbo', 'Asụsụ Igbo', 'ibo', 'ibo', 'ibo'],
        'ik' => ['Inupiaq', 'Iñupiaq, Iñupiatun', 'ipk', 'ipk', 'ipk'],
        'io' => ['Ido', 'Ido', 'ido', 'ido', 'ido'],
        'is' => ['Icelandic', 'Íslenska', 'isl', 'ice', 'isl'],
        'it' => ['Italian', 'Italiano', 'ita', 'ita', 'ita'],
        'iu' => ['Inuktitut', 'ᐃᓄᒃᑎᑐᑦ', 'iku', 'iku', 'iku'],
        'ja' => ['Japanese', '日本語 (にほんご)', 'jpn', 'jpn', 'jpn'],
        'jv' => ['Javanese', 'ꦧꦱꦗꦮ', 'jav', 'jav', 'jav'],
        'kl' => ['Greenlandic', 'kalaallisut', 'kal', 'kal', 'kal'],
        'kn' => ['Kannada', 'ಕನ್ನಡ', 'kan', 'kan', 'kan'],
        'kr' => ['Kanuri', 'Kanuri', 'kau', 'kau', 'kau'],
        'ks' => ['Kashmiri', 'कॉशुर, کٲشُر', 'kas', 'kas', 'kas'],
        'kk' => ['Kazakh', 'қазақ тілі', 'kaz', 'kaz', 'kaz'],
        'km' => ['Central Khmer', 'ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ', 'khm', 'khm', 'khm'],
        'ki' => ['Kikuyu, Gikuyu', 'Gĩkũyũ', 'kik', 'kik', 'kik'],
        'rw' => ['Kinyarwanda', 'Ikinyarwanda', 'kin', 'kin', 'kin'],
        'ky' => ['Kirghiz, Kyrgyz', 'Кыргызча, Кыргыз тили', 'kir', 'kir', 'kir'],
        'kv' => ['Komi', 'коми кыв', 'kom', 'kom', 'kom'],
        'kg' => ['Kongo', 'Kikongo', 'kon', 'kon', 'kon'],
        'ko' => ['Korean', '한국어', 'kor', 'kor', 'kor'],
        'ku' => ['Kurdish', 'Kurdî, کوردی', 'kur', 'kur', 'kur'],
        'kj' => ['Kuanyama, Kwanyama', 'Kuanyama', 'kua', 'kua', 'kua'],
        'la' => ['Latin', 'latine, lingua latina', 'lat', 'lat', 'lat'],
        'lb' => ['Luxembourgish, Letzeburgesch', 'Lëtzebuergesch', 'ltz', 'ltz', 'ltz'],
        'lg' => ['Ganda', 'Luganda', 'lug', 'lug', 'lug'],
        'li' => ['Limburgan, Limburger, Limburgish', 'Limburgs', 'lim', 'lim', 'lim'],
        'ln' => ['Lingala', 'Lingála', 'lin', 'lin', 'lin'],
        'lo' => ['Lao', 'ພາສາລາວ', 'lao', 'lao', 'lao'],
        'lt' => ['Lithuanian', 'lietuvių kalba', 'lit', 'lit', 'lit'],
        'lu' => ['Luba-Katanga', 'Kiluba', 'lub', 'lub', 'lub'],
        'lv' => ['Latvian', 'latviešu valoda', 'lav', 'lav', 'lav'],
        'gv' => ['Manx', 'Gaelg, Gailck', 'glv', 'glv', 'glv'],
        'mk' => ['Macedonian', 'македонски јазик', 'mkd', 'mac', 'mkd'],
        'mg' => ['Malagasy', 'fiteny malagasy', 'mlg', 'mlg', 'mlg'],
        'ms' => ['Malay', 'Bahasa Melayu, بهاس ملايو', 'msa', 'may', 'msa'],
        'ml' => ['Malayalam', 'മലയാളം', 'mal', 'mal', 'mal'],
        'mt' => ['Maltese', 'Malti', 'mlt', 'mlt', 'mlt'],
        'mi' => ['Maori', 'te reo Māori', 'mri', 'mao', 'mri'],
        'mr' => ['Marathi', 'मराठी', 'mar', 'mar', 'mar'],
        'mh' => ['Marshallese', 'Kajin M̧ajeļ', 'mah', 'mah', 'mah'],
        'mn' => ['Mongolian', 'Монгол хэл', 'mon', 'mon', 'mon'],
        'na' => ['Nauru', 'Dorerin Naoero', 'nau', 'nau', 'nau'],
        'nv' => ['Navajo, Navaho', 'Diné bizaad', 'nav', 'nav', 'nav'],
        'nd' => ['North Ndebele', 'isiNdebele', 'nde', 'nde', 'nde'],
        'ne' => ['Nepali', 'नेपाली', 'nep', 'nep', 'nep'],
        'ng' => ['Ndonga', 'Owambo', 'ndo', 'ndo', 'ndo'],
        'nb' => ['Norwegian Bokmål', 'Norsk Bokmål', 'nob', 'nob', 'nob'],
        'nn' => ['Norwegian Nynorsk', 'Norsk Nynorsk', 'nno', 'nno', 'nno'],
        'no' => ['Norwegian', 'Norsk', 'nor', 'nor', 'nor'],
        'ii' => ['Sichuan Yi, Nuosu', 'ꆈꌠ꒿ Nuosuhxop', 'iii', 'iii', 'iii'],
        'nr' => ['South Ndebele', 'isiNdebele', 'nbl', 'nbl', 'nbl'],
        'oc' => ['Occitan', 'occitan, lenga d\'òc', 'oci', 'oci', 'oci'],
        'oj' => ['Ojibwa', 'ᐊᓂᔑᓈᐯᒧᐎᓐ', 'oji', 'oji', 'oji'],
        'cu' => ['Church Slavic', 'ѩзыкъ словѣньскъ', 'chu', 'chu', 'chu'],
        'om' => ['Oromo', 'Afaan Oromoo', 'orm', 'orm', 'orm'],
        'or' => ['Oriya', 'ଓଡ଼ିଆ', 'ori', 'ori', 'ori'],
        'os' => ['Ossetian', 'ирон ӕвзаг', 'oss', 'oss', 'oss'],
        'pa' => ['Punjabi', 'ਪੰਜਾਬੀ, پنجابی', 'pan', 'pan', 'pan'],
        'pi' => ['Pali', 'पालि, पाळि', 'pli', 'pli', 'pli'],
        'fa' => ['Persian', 'فارسی', 'fas', 'per', 'fas'],
        'pl' => ['Polish', 'język polski, polszczyzna', 'pol', 'pol', 'pol'],
        'ps' => ['Pashto, Pushto', 'پښتو	pus', 'pus', 'pus'],
        'pt' => ['Portuguese', 'Português', 'por', 'por', 'por'],
        'qu' => ['Quechua', 'Runa Simi, Kichwa', 'que', 'que', 'que'],
        'rm' => ['Romansh', 'Rumantsch Grischun', 'roh', 'roh', 'roh'],
        'rn' => ['Rundi', 'Ikirundi', 'run', 'run', 'run'],
        'ro' => ['Romanian, Moldavian', 'Română, Moldovenească', 'ron', 'rum', 'ron'],
        'ru' => ['Russian', 'Русский', 'rus', 'rus', 'rus'],
        'sa' => ['Sanskrit', 'संस्कृतम्, 𑌸𑌂𑌸𑍍𑌕𑍃𑌤𑌮𑍍', 'san', 'san', 'san'],
        'sc' => ['Sardinian', 'sardu', 'srd', 'srd', 'srd'],
        'sd' => ['Sindhi', 'सिंधी, سنڌي', 'snd', 'snd', 'snd'],
        'se' => ['Northern Sami', 'Davvisámegiella', 'sme', 'sme', 'sme'],
        'sm' => ['Samoan', 'gagana fa\'a Samoa', 'smo', 'smo', 'smo'],
        'sg' => ['Sango', 'yângâ tî sängö', 'sag', 'sag', 'sag'],
        'sr' => ['Serbian', 'српски језик', 'srp', 'srp', 'srp'],
        'gd' => ['Gaelic, Scottish Gaelic', 'Gàidhlig', 'gla', 'gla', 'gla'],
        'sn' => ['Shona', 'chiShona', 'sna', 'sna', 'sna'],
        'si' => ['Sinhala, Sinhalese', 'සිංහල', 'sin', 'sin', 'sin'],
        'sk' => ['Slovak', 'Slovenčina', 'slk', 'slo', 'slk'],
        'sl' => ['Slovenian', 'Slovenščina', 'slv', 'slv', 'slv'],
        'so' => ['Somali', 'Soomaaliga, af Soomaali', 'som', 'som', 'som'],
        'st' => ['Southern Sotho', 'Sesotho', 'sot', 'sot', 'sot'],
        'es' => ['Spanish, Castilian', 'Español', 'spa', 'spa', 'spa'],
        'su' => ['Sundanese', 'Basa Sunda', 'sun', 'sun', 'sun'],
        'sw' => ['Swahili', 'Kiswahili', 'swa', 'swa', 'swa'],
        'ss' => ['Swati', 'SiSwati', 'ssw', 'ssw', 'ssw'],
        'sv' => ['Swedish', 'Svenska', 'swe', 'swe', 'swe'],
        'ta' => ['Tamil', 'தமிழ்', 'tam', 'tam', 'tam'],
        'te' => ['Telugu', 'తెలుగు', 'tel', 'tel', 'tel'],
        'tg' => ['Tajik', 'тоҷикӣ, toçikī, تاجیکی', 'tgk', 'tgk', 'tgk'],
        'th' => ['Thai', 'ไทย', 'tha', 'tha', 'tha'],
        'ti' => ['Tigrinya', 'ትግርኛ', 'tir', 'tir', 'tir'],
        'bo' => ['Tibetan', 'བོད་ཡིག', 'bod', 'tib', 'bod'],
        'tk' => ['Turkmen', 'Türkmençe, Türkmen dili', 'tuk', 'tuk', 'tuk'],
        'tl' => ['Tagalog', 'Wikang Tagalog', 'tgl', 'tgl', 'tgl'],
        'tn' => ['Tswana', 'Setswana', 'tsn', 'tsn', 'tsn'],
        'to' => ['Tonga (Tonga Islands)', 'Faka Tonga', 'ton', 'ton', 'ton'],
        'tr' => ['Turkish', 'Türkçe', 'tur', 'tur', 'tur'],
        'ts' => ['Tsonga', 'Xitsonga', 'tso', 'tso', 'tso'],
        'tt' => ['Tatar', 'татар теле, tatar tele', 'tat', 'tat', 'tat'],
        'tw' => ['Twi', 'Twi', 'twi', 'twi', 'twi'],
        'ty' => ['Tahitian', 'Reo Tahiti', 'tah', 'tah', 'tah'],
        'ug' => ['Uighur, Uyghur', 'ئۇيغۇرچە, Uyghurche', 'uig', 'uig', 'uig'],
        'uk' => ['Ukrainian', 'Українська', 'ukr', 'ukr', 'ukr'],
        'ur' => ['Urdu', 'اردو	urd', 'urd', 'urd'],
        'uz' => ['Uzbek', 'Oʻzbek, Ўзбек, أۇزبېك', 'uzb', 'uzb', 'uzb'],
        've' => ['Venda', 'Tshivenḓa', 'ven', 'ven', 'ven'],
        'vi' => ['Vietnamese', 'Tiếng Việt', 'vie', 'vie', 'vie'],
        'vo' => ['Volapük', 'Volapük', 'vol', 'vol', 'vol'],
        'wa' => ['Walloon', 'Walon', 'wln', 'wln', 'wln'],
        'cy' => ['Welsh', 'Cymraeg', 'cym', 'wel', 'cym'],
        'wo' => ['Wolof', 'Wollof', 'wol', 'wol', 'wol'],
        'fy' => ['Western Frisian', 'Frysk', 'fry', 'fry', 'fry'],
        'xh' => ['Xhosa', 'isiXhosa', 'xho', 'xho', 'xho'],
        'yi' => ['Yiddish', 'ייִדיש', 'yid', 'yid', 'yid'],
        'yo' => ['Yoruba', 'Yorùbá', 'yor', 'yor', 'yor'],
        'za' => ['Zhuang, Chuang', 'Saɯ cueŋƅ, Saw cuengh', 'zha', 'zha', 'zha'],
        'zu' => ['Zulu', 'isiZulu', 'zul', 'zul', 'zul '],
    ];

    protected static function getValue(string $code, int $key): ?string
    {
        if (array_key_exists($code, self::CODES)) {
            return self::CODES[$code][$key];
        }

        return null;
    }

    public static function isExists(string $code): bool
    {
        return array_key_exists($code, self::CODES);
    }

    public static function getISOName(string $code): ?string
    {
        return self::getValue($code, 0);
    }

    public static function getNativeName(string $code): ?string
    {
        return self::getValue($code, 1);
    }

    public static function get639_2T(string $code): ?string
    {
        return self::getValue($code, 2);
    }

    public static function get639_2B(string $code): ?string
    {
        return self::getValue($code, 3);
    }

    public static function get639_3(string $code): ?string
    {
        return self::getValue($code, 4);
    }
}
