# Date Range Picker Widget for Yii2

[![Latest Version](https://img.shields.io/github/tag/singularity-is/yii2-daterangepicker.svg?style=flat-square&label=release)](https://github.com/singularity-is/yii2-daterangepicker/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/singularity-is/yii2-daterangepicker/master.svg?style=flat-square)](https://travis-ci.org/singularity-is/yii2-daterangepicker)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/singularity-is/yii2-daterangepicker.svg?style=flat-square)](https://scrutinizer-ci.com/g/singularity-is/yii2-daterangepicker/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/singularity-is/yii2-daterangepicker.svg?style=flat-square)](https://scrutinizer-ci.com/g/singularity-is/yii2-daterangepicker)
[![Total Downloads](https://img.shields.io/packagist/dt/singularity-is/yii2-daterangepicker.svg?style=flat-square)](https://packagist.org/packages/singularity-is/yii2-daterangepicker)

Renders a [Date Range Picker](http://www.daterangepicker.com) widget.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require singularity-is/yii2-daterangepicker:~1.0
```

or add

```
"singularity-is/yii2-daterangepicker": "~1.0"
```

to the `require` section of your `composer.json` file.

## Usage

Using a model and widget configuration:

```
use singularity\daterangepicker\Daterangepicker;

...

<div class="col-lg-6">
    <div class="form-group">
        <?= $form->field($model, 'attribute')->widget(Daterangepicker::class); ?>
    </div>
</div>
```

```
use singularity\daterangepicker\Daterangepicker;

...

<div class="col-lg-6">
    <?= Daterangepicker::widget([
        'model' => $model,
        'attribute' => 'attribute',
        'addonIcon' => 'fal fa-clock',
        'clientOptions' => [
            'opens' => 'right'
        ]
    ]); ?>
</div>
```


## Theming

[Twitter Typeahead.js Bootstrap plugin](https://github.com/twitter/typeahead.js) does not style the dropdown nor the hint or the input-field. It does it this way in order for you to customize it so it suits your application.

We have included a stylesheet with hints to match `form-control` bootstrap classes and other tweaks so you can easily identify the classes and style it.

## Testing

```bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Nikola Radovic](https://github.com/dzona)
- [All Contributors](https://github.com/singularity-is/yii2-daterangepicker/graphs/contributors)

## License

The BSD License (BSD). Please see [License File](LICENSE.md) for more information.

<blockquote>
    <a href="https://singularity.is"><img src="http://www.gravatar.com/avatar/0d476ccf1362a2aa4f2fbfd24f821849.png"></a><br>
    <i>#BeyondSoftware</i><br>
    <a href="https://www.singularity.is">www.singularity.is</a>
</blockquote>
