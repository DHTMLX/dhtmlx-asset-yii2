<?php

namespace DHTMLX\Asset;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Asset bundle for the DHTMLX library.
 */
class DHTMLXAsset extends AssetBundle
{
    public $sourcePath = '@bower/dhtmlx';
    public $css = [
        'dhtmlx.css'
    ];
    public $js = [
        'dhtmlx.js'
    ];
    public $jsOptions = ['position' => View::POS_HEAD]; //Script should be in head
}
