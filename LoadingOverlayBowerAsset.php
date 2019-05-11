<?php
namespace execut\loadingOverlay;

use yii\web\AssetBundle;
class LoadingOverlayBowerAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-loading-overlay/dist';
    public $js = [
        'loading-overlay.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}