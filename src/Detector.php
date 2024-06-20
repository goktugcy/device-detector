<?php

namespace Goktugceyhan\DeviceDetector;

use Illuminate\Http\Request;

class Detector
{
    // =======================================
    //                 Arrays
    // =======================================

    protected static $browsers = [
        'OPR' => 'Opera GX',
        'Edg' => 'Microsoft Edge',
        'Chrome' => 'Google Chrome',
        'Firefox' => 'Mozilla Firefox',
        'Safari' => 'Apple Safari',
        'Opera' => 'Opera',
        'MSIE' => 'Internet Explorer',
        'Trident' => 'Internet Explorer',
        'CriOS' => 'Google Chrome (iOS)',
        'FxiOS' => 'Mozilla Firefox (iOS)',
        'OPiOS' => 'Opera (iOS)',
        'EdgiOS' => 'Microsoft Edge (iOS)',
        'SamsungBrowser' => 'Samsung Internet',
        'UCBrowser' => 'UC Browser',
        'YandexBrowser' => 'Yandex Browser',
        'Brave' => 'Brave Browser',
        'DuckDuckGo' => 'DuckDuckGo Browser',
        'Vivaldi' => 'Vivaldi',
        'Waterfox' => 'Waterfox',
        'SeaMonkey' => 'SeaMonkey',
        'Konqueror' => 'Konqueror',
        'Iceweasel' => 'Iceweasel',
        'PaleMoon' => 'Pale Moon',
        'Maxthon' => 'Maxthon',
        'Avant Browser' => 'Avant Browser',
        'Flock' => 'Flock',
        'Netscape' => 'Netscape',
        'Yahoo! Slurp' => 'Yahoo! Slurp',
        'BlackBerry' => 'BlackBerry Browser',
        'NokiaBrowser' => 'Nokia Browser',
        'Silk' => 'Amazon Silk',
        'PhantomJS' => 'PhantomJS',
        'QQBrowser' => 'QQ Browser',
        'Seznam' => 'Seznam Browser',
        'Thunderbird' => 'Mozilla Thunderbird',
        'AOL' => 'AOL Browser',
        'TeaShark' => 'TeaShark',
        'Puffin' => 'Puffin',
        'Dillo' => 'Dillo',
        'DoCoMo' => 'DoCoMo',
        'Obigo' => 'Obigo',
        'NetFront' => 'NetFront',
        'MicroB' => 'MicroB',
        'IEMobile' => 'Internet Explorer Mobile',
        'PlayStation' => 'PlayStation Browser',
        'EdgeWebView' => 'Microsoft Edge WebView',
        'Netsurf' => 'NetSurf',
        'Elinks' => 'Elinks',
        'Links' => 'Links',
        'Lynx' => 'Lynx',
        'W3M' => 'W3M',
        'wget' => 'Wget',
        'curl' => 'cURL',
        'unknown' => 'Unknown',
    ];

    protected static $operatingSystems = [
        'Windows NT 10.0' => 'Windows 10',
        'Windows NT 6.3' => 'Windows 8.1',
        'Windows NT 6.2' => 'Windows 8',
        'Windows NT 6.1' => 'Windows 7',
        'Windows NT 6.0' => 'Windows Vista',
        'Windows NT 5.1' => 'Windows XP',
        'Windows NT 5.0' => 'Windows 2000',
        'Windows NT 4.0' => 'Windows NT 4.0',
        'Windows 98' => 'Windows 98',
        'Windows 95' => 'Windows 95',
        'Windows CE' => 'Windows CE',
        'Windows' => 'Windows (Unknown version)',
        'Android' => 'Android',
        'iOS' => 'iOS',
        'Mac OS X' => 'Mac OS X',
        'Mac OS' => 'Mac OS',
        'Linux' => 'Linux',
        'Ubuntu' => 'Ubuntu',
        'Debian' => 'Debian',
        'Fedora' => 'Fedora',
        'Red Hat' => 'Red Hat',
        'SUSE' => 'SUSE',
        'Gentoo' => 'Gentoo',
        'BlackBerry' => 'BlackBerry OS',
        'Windows Phone' => 'Windows Phone',
        'Firefox OS' => 'Firefox OS',
        'FreeBSD' => 'FreeBSD',
        'OpenBSD' => 'OpenBSD',
        'NetBSD' => 'NetBSD',
        'SunOS' => 'SunOS',
        'OS/2' => 'OS/2',
        'BeOS' => 'BeOS',
        'AmigaOS' => 'AmigaOS',
        'Chrome OS' => 'Chrome OS',
        'Symbian OS' => 'Symbian OS',
        'Nokia' => 'Nokia OS',
        'WebOS' => 'WebOS',
        'Tizen' => 'Tizen',
        'Bada' => 'Bada',
        'Kindle' => 'Kindle OS',
        'Unknown' => 'Unknown OS',
    ];

