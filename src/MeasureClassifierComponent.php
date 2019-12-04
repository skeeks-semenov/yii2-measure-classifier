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
    protected $_unitsClassifier = null;
    /**
     * @return array
     */
    public function getData()
    {
        if ($this->_unitsClassifier !== null) {
            return $this->_unitsClassifier;
        }

        $unitsClassifier = [
            0 =>
                [
                    'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_TITLE1'),
                    0       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_LENGTH_UNITS'),
                            3       =>
                                [
                                    'code'               => '003',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MM"),
                                    'symbol_intl'        => 'mm',
                                    'symbol_letter_intl' => 'MMT',
                                ],
                            4       =>
                                [
                                    'code'               => '004',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SANTIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SM"),
                                    'symbol_intl'        => 'cm',
                                    'symbol_letter_intl' => 'CMT',
                                ],
                            5       =>
                                [
                                    'code'               => '005',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DETCIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DM"),
                                    'symbol_intl'        => 'dm',
                                    'symbol_letter_intl' => 'DMT',
                                ],
                            6       =>
                                [
                                    'code'               => '006',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_METR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M"),
                                    'symbol_intl'        => 'm',
                                    'symbol_letter_intl' => 'MTR',
                                ],
                            8       =>
                                [
                                    'code'               => '008',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KM"),
                                    'symbol_intl'        => 'km',
                                    'symbol_letter_intl' => 'KMT',
                                ],
                            9       =>
                                [
                                    'code'               => '009',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAM"),
                                    'symbol_intl'        => 'Mm',
                                    'symbol_letter_intl' => 'MAM',
                                ],
                            39      =>
                                [
                                    'code'               => '039',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUJM_25_4_MM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUJM"),
                                    'symbol_intl'        => 'in',
                                    'symbol_letter_intl' => 'INH',
                                ],
                            41      =>
                                [
                                    'code'               => '041',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_FUT_0_3048_M"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_FUT"),
                                    'symbol_intl'        => 'ft',
                                    'symbol_letter_intl' => 'FOT',
                                ],
                            43      =>
                                [
                                    'code'               => '043',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_YARD_0_9144_M"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_YARD"),
                                    'symbol_intl'        => 'yd',
                                    'symbol_letter_intl' => 'YRD',
                                ],
                            47      =>
                                [
                                    'code'               => '047',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MORSKAYA_MILYA_1852_M"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILYA"),
                                    'symbol_intl'        => 'n mile',
                                    'symbol_letter_intl' => 'NMI',
                                ],
                        ],
                    1       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_AREA_UNITS'),
                            50      =>
                                [
                                    'code'               => '050',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_MILLIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MM2"),
                                    'symbol_intl'        => 'mm2',
                                    'symbol_letter_intl' => 'MMK',
                                ],
                            51      =>
                                [
                                    'code'               => '051',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_SANTIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SM2"),
                                    'symbol_intl'        => 'cm2',
                                    'symbol_letter_intl' => 'CMK',
                                ],
                            53      =>
                                [
                                    'code'               => '053',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_DETCIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DM2"),
                                    'symbol_intl'        => 'dm2',
                                    'symbol_letter_intl' => 'DMK',
                                ],
                            55      =>
                                [
                                    'code'               => '055',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_METR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M2"),
                                    'symbol_intl'        => 'm2',
                                    'symbol_letter_intl' => 'MTK',
                                ],
                            58      =>
                                [
                                    'code'               => '058',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KVADRATNIH_METROV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_M2"),
                                    'symbol_intl'        => 'daa',
                                    'symbol_letter_intl' => 'DAA',
                                ],
                            59      =>
                                [
                                    'code'               => '059',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GEKTAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GA"),
                                    'symbol_intl'        => 'ha',
                                    'symbol_letter_intl' => 'HAR',
                                ],
                            61      =>
                                [
                                    'code'               => '061',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_KILOMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KM2"),
                                    'symbol_intl'        => 'km2',
                                    'symbol_letter_intl' => 'KMK',
                                ],
                            71      =>
                                [
                                    'code'               => '071',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_DYUJM_645_16_MM2"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUJM2"),
                                    'symbol_intl'        => 'in2',
                                    'symbol_letter_intl' => 'INK',
                                ],
                            73      =>
                                [
                                    'code'               => '073',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_FUT_0_092903_M2"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_FUT2"),
                                    'symbol_intl'        => 'ft2',
                                    'symbol_letter_intl' => 'FTK',
                                ],
                            75      =>
                                [
                                    'code'               => '075',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_YARD_0_8361274_M2"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_YARD2"),
                                    'symbol_intl'        => 'yd2',
                                    'symbol_letter_intl' => 'YDK',
                                ],
                            109     =>
                                [
                                    'code'               => '109',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AR_100_M2"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_A"),
                                    'symbol_intl'        => 'a',
                                    'symbol_letter_intl' => 'ARE',
                                ],
                        ],
                    2       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_VOLUME_UNITS'),
                            110     =>
                                [
                                    'code'               => '110',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_MILLIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MM3"),
                                    'symbol_intl'        => 'mm3',
                                    'symbol_letter_intl' => 'MMQ',
                                ],
                            111     =>
                                [
                                    'code'               => '111',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_SANTIMETR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SM3"),
                                    'symbol_intl'        => 'cm3',
                                    'symbol_letter_intl' => 'CMQ',
                                ],
                            112     =>
                                [
                                    'code'               => '112',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LITR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L"),
                                    'symbol_intl'        => 'l',
                                    'symbol_letter_intl' => 'LTR',
                                ],
                            113     =>
                                [
                                    'code'               => '113',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_METR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M3"),
                                    'symbol_intl'        => 'm3',
                                    'symbol_letter_intl' => 'MTQ',
                                ],
                            118     =>
                                [
                                    'code'               => '118',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DETCILITR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DL"),
                                    'symbol_intl'        => 'dl',
                                    'symbol_letter_intl' => 'DLT',
                                ],
                            122     =>
                                [
                                    'code'               => '122',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GEKTOLITR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GL"),
                                    'symbol_intl'        => 'hl',
                                    'symbol_letter_intl' => 'HLT',
                                ],
                            126     =>
                                [
                                    'code'               => '126',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGALITR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_ML"),
                                    'symbol_intl'        => 'Ml',
                                    'symbol_letter_intl' => 'MAL',
                                ],
                            131     =>
                                [
                                    'code'               => '131',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_DYUJM_16387_1_MM3"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUJM3"),
                                    'symbol_intl'        => 'in3',
                                    'symbol_letter_intl' => 'INQ',
                                ],
                            132     =>
                                [
                                    'code'               => '132',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_FUT_0_02831685_M3"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_FUT3"),
                                    'symbol_intl'        => 'ft3',
                                    'symbol_letter_intl' => 'FTQ',
                                ],
                            133     =>
                                [
                                    'code'               => '133',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_YARD_0_764555_M3"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_YARD3"),
                                    'symbol_intl'        => 'yd3',
                                    'symbol_letter_intl' => 'YDQ',
                                ],
                            159     =>
                                [
                                    'code'               => '159',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KUBICHESKIH_METROV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_M3"),
                                    'symbol_intl'        => '10^6 m3',
                                    'symbol_letter_intl' => 'HMQ',
                                ],
                        ],
                    3       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_MASS_UNITS'),
                            160     =>
                                [
                                    'code'               => '160',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GEKTOGRAMM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GG"),
                                    'symbol_intl'        => 'hg',
                                    'symbol_letter_intl' => 'HGM',
                                ],
                            161     =>
                                [
                                    'code'               => '161',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIGRAMM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MG"),
                                    'symbol_intl'        => 'mg',
                                    'symbol_letter_intl' => 'MGM',
                                ],
                            162     =>
                                [
                                    'code'               => '162',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_METRICHESKIJ_KARAT_1_KARAT_=_200_MG_=_2*0_0001_KG"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KAR"),
                                    'symbol_intl'        => 'CTM',
                                    'symbol_letter_intl' => 'CTM',
                                ],
                            163     =>
                                [
                                    'code'               => '163',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRAMM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_G"),
                                    'symbol_intl'        => 'g',
                                    'symbol_letter_intl' => 'GRM',
                                ],
                            166     =>
                                [
                                    'code'               => '166',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG"),
                                    'symbol_intl'        => 'kg',
                                    'symbol_letter_intl' => 'KGM',
                                ],
                            168     =>
                                [
                                    'code'               => '168',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_METRICHESKAYA_TONNA_1000_KG"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T"),
                                    'symbol_intl'        => 't',
                                    'symbol_letter_intl' => 'TNE',
                                ],
                            170     =>
                                [
                                    'code'               => '170',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOTONNA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_10_T3"),
                                    'symbol_intl'        => 'kt',
                                    'symbol_letter_intl' => 'KTN',
                                ],
                            173     =>
                                [
                                    'code'               => '173',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SANTIGRAMM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SG"),
                                    'symbol_intl'        => 'cg',
                                    'symbol_letter_intl' => 'CGM',
                                ],
                            181     =>
                                [
                                    'code'               => '181',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BRUTTO_-_REGISTROVAYA_TONNA_2_8316_M3"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BRT"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'GRT',
                                ],
                            185     =>
                                [
                                    'code'               => '185',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRUZOPOD_EMNOST_V_METRICHESKIH_TONNAH"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_GRP"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'CCT',
                                ],
                            206     =>
                                [
                                    'code'               => '206',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TCENTNER_METRICHESKIJ_100_KG"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TC"),
                                    'symbol_intl'        => 'q',
                                    'symbol_letter_intl' => 'DTN',
                                ],
                        ],
                    4       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_ENGINEERING_UNITS'),
                            212     =>
                                [
                                    'code'               => '212',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VATT"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_VT"),
                                    'symbol_intl'        => 'W',
                                    'symbol_letter_intl' => 'WTT',
                                ],
                            214     =>
                                [
                                    'code'               => '214',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOVATT"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVT"),
                                    'symbol_intl'        => 'kW',
                                    'symbol_letter_intl' => 'KWT',
                                ],
                            215     =>
                                [
                                    'code'               => '215',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAVATT_TISYACHA_KILOVATT"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MVT_1000_KVT"),
                                    'symbol_intl'        => 'MW',
                                    'symbol_letter_intl' => 'MAW',
                                ],
                            222     =>
                                [
                                    'code'               => '222',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VOL_T"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_V"),
                                    'symbol_intl'        => 'V',
                                    'symbol_letter_intl' => 'VLT',
                                ],
                            223     =>
                                [
                                    'code'               => '223',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOVOL_T"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KV"),
                                    'symbol_intl'        => 'kV',
                                    'symbol_letter_intl' => 'KVT',
                                ],
                            227     =>
                                [
                                    'code'               => '227',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOVOL_T_-_AMPER"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KV_A"),
                                    'symbol_intl'        => 'kV.A',
                                    'symbol_letter_intl' => 'KVA',
                                ],
                            228     =>
                                [
                                    'code'               => '228',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAVOL_T_-_AMPER_TISYACHA_KILOVOL_T_-_AMPER"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MV_A"),
                                    'symbol_intl'        => 'MV.A',
                                    'symbol_letter_intl' => 'MVA',
                                ],
                            230     =>
                                [
                                    'code'               => '230',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOVAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVAR"),
                                    'symbol_intl'        => 'kVAR',
                                    'symbol_letter_intl' => 'KVR',
                                ],
                            243     =>
                                [
                                    'code'               => '243',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VATT_-_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_VT_CH"),
                                    'symbol_intl'        => 'W.h',
                                    'symbol_letter_intl' => 'WHR',
                                ],
                            245     =>
                                [
                                    'code'               => '245',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOVATT_-_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVT_CH"),
                                    'symbol_intl'        => 'kW.h',
                                    'symbol_letter_intl' => 'KWH',
                                ],
                            246     =>
                                [
                                    'code'               => '246',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAVATT_-_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MVT_CH"),
                                    'symbol_intl'        => 'MW.h',
                                    'symbol_letter_intl' => 'MWH',
                                ],
                            247     =>
                                [
                                    'code'               => '247',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GIGAVATT_-_CHAS_MILLION_KILOVATT_-_CHASOV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GVT_CH"),
                                    'symbol_intl'        => 'GW.h',
                                    'symbol_letter_intl' => 'GWH',
                                ],
                            260     =>
                                [
                                    'code'               => '260',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AMPER"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_A"),
                                    'symbol_intl'        => 'A',
                                    'symbol_letter_intl' => 'AMP',
                                ],
                            263     =>
                                [
                                    'code'               => '263',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AMPER_-_CHAS_3_6_KKL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_A_CH"),
                                    'symbol_intl'        => 'A.h',
                                    'symbol_letter_intl' => 'AMH',
                                ],
                            264     =>
                                [
                                    'code'               => '264',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_AMPER_-_CHASOV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_A_CH"),
                                    'symbol_intl'        => '1000  A.h',
                                    'symbol_letter_intl' => 'TAH',
                                ],
                            270     =>
                                [
                                    'code'               => '270',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KULON"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KL"),
                                    'symbol_intl'        => 'C',
                                    'symbol_letter_intl' => 'COU',
                                ],
                            271     =>
                                [
                                    'code'               => '271',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DZHOUL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DZH"),
                                    'symbol_intl'        => 'J',
                                    'symbol_letter_intl' => 'JOU',
                                ],
                            273     =>
                                [
                                    'code'               => '273',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILODZHOUL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KDZH"),
                                    'symbol_intl'        => 'kJ',
                                    'symbol_letter_intl' => 'KJO',
                                ],
                            274     =>
                                [
                                    'code'               => '274',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_OM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_OM"),
                                    'symbol_intl'        => 'OHM',
                                    'symbol_letter_intl' => 'OHM',
                                ],
                            280     =>
                                [
                                    'code'               => '280',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRADUS_TCEL_SIYA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_S"),
                                    'symbol_intl'        => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRADUS_SYMBOL").'C',
                                    'symbol_letter_intl' => 'CEL',
                                ],
                            281     =>
                                [
                                    'code'               => '281',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRADUS_FARENGEJTA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_F"),
                                    'symbol_intl'        => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRADUS_SYMBOL").'F',
                                    'symbol_letter_intl' => 'FAN',
                                ],
                            282     =>
                                [
                                    'code'               => '282',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANDELA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KD"),
                                    'symbol_intl'        => 'cd',
                                    'symbol_letter_intl' => 'CDL',
                                ],
                            283     =>
                                [
                                    'code'               => '283',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LYUKS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_LK"),
                                    'symbol_intl'        => 'lx',
                                    'symbol_letter_intl' => 'LUX',
                                ],
                            284     =>
                                [
                                    'code'               => '284',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LYUMEN"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_LM"),
                                    'symbol_intl'        => 'lm',
                                    'symbol_letter_intl' => 'LUM',
                                ],
                            288     =>
                                [
                                    'code'               => '288',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KEL_VIN"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_K"),
                                    'symbol_intl'        => 'K',
                                    'symbol_letter_intl' => 'KEL',
                                ],
                            289     =>
                                [
                                    'code'               => '289',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_N_YUTON"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_N"),
                                    'symbol_intl'        => 'N',
                                    'symbol_letter_intl' => 'NEW',
                                ],
                            290     =>
                                [
                                    'code'               => '290',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GERTC"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GTC"),
                                    'symbol_intl'        => 'Hz',
                                    'symbol_letter_intl' => 'HTZ',
                                ],
                            291     =>
                                [
                                    'code'               => '291',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGERTC"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KGTC"),
                                    'symbol_intl'        => 'kHz',
                                    'symbol_letter_intl' => 'KHZ',
                                ],
                            292     =>
                                [
                                    'code'               => '292',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAGERTC"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MGTC"),
                                    'symbol_intl'        => 'MHz',
                                    'symbol_letter_intl' => 'MHZ',
                                ],
                            294     =>
                                [
                                    'code'               => '294',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASKAL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PA"),
                                    'symbol_intl'        => 'Pa',
                                    'symbol_letter_intl' => 'PAL',
                                ],
                            296     =>
                                [
                                    'code'               => '296',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SIMENS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SM"),
                                    'symbol_intl'        => 'S',
                                    'symbol_letter_intl' => 'SIE',
                                ],
                            297     =>
                                [
                                    'code'               => '297',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOPASKAL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KPA"),
                                    'symbol_intl'        => 'kPa',
                                    'symbol_letter_intl' => 'KPA',
                                ],
                            298     =>
                                [
                                    'code'               => '298',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGAPASKAL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MPA"),
                                    'symbol_intl'        => 'MPa',
                                    'symbol_letter_intl' => 'MPA',
                                ],
                            300     =>
                                [
                                    'code'               => '300',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_FIZICHESKAYA_ATMOSFERA_101325_PA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_ATM"),
                                    'symbol_intl'        => 'atm',
                                    'symbol_letter_intl' => 'ATM',
                                ],
                            301     =>
                                [
                                    'code'               => '301',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TEHNICHESKAYA_ATMOSFERA_98066_5_PA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_AT"),
                                    'symbol_intl'        => 'at',
                                    'symbol_letter_intl' => 'ATT',
                                ],
                            302     =>
                                [
                                    'code'               => '302',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GIGABEKKEREL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GBK"),
                                    'symbol_intl'        => 'GBq',
                                    'symbol_letter_intl' => 'GBQ',
                                ],
                            304     =>
                                [
                                    'code'               => '304',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIKYURI"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MKI"),
                                    'symbol_intl'        => 'mCi',
                                    'symbol_letter_intl' => 'MCU',
                                ],
                            305     =>
                                [
                                    'code'               => '305',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KYURI"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KI"),
                                    'symbol_intl'        => 'Ci',
                                    'symbol_letter_intl' => 'CUR',
                                ],
                            306     =>
                                [
                                    'code'               => '306',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRAMM_DELYASHIHSYA_IZOTOPOV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_G_DI"),
                                    'symbol_intl'        => 'g fissile isotopes',
                                    'symbol_letter_intl' => 'GFI',
                                ],
                            308     =>
                                [
                                    'code'               => '308',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIBAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MB"),
                                    'symbol_intl'        => 'mbar',
                                    'symbol_letter_intl' => 'MBR',
                                ],
                            309     =>
                                [
                                    'code'               => '309',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BAR"),
                                    'symbol_intl'        => 'bar',
                                    'symbol_letter_intl' => 'BAR',
                                ],
                            310     =>
                                [
                                    'code'               => '310',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GEKTOBAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GB"),
                                    'symbol_intl'        => 'hbar',
                                    'symbol_letter_intl' => 'HBA',
                                ],
                            312     =>
                                [
                                    'code'               => '312',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOBAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KB"),
                                    'symbol_intl'        => 'kbar',
                                    'symbol_letter_intl' => 'KBA',
                                ],
                            314     =>
                                [
                                    'code'               => '314',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_FARAD"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_F"),
                                    'symbol_intl'        => 'F',
                                    'symbol_letter_intl' => 'FAR',
                                ],
                            316     =>
                                [
                                    'code'               => '316',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_NA_KUBICHESKIJ_METR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KGM3"),
                                    'symbol_intl'        => 'kg/m3',
                                    'symbol_letter_intl' => 'KMQ',
                                ],
                            323     =>
                                [
                                    'code'               => '323',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BEKKEREL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BK"),
                                    'symbol_intl'        => 'Bq',
                                    'symbol_letter_intl' => 'BQL',
                                ],
                            324     =>
                                [
                                    'code'               => '324',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VEBER"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_VB"),
                                    'symbol_intl'        => 'Wb',
                                    'symbol_letter_intl' => 'WEB',
                                ],
                            327     =>
                                [
                                    'code'               => '327',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_UZEL_MILYACH"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_UZ"),
                                    'symbol_intl'        => 'kn',
                                    'symbol_letter_intl' => 'KNT',
                                ],
                            328     =>
                                [
                                    'code'               => '328',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_METR_V_SEKUNDU"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MS"),
                                    'symbol_intl'        => 'm/s',
                                    'symbol_letter_intl' => 'MTS',
                                ],
                            330     =>
                                [
                                    'code'               => '330',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_OBOROT_V_SEKUNDU"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_OBS"),
                                    'symbol_intl'        => 'r/s',
                                    'symbol_letter_intl' => 'RPS',
                                ],
                            331     =>
                                [
                                    'code'               => '331',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_OBOROT_V_MINUTU"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_OBMIN"),
                                    'symbol_intl'        => 'r/min',
                                    'symbol_letter_intl' => 'RPM',
                                ],
                            333     =>
                                [
                                    'code'               => '333',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOMETR_V_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KMCH"),
                                    'symbol_intl'        => 'km/h',
                                    'symbol_letter_intl' => 'KMH',
                                ],
                            335     =>
                                [
                                    'code'               => '335',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_METR_NA_SEKUNDU_V_KVADRATE"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MS2"),
                                    'symbol_intl'        => 'm/s2',
                                    'symbol_letter_intl' => 'MSK',
                                ],
                            349     =>
                                [
                                    'code'               => '349',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KULON_NA_KILOGRAMM"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KLKG"),
                                    'symbol_intl'        => 'C/kg',
                                    'symbol_letter_intl' => 'CKG',
                                ],
                        ],
                    5       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_TIME_UNITS'),
                            354     =>
                                [
                                    'code'               => '354',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SEKUNDA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_S"),
                                    'symbol_intl'        => 's',
                                    'symbol_letter_intl' => 'SEC',
                                ],
                            355     =>
                                [
                                    'code'               => '355',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MINUTA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MIN"),
                                    'symbol_intl'        => 'min',
                                    'symbol_letter_intl' => 'MIN',
                                ],
                            356     =>
                                [
                                    'code'               => '356',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CH"),
                                    'symbol_intl'        => 'h',
                                    'symbol_letter_intl' => 'HUR',
                                ],
                            359     =>
                                [
                                    'code'               => '359',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUTKI"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUT"),
                                    'symbol_intl'        => 'd',
                                    'symbol_letter_intl' => 'DAY',
                                ],
                            360     =>
                                [
                                    'code'               => '360',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_NEDELYA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_NED"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'WEE',
                                ],
                            361     =>
                                [
                                    'code'               => '361',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DEKADA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DEK"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'DAD',
                                ],
                            362     =>
                                [
                                    'code'               => '362',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MESYATC"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MES"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'MON',
                                ],
                            364     =>
                                [
                                    'code'               => '364',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVARTAL"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVART"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'QAN',
                                ],
                            365     =>
                                [
                                    'code'               => '365',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_POLUGODIE"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_POLGODA"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'SAN',
                                ],
                            366     =>
                                [
                                    'code'               => '366',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GOD"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_G_LET"),
                                    'symbol_intl'        => 'a',
                                    'symbol_letter_intl' => 'ANN',
                                ],
                            368     =>
                                [
                                    'code'               => '368',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DESYATILETIE"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DESLET"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'DEC',
                                ],
                        ],
                    6       =>
                        [
                            'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_ECONOMIC_UNITS'),
                            499     =>
                                [
                                    'code'               => '499',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_V_SEKUNDU"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KGS"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KGS',
                                ],
                            533     =>
                                [
                                    'code'               => '533',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_PARA_V_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_PARCH"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'TSH',
                                ],
                            596     =>
                                [
                                    'code'               => '596',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_METR_V_SEKUNDU"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M3S"),
                                    'symbol_intl'        => 'm3/s',
                                    'symbol_letter_intl' => 'MQS',
                                ],
                            598     =>
                                [
                                    'code'               => '598',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KUBICHESKIJ_METR_V_CHAS"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M3CH"),
                                    'symbol_intl'        => 'm3/h',
                                    'symbol_letter_intl' => 'MQH',
                                ],
                            599     =>
                                [
                                    'code'               => '599',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KUBICHESKIH_METROV_V_SUTKI"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_M3SUT"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'TQD',
                                ],
                            616     =>
                                [
                                    'code'               => '616',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BOBINA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BOB"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'NBB',
                                ],
                            625     =>
                                [
                                    'code'               => '625',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LIST"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'LEF',
                                ],
                            626     =>
                                [
                                    'code'               => '626',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STO_LISTOV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_100_L"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'CLF',
                                ],
                            630     =>
                                [
                                    'code'               => '630',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_STANDARTNIH_USLOVNIH_KIRPICHEJ"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TIS_STAND_USL_KIRP"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'MBE',
                                ],
                            641     =>
                                [
                                    'code'               => '641',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_12_SHT"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA"),
                                    'symbol_intl'        => 'Doz. 12',
                                    'symbol_letter_intl' => 'DZN',
                                ],
                            657     =>
                                [
                                    'code'               => '657',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_IZDELIE"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_IZD"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'NAR',
                                ],
                            683     =>
                                [
                                    'code'               => '683',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STO_YASHIKOV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_100_YASH"),
                                    'symbol_intl'        => 'Hbx',
                                    'symbol_letter_intl' => 'HBX',
                                ],
                            704     =>
                                [
                                    'code'               => '704',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_NABOR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_NABOR"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'SET',
                                ],
                            715     =>
                                [
                                    'code'               => '715',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PARA_2_SHT"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PAR"),
                                    'symbol_intl'        => 'pr. 2',
                                    'symbol_letter_intl' => 'NPR',
                                ],
                            730     =>
                                [
                                    'code'               => '730',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DVA_DESYATKA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_20"),
                                    'symbol_intl'        => '20',
                                    'symbol_letter_intl' => 'SCO',
                                ],
                            732     =>
                                [
                                    'code'               => '732',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DESYAT_PAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_10_PAR"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'TPR',
                                ],
                            733     =>
                                [
                                    'code'               => '733',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_PAR"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_PAR"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'DPR',
                                ],
                            734     =>
                                [
                                    'code'               => '734',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_POSILKA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_POSIL"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'NPL',
                                ],
                            735     =>
                                [
                                    'code'               => '735',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHAST"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHAST"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'NPT',
                                ],
                            736     =>
                                [
                                    'code'               => '736',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_RULON"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_RUL"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'NPL',
                                ],
                            737     =>
                                [
                                    'code'               => '737',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_RULONOV"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_RUL"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'DRL',
                                ],
                            740     =>
                                [
                                    'code'               => '740',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_SHTUK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_SHT"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'DPC',
                                ],
                            745     =>
                                [
                                    'code'               => '745',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ELEMENT"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_ELEM"),
                                    'symbol_intl'        => 'CI',
                                    'symbol_letter_intl' => 'NCL',
                                ],
                            778     =>
                                [
                                    'code'               => '778',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_UPAKOVKA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_UPAK"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'NMP',
                                ],
                            780     =>
                                [
                                    'code'               => '780',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_UPAKOVOK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DYUZHINA_UPAK"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'DZP',
                                ],
                            781     =>
                                [
                                    'code'               => '781',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STO_UPAKOVOK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_100_UPAK"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'CNP',
                                ],
                            796     =>
                                [
                                    'code'               => '796',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SHTUKA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SHT"),
                                    'symbol_intl'        => 'pc. 1',
                                    'symbol_letter_intl' => 'PCE. NMB',
                                ],
                            797     =>
                                [
                                    'code'               => '797',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STO_SHTUK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_100_SHT"),
                                    'symbol_intl'        => '100',
                                    'symbol_letter_intl' => 'CEN',
                                ],
                            798     =>
                                [
                                    'code'               => '798',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_SHTUK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TIS_SHT_1000_SHT"),
                                    'symbol_intl'        => '1000',
                                    'symbol_letter_intl' => 'MIL',
                                ],
                            799     =>
                                [
                                    'code'               => '799',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_SHTUK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_SHT"),
                                    'symbol_intl'        => '10^6',
                                    'symbol_letter_intl' => 'MIO',
                                ],
                            800     =>
                                [
                                    'code'               => '800',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIARD_SHTUK"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_109_SHT"),
                                    'symbol_intl'        => '10^9',
                                    'symbol_letter_intl' => 'MLD',
                                ],
                            801     =>
                                [
                                    'code'               => '801',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BILLION_SHTUK_EVROPA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1012_SHT"),
                                    'symbol_intl'        => '10^12',
                                    'symbol_letter_intl' => 'BIL',
                                ],
                            802     =>
                                [
                                    'code'               => '802',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVINTIL_ON_SHTUK_EVROPA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1018_SHT"),
                                    'symbol_intl'        => '10^18',
                                    'symbol_letter_intl' => 'TRL',
                                ],
                            820     =>
                                [
                                    'code'               => '820',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KREPOST_SPIRTA_PO_MASSE"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KREP_SPIRTA_PO_MASSE"),
                                    'symbol_intl'        => '% mds',
                                    'symbol_letter_intl' => 'ASM',
                                ],
                            821     =>
                                [
                                    'code'               => '821',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KREPOST_SPIRTA_PO_OB_EMU"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KREP_SPIRTA_PO_OB_EMU"),
                                    'symbol_intl'        => '% vol',
                                    'symbol_letter_intl' => 'ASV',
                                ],
                            831     =>
                                [
                                    'code'               => '831',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LITR_CHISTOGO_100_SPIRTA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L_100_SPIRTA"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'LPA',
                                ],
                            833     =>
                                [
                                    'code'               => '833',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GEKTOLITR_CHISTOGO_100_SPIRTA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GL_100_SPIRTA"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'HPA',
                                ],
                            841     =>
                                [
                                    'code'               => '841',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_PEROKSIDA_VODORODA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_H_2_0_2"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => null,
                                ],
                            845     =>
                                [
                                    'code'               => '845',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_90-GO_SUHOGO_VESHESTVA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_90_SV"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KSD',
                                ],
                            847     =>
                                [
                                    'code'               => '847',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_90-GO_SUHOGO_VESHESTVA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_90_SV"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'TSD',
                                ],
                            852     =>
                                [
                                    'code'               => '852',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_OKSIDA_KALIYA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_K_2_O"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KPO',
                                ],
                            859     =>
                                [
                                    'code'               => '859',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_GIDROKSIDA_KALIYA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_KON"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KPH',
                                ],
                            861     =>
                                [
                                    'code'               => '861',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_AZOTA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_N"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KNI',
                                ],
                            863     =>
                                [
                                    'code'               => '863',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_GIDROKSIDA_NATRIYA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_NAOH"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KSH',
                                ],
                            865     =>
                                [
                                    'code'               => '865',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_PYATIOKISI_FOSFORA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_R_2_O_5"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KPP',
                                ],
                            867     =>
                                [
                                    'code'               => '867',
                                    'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_URANA"),
                                    'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KG_U"),
                                    'symbol_intl'        => null,
                                    'symbol_letter_intl' => 'KUR',
                                ],
                        ],
                ],
        ];

        $unitsClassifier[] =
            [
                'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_TITLE2'),
                0       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_LENGTH_UNITS'),
                        18      =>
                            [
                                'code'               => '018',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_POGONNIJ_METR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_POG_M"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        19      =>
                            [
                                'code'               => '019',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_POGONNIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_POG_M"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        20      =>
                            [
                                'code'               => '020',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_METR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_M"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        48      =>
                            [
                                'code'               => '048',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_M"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        49      =>
                            [
                                'code'               => '049',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOMETR_USLOVNIH_TRUB"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KM_USL_TRUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
                1       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_AREA_UNITS'),
                        54      =>
                            [
                                'code'               => '054',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KVADRATNIH_DETCIMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_DM2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        56      =>
                            [
                                'code'               => '056',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KVADRATNIH_DETCIMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_DM2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        57      =>
                            [
                                'code'               => '057',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KVADRATNIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_M2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        60      =>
                            [
                                'code'               => '060',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_GEKTAROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_GA"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        62      =>
                            [
                                'code'               => '062',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_KVADRATNIJ_METR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_M2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        63      =>
                            [
                                'code'               => '063',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_KVADRATNIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_M2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        64      =>
                            [
                                'code'               => '064',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_USLOVNIH_KVADRATNIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_USL_M2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        81      =>
                            [
                                'code'               => '081',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_METR_OBSHEJ_PLOSHADI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M2_OBSH_PL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        82      =>
                            [
                                'code'               => '082',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KVADRATNIH_METROV_OBSHEJ_PLOSHADI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_M2_OBSH_PL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        83      =>
                            [
                                'code'               => '083',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KVADRATNIH_METROV_OBSHEJ_PLOSHADI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_M2_OBSH_PL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        84      =>
                            [
                                'code'               => '084',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_METR_ZHILOJ_PLOSHADI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M2_ZHIL_PL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        85      =>
                            [
                                'code'               => '085',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KVADRATNIH_METROV_ZHILOJ_PLOSHADI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_M2_ZHIL_PL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        86      =>
                            [
                                'code'               => '086',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KVADRATNIH_METROV_ZHILOJ_PLOSHADI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_M2_ZHIL_PL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        87      =>
                            [
                                'code'               => '087',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNIJ_METR_UCHEBNO_-_LABORATORNIH_ZDANIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_M2_UCH_LAB_ZDAN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        88      =>
                            [
                                'code'               => '088',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KVADRATNIH_METROV_UCHEBNO_-_LABORATORNIH_ZDANIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_M2_UCH_LAB_ZDAN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        89      =>
                            [
                                'code'               => '089',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KVADRATNIH_METROV_V_DVUHMILLIMETROVOM_ISCHISLENII"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_M2_2_MM_ISCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
                2       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_VOLUME_UNITS'),
                        114     =>
                            [
                                'code'               => '114',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KUBICHESKIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_M3"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        115     =>
                            [
                                'code'               => '115',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIARD_KUBICHESKIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_109_M3"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        116     =>
                            [
                                'code'               => '116',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DEKALITR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DKL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        119     =>
                            [
                                'code'               => '119',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_DEKALITROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_DKL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        120     =>
                            [
                                'code'               => '120',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_DEKALITROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_DKL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        121     =>
                            [
                                'code'               => '121',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PLOTNIJ_KUBICHESKIJ_METR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PLOTN_M3"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        123     =>
                            [
                                'code'               => '123',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_KUBICHESKIJ_METR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_M3"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        124     =>
                            [
                                'code'               => '124',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_KUBICHESKIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_M3"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        125     =>
                            [
                                'code'               => '125',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KUBICHESKIH_METROV_PERERABOTKI_GAZA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_M3_PERERAB_GAZA"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        127     =>
                            [
                                'code'               => '127',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PLOTNIH_KUBICHESKIH_METROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_PLOTN_M3"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        128     =>
                            [
                                'code'               => '128',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_POLULITROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_POL_L"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        129     =>
                            [
                                'code'               => '129',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_POLULITROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_POL_L"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        130     =>
                            [
                                'code'               => '130',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_LITROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_L"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
                3       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_MASS_UNITS'),
                        165     =>
                            [
                                'code'               => '165',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KARATOV_METRICHESKIH"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_KAR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        167     =>
                            [
                                'code'               => '167',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KARATOV_METRICHESKIH"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_KAR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        169     =>
                            [
                                'code'               => '169',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        171     =>
                            [
                                'code'               => '171',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_T"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        172     =>
                            [
                                'code'               => '172',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_USLOVNOGO_TOPLIVA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_USL_TOPL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        175     =>
                            [
                                'code'               => '175',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_USLOVNOGO_TOPLIVA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T_USL_TOPL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        176     =>
                            [
                                'code'               => '176',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONN_USLOVNOGO_TOPLIVA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_T_USL_TOPL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        177     =>
                            [
                                'code'               => '177',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_EDINOVREMENNOGO_HRANENIYA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T_EDINOVR_HRAN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        178     =>
                            [
                                'code'               => '178',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_PERERABOTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T_PERERAB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        179     =>
                            [
                                'code'               => '179',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_TONNA_T"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_T"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        207     =>
                            [
                                'code'               => '207',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TCENTNEROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_TC"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
                4       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_ENGINEERING_UNITS'),
                        226     =>
                            [
                                'code'               => '226',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VOL_T_-_AMPER"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_V_A"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        231     =>
                            [
                                'code'               => '231',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_METR_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        232     =>
                            [
                                'code'               => '232',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOKALORIYA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KKAL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        233     =>
                            [
                                'code'               => '233',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GIGAKALORIYA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GKAL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        234     =>
                            [
                                'code'               => '234',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_GIGAKALORIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_GKAL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        235     =>
                            [
                                'code'               => '235',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_GIGAKALORIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_GKAL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        236     =>
                            [
                                'code'               => '236',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KALORIYA_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KALCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        237     =>
                            [
                                'code'               => '237',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOKALORIYA_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KKALCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        238     =>
                            [
                                'code'               => '238',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GIGAKALORIYA_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GKALCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        239     =>
                            [
                                'code'               => '239',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_GIGAKALORIJ_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_GKALCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        241     =>
                            [
                                'code'               => '241',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_AMPER_-_CHASOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_A_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        242     =>
                            [
                                'code'               => '242',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_KILOVOL_T_-_AMPER"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_KV_A"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        248     =>
                            [
                                'code'               => '248',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOVOL_T_-_AMPER_REAKTIVNIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KV_A_R"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        249     =>
                            [
                                'code'               => '249',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIARD_KILOVATT_-_CHASOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_109_KVT_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        250     =>
                            [
                                'code'               => '250',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KILOVOL_T_-_AMPER_REAKTIVNIH"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_KV_A_R"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        251     =>
                            [
                                'code'               => '251',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LOSHADINAYA_SILA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L_S"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        252     =>
                            [
                                'code'               => '252',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_LOSHADINIH_SIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_L_S"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        253     =>
                            [
                                'code'               => '253',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_LOSHADINIH_SIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_L_S"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        254     =>
                            [
                                'code'               => '254',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BIT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BIT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        255     =>
                            [
                                'code'               => '255',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BAJT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BAJT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        256     =>
                            [
                                'code'               => '256',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOBAJT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KBAJT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        257     =>
                            [
                                'code'               => '257',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEGABAJT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MBAJT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        258     =>
                            [
                                'code'               => '258',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        287     =>
                            [
                                'code'               => '287',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GENRI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        313     =>
                            [
                                'code'               => '313',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TESLA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        317     =>
                            [
                                'code'               => '317',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_NA_KVADRATNIJ_SANTIMETR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KGSM2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        337     =>
                            [
                                'code'               => '337',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIMETR_VODYANOGO_STOLBA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MM_VOD_ST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        338     =>
                            [
                                'code'               => '338',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIMETR_RTUTNOGO_STOLBA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MM_RT_ST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        339     =>
                            [
                                'code'               => '339',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SANTIMETR_VODYANOGO_STOLBA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SM_VOD_ST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
                5       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_TIME_UNITS'),
                        352     =>
                            [
                                'code'               => '352',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MIKROSEKUNDA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MKS"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        353     =>
                            [
                                'code'               => '353',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLISEKUNDA_EK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MLS"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
                6       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_ECONOMIC_UNITS'),
                        383     =>
                            [
                                'code'               => '383',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_RUBL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_RUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        384     =>
                            [
                                'code'               => '384',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_RUBLEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_RUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        385     =>
                            [
                                'code'               => '385',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_RUBLEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_RUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        386     =>
                            [
                                'code'               => '386',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLIARD_RUBLEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_109_RUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        387     =>
                            [
                                'code'               => '387',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TRILLION_RUBLEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1012_RUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        388     =>
                            [
                                'code'               => '388',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRIL_ON_RUBLEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1015_RUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        414     =>
                            [
                                'code'               => '414',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASSAZHIRO_-_KILOMETR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASS_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        421     =>
                            [
                                'code'               => '421',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASSAZHIRSKOE_MESTO_PASSAZHIRSKIH_MEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASS_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        423     =>
                            [
                                'code'               => '423',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PASSAZHIRO_-_KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_PASS_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        424     =>
                            [
                                'code'               => '424',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_PASSAZHIRO_-_KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_PASS_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        427     =>
                            [
                                'code'               => '427',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASSAZHIROPOTOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PASS_POTOK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        449     =>
                            [
                                'code'               => '449',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNO_-_KILOMETR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        450     =>
                            [
                                'code'               => '450',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONNO_-_KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        451     =>
                            [
                                'code'               => '451',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONNO_-_KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_T_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        479     =>
                            [
                                'code'               => '479',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_NABOROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_NABOR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        510     =>
                            [
                                'code'               => '510',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRAMM_NA_KILOVATT_-_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GKVT_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        511     =>
                            [
                                'code'               => '511',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KILOGRAMM_NA_GIGAKALORIYU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KGGKAL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        512     =>
                            [
                                'code'               => '512',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNO_-_NOMER"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_NOM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        513     =>
                            [
                                'code'               => '513',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AVTOTONNA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_AVTO_T"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        514     =>
                            [
                                'code'               => '514',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_TYAGI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_TYAGI"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        515     =>
                            [
                                'code'               => '515',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DEDVEJT-TONNA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DEDVEJT_T"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        516     =>
                            [
                                'code'               => '516',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNO-TANID"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_TANID"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        521     =>
                            [
                                'code'               => '521',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELOVEK_NA_KVADRATNIJ_METR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELM2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        522     =>
                            [
                                'code'               => '522',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELOVEK_NA_KVADRATNIJ_KILOMETR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELKM2"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        534     =>
                            [
                                'code'               => '534',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        535     =>
                            [
                                'code'               => '535',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_V_SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TSUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        536     =>
                            [
                                'code'               => '536',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_V_SMENU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TSMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        537     =>
                            [
                                'code'               => '537',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_V_SEZON"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_TSEZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        538     =>
                            [
                                'code'               => '538',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_V_GOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_TGOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        539     =>
                            [
                                'code'               => '539',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELOVEKO_-_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHEL_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        540     =>
                            [
                                'code'               => '540',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELOVEKO_-_DEN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHEL_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        541     =>
                            [
                                'code'               => '541',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_CHELOVEKO_-_DNEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_CHEL_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        542     =>
                            [
                                'code'               => '542',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_CHELOVEKO_-_CHASOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_CHEL_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        543     =>
                            [
                                'code'               => '543',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_BANOK_V_SMENU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_BANKSMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        544     =>
                            [
                                'code'               => '544',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_EDINITC_V_GOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_EDGOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        545     =>
                            [
                                'code'               => '545',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_POSESHENIE_V_SMENU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_POSESHSMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        546     =>
                            [
                                'code'               => '546',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_POSESHENIJ_V_SMENU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_POSESHSMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        547     =>
                            [
                                'code'               => '547',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PARA_V_SMENU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PARSMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        548     =>
                            [
                                'code'               => '548',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PAR_V_SMENU"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_PARSMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        550     =>
                            [
                                'code'               => '550',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONN_V_GOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_TGOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        552     =>
                            [
                                'code'               => '552',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TONNA_PERERABOTKI_V_SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_T_PERERABSUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        553     =>
                            [
                                'code'               => '553',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_PERERABOTKI_V_SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T_PERERABSUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        554     =>
                            [
                                'code'               => '554',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TCENTNER_PERERABOTKI_V_SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TC_PERERABSUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        555     =>
                            [
                                'code'               => '555',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TCENTNEROV_PERERABOTKI_V_SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_TC_PERERABSUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        556     =>
                            [
                                'code'               => '556',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_GOLOV_V_GOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_GOLGOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        557     =>
                            [
                                'code'               => '557',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_GOLOV_V_GOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_GOLGOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        558     =>
                            [
                                'code'               => '558',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PTITCEMEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_PTITCEMEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        559     =>
                            [
                                'code'               => '559',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KUR_-_NESUSHEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_KUR_NESUSH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        560     =>
                            [
                                'code'               => '560',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MINIMAL_NAYA_ZARABOTNAYA_PLATA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MIN_ZARABOTN_PLAT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        561     =>
                            [
                                'code'               => '561',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_PARA_V_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_T_PARCH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        562     =>
                            [
                                'code'               => '562',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PRYADIL_NIH_VERETEN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_PRYAD_VERET"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        563     =>
                            [
                                'code'               => '563',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PRYADIL_NIH_MEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_PRYAD_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        639     =>
                            [
                                'code'               => '639',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DOZA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DOZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        640     =>
                            [
                                'code'               => '640',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_DOZ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_DOZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        642     =>
                            [
                                'code'               => '642',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_EDINITCA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        643     =>
                            [
                                'code'               => '643',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        644     =>
                            [
                                'code'               => '644',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        661     =>
                            [
                                'code'               => '661',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANAL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANAL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        673     =>
                            [
                                'code'               => '673',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KOMPLEKTOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_KOMPL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        698     =>
                            [
                                'code'               => '698',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MESTO"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        699     =>
                            [
                                'code'               => '699',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_MEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        709     =>
                            [
                                'code'               => '709',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_NOMEROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_NOM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        724     =>
                            [
                                'code'               => '724',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_GEKTAROV_PORTCIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_GA_PORTC"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        729     =>
                            [
                                'code'               => '729',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PACHEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_PACH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        744     =>
                            [
                                'code'               => '744',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PROTCENT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PROC"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        746     =>
                            [
                                'code'               => '746',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PROMILLE_0_1_PROTCENTA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PROMILLE"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        751     =>
                            [
                                'code'               => '751',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_RULONOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_RUL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        761     =>
                            [
                                'code'               => '761',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_STANOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_STAN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        762     =>
                            [
                                'code'               => '762',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STANTCIYA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_STANTC"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        775     =>
                            [
                                'code'               => '775',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TYUBIKOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_TYUBIK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        776     =>
                            [
                                'code'               => '776',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_TUBOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_USL_TUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        779     =>
                            [
                                'code'               => '779',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_UPAKOVOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_UPAK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        782     =>
                            [
                                'code'               => '782',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_UPAKOVOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_UPAK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        792     =>
                            [
                                'code'               => '792',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHELOVEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_CHEL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        793     =>
                            [
                                'code'               => '793',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_CHELOVEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_CHEL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        794     =>
                            [
                                'code'               => '794',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_CHELOVEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_CHEL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        808     =>
                            [
                                'code'               => '808',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_EKZEMPLYAROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_EKZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        810     =>
                            [
                                'code'               => '810',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_YACHEJKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_YACH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        812     =>
                            [
                                'code'               => '812',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_YASHIK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_YASH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        836     =>
                            [
                                'code'               => '836',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GOLOVA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_GOL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        837     =>
                            [
                                'code'               => '837',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PAR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_PAR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        838     =>
                            [
                                'code'               => '838',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_PAR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_PAR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        839     =>
                            [
                                'code'               => '839',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KOMPLEKT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KOMPL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        840     =>
                            [
                                'code'               => '840',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SEKTCIYA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SEKTC"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        868     =>
                            [
                                'code'               => '868',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BUTILKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_BUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        869     =>
                            [
                                'code'               => '869',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_BUTILOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_BUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        870     =>
                            [
                                'code'               => '870',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AMPULA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_AMPUL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        871     =>
                            [
                                'code'               => '871',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_AMPUL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_AMPUL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        872     =>
                            [
                                'code'               => '872',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_FLAKON"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_FLAK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        873     =>
                            [
                                'code'               => '873',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_FLAKONOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_FLAK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        874     =>
                            [
                                'code'               => '874',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TUBOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_TUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        875     =>
                            [
                                'code'               => '875',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KOROBOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_KOR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        876     =>
                            [
                                'code'               => '876',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_EDINITCA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        877     =>
                            [
                                'code'               => '877',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        878     =>
                            [
                                'code'               => '878',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_USLOVNIH_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_USL_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        879     =>
                            [
                                'code'               => '879',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_SHTUKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_SHT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        880     =>
                            [
                                'code'               => '880',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_SHTUK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_SHT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        881     =>
                            [
                                'code'               => '881',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_BANKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_BANK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        882     =>
                            [
                                'code'               => '882',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_BANOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_BANK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        883     =>
                            [
                                'code'               => '883',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_USLOVNIH_BANOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_USL_BANK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        884     =>
                            [
                                'code'               => '884',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_KUSOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_KUS"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        885     =>
                            [
                                'code'               => '885',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_KUSKOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_KUS"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        886     =>
                            [
                                'code'               => '886',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_USLOVNIH_KUSKOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_USL_KUS"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        887     =>
                            [
                                'code'               => '887',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_YASHIK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_YASH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        888     =>
                            [
                                'code'               => '888',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_YASHIKOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_YASH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        889     =>
                            [
                                'code'               => '889',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_KATUSHKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_KAT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        890     =>
                            [
                                'code'               => '890',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_KATUSHEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_KAT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        891     =>
                            [
                                'code'               => '891',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_PLITKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_PLIT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        892     =>
                            [
                                'code'               => '892',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_PLITOK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_PLIT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        893     =>
                            [
                                'code'               => '893',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_KIRPICH"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_KIRP"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        894     =>
                            [
                                'code'               => '894',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_USLOVNIH_KIRPICHEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_USL_KIRP"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        895     =>
                            [
                                'code'               => '895',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_USLOVNIH_KIRPICHEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_USL_KIRP"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        896     =>
                            [
                                'code'               => '896',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SEM_YA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SEMEJ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        897     =>
                            [
                                'code'               => '897',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_SEMEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_SEMEJ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        898     =>
                            [
                                'code'               => '898',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_SEMEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_SEMEJ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        899     =>
                            [
                                'code'               => '899',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DOMOHOZYAJSTVO"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_DOMHOZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        900     =>
                            [
                                'code'               => '900',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_DOMOHOZYAJSTV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_DOMHOZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        901     =>
                            [
                                'code'               => '901',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_DOMOHOZYAJSTV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_DOMHOZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        902     =>
                            [
                                'code'               => '902',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_UCHENICHESKOE_MESTO"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_UCHEN_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        903     =>
                            [
                                'code'               => '903',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_UCHENICHESKIH_MEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_UCHEN_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        904     =>
                            [
                                'code'               => '904',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_RABOCHEE_MESTO"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_RAB_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        905     =>
                            [
                                'code'               => '905',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_RABOCHIH_MEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_RAB_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        906     =>
                            [
                                'code'               => '906',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_POSADOCHNOE_MESTO"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_POSAD_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        907     =>
                            [
                                'code'               => '907',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_POSADOCHNIH_MEST"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_POSAD_MEST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        908     =>
                            [
                                'code'               => '908',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_NOMER"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_NOM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        909     =>
                            [
                                'code'               => '909',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVARTIRA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVART"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        910     =>
                            [
                                'code'               => '910',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KVARTIR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_KVART"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        911     =>
                            [
                                'code'               => '911',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KOJKA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KOEK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        912     =>
                            [
                                'code'               => '912',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KOEK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_KOEK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        913     =>
                            [
                                'code'               => '913',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TOM_KNIZHNOGO_FONDA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TOM_KNIZHN_FOND"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        914     =>
                            [
                                'code'               => '914',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TOMOV_KNIZHNOGO_FONDA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_1000_TOM_KNIZHN_FOND"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        915     =>
                            [
                                'code'               => '915',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_REMONT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_REM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        916     =>
                            [
                                'code'               => '916',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNIJ_REMONT_V_GOD"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_REMGOD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        917     =>
                            [
                                'code'               => '917',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SMENA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SMEN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        918     =>
                            [
                                'code'               => '918',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LIST_AVTORSKIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L_AVT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        920     =>
                            [
                                'code'               => '920',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LIST_PECHATNIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L_PECH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        921     =>
                            [
                                'code'               => '921',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_LIST_UCHETNO_-_IZDATEL_SKIJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_L_UCH_-IZD"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        922     =>
                            [
                                'code'               => '922',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZNAK"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZNAK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        923     =>
                            [
                                'code'               => '923',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SLOVO"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SLOVO"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        924     =>
                            [
                                'code'               => '924',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SIMVOL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SIMVOL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        925     =>
                            [
                                'code'               => '925',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_USLOVNAYA_TRUBA"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_USL_TRUB"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        930     =>
                            [
                                'code'               => '930',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PLASTIN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_PLAST"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        937     =>
                            [
                                'code'               => '937',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_DOZ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_DOZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        949     =>
                            [
                                'code'               => '949',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_LISTOV-OTTISKOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_LIST_OTTISK"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        950     =>
                            [
                                'code'               => '950',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VAGONO_MASHINO_-DEN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_VAG_MASH_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        951     =>
                            [
                                'code'               => '951',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_VAGONO-_MASHINO_-CHASOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_VAG_MASH_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        952     =>
                            [
                                'code'               => '952',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_VAGONO-_MASHINO_-KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_VAG_MASH_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        953     =>
                            [
                                'code'               => '953',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_MESTO-KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_MEST_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        954     =>
                            [
                                'code'               => '954',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VAGONO-SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_VAG_SUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        955     =>
                            [
                                'code'               => '955',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_POEZDO-CHASOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_POEZD_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        956     =>
                            [
                                'code'               => '956',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_POEZDO-KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_POEZD_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        957     =>
                            [
                                'code'               => '957',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONNO-MIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_T_MIL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        958     =>
                            [
                                'code'               => '958',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_PASSAZHIRO-MIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_PASS_MIL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        959     =>
                            [
                                'code'               => '959',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AVTOMOBILE-DEN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_AVTOMOB_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        960     =>
                            [
                                'code'               => '960',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_AVTOMOBILE-TONNO-DNEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_AVTOMOB_T_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        961     =>
                            [
                                'code'               => '961',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_AVTOMOBILE-CHASOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_AVTOMOB_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        962     =>
                            [
                                'code'               => '962',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_AVTOMOBILE-MESTO-DNEJ"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_AVTOMOB_MEST_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        963     =>
                            [
                                'code'               => '963',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PRIVEDENNIJ_CHAS"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_PRIVED_CH"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        964     =>
                            [
                                'code'               => '964',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SAMOLETO-KILOMETR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SAMOLET_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        965     =>
                            [
                                'code'               => '965',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        966     =>
                            [
                                'code'               => '966',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONNAZHE-REJSOV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_TONNAZH_REJS"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        967     =>
                            [
                                'code'               => '967',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONNO-MIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_T_MIL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        968     =>
                            [
                                'code'               => '968',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_PASSAZHIRO-MIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_PASS_MIL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        969     =>
                            [
                                'code'               => '969',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONNAZHE-MIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_TONNAZH_MIL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        970     =>
                            [
                                'code'               => '970',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_PASSAZHIRO-MESTO-MIL"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_PASS_MEST_MIL"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        971     =>
                            [
                                'code'               => '971',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KORMO-DEN"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KORM_DN"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        972     =>
                            [
                                'code'               => '972',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TCENTNER_KORMOVIH_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_TC_KORM_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        973     =>
                            [
                                'code'               => '973',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_AVTOMOBILE-KILOMETROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_AVTOMOB_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        974     =>
                            [
                                'code'               => '974',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONNAZHE-SUT"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_TONNAZH_SUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        975     =>
                            [
                                'code'               => '975',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUGO-SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUGO_SUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        976     =>
                            [
                                'code'               => '976',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SHTUK_V_20-FUTOVOM_EKVIVALENTE_DFE"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SHTUK_V_20-FUTOVOM_EKVIVALENTE"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        977     =>
                            [
                                'code'               => '977',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANALO-KILOMETR"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANAL_KM"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        978     =>
                            [
                                'code'               => '978',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANALO-KONTCI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_KANAL_KONTC"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        979     =>
                            [
                                'code'               => '979',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_EKZEMPLYAROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_EKZ"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        980     =>
                            [
                                'code'               => '980',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_DOLLAROV"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_DOLLAR"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        981     =>
                            [
                                'code'               => '981',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHA_TONN_KORMOVIH_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_103_KORM_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        982     =>
                            [
                                'code'               => '982',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILLION_TONN_KORMOVIH_EDINITC"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_106_KORM_ED"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                        983     =>
                            [
                                'code'               => '983',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUDO-SUTKI"),
                                'symbol'             => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUD_SUT"),
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => null,
                            ],
                    ],
            ];
        $unitsClassifier[] =
            [
                'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_TITLE3'),
                0       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_LENGTH_UNITS'),
                        17      =>
                            [
                                'code'               => '017',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GEKTOMETR"),
                                'symbol'             => null,
                                'symbol_intl'        => 'hm',
                                'symbol_letter_intl' => 'HMT',
                            ],
                        45      =>
                            [
                                'code'               => '045',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MILYA_USTAVNAYA_1609_344_M"),
                                'symbol'             => null,
                                'symbol_intl'        => 'mile',
                                'symbol_letter_intl' => 'SMI',
                            ],
                    ],
                1       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_AREA_UNITS'),
                        77      =>
                            [
                                'code'               => '077',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_AKR_4840_KVADRATNIH_YARDOV"),
                                'symbol'             => null,
                                'symbol_intl'        => 'acre',
                                'symbol_letter_intl' => 'ACR',
                            ],
                        79      =>
                            [
                                'code'               => '079',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVADRATNAYA_MILYA"),
                                'symbol'             => null,
                                'symbol_intl'        => 'mile2',
                                'symbol_letter_intl' => 'MIK',
                            ],
                    ],
                2       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_VOLUME_UNITS'),
                        135     =>
                            [
                                'code'               => '135',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZHIDKOSTNAYA_UNTCIYA_SK_3_28_413_SM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'fl oz (UK)',
                                'symbol_letter_intl' => 'OZI',
                            ],
                        136     =>
                            [
                                'code'               => '136',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DZHILL_SK_0_142065_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'gill (UK)',
                                'symbol_letter_intl' => 'GII',
                            ],
                        137     =>
                            [
                                'code'               => '137',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PINTA_SK_0_568262_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'pt (UK)',
                                'symbol_letter_intl' => 'PTI',
                            ],
                        138     =>
                            [
                                'code'               => '138',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVARTA_SK_1_136523_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'qt (UK)',
                                'symbol_letter_intl' => 'QTI',
                            ],
                        139     =>
                            [
                                'code'               => '139',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GALLON_SK_4_546092_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'gal (UK)',
                                'symbol_letter_intl' => 'GLI',
                            ],
                        140     =>
                            [
                                'code'               => '140',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BUSHEL_SK_36_36874_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'bu (UK)',
                                'symbol_letter_intl' => 'BUI',
                            ],
                        141     =>
                            [
                                'code'               => '141',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZHIDKOSTNAYA_UNTCIYA_SSHA_29_5735_SM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'fl oz (US)',
                                'symbol_letter_intl' => 'OZA',
                            ],
                        142     =>
                            [
                                'code'               => '142',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DZHILL_SSHA_11_8294_SM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'gill  (US)',
                                'symbol_letter_intl' => 'GIA',
                            ],
                        143     =>
                            [
                                'code'               => '143',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZHIDKOSTNAYA_PINTA_SSHA_0_473176_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'liq pt (US)',
                                'symbol_letter_intl' => 'PTL',
                            ],
                        144     =>
                            [
                                'code'               => '144',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZHIDKOSTNAYA_KVARTA_SSHA_0_946353_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'liq qt (US)',
                                'symbol_letter_intl' => 'QTL',
                            ],
                        145     =>
                            [
                                'code'               => '145',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_ZHIDKOSTNIJ_GALLON_SSHA_3_78541_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'gal (US)',
                                'symbol_letter_intl' => 'GLL',
                            ],
                        146     =>
                            [
                                'code'               => '146',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BARREL_NEFTYANOJ_SSHA_158_987_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'barrel (US)',
                                'symbol_letter_intl' => 'BLL',
                            ],
                        147     =>
                            [
                                'code'               => '147',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUHAYA_PINTA_SSHA_0_55061_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'dry pt (US)',
                                'symbol_letter_intl' => 'PTD',
                            ],
                        148     =>
                            [
                                'code'               => '148',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUHAYA_KVARTA_SSHA_1_101221_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'dry qt (US)',
                                'symbol_letter_intl' => 'QTD',
                            ],
                        149     =>
                            [
                                'code'               => '149',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUHOJ_GALLON_SSHA_4_404884_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'dry gal (US)',
                                'symbol_letter_intl' => 'GLD',
                            ],
                        150     =>
                            [
                                'code'               => '150',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BUSHEL_SSHA_35_2391_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'bu (US)',
                                'symbol_letter_intl' => 'BUA',
                            ],
                        151     =>
                            [
                                'code'               => '151',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SUHOJ_BARREL_SSHA_115_627_DM3"),
                                'symbol'             => null,
                                'symbol_intl'        => 'bbl (US)',
                                'symbol_letter_intl' => 'BLD',
                            ],
                        152     =>
                            [
                                'code'               => '152',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STANDART"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'WSD',
                            ],
                        153     =>
                            [
                                'code'               => '153',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KORD_3_63_M3"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'WCD',
                            ],
                        154     =>
                            [
                                'code'               => '154',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TISYACHI_BORDFUTOV_2_36_M3"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'MBF',
                            ],
                    ],
                3       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_MASS_UNITS'),
                        182     =>
                            [
                                'code'               => '182',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_NETTO_-_REGISTROVAYA_TONNA"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'NTT',
                            ],
                        183     =>
                            [
                                'code'               => '183',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_OBMERNAYA_FRAHTOVAYA_TONNA"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'SHT',
                            ],
                        184     =>
                            [
                                'code'               => '184',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_VODOIZMESHENIE"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'DPT',
                            ],
                        186     =>
                            [
                                'code'               => '186',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_FUNT_SK_SSHA_0_45359237_KG"),
                                'symbol'             => null,
                                'symbol_intl'        => 'lb',
                                'symbol_letter_intl' => 'LBR',
                            ],
                        187     =>
                            [
                                'code'               => '187',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_UNTCIYA_SK_SSHA_28_349523_G"),
                                'symbol'             => null,
                                'symbol_intl'        => 'oz',
                                'symbol_letter_intl' => 'ONZ',
                            ],
                        188     =>
                            [
                                'code'               => '188',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DRAHMA_SK_1_771745_G"),
                                'symbol'             => null,
                                'symbol_intl'        => 'dr',
                                'symbol_letter_intl' => 'DRI',
                            ],
                        189     =>
                            [
                                'code'               => '189',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GRAN_SK_SSHA_64_798910_MG"),
                                'symbol'             => null,
                                'symbol_intl'        => 'gn',
                                'symbol_letter_intl' => 'GRN',
                            ],
                        190     =>
                            [
                                'code'               => '190',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STOUN_SK_6_350293_KG"),
                                'symbol'             => null,
                                'symbol_intl'        => 'st',
                                'symbol_letter_intl' => 'STI',
                            ],
                        191     =>
                            [
                                'code'               => '191',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KVARTER_SK_12_700586_KG"),
                                'symbol'             => null,
                                'symbol_intl'        => 'qtr',
                                'symbol_letter_intl' => 'QTR',
                            ],
                        192     =>
                            [
                                'code'               => '192',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TCENTAL_SK_45_359237_KG"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'CNT',
                            ],
                        193     =>
                            [
                                'code'               => '193',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TCENTNER_SSHA_45_3592_KG"),
                                'symbol'             => null,
                                'symbol_intl'        => 'cwt',
                                'symbol_letter_intl' => 'CWA',
                            ],
                        194     =>
                            [
                                'code'               => '194',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DLINNIJ_TCENTNER_SK_50_802345_KG"),
                                'symbol'             => null,
                                'symbol_intl'        => 'cwt (UK)',
                                'symbol_letter_intl' => 'CWI',
                            ],
                        195     =>
                            [
                                'code'               => '195',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KOROTKAYA_TONNA_SK_SSHA_0_90718474_T"),
                                'symbol'             => null,
                                'symbol_intl'        => 'sht',
                                'symbol_letter_intl' => 'STN',
                            ],
                        196     =>
                            [
                                'code'               => '196',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DLINNAYA_TONNA_SK_SSHA_1_0160469_T"),
                                'symbol'             => null,
                                'symbol_intl'        => 'lt',
                                'symbol_letter_intl' => 'LTN',
                            ],
                        197     =>
                            [
                                'code'               => '197',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_SKRUPUL_SK_SSHA_1_295982_G"),
                                'symbol'             => null,
                                'symbol_intl'        => 'scr',
                                'symbol_letter_intl' => 'SCR',
                            ],
                        198     =>
                            [
                                'code'               => '198',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_PENNIVEJT_SK_SSHA_1_555174_G"),
                                'symbol'             => null,
                                'symbol_intl'        => 'dwt',
                                'symbol_letter_intl' => 'DWT',
                            ],
                        199     =>
                            [
                                'code'               => '199',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DRAHMA_SK_3_887935_G"),
                                'symbol'             => null,
                                'symbol_intl'        => 'drm',
                                'symbol_letter_intl' => 'DRM',
                            ],
                        200     =>
                            [
                                'code'               => '200',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_DRAHMA_SSHA_3_887935_G"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'DRA',
                            ],
                        201     =>
                            [
                                'code'               => '201',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_UNTCIYA_SK_SSHA_31_10348_G_TROJSKAYA_UNTCIYA"),
                                'symbol'             => null,
                                'symbol_intl'        => 'apoz',
                                'symbol_letter_intl' => 'APZ',
                            ],
                        202     =>
                            [
                                'code'               => '202',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_TROJSKIJ_FUNT_SSHA_373_242_G"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'LBT',
                            ],
                    ],
                4       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_ENGINEERING_UNITS'),
                        213     =>
                            [
                                'code'               => '213',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_EFFEKTIVNAYA_MOSHNOST_245_7_VATT"),
                                'symbol'             => null,
                                'symbol_intl'        => 'B.h.p.',
                                'symbol_letter_intl' => 'BHP',
                            ],
                        275     =>
                            [
                                'code'               => '275',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BRITANSKAYA_TEPLOVAYA_EDINITCA_1_055_KDZH"),
                                'symbol'             => null,
                                'symbol_intl'        => 'Btu',
                                'symbol_letter_intl' => 'BTU',
                            ],
                    ],
                5       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_TIME_UNITS'),
                    ],
                6       =>
                    [
                        'title' => \Yii::t('skeeks/measureClassifier', 'CAT_UC_ECONOMIC_UNITS'),
                        638     =>
                            [
                                'code'               => '638',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GROSS_144_SHT"),
                                'symbol'             => null,
                                'symbol_intl'        => 'gr',
                                'symbol_letter_intl' => 'GRO',
                            ],
                        731     =>
                            [
                                'code'               => '731',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_BOL_SHOJ_GROSS_12_GROSSOV"),
                                'symbol'             => null,
                                'symbol_intl'        => '1728',
                                'symbol_letter_intl' => 'GGR',
                            ],
                        738     =>
                            [
                                'code'               => '738',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_KOROTKIJ_STANDART_7200_EDINITC"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'SST',
                            ],
                        835     =>
                            [
                                'code'               => '835',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_GALLON_SPIRTA_USTANOVLENNOJ_KREPOSTI"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'PGL',
                            ],
                        851     =>
                            [
                                'code'               => '851',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_MEZHDUNARODNAYA_EDINITCA"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'NIU',
                            ],
                        853     =>
                            [
                                'code'               => '853',
                                'name'               => \Yii::t("skeeks/measureClassifier", "CAT_UC_STO_MEZHDUNARODNIH_EDINITC"),
                                'symbol'             => null,
                                'symbol_intl'        => null,
                                'symbol_letter_intl' => 'HIU',
                            ],
                    ],
            ];

        return $this->_unitsClassifier;
    }


    /**
     * @param $findCode
     * @return array
     */
    public function getMeasureInfoByCode($findCode)
    {
        $result = null;
        $findCode = (int)$findCode;
        if (0 < $findCode) {
            foreach ($this->data as $subSection) {
                foreach ($subSection as $measureList) {
                    if (!is_array($measureList)) {
                        continue;
                    }
                    if (isset($measureList[$findCode]) && isset($measureList[$findCode]['code']) && (int)$measureList[$findCode]['code'] === $findCode) {
                        $result = $measureList[$findCode];
                        break 2;
                    }
                }
            }
        }
        return $result;
    }
}