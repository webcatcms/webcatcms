<?php
/**
 * AssetBundle.php
 * @author webcat
 * @link 
 */
namespace yii\fontawesome;

use yii\web\AssetBundle;

class AssetFontAwesome extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/font-awesome/';

    /**
     * @inherit
     */
    public $css = [
        
        'css/font-awesome.min.css',
        
    ];

   
   
}
