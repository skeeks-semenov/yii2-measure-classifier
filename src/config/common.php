<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 27.08.2015
 */
return [

    'components' => [
        'measureClassifier' => [
            'class' => 'skeeks\yii2\measureClassifier\MeasureClassifierComponent',
        ],

        'i18n' => [
            'translations' => [
                'skeeks/measureClassifier' => [
                    'class'    => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@skeeks/yii2/measureClassifier/messages',
                    'fileMap'  => [
                        'skeeks/measureClassifier' => 'classifier.php',
                    ],
                ],
            ],
        ],
    ],
];