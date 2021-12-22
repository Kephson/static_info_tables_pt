<?php
declare(strict_types=1);
/***************************************************************
 *  Copyright notice
 *  (c) 2020-2022 Ephraim Härer <ephraim.haerer@renolit.com>
 *  All rights reserved
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNamePt' => [
                'fieldName' => 'cn_short_pt',
            ],
            'officialNamePt' => [
                'fieldName' => 'cn_official_name_pt',
            ],
            'capitalPt' => [
                'fieldName' => 'cn_capital_pt',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'namePt' => [
                'fieldName' => 'zn_name_pt',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'namePt' => [
                'fieldName' => 'cu_name_pt',
            ],
            'subdivisionNamePt' => [
                'fieldName' => 'cu_sub_name_pt',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'namePt' => [
                'fieldName' => 'lg_name_pt',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'namePt' => [
                'fieldName' => 'tr_name_pt',
            ],
        ],
    ],
];
