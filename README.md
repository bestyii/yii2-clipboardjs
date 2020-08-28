# yii2-clipboardjs 复制到剪贴板
基于[Clipboardjs](https://clipboardjs.com/) 实现一键复制内容到剪贴板.

[Clipboardjs](https://clipboardjs.com/)  是纯JavaScript实现的.


## 安装 Installation

通过 [composer](http://getcomposer.org/download)安装扩展. 添加下面代码到项目的 composer.json文件中

```json
"bestyii/yii2-clipboardjs":"*",
```

## 使用 Usage

```php
//渲染带输入框的控件
<?= \bestyii\clipboardjs\ClipboardInputWidget::widget([
            'text' => 'https://www.bestyii.com',
             'label' => '复制到剪贴板',
             'successText' => '复制成功！',
        ]) ?>

//按钮形式
<?= \bestyii\clipboardjs\ClipboardJsWidget::widget([
    'text' => "Hello World",
    // 'label' => 'Copy to clipboard',
    // 'htmlOptions' => ['class' => 'btn'],
    // 'tag' => 'button',
]) ?>

//点击按钮复制指定id的input值
<?= \bestyii\clipboardjs\ClipboardJsWidget::widget([
    'inputId' => "#input-url",
    // 'cut' => false, // Cut the text out of the input instead of copy?
    // 'label' => 'Copy to clipboard',
    // 'htmlOptions' => ['class' => 'btn'],
    // 'tag' => 'button',
]) ?>

```

## 直接调用静态资源 Just the Asset?

Yes, you can use just the asset. 
```php
 \bestyii\clipboardjs\ClipboardJsAsset::register($view);
``` 
It will auto init anything with the "clipboard-js-init" class.
