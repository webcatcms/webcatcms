<?php
/**
 * AssetBundle.php
 * @author webcat
 * @link 
 */
namespace plugins\fontawesome;

use yii\web\AssetBundle;

class AssetFontAwesome extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@plugins/fontawesome';

    /**
     * @inherit
     */
    public $css = [
        
        'css/font-awesome.min.css',
        
    ];

   
   
}
