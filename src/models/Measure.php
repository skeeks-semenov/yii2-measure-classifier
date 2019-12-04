<?php
/**
 * @link https://cms.skeeks.com/
 * @copyright Copyright (c) 2010 SkeekS
 * @license https://cms.skeeks.com/license/
 * @author Semenov Alexander <semenov@skeeks.com>
 */

namespace skeeks\yii2\measureClassifier\models;

use yii\base\Model;

/**
 * @property string asText;
 * 
 * @author Semenov Alexander <semenov@skeeks.com>
 */
class Measure extends Model
{
    /**
     * @var string
     */
    public $code = "";
    /**
     * @var string
     */
    public $name = "";
    /**
     * @var string
     */
    public $symbol = "";
    /**
     * @var string
     */
    public $symbol_intl = "";
    /**
     * @var string
     */
    public $symbol_letter_intl = "";

    /**
     * @return string
     */
    public function getAsText()
    {
        return $this->name . " ({$this->symbol})";
    }
}