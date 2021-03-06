<?php


namespace App\Service;


class Countries
{
    public static function getList($locale)
    {
        switch ($locale) {
            default:
            case 'en':
                return [
                    "AF" => "Afghanistan",
                    "AL" => "Albania",
                    "DZ" => "Algeria",
                    "AS" => "American Samoa",
                    "AD" => "Andorra",
                    "AO" => "Angola",
                    "AI" => "Anguilla",
                    "AQ" => "Antarctica",
                    "AG" => "Antigua and Barbuda",
                    "AR" => "Argentina",
                    "AM" => "Armenia",
                    "AW" => "Aruba",
                    "AU" => "Australia",
                    "AT" => "Austria",
                    "AZ" => "Azerbaijan",
                    "BS" => "Bahamas",
                    "BH" => "Bahrain",
                    "BD" => "Bangladesh",
                    "BB" => "Barbados",
                    "BY" => "Belarus",
                    "BE" => "Belgium",
                    "BZ" => "Belize",
                    "BJ" => "Benin",
                    "BM" => "Bermuda",
                    "BT" => "Bhutan",
                    "BO" => "Bolivia",
                    "BA" => "Bosnia and Herzegovina",
                    "BW" => "Botswana",
                    "BV" => "Bouvet Island",
                    "BR" => "Brazil",
                    "IO" => "British Indian Ocean Territory",
                    "BN" => "Brunei Darussalam",
                    "BG" => "Bulgaria",
                    "BF" => "Burkina Faso",
                    "BI" => "Burundi",
                    "KH" => "Cambodia",
                    "CM" => "Cameroon",
                    "CA" => "Canada",
                    "CV" => "Cape Verde",
                    "KY" => "Cayman Islands",
                    "CF" => "Central African Republic",
                    "TD" => "Chad",
                    "CL" => "Chile",
                    "CN" => "China",
                    "CX" => "Christmas Island",
                    "CC" => "Cocos (Keeling) Islands",
                    "CO" => "Colombia",
                    "KM" => "Comoros",
                    "CG" => "Congo",
                    "CD" => "Congo, the Democratic Republic of the",
                    "CK" => "Cook Islands",
                    "CR" => "Costa Rica",
                    "CI" => "Cote D'Ivoire",
                    "HR" => "Croatia",
                    "CU" => "Cuba",
                    "CY" => "Cyprus",
                    "CZ" => "Czech Republic",
                    "DK" => "Denmark",
                    "DJ" => "Djibouti",
                    "DM" => "Dominica",
                    "DO" => "Dominican Republic",
                    "EC" => "Ecuador",
                    "EG" => "Egypt",
                    "SV" => "El Salvador",
                    "GQ" => "Equatorial Guinea",
                    "ER" => "Eritrea",
                    "EE" => "Estonia",
                    "ET" => "Ethiopia",
                    "FK" => "Falkland Islands (Malvinas)",
                    "FO" => "Faroe Islands",
                    "FJ" => "Fiji",
                    "FI" => "Finland",
                    "FR" => "France",
                    "GF" => "French Guiana",
                    "PF" => "French Polynesia",
                    "TF" => "French Southern Territories",
                    "GA" => "Gabon",
                    "GM" => "Gambia",
                    "GE" => "Georgia",
                    "DE" => "Germany",
                    "GH" => "Ghana",
                    "GI" => "Gibraltar",
                    "GR" => "Greece",
                    "GL" => "Greenland",
                    "GD" => "Grenada",
                    "GP" => "Guadeloupe",
                    "GU" => "Guam",
                    "GT" => "Guatemala",
                    "GN" => "Guinea",
                    "GW" => "Guinea-Bissau",
                    "GY" => "Guyana",
                    "HT" => "Haiti",
                    "HM" => "Heard Island and Mcdonald Islands",
                    "VA" => "Holy See (Vatican City State)",
                    "HN" => "Honduras",
                    "HK" => "Hong Kong",
                    "HU" => "Hungary",
                    "IS" => "Iceland",
                    "IN" => "India",
                    "ID" => "Indonesia",
                    "IR" => "Iran, Islamic Republic of",
                    "IQ" => "Iraq",
                    "IE" => "Ireland",
                    "IL" => "Israel",
                    "IT" => "Italy",
                    "JM" => "Jamaica",
                    "JP" => "Japan",
                    "JO" => "Jordan",
                    "KZ" => "Kazakhstan",
                    "KE" => "Kenya",
                    "KI" => "Kiribati",
                    "KP" => "Korea, Democratic People's Republic of",
                    "KR" => "Korea, Republic of",
                    "KW" => "Kuwait",
                    "KG" => "Kyrgyzstan",
                    "LA" => "Lao People's Democratic Republic",
                    "LV" => "Latvia",
                    "LB" => "Lebanon",
                    "LS" => "Lesotho",
                    "LR" => "Liberia",
                    "LY" => "Libyan Arab Jamahiriya",
                    "LI" => "Liechtenstein",
                    "LT" => "Lithuania",
                    "LU" => "Luxembourg",
                    "MO" => "Macao",
                    "MK" => "Macedonia, the Former Yugoslav Republic of",
                    "MG" => "Madagascar",
                    "MW" => "Malawi",
                    "MY" => "Malaysia",
                    "MV" => "Maldives",
                    "ML" => "Mali",
                    "MT" => "Malta",
                    "MH" => "Marshall Islands",
                    "MQ" => "Martinique",
                    "MR" => "Mauritania",
                    "MU" => "Mauritius",
                    "YT" => "Mayotte",
                    "MX" => "Mexico",
                    "FM" => "Micronesia, Federated States of",
                    "MD" => "Moldova, Republic of",
                    "MC" => "Monaco",
                    "MN" => "Mongolia",
                    "MS" => "Montserrat",
                    "MA" => "Morocco",
                    "MZ" => "Mozambique",
                    "MM" => "Myanmar",
                    "NA" => "Namibia",
                    "NR" => "Nauru",
                    "NP" => "Nepal",
                    "NL" => "Netherlands",
                    "AN" => "Netherlands Antilles",
                    "NC" => "New Caledonia",
                    "NZ" => "New Zealand",
                    "NI" => "Nicaragua",
                    "NE" => "Niger",
                    "NG" => "Nigeria",
                    "NU" => "Niue",
                    "NF" => "Norfolk Island",
                    "MP" => "Northern Mariana Islands",
                    "NO" => "Norway",
                    "OM" => "Oman",
                    "PK" => "Pakistan",
                    "PW" => "Palau",
                    "PS" => "Palestinian Territory, Occupied",
                    "PA" => "Panama",
                    "PG" => "Papua New Guinea",
                    "PY" => "Paraguay",
                    "PE" => "Peru",
                    "PH" => "Philippines",
                    "PN" => "Pitcairn",
                    "PL" => "Poland",
                    "PT" => "Portugal",
                    "PR" => "Puerto Rico",
                    "QA" => "Qatar",
                    "RE" => "Reunion",
                    "RO" => "Romania",
                    "RU" => "Russian Federation",
                    "RW" => "Rwanda",
                    "SH" => "Saint Helena",
                    "KN" => "Saint Kitts and Nevis",
                    "LC" => "Saint Lucia",
                    "PM" => "Saint Pierre and Miquelon",
                    "VC" => "Saint Vincent and the Grenadines",
                    "WS" => "Samoa",
                    "SM" => "San Marino",
                    "ST" => "Sao Tome and Principe",
                    "SA" => "Saudi Arabia",
                    "SN" => "Senegal",
                    "CS" => "Serbia and Montenegro",
                    "SC" => "Seychelles",
                    "SL" => "Sierra Leone",
                    "SG" => "Singapore",
                    "SK" => "Slovakia",
                    "SI" => "Slovenia",
                    "SB" => "Solomon Islands",
                    "SO" => "Somalia",
                    "ZA" => "South Africa",
                    "GS" => "South Georgia and the South Sandwich Islands",
                    "ES" => "Spain",
                    "LK" => "Sri Lanka",
                    "SD" => "Sudan",
                    "SR" => "Suriname",
                    "SJ" => "Svalbard and Jan Mayen",
                    "SZ" => "Swaziland",
                    "SE" => "Sweden",
                    "CH" => "Switzerland",
                    "SY" => "Syrian Arab Republic",
                    "TW" => "Taiwan, Province of China",
                    "TJ" => "Tajikistan",
                    "TZ" => "Tanzania, United Republic of",
                    "TH" => "Thailand",
                    "TL" => "Timor-Leste",
                    "TG" => "Togo",
                    "TK" => "Tokelau",
                    "TO" => "Tonga",
                    "TT" => "Trinidad and Tobago",
                    "TN" => "Tunisia",
                    "TR" => "Turkey",
                    "TM" => "Turkmenistan",
                    "TC" => "Turks and Caicos Islands",
                    "TV" => "Tuvalu",
                    "UG" => "Uganda",
                    "UA" => "Ukraine",
                    "AE" => "United Arab Emirates",
                    "GB" => "United Kingdom",
                    "US" => "United States",
                    "UM" => "United States Minor Outlying Islands",
                    "UY" => "Uruguay",
                    "UZ" => "Uzbekistan",
                    "VU" => "Vanuatu",
                    "VE" => "Venezuela",
                    "VN" => "Viet Nam",
                    "VG" => "Virgin Islands, British",
                    "VI" => "Virgin Islands, U.s.",
                    "WF" => "Wallis and Futuna",
                    "EH" => "Western Sahara",
                    "YE" => "Yemen",
                    "ZM" => "Zambia",
                    "ZW" => "Zimbabwe"
                ];
                break;
            case 'nl':
                return [
                    'AF' => 'Afghanistan',
                    'AX' => '&Aring;land',
                    'AL' => 'Albani&euml;',
                    'DZ' => 'Algerije',
                    'VI' => 'Amerikaanse Maagdeneilanden',
                    'AS' => 'Amerikaans-Samoa',
                    'AD' => 'Andorra',
                    'AO' => 'Angola',
                    'AI' => 'Anguilla',
                    'AQ' => 'Antarctica',
                    'AG' => 'Antigua en Barbuda',
                    'AR' => 'Argentini&euml;',
                    'AM' => 'Armeni&euml;',
                    'AW' => 'Aruba',
                    'AU' => 'Australi&euml;',
                    'AZ' => 'Azerbeidzjan',
                    'BS' => 'Bahama\'s',
                    'BH' => 'Bahrein',
                    'BD' => 'Bangladesh',
                    'BB' => 'Barbados',
                    'BE' => 'Belgi&euml;',
                    'BZ' => 'Belize',
                    'BJ' => 'Benin',
                    'BM' => 'Bermuda',
                    'BT' => 'Bhutan',
                    'BO' => 'Bolivia',
                    'BQ' => 'Bonaire, Sint Eustatius en Saba',
                    'BA' => 'Bosni&euml; en Herzegovina',
                    'BW' => 'Botswana',
                    'BV' => 'Bouveteiland',
                    'BR' => 'Brazili&euml;',
                    'VG' => 'Britse Maagdeneilanden',
                    'IO' => 'Brits Indische Oceaanterritorium',
                    'BN' => 'Brunei',
                    'BG' => 'Bulgarije',
                    'BF' => 'Burkina Faso',
                    'BI' => 'Burundi',
                    'KH' => 'Cambodja',
                    'CA' => 'Canada',
                    'CF' => 'Centraal-Afrikaanse Republiek',
                    'CL' => 'Chili',
                    'CN' => 'China',
                    'CX' => 'Christmaseiland',
                    'CC' => 'Cocoseilanden',
                    'CO' => 'Colombia',
                    'KM' => 'Comoren',
                    'CG' => 'Congo-Brazzaville',
                    'CD' => 'Congo-Kinshasa',
                    'CK' => 'Cookeilanden',
                    'CR' => 'Costa Rica',
                    'CU' => 'Cuba',
                    'CW' => 'Cura&ccedil;ao',
                    'CY' => 'Cyprus',
                    'DK' => 'Denemarken',
                    'DJ' => 'Djibouti',
                    'DM' => 'Dominica',
                    'DO' => 'Dominicaanse Republiek',
                    'DE' => 'Duitsland',
                    'EC' => 'Ecuador',
                    'EG' => 'Egypte',
                    'SV' => 'El Salvador',
                    'GQ' => 'Equatoriaal-Guinea',
                    'ER' => 'Eritrea',
                    'EE' => 'Estland',
                    'ET' => 'Ethiopi&euml;',
                    'FO' => 'Faer&ouml;er',
                    'FK' => 'Falklandeilanden',
                    'FJ' => 'Fiji',
                    'PH' => 'Filipijnen',
                    'FI' => 'Finland',
                    'FR' => 'Frankrijk',
                    'TF' => 'Franse Zuidelijke en Antarctische Gebieden',
                    'GF' => 'Frans-Guyana',
                    'PF' => 'Frans-Polynesi&euml;',
                    'GA' => 'Gabon',
                    'GM' => 'Gambia',
                    'GE' => 'Georgi&euml;',
                    'GH' => 'Ghana',
                    'GI' => 'Gibraltar',
                    'GD' => 'Grenada',
                    'GR' => 'Griekenland',
                    'GL' => 'Groenland',
                    'GP' => 'Guadeloupe',
                    'GU' => 'Guam',
                    'GT' => 'Guatemala',
                    'GG' => 'Guernsey',
                    'GN' => 'Guinee',
                    'GW' => 'Guinee-Bissau',
                    'GY' => 'Guyana',
                    'HT' => 'Ha&iuml;ti',
                    'HM' => 'Heard en McDonaldeilanden',
                    'HN' => 'Honduras',
                    'HU' => 'Hongarije',
                    'HK' => 'Hongkong',
                    'IE' => 'Ierland',
                    'IS' => 'IJsland',
                    'IN' => 'India',
                    'ID' => 'Indonesi&euml;',
                    'IQ' => 'Irak',
                    'IR' => 'Iran',
                    'IL' => 'Isra&euml;l',
                    'IT' => 'Itali&euml;',
                    'CI' => 'Ivoorkust',
                    'JM' => 'Jamaica',
                    'JP' => 'Japan',
                    'YE' => 'Jemen',
                    'JE' => 'Jersey',
                    'JO' => 'Jordani&euml;',
                    'KY' => 'Kaaimaneilanden',
                    'CV' => 'Kaapverdi&euml;',
                    'CM' => 'Kameroen',
                    'KZ' => 'Kazachstan',
                    'KE' => 'Kenia',
                    'KG' => 'Kirgizi&euml;',
                    'KI' => 'Kiribati',
                    'UM' => 'Kleine Pacifische eilanden van de V.S.',
                    'KW' => 'Koeweit',
                    'HR' => 'Kroati&euml;',
                    'LA' => 'Laos',
                    'LS' => 'Lesotho',
                    'LV' => 'Letland',
                    'LB' => 'Libanon',
                    'LR' => 'Liberia',
                    'LY' => 'Libi&euml;',
                    'LI' => 'Liechtenstein',
                    'LT' => 'Litouwen',
                    'LU' => 'Luxemburg',
                    'MO' => 'Macau',
                    'MK' => 'Macedoni&euml;',
                    'MG' => 'Madagaskar',
                    'MW' => 'Malawi',
                    'MV' => 'Maldiven',
                    'MY' => 'Maleisi&euml;',
                    'ML' => 'Mali',
                    'MT' => 'Malta',
                    'IM' => 'Man',
                    'MA' => 'Marokko',
                    'MH' => 'Marshalleilanden',
                    'MQ' => 'Martinique',
                    'MR' => 'Mauritani&euml;',
                    'MU' => 'Mauritius',
                    'YT' => 'Mayotte',
                    'MX' => 'Mexico',
                    'FM' => 'Micronesia',
                    'MD' => 'Moldavi&euml;',
                    'MC' => 'Monaco',
                    'MN' => 'Mongoli&euml;',
                    'ME' => 'Montenegro',
                    'MS' => 'Montserrat',
                    'MZ' => 'Mozambique',
                    'MM' => 'Myanmar',
                    'NA' => 'Namibi&euml;',
                    'NR' => 'Nauru',
                    'NL' => 'Nederland',
                    'NP' => 'Nepal',
                    'NI' => 'Nicaragua',
                    'NC' => 'Nieuw-Caledoni&euml;',
                    'NZ' => 'Nieuw-Zeeland',
                    'NE' => 'Niger',
                    'NG' => 'Nigeria',
                    'NU' => 'Niue',
                    'MP' => 'Noordelijke Marianen',
                    'KP' => 'Noord-Korea',
                    'NO' => 'Noorwegen',
                    'NF' => 'Norfolk',
                    'UG' => 'Oeganda',
                    'UA' => 'Oekra&iuml;ne',
                    'UZ' => 'Oezbekistan',
                    'OM' => 'Oman',
                    'AT' => 'Oostenrijk',
                    'TL' => 'Oost-Timor',
                    'PK' => 'Pakistan',
                    'PW' => 'Palau',
                    'PS' => 'Palestina',
                    'PA' => 'Panama',
                    'PG' => 'Papoea-Nieuw-Guinea',
                    'PY' => 'Paraguay',
                    'PE' => 'Peru',
                    'PN' => 'Pitcairneilanden',
                    'PL' => 'Polen',
                    'PT' => 'Portugal',
                    'PR' => 'Puerto Rico',
                    'QA' => 'Qatar',
                    'RE' => 'R&eacute;union',
                    'RO' => 'Roemeni&euml;',
                    'RU' => 'Rusland',
                    'RW' => 'Rwanda',
                    'BL' => 'Saint-Barth&eacute;lemy',
                    'KN' => 'Saint Kitts en Nevis',
                    'LC' => 'Saint Lucia',
                    'PM' => 'Saint-Pierre en Miquelon',
                    'VC' => 'Saint Vincent en de Grenadines',
                    'SB' => 'Salomonseilanden',
                    'WS' => 'Samoa',
                    'SM' => 'San Marino',
                    'SA' => 'Saoedi-Arabi&euml;',
                    'ST' => 'Sao Tom&eacute; en Principe',
                    'SN' => 'Senegal',
                    'RS' => 'Servi&euml;',
                    'SC' => 'Seychellen',
                    'SL' => 'Sierra Leone',
                    'SG' => 'Singapore',
                    'SH' => 'Sint-Helena, Ascension en Tristan da Cunha',
                    'MF' => 'Sint-Maarten',
                    'SX' => 'Sint Maarten',
                    'SI' => 'Sloveni&euml;',
                    'SK' => 'Slowakije',
                    'SD' => 'Soedan',
                    'SO' => 'Somali&euml;',
                    'ES' => 'Spanje',
                    'SJ' => 'Spitsbergen en Jan Mayen',
                    'LK' => 'Sri Lanka',
                    'SR' => 'Suriname',
                    'SZ' => 'Swaziland',
                    'SY' => 'Syri&euml;',
                    'TJ' => 'Tadzjikistan',
                    'TW' => 'Taiwan',
                    'TZ' => 'Tanzania',
                    'TH' => 'Thailand',
                    'TG' => 'Togo',
                    'TK' => 'Tokelau',
                    'TO' => 'Tonga',
                    'TT' => 'Trinidad en Tobago',
                    'TD' => 'Tsjaad',
                    'CZ' => 'Tsjechi&euml;',
                    'TN' => 'Tunesi&euml;',
                    'TR' => 'Turkije',
                    'TM' => 'Turkmenistan',
                    'TC' => 'Turks- en Caicoseilanden',
                    'TV' => 'Tuvalu',
                    'UY' => 'Uruguay',
                    'VU' => 'Vanuatu',
                    'VA' => 'Vaticaanstad',
                    'VE' => 'Venezuela',
                    'AE' => 'Verenigde Arabische Emiraten',
                    'US' => 'Verenigde Staten',
                    'GB' => 'Verenigd Koninkrijk',
                    'VN' => 'Vietnam',
                    'WF' => 'Wallis en Futuna',
                    'EH' => 'Westelijke Sahara',
                    'BY' => 'Wit-Rusland',
                    'ZM' => 'Zambia',
                    'ZW' => 'Zimbabwe',
                    'ZA' => 'Zuid-Afrika',
                    'GS' => 'Zuid-Georgia en de Zuidelijke Sandwicheilanden',
                    'KR' => 'Zuid-Korea',
                    'SS' => 'Zuid-Soedan',
                    'SE' => 'Zweden',
                    'CH' => 'Zwitserland'
                ];
                break;
        }
    }

    public static function getNameForCode($code, $locale)
    {
        $list = Countries::getList($locale);
        if (!array_key_exists($code, $list)) {
            throw new \Exception('Country code \'' . $code . '\' does not exist.');
        }

        return $list[$code];
    }

    public static function getSymfonyFormChoices($locale)
    {
        return array_flip(Countries::getList($locale));
    }

}