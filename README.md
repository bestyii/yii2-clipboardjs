# yii2-clipboardjs

An easy way to use [Clipboardjs](https://clipboardjs.com/) in your project. Clipboardjs is a javascript only way to copy text to the clipboard.


## Installation

Install this extension via [composer](http://getcomposer.org/download). Add this line to your project’s composer.json

```json
"bestyii/yii2-clipboardjs":"*",
```

## Usage

```php
//渲染带输入框的控件
<?= \bestyii\clipboardjs\ClipboardInputWidget::widget([
            'text' => 'https://www.bestyii.com',
             'label' => '复制到剪贴板',
             'successText' => '复制成功！',
        ]) ?>

//Button to copy text
<?= \bestyii\clipboardjs\ClipboardJsWidget::widget([
    'text' => "Hello World",
    // 'label' => 'Copy to clipboard',
    // 'htmlOptions' => ['class' => 'btn'],
    // 'tag' => 'button',
]) ?>

//Button to copy text from input id
<?= \bestyii\clipboardjs\ClipboardJsWidget::widget([
    'inputId' => "#input-url",
    // 'cut' => false, // Cut the text out of the input instead of copy?
    // 'label' => 'Copy to clipboard',
    // 'htmlOptions' => ['class' => 'btn'],
    // 'tag' => 'button',
]) ?>

```

## Just the Asset?

Yes, you can use just the asset. 
```php
 \bestyii\clipboardjs\ClipboardJsAsset::register($view);
``` 
It will auto init anything with the "clipboard-js-init" class.
