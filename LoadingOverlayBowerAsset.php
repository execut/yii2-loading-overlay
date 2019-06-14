<?php
namespace execut\loadingOverlay;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class LoadingOverlayBowerAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-loading-overlay/dist';
    public $js = [
        'loading-overlay.js'
    ];

    public $depends = [
        JqueryAsset::class,
    ];
}