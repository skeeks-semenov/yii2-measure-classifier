<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\yii2\measureClassifier;

use yii\base\Component;

/**
 * @property array $data;
 *
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class MeasureClassifierComponent extends Component
{
    /**
     * @return array
     */
    public function getData()
    {
        $unitsClassifier = [
            0 =>
                [
                    'TITLE' => \Yii::t('CAT_UC_TITLE1', 'skeeks/measureClassifier'),
                    0       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_LENGTH_UNITS', 'skeeks/measureClassifier'),
                            3       =>
                                [
                                    'CODE'               => '003',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'mm',
                                    'SYMBOL_LETTER_INTL' => 'MMT',
                                ],
                            4       =>
                                [
                                    'CODE'               => '004',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_SANTIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'cm',
                                    'SYMBOL_LETTER_INTL' => 'CMT',
                                ],
                            5       =>
                                [
                                    'CODE'               => '005',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DETCIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'dm',
                                    'SYMBOL_LETTER_INTL' => 'DMT',
                                ],
                            6       =>
                                [
                                    'CODE'               => '006',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_METR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_M", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm',
                                    'SYMBOL_LETTER_INTL' => 'MTR',
                                ],
                            8       =>
                                [
                                    'CODE'               => '008',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'km',
                                    'SYMBOL_LETTER_INTL' => 'KMT',
                                ],
                            9       =>
                                [
                                    'CODE'               => '009',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGAMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MEGAM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Mm',
                                    'SYMBOL_LETTER_INTL' => 'MAM',
                                ],
                            39      =>
                                [
                                    'CODE'               => '039',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DYUJM_25_4_MM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUJM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'in',
                                    'SYMBOL_LETTER_INTL' => 'INH',
                                ],
                            41      =>
                                [
                                    'CODE'               => '041',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_FUT_0_3048_M", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_FUT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'ft',
                                    'SYMBOL_LETTER_INTL' => 'FOT',
                                ],
                            43      =>
                                [
                                    'CODE'               => '043',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_YARD_0_9144_M", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_YARD", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'yd',
                                    'SYMBOL_LETTER_INTL' => 'YRD',
                                ],
                            47      =>
                                [
                                    'CODE'               => '047',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MORSKAYA_MILYA_1852_M", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MILYA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'n mile',
                                    'SYMBOL_LETTER_INTL' => 'NMI',
                                ],
                        ],
                    1       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_AREA_UNITS', 'skeeks/measureClassifier'),
                            50      =>
                                [
                                    'CODE'               => '050',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_MILLIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MM2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'mm2',
                                    'SYMBOL_LETTER_INTL' => 'MMK',
                                ],
                            51      =>
                                [
                                    'CODE'               => '051',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_SANTIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SM2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'cm2',
                                    'SYMBOL_LETTER_INTL' => 'CMK',
                                ],
                            53      =>
                                [
                                    'CODE'               => '053',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_DETCIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DM2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'dm2',
                                    'SYMBOL_LETTER_INTL' => 'DMK',
                                ],
                            55      =>
                                [
                                    'CODE'               => '055',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_METR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_M2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm2',
                                    'SYMBOL_LETTER_INTL' => 'MTK',
                                ],
                            58      =>
                                [
                                    'CODE'               => '058',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KVADRATNIH_METROV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_M2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'daa',
                                    'SYMBOL_LETTER_INTL' => 'DAA',
                                ],
                            59      =>
                                [
                                    'CODE'               => '059',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GEKTAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'ha',
                                    'SYMBOL_LETTER_INTL' => 'HAR',
                                ],
                            61      =>
                                [
                                    'CODE'               => '061',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_KILOMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KM2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'km2',
                                    'SYMBOL_LETTER_INTL' => 'KMK',
                                ],
                            71      =>
                                [
                                    'CODE'               => '071',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_DYUJM_645_16_MM2", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUJM2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'in2',
                                    'SYMBOL_LETTER_INTL' => 'INK',
                                ],
                            73      =>
                                [
                                    'CODE'               => '073',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_FUT_0_092903_M2", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_FUT2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'ft2',
                                    'SYMBOL_LETTER_INTL' => 'FTK',
                                ],
                            75      =>
                                [
                                    'CODE'               => '075',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_YARD_0_8361274_M2", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_YARD2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'yd2',
                                    'SYMBOL_LETTER_INTL' => 'YDK',
                                ],
                            109     =>
                                [
                                    'CODE'               => '109',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_AR_100_M2", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_A", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'a',
                                    'SYMBOL_LETTER_INTL' => 'ARE',
                                ],
                        ],
                    2       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_VOLUME_UNITS', 'skeeks/measureClassifier'),
                            110     =>
                                [
                                    'CODE'               => '110',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_MILLIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MM3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'mm3',
                                    'SYMBOL_LETTER_INTL' => 'MMQ',
                                ],
                            111     =>
                                [
                                    'CODE'               => '111',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_SANTIMETR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SM3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'cm3',
                                    'SYMBOL_LETTER_INTL' => 'CMQ',
                                ],
                            112     =>
                                [
                                    'CODE'               => '112',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_LITR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_L", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'l',
                                    'SYMBOL_LETTER_INTL' => 'LTR',
                                ],
                            113     =>
                                [
                                    'CODE'               => '113',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_METR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_M3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm3',
                                    'SYMBOL_LETTER_INTL' => 'MTQ',
                                ],
                            118     =>
                                [
                                    'CODE'               => '118',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DETCILITR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DL", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'dl',
                                    'SYMBOL_LETTER_INTL' => 'DLT',
                                ],
                            122     =>
                                [
                                    'CODE'               => '122',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GEKTOLITR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GL", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'hl',
                                    'SYMBOL_LETTER_INTL' => 'HLT',
                                ],
                            126     =>
                                [
                                    'CODE'               => '126',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGALITR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_ML", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Ml',
                                    'SYMBOL_LETTER_INTL' => 'MAL',
                                ],
                            131     =>
                                [
                                    'CODE'               => '131',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_DYUJM_16387_1_MM3", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUJM3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'in3',
                                    'SYMBOL_LETTER_INTL' => 'INQ',
                                ],
                            132     =>
                                [
                                    'CODE'               => '132',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_FUT_0_02831685_M3", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_FUT3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'ft3',
                                    'SYMBOL_LETTER_INTL' => 'FTQ',
                                ],
                            133     =>
                                [
                                    'CODE'               => '133',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_YARD_0_764555_M3", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_YARD3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'yd3',
                                    'SYMBOL_LETTER_INTL' => 'YDQ',
                                ],
                            159     =>
                                [
                                    'CODE'               => '159',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KUBICHESKIH_METROV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_M3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '10^6 m3',
                                    'SYMBOL_LETTER_INTL' => 'HMQ',
                                ],
                        ],
                    3       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_MASS_UNITS', 'skeeks/measureClassifier'),
                            160     =>
                                [
                                    'CODE'               => '160',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GEKTOGRAMM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GG", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'hg',
                                    'SYMBOL_LETTER_INTL' => 'HGM',
                                ],
                            161     =>
                                [
                                    'CODE'               => '161',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIGRAMM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MG", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'mg',
                                    'SYMBOL_LETTER_INTL' => 'MGM',
                                ],
                            162     =>
                                [
                                    'CODE'               => '162',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_METRICHESKIJ_KARAT_1_KARAT_=_200_MG_=_2*0_0001_KG", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'CTM',
                                    'SYMBOL_LETTER_INTL' => 'CTM',
                                ],
                            163     =>
                                [
                                    'CODE'               => '163',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRAMM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_G", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'g',
                                    'SYMBOL_LETTER_INTL' => 'GRM',
                                ],
                            166     =>
                                [
                                    'CODE'               => '166',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kg',
                                    'SYMBOL_LETTER_INTL' => 'KGM',
                                ],
                            168     =>
                                [
                                    'CODE'               => '168',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_METRICHESKAYA_TONNA_1000_KG", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_T", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 't',
                                    'SYMBOL_LETTER_INTL' => 'TNE',
                                ],
                            170     =>
                                [
                                    'CODE'               => '170',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOTONNA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_10_T3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kt',
                                    'SYMBOL_LETTER_INTL' => 'KTN',
                                ],
                            173     =>
                                [
                                    'CODE'               => '173',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_SANTIGRAMM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SG", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'cg',
                                    'SYMBOL_LETTER_INTL' => 'CGM',
                                ],
                            181     =>
                                [
                                    'CODE'               => '181',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_BRUTTO_-_REGISTROVAYA_TONNA_2_8316_M3", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_BRT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'GRT',
                                ],
                            185     =>
                                [
                                    'CODE'               => '185',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRUZOPOD_EMNOST_V_METRICHESKIH_TONNAH", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_GRP", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'CCT',
                                ],
                            206     =>
                                [
                                    'CODE'               => '206',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TCENTNER_METRICHESKIJ_100_KG", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_TC", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'q',
                                    'SYMBOL_LETTER_INTL' => 'DTN',
                                ],
                        ],
                    4       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_ENGINEERING_UNITS', 'skeeks/measureClassifier'),
                            212     =>
                                [
                                    'CODE'               => '212',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_VATT", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_VT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'W',
                                    'SYMBOL_LETTER_INTL' => 'WTT',
                                ],
                            214     =>
                                [
                                    'CODE'               => '214',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOVATT", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KVT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kW',
                                    'SYMBOL_LETTER_INTL' => 'KWT',
                                ],
                            215     =>
                                [
                                    'CODE'               => '215',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGAVATT_TISYACHA_KILOVATT", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MVT_1000_KVT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'MW',
                                    'SYMBOL_LETTER_INTL' => 'MAW',
                                ],
                            222     =>
                                [
                                    'CODE'               => '222',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_VOL_T", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_V", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'V',
                                    'SYMBOL_LETTER_INTL' => 'VLT',
                                ],
                            223     =>
                                [
                                    'CODE'               => '223',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOVOL_T", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KV", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kV',
                                    'SYMBOL_LETTER_INTL' => 'KVT',
                                ],
                            227     =>
                                [
                                    'CODE'               => '227',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOVOL_T_-_AMPER", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KV_A", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kV.A',
                                    'SYMBOL_LETTER_INTL' => 'KVA',
                                ],
                            228     =>
                                [
                                    'CODE'               => '228',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGAVOL_T_-_AMPER_TISYACHA_KILOVOL_T_-_AMPER", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MV_A", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'MV.A',
                                    'SYMBOL_LETTER_INTL' => 'MVA',
                                ],
                            230     =>
                                [
                                    'CODE'               => '230',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOVAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KVAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kVAR',
                                    'SYMBOL_LETTER_INTL' => 'KVR',
                                ],
                            243     =>
                                [
                                    'CODE'               => '243',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_VATT_-_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_VT_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'W.h',
                                    'SYMBOL_LETTER_INTL' => 'WHR',
                                ],
                            245     =>
                                [
                                    'CODE'               => '245',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOVATT_-_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KVT_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kW.h',
                                    'SYMBOL_LETTER_INTL' => 'KWH',
                                ],
                            246     =>
                                [
                                    'CODE'               => '246',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGAVATT_-_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MVT_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'MW.h',
                                    'SYMBOL_LETTER_INTL' => 'MWH',
                                ],
                            247     =>
                                [
                                    'CODE'               => '247',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GIGAVATT_-_CHAS_MILLION_KILOVATT_-_CHASOV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GVT_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'GW.h',
                                    'SYMBOL_LETTER_INTL' => 'GWH',
                                ],
                            260     =>
                                [
                                    'CODE'               => '260',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_AMPER", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_A", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'A',
                                    'SYMBOL_LETTER_INTL' => 'AMP',
                                ],
                            263     =>
                                [
                                    'CODE'               => '263',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_AMPER_-_CHAS_3_6_KKL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_A_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'A.h',
                                    'SYMBOL_LETTER_INTL' => 'AMH',
                                ],
                            264     =>
                                [
                                    'CODE'               => '264',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_AMPER_-_CHASOV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_A_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '1000  A.h',
                                    'SYMBOL_LETTER_INTL' => 'TAH',
                                ],
                            270     =>
                                [
                                    'CODE'               => '270',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KULON", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KL", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'C',
                                    'SYMBOL_LETTER_INTL' => 'COU',
                                ],
                            271     =>
                                [
                                    'CODE'               => '271',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DZHOUL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DZH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'J',
                                    'SYMBOL_LETTER_INTL' => 'JOU',
                                ],
                            273     =>
                                [
                                    'CODE'               => '273',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILODZHOUL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KDZH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kJ',
                                    'SYMBOL_LETTER_INTL' => 'KJO',
                                ],
                            274     =>
                                [
                                    'CODE'               => '274',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_OM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_OM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'OHM',
                                    'SYMBOL_LETTER_INTL' => 'OHM',
                                ],
                            280     =>
                                [
                                    'CODE'               => '280',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRADUS_TCEL_SIYA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_S", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => \Yii::t("CAT_UC_GRADUS_SYMBOL").'C',
                                    'SYMBOL_LETTER_INTL' => 'CEL',
                                ],
                            281     =>
                                [
                                    'CODE'               => '281',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRADUS_FARENGEJTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_F", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => \Yii::t("CAT_UC_GRADUS_SYMBOL").'F',
                                    'SYMBOL_LETTER_INTL' => 'FAN',
                                ],
                            282     =>
                                [
                                    'CODE'               => '282',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KANDELA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KD", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'cd',
                                    'SYMBOL_LETTER_INTL' => 'CDL',
                                ],
                            283     =>
                                [
                                    'CODE'               => '283',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_LYUKS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_LK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'lx',
                                    'SYMBOL_LETTER_INTL' => 'LUX',
                                ],
                            284     =>
                                [
                                    'CODE'               => '284',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_LYUMEN", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_LM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'lm',
                                    'SYMBOL_LETTER_INTL' => 'LUM',
                                ],
                            288     =>
                                [
                                    'CODE'               => '288',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KEL_VIN", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_K", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'K',
                                    'SYMBOL_LETTER_INTL' => 'KEL',
                                ],
                            289     =>
                                [
                                    'CODE'               => '289',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_N_YUTON", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_N", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'N',
                                    'SYMBOL_LETTER_INTL' => 'NEW',
                                ],
                            290     =>
                                [
                                    'CODE'               => '290',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GERTC", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GTC", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Hz',
                                    'SYMBOL_LETTER_INTL' => 'HTZ',
                                ],
                            291     =>
                                [
                                    'CODE'               => '291',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGERTC", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KGTC", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kHz',
                                    'SYMBOL_LETTER_INTL' => 'KHZ',
                                ],
                            292     =>
                                [
                                    'CODE'               => '292',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGAGERTC", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MGTC", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'MHz',
                                    'SYMBOL_LETTER_INTL' => 'MHZ',
                                ],
                            294     =>
                                [
                                    'CODE'               => '294',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_PASKAL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_PA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Pa',
                                    'SYMBOL_LETTER_INTL' => 'PAL',
                                ],
                            296     =>
                                [
                                    'CODE'               => '296',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_SIMENS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'S',
                                    'SYMBOL_LETTER_INTL' => 'SIE',
                                ],
                            297     =>
                                [
                                    'CODE'               => '297',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOPASKAL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KPA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kPa',
                                    'SYMBOL_LETTER_INTL' => 'KPA',
                                ],
                            298     =>
                                [
                                    'CODE'               => '298',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGAPASKAL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MPA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'MPa',
                                    'SYMBOL_LETTER_INTL' => 'MPA',
                                ],
                            300     =>
                                [
                                    'CODE'               => '300',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_FIZICHESKAYA_ATMOSFERA_101325_PA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_ATM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'atm',
                                    'SYMBOL_LETTER_INTL' => 'ATM',
                                ],
                            301     =>
                                [
                                    'CODE'               => '301',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TEHNICHESKAYA_ATMOSFERA_98066_5_PA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_AT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'at',
                                    'SYMBOL_LETTER_INTL' => 'ATT',
                                ],
                            302     =>
                                [
                                    'CODE'               => '302',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GIGABEKKEREL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GBK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'GBq',
                                    'SYMBOL_LETTER_INTL' => 'GBQ',
                                ],
                            304     =>
                                [
                                    'CODE'               => '304',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIKYURI", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MKI", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'mCi',
                                    'SYMBOL_LETTER_INTL' => 'MCU',
                                ],
                            305     =>
                                [
                                    'CODE'               => '305',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KYURI", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KI", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Ci',
                                    'SYMBOL_LETTER_INTL' => 'CUR',
                                ],
                            306     =>
                                [
                                    'CODE'               => '306',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRAMM_DELYASHIHSYA_IZOTOPOV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_G_DI", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'g fissile isotopes',
                                    'SYMBOL_LETTER_INTL' => 'GFI',
                                ],
                            308     =>
                                [
                                    'CODE'               => '308',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIBAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MB", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'mbar',
                                    'SYMBOL_LETTER_INTL' => 'MBR',
                                ],
                            309     =>
                                [
                                    'CODE'               => '309',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_BAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_BAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'bar',
                                    'SYMBOL_LETTER_INTL' => 'BAR',
                                ],
                            310     =>
                                [
                                    'CODE'               => '310',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GEKTOBAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GB", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'hbar',
                                    'SYMBOL_LETTER_INTL' => 'HBA',
                                ],
                            312     =>
                                [
                                    'CODE'               => '312',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOBAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KB", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kbar',
                                    'SYMBOL_LETTER_INTL' => 'KBA',
                                ],
                            314     =>
                                [
                                    'CODE'               => '314',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_FARAD", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_F", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'F',
                                    'SYMBOL_LETTER_INTL' => 'FAR',
                                ],
                            316     =>
                                [
                                    'CODE'               => '316',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_NA_KUBICHESKIJ_METR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KGM3", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kg/m3',
                                    'SYMBOL_LETTER_INTL' => 'KMQ',
                                ],
                            323     =>
                                [
                                    'CODE'               => '323',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_BEKKEREL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_BK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Bq',
                                    'SYMBOL_LETTER_INTL' => 'BQL',
                                ],
                            324     =>
                                [
                                    'CODE'               => '324',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_VEBER", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_VB", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Wb',
                                    'SYMBOL_LETTER_INTL' => 'WEB',
                                ],
                            327     =>
                                [
                                    'CODE'               => '327',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_UZEL_MILYACH", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_UZ", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'kn',
                                    'SYMBOL_LETTER_INTL' => 'KNT',
                                ],
                            328     =>
                                [
                                    'CODE'               => '328',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_METR_V_SEKUNDU", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MS", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm/s',
                                    'SYMBOL_LETTER_INTL' => 'MTS',
                                ],
                            330     =>
                                [
                                    'CODE'               => '330',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_OBOROT_V_SEKUNDU", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_OBS", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'r/s',
                                    'SYMBOL_LETTER_INTL' => 'RPS',
                                ],
                            331     =>
                                [
                                    'CODE'               => '331',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_OBOROT_V_MINUTU", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_OBMIN", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'r/min',
                                    'SYMBOL_LETTER_INTL' => 'RPM',
                                ],
                            333     =>
                                [
                                    'CODE'               => '333',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOMETR_V_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KMCH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'km/h',
                                    'SYMBOL_LETTER_INTL' => 'KMH',
                                ],
                            335     =>
                                [
                                    'CODE'               => '335',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_METR_NA_SEKUNDU_V_KVADRATE", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MS2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm/s2',
                                    'SYMBOL_LETTER_INTL' => 'MSK',
                                ],
                            349     =>
                                [
                                    'CODE'               => '349',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KULON_NA_KILOGRAMM", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KLKG", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'C/kg',
                                    'SYMBOL_LETTER_INTL' => 'CKG',
                                ],
                        ],
                    5       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_TIME_UNITS', 'skeeks/measureClassifier'),
                            354     =>
                                [
                                    'CODE'               => '354',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_SEKUNDA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_S", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 's',
                                    'SYMBOL_LETTER_INTL' => 'SEC',
                                ],
                            355     =>
                                [
                                    'CODE'               => '355',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MINUTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MIN", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'min',
                                    'SYMBOL_LETTER_INTL' => 'MIN',
                                ],
                            356     =>
                                [
                                    'CODE'               => '356',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'h',
                                    'SYMBOL_LETTER_INTL' => 'HUR',
                                ],
                            359     =>
                                [
                                    'CODE'               => '359',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUTKI", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SUT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'd',
                                    'SYMBOL_LETTER_INTL' => 'DAY',
                                ],
                            360     =>
                                [
                                    'CODE'               => '360',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_NEDELYA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_NED", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'WEE',
                                ],
                            361     =>
                                [
                                    'CODE'               => '361',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DEKADA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DEK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'DAD',
                                ],
                            362     =>
                                [
                                    'CODE'               => '362',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MESYATC", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_MES", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'MON',
                                ],
                            364     =>
                                [
                                    'CODE'               => '364',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVARTAL", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KVART", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'QAN',
                                ],
                            365     =>
                                [
                                    'CODE'               => '365',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_POLUGODIE", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_POLGODA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'SAN',
                                ],
                            366     =>
                                [
                                    'CODE'               => '366',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GOD", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_G_LET", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'a',
                                    'SYMBOL_LETTER_INTL' => 'ANN',
                                ],
                            368     =>
                                [
                                    'CODE'               => '368',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DESYATILETIE", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DESLET", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'DEC',
                                ],
                        ],
                    6       =>
                        [
                            'TITLE' => \Yii::t('CAT_UC_ECONOMIC_UNITS', 'skeeks/measureClassifier'),
                            499     =>
                                [
                                    'CODE'               => '499',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_V_SEKUNDU", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KGS", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KGS',
                                ],
                            533     =>
                                [
                                    'CODE'               => '533',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_PARA_V_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_PARCH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'TSH',
                                ],
                            596     =>
                                [
                                    'CODE'               => '596',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_METR_V_SEKUNDU", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_M3S", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm3/s',
                                    'SYMBOL_LETTER_INTL' => 'MQS',
                                ],
                            598     =>
                                [
                                    'CODE'               => '598',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KUBICHESKIJ_METR_V_CHAS", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_M3CH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'm3/h',
                                    'SYMBOL_LETTER_INTL' => 'MQH',
                                ],
                            599     =>
                                [
                                    'CODE'               => '599',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KUBICHESKIH_METROV_V_SUTKI", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_M3SUT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'TQD',
                                ],
                            616     =>
                                [
                                    'CODE'               => '616',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_BOBINA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_BOB", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'NBB',
                                ],
                            625     =>
                                [
                                    'CODE'               => '625',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_LIST", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_L", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'LEF',
                                ],
                            626     =>
                                [
                                    'CODE'               => '626',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_STO_LISTOV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_100_L", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'CLF',
                                ],
                            630     =>
                                [
                                    'CODE'               => '630',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_STANDARTNIH_USLOVNIH_KIRPICHEJ", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_TIS_STAND_USL_KIRP", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'MBE',
                                ],
                            641     =>
                                [
                                    'CODE'               => '641',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DYUZHINA_12_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUZHINA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Doz. 12',
                                    'SYMBOL_LETTER_INTL' => 'DZN',
                                ],
                            657     =>
                                [
                                    'CODE'               => '657',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_IZDELIE", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_IZD", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'NAR',
                                ],
                            683     =>
                                [
                                    'CODE'               => '683',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_STO_YASHIKOV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_100_YASH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'Hbx',
                                    'SYMBOL_LETTER_INTL' => 'HBX',
                                ],
                            704     =>
                                [
                                    'CODE'               => '704',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_NABOR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_NABOR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'SET',
                                ],
                            715     =>
                                [
                                    'CODE'               => '715',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_PARA_2_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_PAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'pr. 2',
                                    'SYMBOL_LETTER_INTL' => 'NPR',
                                ],
                            730     =>
                                [
                                    'CODE'               => '730',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DVA_DESYATKA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_20", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '20',
                                    'SYMBOL_LETTER_INTL' => 'SCO',
                                ],
                            732     =>
                                [
                                    'CODE'               => '732',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DESYAT_PAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_10_PAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'TPR',
                                ],
                            733     =>
                                [
                                    'CODE'               => '733',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DYUZHINA_PAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUZHINA_PAR", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'DPR',
                                ],
                            734     =>
                                [
                                    'CODE'               => '734',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_POSILKA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_POSIL", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'NPL',
                                ],
                            735     =>
                                [
                                    'CODE'               => '735',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHAST", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_CHAST", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'NPT',
                                ],
                            736     =>
                                [
                                    'CODE'               => '736',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_RULON", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_RUL", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'NPL',
                                ],
                            737     =>
                                [
                                    'CODE'               => '737',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DYUZHINA_RULONOV", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUZHINA_RUL", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'DRL',
                                ],
                            740     =>
                                [
                                    'CODE'               => '740',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DYUZHINA_SHTUK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUZHINA_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'DPC',
                                ],
                            745     =>
                                [
                                    'CODE'               => '745',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_ELEMENT", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_ELEM", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'CI',
                                    'SYMBOL_LETTER_INTL' => 'NCL',
                                ],
                            778     =>
                                [
                                    'CODE'               => '778',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_UPAKOVKA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_UPAK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'NMP',
                                ],
                            780     =>
                                [
                                    'CODE'               => '780',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_DYUZHINA_UPAKOVOK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_DYUZHINA_UPAK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'DZP',
                                ],
                            781     =>
                                [
                                    'CODE'               => '781',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_STO_UPAKOVOK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_100_UPAK", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'CNP',
                                ],
                            796     =>
                                [
                                    'CODE'               => '796',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_SHTUKA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => 'pc. 1',
                                    'SYMBOL_LETTER_INTL' => 'PCE. NMB',
                                ],
                            797     =>
                                [
                                    'CODE'               => '797',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_STO_SHTUK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_100_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '100',
                                    'SYMBOL_LETTER_INTL' => 'CEN',
                                ],
                            798     =>
                                [
                                    'CODE'               => '798',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_SHTUK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_TIS_SHT_1000_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '1000',
                                    'SYMBOL_LETTER_INTL' => 'MIL',
                                ],
                            799     =>
                                [
                                    'CODE'               => '799',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_SHTUK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '10^6',
                                    'SYMBOL_LETTER_INTL' => 'MIO',
                                ],
                            800     =>
                                [
                                    'CODE'               => '800',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIARD_SHTUK", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_109_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '10^9',
                                    'SYMBOL_LETTER_INTL' => 'MLD',
                                ],
                            801     =>
                                [
                                    'CODE'               => '801',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_BILLION_SHTUK_EVROPA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_1012_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '10^12',
                                    'SYMBOL_LETTER_INTL' => 'BIL',
                                ],
                            802     =>
                                [
                                    'CODE'               => '802',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVINTIL_ON_SHTUK_EVROPA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_1018_SHT", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '10^18',
                                    'SYMBOL_LETTER_INTL' => 'TRL',
                                ],
                            820     =>
                                [
                                    'CODE'               => '820',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KREPOST_SPIRTA_PO_MASSE", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KREP_SPIRTA_PO_MASSE", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '% mds',
                                    'SYMBOL_LETTER_INTL' => 'ASM',
                                ],
                            821     =>
                                [
                                    'CODE'               => '821',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KREPOST_SPIRTA_PO_OB_EMU", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KREP_SPIRTA_PO_OB_EMU", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => '% vol',
                                    'SYMBOL_LETTER_INTL' => 'ASV',
                                ],
                            831     =>
                                [
                                    'CODE'               => '831',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_LITR_CHISTOGO_100_SPIRTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_L_100_SPIRTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'LPA',
                                ],
                            833     =>
                                [
                                    'CODE'               => '833',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_GEKTOLITR_CHISTOGO_100_SPIRTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_GL_100_SPIRTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'HPA',
                                ],
                            841     =>
                                [
                                    'CODE'               => '841',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_PEROKSIDA_VODORODA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_H_2_0_2", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => null,
                                ],
                            845     =>
                                [
                                    'CODE'               => '845',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_90-GO_SUHOGO_VESHESTVA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_90_SV", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KSD',
                                ],
                            847     =>
                                [
                                    'CODE'               => '847',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_90-GO_SUHOGO_VESHESTVA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_90_SV", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'TSD',
                                ],
                            852     =>
                                [
                                    'CODE'               => '852',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_OKSIDA_KALIYA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_K_2_O", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KPO',
                                ],
                            859     =>
                                [
                                    'CODE'               => '859',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_GIDROKSIDA_KALIYA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_KON", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KPH',
                                ],
                            861     =>
                                [
                                    'CODE'               => '861',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_AZOTA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_N", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KNI',
                                ],
                            863     =>
                                [
                                    'CODE'               => '863',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_GIDROKSIDA_NATRIYA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_NAOH", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KSH',
                                ],
                            865     =>
                                [
                                    'CODE'               => '865',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_PYATIOKISI_FOSFORA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_R_2_O_5", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KPP',
                                ],
                            867     =>
                                [
                                    'CODE'               => '867',
                                    'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_URANA", 'skeeks/measureClassifier'),
                                    'SYMBOL_RUS'         => \Yii::t("CAT_UC_KG_U", 'skeeks/measureClassifier'),
                                    'SYMBOL_INTL'        => null,
                                    'SYMBOL_LETTER_INTL' => 'KUR',
                                ],
                        ],
                ],
        ];

        $unitsClassifier[] =
            [
                'TITLE' => \Yii::t('CAT_UC_TITLE2', 'skeeks/measureClassifier'),
                0       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_LENGTH_UNITS', 'skeeks/measureClassifier'),
                        18      =>
                            [
                                'CODE'               => '018',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_POGONNIJ_METR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_POG_M", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        19      =>
                            [
                                'CODE'               => '019',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_POGONNIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_POG_M", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        20      =>
                            [
                                'CODE'               => '020',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_METR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_M", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        48      =>
                            [
                                'CODE'               => '048',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_M", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        49      =>
                            [
                                'CODE'               => '049',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOMETR_USLOVNIH_TRUB", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KM_USL_TRUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
                1       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_AREA_UNITS', 'skeeks/measureClassifier'),
                        54      =>
                            [
                                'CODE'               => '054',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KVADRATNIH_DETCIMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_DM2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        56      =>
                            [
                                'CODE'               => '056',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KVADRATNIH_DETCIMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_DM2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        57      =>
                            [
                                'CODE'               => '057',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KVADRATNIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_M2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        60      =>
                            [
                                'CODE'               => '060',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_GEKTAROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_GA", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        62      =>
                            [
                                'CODE'               => '062',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_KVADRATNIJ_METR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_M2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        63      =>
                            [
                                'CODE'               => '063',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_KVADRATNIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_M2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        64      =>
                            [
                                'CODE'               => '064',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_USLOVNIH_KVADRATNIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_USL_M2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        81      =>
                            [
                                'CODE'               => '081',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_METR_OBSHEJ_PLOSHADI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_M2_OBSH_PL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        82      =>
                            [
                                'CODE'               => '082',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KVADRATNIH_METROV_OBSHEJ_PLOSHADI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_M2_OBSH_PL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        83      =>
                            [
                                'CODE'               => '083',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KVADRATNIH_METROV_OBSHEJ_PLOSHADI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_M2_OBSH_PL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        84      =>
                            [
                                'CODE'               => '084',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_METR_ZHILOJ_PLOSHADI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_M2_ZHIL_PL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        85      =>
                            [
                                'CODE'               => '085',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KVADRATNIH_METROV_ZHILOJ_PLOSHADI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_M2_ZHIL_PL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        86      =>
                            [
                                'CODE'               => '086',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KVADRATNIH_METROV_ZHILOJ_PLOSHADI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_M2_ZHIL_PL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        87      =>
                            [
                                'CODE'               => '087',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNIJ_METR_UCHEBNO_-_LABORATORNIH_ZDANIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_M2_UCH_LAB_ZDAN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        88      =>
                            [
                                'CODE'               => '088',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KVADRATNIH_METROV_UCHEBNO_-_LABORATORNIH_ZDANIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_M2_UCH_LAB_ZDAN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        89      =>
                            [
                                'CODE'               => '089',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KVADRATNIH_METROV_V_DVUHMILLIMETROVOM_ISCHISLENII", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_M2_2_MM_ISCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
                2       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_VOLUME_UNITS', 'skeeks/measureClassifier'),
                        114     =>
                            [
                                'CODE'               => '114',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KUBICHESKIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        115     =>
                            [
                                'CODE'               => '115',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIARD_KUBICHESKIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_109_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        116     =>
                            [
                                'CODE'               => '116',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DEKALITR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_DKL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        119     =>
                            [
                                'CODE'               => '119',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_DEKALITROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_DKL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        120     =>
                            [
                                'CODE'               => '120',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_DEKALITROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_DKL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        121     =>
                            [
                                'CODE'               => '121',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PLOTNIJ_KUBICHESKIJ_METR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PLOTN_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        123     =>
                            [
                                'CODE'               => '123',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_KUBICHESKIJ_METR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        124     =>
                            [
                                'CODE'               => '124',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_KUBICHESKIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        125     =>
                            [
                                'CODE'               => '125',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KUBICHESKIH_METROV_PERERABOTKI_GAZA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_M3_PERERAB_GAZA", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        127     =>
                            [
                                'CODE'               => '127',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PLOTNIH_KUBICHESKIH_METROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_PLOTN_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        128     =>
                            [
                                'CODE'               => '128',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_POLULITROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_POL_L", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        129     =>
                            [
                                'CODE'               => '129',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_POLULITROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_POL_L", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        130     =>
                            [
                                'CODE'               => '130',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_LITROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_L", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
                3       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_MASS_UNITS', 'skeeks/measureClassifier'),
                        165     =>
                            [
                                'CODE'               => '165',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KARATOV_METRICHESKIH", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_KAR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        167     =>
                            [
                                'CODE'               => '167',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KARATOV_METRICHESKIH", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_KAR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        169     =>
                            [
                                'CODE'               => '169',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        171     =>
                            [
                                'CODE'               => '171',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_T", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        172     =>
                            [
                                'CODE'               => '172',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_USLOVNOGO_TOPLIVA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_USL_TOPL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        175     =>
                            [
                                'CODE'               => '175',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_USLOVNOGO_TOPLIVA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T_USL_TOPL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        176     =>
                            [
                                'CODE'               => '176',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONN_USLOVNOGO_TOPLIVA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_T_USL_TOPL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        177     =>
                            [
                                'CODE'               => '177',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_EDINOVREMENNOGO_HRANENIYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T_EDINOVR_HRAN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        178     =>
                            [
                                'CODE'               => '178',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_PERERABOTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T_PERERAB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        179     =>
                            [
                                'CODE'               => '179',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_TONNA_T", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_T", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        207     =>
                            [
                                'CODE'               => '207',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TCENTNEROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_TC", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
                4       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_ENGINEERING_UNITS', 'skeeks/measureClassifier'),
                        226     =>
                            [
                                'CODE'               => '226',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_VOL_T_-_AMPER", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_V_A", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        231     =>
                            [
                                'CODE'               => '231',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_METR_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        232     =>
                            [
                                'CODE'               => '232',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOKALORIYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KKAL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        233     =>
                            [
                                'CODE'               => '233',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GIGAKALORIYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_GKAL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        234     =>
                            [
                                'CODE'               => '234',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_GIGAKALORIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_GKAL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        235     =>
                            [
                                'CODE'               => '235',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_GIGAKALORIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_GKAL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        236     =>
                            [
                                'CODE'               => '236',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KALORIYA_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KALCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        237     =>
                            [
                                'CODE'               => '237',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOKALORIYA_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KKALCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        238     =>
                            [
                                'CODE'               => '238',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GIGAKALORIYA_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_GKALCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        239     =>
                            [
                                'CODE'               => '239',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_GIGAKALORIJ_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_GKALCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        241     =>
                            [
                                'CODE'               => '241',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_AMPER_-_CHASOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_A_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        242     =>
                            [
                                'CODE'               => '242',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_KILOVOL_T_-_AMPER", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_KV_A", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        248     =>
                            [
                                'CODE'               => '248',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOVOL_T_-_AMPER_REAKTIVNIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KV_A_R", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        249     =>
                            [
                                'CODE'               => '249',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIARD_KILOVATT_-_CHASOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_109_KVT_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        250     =>
                            [
                                'CODE'               => '250',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KILOVOL_T_-_AMPER_REAKTIVNIH", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_KV_A_R", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        251     =>
                            [
                                'CODE'               => '251',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_LOSHADINAYA_SILA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_L_S", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        252     =>
                            [
                                'CODE'               => '252',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_LOSHADINIH_SIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_L_S", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        253     =>
                            [
                                'CODE'               => '253',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_LOSHADINIH_SIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_L_S", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        254     =>
                            [
                                'CODE'               => '254',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BIT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_BIT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        255     =>
                            [
                                'CODE'               => '255',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BAJT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_BAJT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        256     =>
                            [
                                'CODE'               => '256',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOBAJT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KBAJT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        257     =>
                            [
                                'CODE'               => '257',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEGABAJT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MBAJT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        258     =>
                            [
                                'CODE'               => '258',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_BOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        287     =>
                            [
                                'CODE'               => '287',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GENRI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_GN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        313     =>
                            [
                                'CODE'               => '313',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TESLA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        317     =>
                            [
                                'CODE'               => '317',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_NA_KVADRATNIJ_SANTIMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KGSM2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        337     =>
                            [
                                'CODE'               => '337',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIMETR_VODYANOGO_STOLBA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MM_VOD_ST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        338     =>
                            [
                                'CODE'               => '338',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIMETR_RTUTNOGO_STOLBA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MM_RT_ST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        339     =>
                            [
                                'CODE'               => '339',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SANTIMETR_VODYANOGO_STOLBA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SM_VOD_ST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
                5       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_TIME_UNITS', 'skeeks/measureClassifier'),
                        352     =>
                            [
                                'CODE'               => '352',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MIKROSEKUNDA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MKS", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        353     =>
                            [
                                'CODE'               => '353',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLISEKUNDA_EK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MLS", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
                6       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_ECONOMIC_UNITS', 'skeeks/measureClassifier'),
                        383     =>
                            [
                                'CODE'               => '383',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_RUBL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_RUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        384     =>
                            [
                                'CODE'               => '384',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_RUBLEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_RUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        385     =>
                            [
                                'CODE'               => '385',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_RUBLEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_RUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        386     =>
                            [
                                'CODE'               => '386',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLIARD_RUBLEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_109_RUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        387     =>
                            [
                                'CODE'               => '387',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TRILLION_RUBLEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1012_RUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        388     =>
                            [
                                'CODE'               => '388',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRIL_ON_RUBLEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1015_RUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        414     =>
                            [
                                'CODE'               => '414',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PASSAZHIRO_-_KILOMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PASS_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        421     =>
                            [
                                'CODE'               => '421',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PASSAZHIRSKOE_MESTO_PASSAZHIRSKIH_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PASS_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        423     =>
                            [
                                'CODE'               => '423',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PASSAZHIRO_-_KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_PASS_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        424     =>
                            [
                                'CODE'               => '424',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_PASSAZHIRO_-_KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_PASS_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        427     =>
                            [
                                'CODE'               => '427',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PASSAZHIROPOTOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PASS_POTOK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        449     =>
                            [
                                'CODE'               => '449',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNO_-_KILOMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        450     =>
                            [
                                'CODE'               => '450',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONNO_-_KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        451     =>
                            [
                                'CODE'               => '451',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONNO_-_KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_T_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        479     =>
                            [
                                'CODE'               => '479',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_NABOROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_NABOR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        510     =>
                            [
                                'CODE'               => '510',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRAMM_NA_KILOVATT_-_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_GKVT_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        511     =>
                            [
                                'CODE'               => '511',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KILOGRAMM_NA_GIGAKALORIYU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KGGKAL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        512     =>
                            [
                                'CODE'               => '512',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNO_-_NOMER", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_NOM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        513     =>
                            [
                                'CODE'               => '513',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_AVTOTONNA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_AVTO_T", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        514     =>
                            [
                                'CODE'               => '514',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_TYAGI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_TYAGI", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        515     =>
                            [
                                'CODE'               => '515',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DEDVEJT-TONNA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_DEDVEJT_T", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        516     =>
                            [
                                'CODE'               => '516',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNO-TANID", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_TANID", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        521     =>
                            [
                                'CODE'               => '521',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHELOVEK_NA_KVADRATNIJ_METR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_CHELM2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        522     =>
                            [
                                'CODE'               => '522',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHELOVEK_NA_KVADRATNIJ_KILOMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_CHELKM2", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        534     =>
                            [
                                'CODE'               => '534',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        535     =>
                            [
                                'CODE'               => '535',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_V_SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TSUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        536     =>
                            [
                                'CODE'               => '536',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_V_SMENU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TSMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        537     =>
                            [
                                'CODE'               => '537',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_V_SEZON", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_TSEZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        538     =>
                            [
                                'CODE'               => '538',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_V_GOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_TGOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        539     =>
                            [
                                'CODE'               => '539',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHELOVEKO_-_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_CHEL_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        540     =>
                            [
                                'CODE'               => '540',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHELOVEKO_-_DEN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_CHEL_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        541     =>
                            [
                                'CODE'               => '541',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_CHELOVEKO_-_DNEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_CHEL_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        542     =>
                            [
                                'CODE'               => '542',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_CHELOVEKO_-_CHASOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_CHEL_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        543     =>
                            [
                                'CODE'               => '543',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_BANOK_V_SMENU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_BANKSMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        544     =>
                            [
                                'CODE'               => '544',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_EDINITC_V_GOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_EDGOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        545     =>
                            [
                                'CODE'               => '545',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_POSESHENIE_V_SMENU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_POSESHSMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        546     =>
                            [
                                'CODE'               => '546',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_POSESHENIJ_V_SMENU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_POSESHSMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        547     =>
                            [
                                'CODE'               => '547',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PARA_V_SMENU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PARSMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        548     =>
                            [
                                'CODE'               => '548',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PAR_V_SMENU", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_PARSMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        550     =>
                            [
                                'CODE'               => '550',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONN_V_GOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_TGOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        552     =>
                            [
                                'CODE'               => '552',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TONNA_PERERABOTKI_V_SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_T_PERERABSUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        553     =>
                            [
                                'CODE'               => '553',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_PERERABOTKI_V_SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T_PERERABSUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        554     =>
                            [
                                'CODE'               => '554',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TCENTNER_PERERABOTKI_V_SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TC_PERERABSUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        555     =>
                            [
                                'CODE'               => '555',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TCENTNEROV_PERERABOTKI_V_SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_TC_PERERABSUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        556     =>
                            [
                                'CODE'               => '556',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_GOLOV_V_GOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_GOLGOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        557     =>
                            [
                                'CODE'               => '557',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_GOLOV_V_GOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_GOLGOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        558     =>
                            [
                                'CODE'               => '558',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PTITCEMEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_PTITCEMEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        559     =>
                            [
                                'CODE'               => '559',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KUR_-_NESUSHEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_KUR_NESUSH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        560     =>
                            [
                                'CODE'               => '560',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MINIMAL_NAYA_ZARABOTNAYA_PLATA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MIN_ZARABOTN_PLAT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        561     =>
                            [
                                'CODE'               => '561',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_PARA_V_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_T_PARCH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        562     =>
                            [
                                'CODE'               => '562',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PRYADIL_NIH_VERETEN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_PRYAD_VERET", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        563     =>
                            [
                                'CODE'               => '563',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PRYADIL_NIH_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_PRYAD_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        639     =>
                            [
                                'CODE'               => '639',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DOZA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_DOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        640     =>
                            [
                                'CODE'               => '640',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_DOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_DOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        642     =>
                            [
                                'CODE'               => '642',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_EDINITCA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        643     =>
                            [
                                'CODE'               => '643',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        644     =>
                            [
                                'CODE'               => '644',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        661     =>
                            [
                                'CODE'               => '661',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KANAL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KANAL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        673     =>
                            [
                                'CODE'               => '673',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KOMPLEKTOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_KOMPL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        698     =>
                            [
                                'CODE'               => '698',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MESTO", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        699     =>
                            [
                                'CODE'               => '699',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        709     =>
                            [
                                'CODE'               => '709',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_NOMEROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_NOM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        724     =>
                            [
                                'CODE'               => '724',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_GEKTAROV_PORTCIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_GA_PORTC", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        729     =>
                            [
                                'CODE'               => '729',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PACHEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_PACH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        744     =>
                            [
                                'CODE'               => '744',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PROTCENT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PROC", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        746     =>
                            [
                                'CODE'               => '746',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PROMILLE_0_1_PROTCENTA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PROMILLE", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        751     =>
                            [
                                'CODE'               => '751',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_RULONOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_RUL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        761     =>
                            [
                                'CODE'               => '761',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_STANOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_STAN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        762     =>
                            [
                                'CODE'               => '762',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_STANTCIYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_STANTC", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        775     =>
                            [
                                'CODE'               => '775',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TYUBIKOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_TYUBIK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        776     =>
                            [
                                'CODE'               => '776',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_TUBOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_USL_TUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        779     =>
                            [
                                'CODE'               => '779',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_UPAKOVOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_UPAK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        782     =>
                            [
                                'CODE'               => '782',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_UPAKOVOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_UPAK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        792     =>
                            [
                                'CODE'               => '792',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_CHELOVEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_CHEL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        793     =>
                            [
                                'CODE'               => '793',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_CHELOVEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_CHEL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        794     =>
                            [
                                'CODE'               => '794',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_CHELOVEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_CHEL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        808     =>
                            [
                                'CODE'               => '808',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_EKZEMPLYAROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_EKZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        810     =>
                            [
                                'CODE'               => '810',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_YACHEJKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_YACH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        812     =>
                            [
                                'CODE'               => '812',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_YASHIK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_YASH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        836     =>
                            [
                                'CODE'               => '836',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GOLOVA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_GOL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        837     =>
                            [
                                'CODE'               => '837',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PAR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_PAR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        838     =>
                            [
                                'CODE'               => '838',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_PAR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_PAR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        839     =>
                            [
                                'CODE'               => '839',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KOMPLEKT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KOMPL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        840     =>
                            [
                                'CODE'               => '840',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SEKTCIYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SEKTC", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        868     =>
                            [
                                'CODE'               => '868',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BUTILKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_BUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        869     =>
                            [
                                'CODE'               => '869',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_BUTILOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_BUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        870     =>
                            [
                                'CODE'               => '870',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_AMPULA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_AMPUL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        871     =>
                            [
                                'CODE'               => '871',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_AMPUL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_AMPUL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        872     =>
                            [
                                'CODE'               => '872',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_FLAKON", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_FLAK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        873     =>
                            [
                                'CODE'               => '873',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_FLAKONOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_FLAK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        874     =>
                            [
                                'CODE'               => '874',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TUBOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_TUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        875     =>
                            [
                                'CODE'               => '875',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KOROBOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_KOR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        876     =>
                            [
                                'CODE'               => '876',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_EDINITCA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        877     =>
                            [
                                'CODE'               => '877',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        878     =>
                            [
                                'CODE'               => '878',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_USLOVNIH_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_USL_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        879     =>
                            [
                                'CODE'               => '879',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_SHTUKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_SHT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        880     =>
                            [
                                'CODE'               => '880',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_SHTUK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_SHT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        881     =>
                            [
                                'CODE'               => '881',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_BANKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_BANK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        882     =>
                            [
                                'CODE'               => '882',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_BANOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_BANK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        883     =>
                            [
                                'CODE'               => '883',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_USLOVNIH_BANOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_USL_BANK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        884     =>
                            [
                                'CODE'               => '884',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_KUSOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_KUS", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        885     =>
                            [
                                'CODE'               => '885',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_KUSKOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_KUS", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        886     =>
                            [
                                'CODE'               => '886',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_USLOVNIH_KUSKOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_USL_KUS", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        887     =>
                            [
                                'CODE'               => '887',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_YASHIK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_YASH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        888     =>
                            [
                                'CODE'               => '888',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_YASHIKOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_YASH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        889     =>
                            [
                                'CODE'               => '889',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_KATUSHKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_KAT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        890     =>
                            [
                                'CODE'               => '890',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_KATUSHEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_KAT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        891     =>
                            [
                                'CODE'               => '891',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_PLITKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_PLIT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        892     =>
                            [
                                'CODE'               => '892',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_PLITOK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_PLIT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        893     =>
                            [
                                'CODE'               => '893',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_KIRPICH", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_KIRP", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        894     =>
                            [
                                'CODE'               => '894',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_USLOVNIH_KIRPICHEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_USL_KIRP", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        895     =>
                            [
                                'CODE'               => '895',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_USLOVNIH_KIRPICHEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_USL_KIRP", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        896     =>
                            [
                                'CODE'               => '896',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SEM_YA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SEMEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        897     =>
                            [
                                'CODE'               => '897',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_SEMEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_SEMEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        898     =>
                            [
                                'CODE'               => '898',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_SEMEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_SEMEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        899     =>
                            [
                                'CODE'               => '899',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DOMOHOZYAJSTVO", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_DOMHOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        900     =>
                            [
                                'CODE'               => '900',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_DOMOHOZYAJSTV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_DOMHOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        901     =>
                            [
                                'CODE'               => '901',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_DOMOHOZYAJSTV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_DOMHOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        902     =>
                            [
                                'CODE'               => '902',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_UCHENICHESKOE_MESTO", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_UCHEN_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        903     =>
                            [
                                'CODE'               => '903',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_UCHENICHESKIH_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_UCHEN_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        904     =>
                            [
                                'CODE'               => '904',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_RABOCHEE_MESTO", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_RAB_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        905     =>
                            [
                                'CODE'               => '905',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_RABOCHIH_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_RAB_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        906     =>
                            [
                                'CODE'               => '906',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_POSADOCHNOE_MESTO", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_POSAD_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        907     =>
                            [
                                'CODE'               => '907',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_POSADOCHNIH_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_POSAD_MEST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        908     =>
                            [
                                'CODE'               => '908',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_NOMER", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_NOM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        909     =>
                            [
                                'CODE'               => '909',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVARTIRA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KVART", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        910     =>
                            [
                                'CODE'               => '910',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KVARTIR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_KVART", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        911     =>
                            [
                                'CODE'               => '911',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KOJKA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KOEK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        912     =>
                            [
                                'CODE'               => '912',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KOEK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_KOEK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        913     =>
                            [
                                'CODE'               => '913',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TOM_KNIZHNOGO_FONDA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TOM_KNIZHN_FOND", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        914     =>
                            [
                                'CODE'               => '914',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TOMOV_KNIZHNOGO_FONDA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_1000_TOM_KNIZHN_FOND", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        915     =>
                            [
                                'CODE'               => '915',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_REMONT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_REM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        916     =>
                            [
                                'CODE'               => '916',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNIJ_REMONT_V_GOD", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_REMGOD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        917     =>
                            [
                                'CODE'               => '917',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SMENA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SMEN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        918     =>
                            [
                                'CODE'               => '918',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_LIST_AVTORSKIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_L_AVT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        920     =>
                            [
                                'CODE'               => '920',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_LIST_PECHATNIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_L_PECH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        921     =>
                            [
                                'CODE'               => '921',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_LIST_UCHETNO_-_IZDATEL_SKIJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_L_UCH_-IZD", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        922     =>
                            [
                                'CODE'               => '922',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_ZNAK", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_ZNAK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        923     =>
                            [
                                'CODE'               => '923',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SLOVO", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SLOVO", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        924     =>
                            [
                                'CODE'               => '924',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SIMVOL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SIMVOL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        925     =>
                            [
                                'CODE'               => '925',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_USLOVNAYA_TRUBA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_USL_TRUB", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        930     =>
                            [
                                'CODE'               => '930',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PLASTIN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_PLAST", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        937     =>
                            [
                                'CODE'               => '937',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_DOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_DOZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        949     =>
                            [
                                'CODE'               => '949',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_LISTOV-OTTISKOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_LIST_OTTISK", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        950     =>
                            [
                                'CODE'               => '950',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_VAGONO_MASHINO_-DEN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_VAG_MASH_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        951     =>
                            [
                                'CODE'               => '951',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_VAGONO-_MASHINO_-CHASOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_VAG_MASH_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        952     =>
                            [
                                'CODE'               => '952',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_VAGONO-_MASHINO_-KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_VAG_MASH_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        953     =>
                            [
                                'CODE'               => '953',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_MESTO-KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_MEST_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        954     =>
                            [
                                'CODE'               => '954',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_VAGONO-SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_VAG_SUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        955     =>
                            [
                                'CODE'               => '955',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_POEZDO-CHASOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_POEZD_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        956     =>
                            [
                                'CODE'               => '956',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_POEZDO-KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_POEZD_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        957     =>
                            [
                                'CODE'               => '957',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONNO-MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_T_MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        958     =>
                            [
                                'CODE'               => '958',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_PASSAZHIRO-MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_PASS_MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        959     =>
                            [
                                'CODE'               => '959',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_AVTOMOBILE-DEN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_AVTOMOB_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        960     =>
                            [
                                'CODE'               => '960',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_AVTOMOBILE-TONNO-DNEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_AVTOMOB_T_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        961     =>
                            [
                                'CODE'               => '961',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_AVTOMOBILE-CHASOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_AVTOMOB_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        962     =>
                            [
                                'CODE'               => '962',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_AVTOMOBILE-MESTO-DNEJ", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_AVTOMOB_MEST_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        963     =>
                            [
                                'CODE'               => '963',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PRIVEDENNIJ_CHAS", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_PRIVED_CH", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        964     =>
                            [
                                'CODE'               => '964',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SAMOLETO-KILOMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SAMOLET_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        965     =>
                            [
                                'CODE'               => '965',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        966     =>
                            [
                                'CODE'               => '966',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONNAZHE-REJSOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_TONNAZH_REJS", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        967     =>
                            [
                                'CODE'               => '967',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONNO-MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_T_MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        968     =>
                            [
                                'CODE'               => '968',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_PASSAZHIRO-MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_PASS_MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        969     =>
                            [
                                'CODE'               => '969',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONNAZHE-MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_TONNAZH_MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        970     =>
                            [
                                'CODE'               => '970',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_PASSAZHIRO-MESTO-MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_PASS_MEST_MIL", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        971     =>
                            [
                                'CODE'               => '971',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KORMO-DEN", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KORM_DN", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        972     =>
                            [
                                'CODE'               => '972',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TCENTNER_KORMOVIH_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_TC_KORM_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        973     =>
                            [
                                'CODE'               => '973',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_AVTOMOBILE-KILOMETROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_AVTOMOB_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        974     =>
                            [
                                'CODE'               => '974',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONNAZHE-SUT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_TONNAZH_SUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        975     =>
                            [
                                'CODE'               => '975',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUGO-SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SUGO_SUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        976     =>
                            [
                                'CODE'               => '976',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SHTUK_V_20-FUTOVOM_EKVIVALENTE_DFE", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SHTUK_V_20-FUTOVOM_EKVIVALENTE", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        977     =>
                            [
                                'CODE'               => '977',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KANALO-KILOMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KANAL_KM", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        978     =>
                            [
                                'CODE'               => '978',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KANALO-KONTCI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_KANAL_KONTC", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        979     =>
                            [
                                'CODE'               => '979',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_EKZEMPLYAROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_EKZ", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        980     =>
                            [
                                'CODE'               => '980',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_DOLLAROV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_DOLLAR", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        981     =>
                            [
                                'CODE'               => '981',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHA_TONN_KORMOVIH_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_103_KORM_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        982     =>
                            [
                                'CODE'               => '982',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILLION_TONN_KORMOVIH_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_106_KORM_ED", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                        983     =>
                            [
                                'CODE'               => '983',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUDO-SUTKI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => \Yii::t("CAT_UC_SUD_SUT", 'skeeks/measureClassifier'),
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => null,
                            ],
                    ],
            ];
        $unitsClassifier[] =
            [
                'TITLE' => \Yii::t('CAT_UC_TITLE3', 'skeeks/measureClassifier'),
                0       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_LENGTH_UNITS', 'skeeks/measureClassifier'),
                        17      =>
                            [
                                'CODE'               => '017',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GEKTOMETR", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'hm',
                                'SYMBOL_LETTER_INTL' => 'HMT',
                            ],
                        45      =>
                            [
                                'CODE'               => '045',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MILYA_USTAVNAYA_1609_344_M", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'mile',
                                'SYMBOL_LETTER_INTL' => 'SMI',
                            ],
                    ],
                1       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_AREA_UNITS', 'skeeks/measureClassifier'),
                        77      =>
                            [
                                'CODE'               => '077',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_AKR_4840_KVADRATNIH_YARDOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'acre',
                                'SYMBOL_LETTER_INTL' => 'ACR',
                            ],
                        79      =>
                            [
                                'CODE'               => '079',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVADRATNAYA_MILYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'mile2',
                                'SYMBOL_LETTER_INTL' => 'MIK',
                            ],
                    ],
                2       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_VOLUME_UNITS', 'skeeks/measureClassifier'),
                        135     =>
                            [
                                'CODE'               => '135',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_ZHIDKOSTNAYA_UNTCIYA_SK_3_28_413_SM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'fl oz (UK)',
                                'SYMBOL_LETTER_INTL' => 'OZI',
                            ],
                        136     =>
                            [
                                'CODE'               => '136',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DZHILL_SK_0_142065_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'gill (UK)',
                                'SYMBOL_LETTER_INTL' => 'GII',
                            ],
                        137     =>
                            [
                                'CODE'               => '137',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PINTA_SK_0_568262_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'pt (UK)',
                                'SYMBOL_LETTER_INTL' => 'PTI',
                            ],
                        138     =>
                            [
                                'CODE'               => '138',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVARTA_SK_1_136523_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'qt (UK)',
                                'SYMBOL_LETTER_INTL' => 'QTI',
                            ],
                        139     =>
                            [
                                'CODE'               => '139',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GALLON_SK_4_546092_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'gal (UK)',
                                'SYMBOL_LETTER_INTL' => 'GLI',
                            ],
                        140     =>
                            [
                                'CODE'               => '140',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BUSHEL_SK_36_36874_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'bu (UK)',
                                'SYMBOL_LETTER_INTL' => 'BUI',
                            ],
                        141     =>
                            [
                                'CODE'               => '141',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_ZHIDKOSTNAYA_UNTCIYA_SSHA_29_5735_SM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'fl oz (US)',
                                'SYMBOL_LETTER_INTL' => 'OZA',
                            ],
                        142     =>
                            [
                                'CODE'               => '142',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DZHILL_SSHA_11_8294_SM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'gill  (US)',
                                'SYMBOL_LETTER_INTL' => 'GIA',
                            ],
                        143     =>
                            [
                                'CODE'               => '143',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_ZHIDKOSTNAYA_PINTA_SSHA_0_473176_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'liq pt (US)',
                                'SYMBOL_LETTER_INTL' => 'PTL',
                            ],
                        144     =>
                            [
                                'CODE'               => '144',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_ZHIDKOSTNAYA_KVARTA_SSHA_0_946353_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'liq qt (US)',
                                'SYMBOL_LETTER_INTL' => 'QTL',
                            ],
                        145     =>
                            [
                                'CODE'               => '145',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_ZHIDKOSTNIJ_GALLON_SSHA_3_78541_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'gal (US)',
                                'SYMBOL_LETTER_INTL' => 'GLL',
                            ],
                        146     =>
                            [
                                'CODE'               => '146',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BARREL_NEFTYANOJ_SSHA_158_987_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'barrel (US)',
                                'SYMBOL_LETTER_INTL' => 'BLL',
                            ],
                        147     =>
                            [
                                'CODE'               => '147',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUHAYA_PINTA_SSHA_0_55061_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'dry pt (US)',
                                'SYMBOL_LETTER_INTL' => 'PTD',
                            ],
                        148     =>
                            [
                                'CODE'               => '148',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUHAYA_KVARTA_SSHA_1_101221_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'dry qt (US)',
                                'SYMBOL_LETTER_INTL' => 'QTD',
                            ],
                        149     =>
                            [
                                'CODE'               => '149',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUHOJ_GALLON_SSHA_4_404884_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'dry gal (US)',
                                'SYMBOL_LETTER_INTL' => 'GLD',
                            ],
                        150     =>
                            [
                                'CODE'               => '150',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BUSHEL_SSHA_35_2391_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'bu (US)',
                                'SYMBOL_LETTER_INTL' => 'BUA',
                            ],
                        151     =>
                            [
                                'CODE'               => '151',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SUHOJ_BARREL_SSHA_115_627_DM3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'bbl (US)',
                                'SYMBOL_LETTER_INTL' => 'BLD',
                            ],
                        152     =>
                            [
                                'CODE'               => '152',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_STANDART", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'WSD',
                            ],
                        153     =>
                            [
                                'CODE'               => '153',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KORD_3_63_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'WCD',
                            ],
                        154     =>
                            [
                                'CODE'               => '154',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TISYACHI_BORDFUTOV_2_36_M3", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'MBF',
                            ],
                    ],
                3       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_MASS_UNITS', 'skeeks/measureClassifier'),
                        182     =>
                            [
                                'CODE'               => '182',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_NETTO_-_REGISTROVAYA_TONNA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'NTT',
                            ],
                        183     =>
                            [
                                'CODE'               => '183',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_OBMERNAYA_FRAHTOVAYA_TONNA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'SHT',
                            ],
                        184     =>
                            [
                                'CODE'               => '184',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_VODOIZMESHENIE", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'DPT',
                            ],
                        186     =>
                            [
                                'CODE'               => '186',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_FUNT_SK_SSHA_0_45359237_KG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'lb',
                                'SYMBOL_LETTER_INTL' => 'LBR',
                            ],
                        187     =>
                            [
                                'CODE'               => '187',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_UNTCIYA_SK_SSHA_28_349523_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'oz',
                                'SYMBOL_LETTER_INTL' => 'ONZ',
                            ],
                        188     =>
                            [
                                'CODE'               => '188',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DRAHMA_SK_1_771745_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'dr',
                                'SYMBOL_LETTER_INTL' => 'DRI',
                            ],
                        189     =>
                            [
                                'CODE'               => '189',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GRAN_SK_SSHA_64_798910_MG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'gn',
                                'SYMBOL_LETTER_INTL' => 'GRN',
                            ],
                        190     =>
                            [
                                'CODE'               => '190',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_STOUN_SK_6_350293_KG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'st',
                                'SYMBOL_LETTER_INTL' => 'STI',
                            ],
                        191     =>
                            [
                                'CODE'               => '191',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KVARTER_SK_12_700586_KG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'qtr',
                                'SYMBOL_LETTER_INTL' => 'QTR',
                            ],
                        192     =>
                            [
                                'CODE'               => '192',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TCENTAL_SK_45_359237_KG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'CNT',
                            ],
                        193     =>
                            [
                                'CODE'               => '193',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TCENTNER_SSHA_45_3592_KG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'cwt',
                                'SYMBOL_LETTER_INTL' => 'CWA',
                            ],
                        194     =>
                            [
                                'CODE'               => '194',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DLINNIJ_TCENTNER_SK_50_802345_KG", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'cwt (UK)',
                                'SYMBOL_LETTER_INTL' => 'CWI',
                            ],
                        195     =>
                            [
                                'CODE'               => '195',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KOROTKAYA_TONNA_SK_SSHA_0_90718474_T", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'sht',
                                'SYMBOL_LETTER_INTL' => 'STN',
                            ],
                        196     =>
                            [
                                'CODE'               => '196',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DLINNAYA_TONNA_SK_SSHA_1_0160469_T", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'lt',
                                'SYMBOL_LETTER_INTL' => 'LTN',
                            ],
                        197     =>
                            [
                                'CODE'               => '197',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_SKRUPUL_SK_SSHA_1_295982_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'scr',
                                'SYMBOL_LETTER_INTL' => 'SCR',
                            ],
                        198     =>
                            [
                                'CODE'               => '198',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_PENNIVEJT_SK_SSHA_1_555174_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'dwt',
                                'SYMBOL_LETTER_INTL' => 'DWT',
                            ],
                        199     =>
                            [
                                'CODE'               => '199',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DRAHMA_SK_3_887935_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'drm',
                                'SYMBOL_LETTER_INTL' => 'DRM',
                            ],
                        200     =>
                            [
                                'CODE'               => '200',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_DRAHMA_SSHA_3_887935_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'DRA',
                            ],
                        201     =>
                            [
                                'CODE'               => '201',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_UNTCIYA_SK_SSHA_31_10348_G_TROJSKAYA_UNTCIYA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'apoz',
                                'SYMBOL_LETTER_INTL' => 'APZ',
                            ],
                        202     =>
                            [
                                'CODE'               => '202',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_TROJSKIJ_FUNT_SSHA_373_242_G", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'LBT',
                            ],
                    ],
                4       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_ENGINEERING_UNITS', 'skeeks/measureClassifier'),
                        213     =>
                            [
                                'CODE'               => '213',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_EFFEKTIVNAYA_MOSHNOST_245_7_VATT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'B.h.p.',
                                'SYMBOL_LETTER_INTL' => 'BHP',
                            ],
                        275     =>
                            [
                                'CODE'               => '275',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BRITANSKAYA_TEPLOVAYA_EDINITCA_1_055_KDZH", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'Btu',
                                'SYMBOL_LETTER_INTL' => 'BTU',
                            ],
                    ],
                5       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_TIME_UNITS', 'skeeks/measureClassifier'),
                    ],
                6       =>
                    [
                        'TITLE' => \Yii::t('CAT_UC_ECONOMIC_UNITS', 'skeeks/measureClassifier'),
                        638     =>
                            [
                                'CODE'               => '638',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GROSS_144_SHT", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => 'gr',
                                'SYMBOL_LETTER_INTL' => 'GRO',
                            ],
                        731     =>
                            [
                                'CODE'               => '731',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_BOL_SHOJ_GROSS_12_GROSSOV", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => '1728',
                                'SYMBOL_LETTER_INTL' => 'GGR',
                            ],
                        738     =>
                            [
                                'CODE'               => '738',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_KOROTKIJ_STANDART_7200_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'SST',
                            ],
                        835     =>
                            [
                                'CODE'               => '835',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_GALLON_SPIRTA_USTANOVLENNOJ_KREPOSTI", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'PGL',
                            ],
                        851     =>
                            [
                                'CODE'               => '851',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_MEZHDUNARODNAYA_EDINITCA", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'NIU',
                            ],
                        853     =>
                            [
                                'CODE'               => '853',
                                'MEASURE_TITLE'      => \Yii::t("CAT_UC_STO_MEZHDUNARODNIH_EDINITC", 'skeeks/measureClassifier'),
                                'SYMBOL_RUS'         => null,
                                'SYMBOL_INTL'        => null,
                                'SYMBOL_LETTER_INTL' => 'HIU',
                            ],
                    ],
            ];

        return $unitsClassifier;
    }
}