    protected static $devices = [
        'iPhone' => 'Mobile',
        'iPad' => 'Tablet',
        'iPod' => 'Mobile',
        'Android' => 'Mobile',
        'BlackBerry' => 'Mobile',
        'Windows Phone' => 'Mobile',
        'Kindle' => 'Tablet',
        'Tablet' => 'Tablet',
        'Mobile' => 'Mobile',
        'Desktop' => 'PC',
        'Macintosh' => 'PC',
        'Windows' => 'PC',
        'Linux' => 'PC',
        'Unknown' => 'Unknown',
    ];

    protected static $languages = [
        'af' => 'Afrikaans',
        'sq' => 'Albanian',
        'am' => 'Amharic',
        'ar' => 'Arabic',
        'hy' => 'Armenian',
        'az' => 'Azerbaijani',
        'eu' => 'Basque',
        'be' => 'Belarusian',
        'bn' => 'Bengali',
        'bs' => 'Bosnian',
        'bg' => 'Bulgarian',
        'ca' => 'Catalan',
        'ceb' => 'Cebuano',
        'ny' => 'Chichewa',
        'zh-CN' => 'Chinese (Simplified)',
        'zh-TW' => 'Chinese (Traditional)',
        'co' => 'Corsican',
        'hr' => 'Croatian',
        'cs' => 'Czech',
        'da' => 'Danish',
        'nl' => 'Dutch',
        'en' => 'English',
        'eo' => 'Esperanto',
        'et' => 'Estonian',
        'tl' => 'Filipino',
        'fi' => 'Finnish',
        'fr' => 'French',
        'fy' => 'Frisian',
        'gl' => 'Galician',
        'ka' => 'Georgian',
        'de' => 'German',
        'el' => 'Greek',
        'gu' => 'Gujarati',
        'ht' => 'Haitian Creole',
        'ha' => 'Hausa',
        'haw' => 'Hawaiian',
        'iw' => 'Hebrew',
        'hi' => 'Hindi',
        'hmn' => 'Hmong',
        'hu' => 'Hungarian',
        'is' => 'Icelandic',
        'ig' => 'Igbo',
        'id' => 'Indonesian',
        'ga' => 'Irish',
        'it' => 'Italian',
        'ja' => 'Japanese',
        'jv' => 'Javanese',
        'kn' => 'Kannada',
        'kk' => 'Kazakh',
        'km' => 'Khmer',
        'rw' => 'Kinyarwanda',
        'ko' => 'Korean',
        'ku' => 'Kurdish (Kurmanji)',
        'ky' => 'Kyrgyz',
        'lo' => 'Lao',
        'la' => 'Latin',
        'lv' => 'Latvian',
        'lt' => 'Lithuanian',
        'lb' => 'Luxembourgish',
        'mk' => 'Macedonian',
        'mg' => 'Malagasy',
        'ms' => 'Malay',
        'ml' => 'Malayalam',
        'mt' => 'Maltese',
        'mi' => 'Maori',
        'mr' => 'Marathi',
        'mn' => 'Mongolian',
        'my' => 'Myanmar (Burmese)',
        'ne' => 'Nepali',
        'no' => 'Norwegian',
        'or' => 'Odia (Oriya)',
        'ps' => 'Pashto',
        'fa' => 'Persian',
        'pl' => 'Polish',
        'pt' => 'Portuguese',
        'pa' => 'Punjabi',
        'ro' => 'Romanian',
        'ru' => 'Russian',
        'sm' => 'Samoan',
        'gd' => 'Scots Gaelic',
        'sr' => 'Serbian',
        'st' => 'Sesotho',
        'sn' => 'Shona',
        'sd' => 'Sindhi',
        'si' => 'Sinhala',
        'sk' => 'Slovak',
        'sl' => 'Slovenian',
        'so' => 'Somali',
        'es' => 'Spanish',
        'su' => 'Sundanese',
        'sw' => 'Swahili',
        'sv' => 'Swedish',
        'tg' => 'Tajik',
        'ta' => 'Tamil',
        'tt' => 'Tatar',
        'te' => 'Telugu',
        'th' => 'Thai',
        'tr' => 'Turkish',
        'tk' => 'Turkmen',
        'uk' => 'Ukrainian',
        'ur' => 'Urdu',
        'ug' => 'Uyghur',
        'uz' => 'Uzbek',
        'vi' => 'Vietnamese',
        'cy' => 'Welsh',
        'xh' => 'Xhosa',
        'yi' => 'Yiddish',
        'yo' => 'Yoruba',
        'zu' => 'Zulu',
    ];

