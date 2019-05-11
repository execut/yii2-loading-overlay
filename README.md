# Yii2 loading overlay widget
Yii2 wrapper for jquery loading overlay javascript widget from jgerigmeyer

[Widget page](https://github.com/jgerigmeyer/jquery-loading-overlay)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require execut/yii2-loading-overlay "dev-master"
```

or add

```
"execut/yii2-loading-overlay": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage
For usage javascript widget inside you javascript code simple register ```\execut\loadingOverlay\LoadingOverlayAsset``` on you page.

For javascript usage please, refer to [widget documentation page](https://github.com/jgerigmeyer/jquery-loading-overlay)

## Example


Copy this code to app view file:
```html
<button class="toggle-loading">Toggle overlay</button>
<div id="target" style="height:300px;width:300px;background:gray"></div>
<?php
$this->registerJs(<<<JS
jQuery(function ($) {
  var target = $('#target');
  $('.toggle-loading').click(function () {
    if (target.hasClass('loading')) {
      target.loadingOverlay('remove');
    } else {
      target.loadingOverlay();
    };
  });
});
JS
);
\execut\loadingOverlay\LoadingOverlayAsset::register($this);
```

## License

**yii2-loading-overlay** is released under the Apache License Version 2.0. See the bundled `LICENSE.md` for details.
