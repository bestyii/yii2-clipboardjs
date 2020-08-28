<?php

namespace bestyii\clipboardjs;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Html;

class ClipboardInputWidget extends Widget
{
    /**
     * The text to copy
     * @var string
     */
    public $text;

    /**
     * Input to copy/cut text from "#input-id-23"
     * @var string
     */
    public $inputId;

    /**
     * Button Label
     * @var string
     */
    public $label = 'Copy to clipboard';

    public $successText = 'Copied';
    /**
     * Input to copy/cut text from "#input-id-23"
     * @var string
     */
    public $inputOptions = ['class' => 'form-control'];
    /**
     * @var array
     */
    public $htmlOptions = ['class' => 'btn btn-secondary'];
/**
     * @var array
     */
    public $options = ['class' => 'input-group'];

    /**
     * Cut the text from the input id
     * @var bool
     */
    public $cut = false;

    /**
     * Element tag
     * @var string
     */
    public $tag = 'button';

    public function init()
    {
        if (!isset($this->text) && !isset($this->inputId)) {
            throw new InvalidConfigException('"text" or "inputId" must be set for the ClipboardJsWidget.');
        }
        if (isset($this->inputId) && substr($this->inputId, 0, 1) !== '#') {
            //Don't worry about if you put in that # tag.
            $this->inputId = '#' . $this->inputId;
        }
        parent::init();
        ClipboardJsAsset::register($this->getView());
    }

    public function run()
    {
        $htmlOptions = $this->htmlOptions;
        $htmlOptions['data']['clipboard-action'] = 'copy';
        if (isset($this->text)) {
            $htmlOptions['data']['clipboard-text'] = $this->text;
        } elseif (isset($this->inputId)) {
            $htmlOptions['data']['clipboard-target'] = $this->inputId;
            if ($this->cut) {
                $htmlOptions['data']['clipboard-action'] = 'cut';
            }
        }
        if ($this->successText) {
            $htmlOptions['data']['clipboard-success'] = $this->successText;
        }
        Html::addCssClass($htmlOptions, 'clipboard-js-init');
        echo Html::beginTag('div', $this->options);
        echo Html::textInput($this->inputId, $this->text,$this->inputOptions);
        echo Html::tag('div',Html::tag($this->tag, $this->label, $htmlOptions),['class'=>'input-group-append']);
        echo Html::endTag('div');
    }
}
