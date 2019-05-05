<?php
/**
 * Created by PhpStorm.
 * User: execut
 * Date: 25.01.16
 * Time: 13:50
 */

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

//    public function init() {
//        echo 1;
//        exit;
//    }
}