    // =======================================
    //                  Misc
    // =======================================

    /**
     * Searches for a key in an array and returns its corresponding value.
     *
     * @param array $array The array to search through.
     * @param string $needle The key to search for.
     * @return mixed The corresponding value if found, otherwise 'no_data_found'.
     */
    private static function searchArray($array, $needle)
    {
        foreach ($array as $key => $value) {
            if (strpos($needle, $key) !== false) {
                return $value;
            }
        }
        return 'no_data_found';
    }

    // =======================================
    //               User-track
    // =======================================

    /**
     * Retrieves the user's browser based on the User-Agent header.
     *
     * @return string The user's browser.
     */
    public static function getUserBrowser()
    {
        $userAgent = request()->header('User-Agent') ?? 'no_data';
        return self::searchArray(self::$browsers, $userAgent);
    }

    /**
     * Retrieves the user's operating system based on the User-Agent header.
     *
     * @return string The user's operating system.
     */
    public static function getUserOS()
    {
        $userAgent = request()->header('User-Agent') ?? 'no_data';
        return self::searchArray(self::$operatingSystems, $userAgent);
    }

    /**
     * Retrieves the user's device type based on the User-Agent header.
     *
     * @return string The user's device type.
     */
    public static function getUserDevice()
    {
        $userAgent = request()->header('User-Agent') ?? 'no_data';
        return self::searchArray(self::$devices, $userAgent);
    }

    /**
     * Retrieves the user's preferred language based on the Accept-Language header.
     *
     * @return string The user's preferred language.
     */
    public static function getUserLanguage()
    {
        $userLang = request()->header('Accept-Language') ?? 'no_data';

        if ($userLang === 'no_data') {
            return 'no_data_found';
        }

        // Languages are separated by commas, so we split them into an array
        $languages = explode(',', $userLang);

        foreach ($languages as $lang) {
            $lang = explode(';', $lang)[0]; // Remove any additional information after the semicolon
            $result = self::searchArray(self::$languages, $lang);
            if ($result !== 'no_data_found') {
                return $result;
            }
        }
        return 'no_data_found';
    }

    /**
     * Retrieves all user information in an associative array.
     *
     * @return array Associative array of user information.
     */
    public static function getUserInfo()
    {
        return [
            'browser' => self::getUserBrowser(),
            'os' => self::getUserOS(),
            'device' => self::getUserDevice(),
            'language' => self::getUserLanguage(),
        ];
    }
}
