<?php
/**
 * @copyright Copyright (c) 2015 Shiyang
 * @author Shiyang <dr@shiyang.me>
 * @link http://shiyang.me
 */

namespace common\widgets\umeditor;

use yii\web\AssetBundle;

class UMeditorAsset extends AssetBundle
{
	//public $sourcePath = '@vendor/shiyang/yii2-umeditor/assets';

	public $css = [
		'themes/default/css/umeditor.min.css',
	];

	public $js = [
		'umeditor.min.js',
		'umeditor.config.js',
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];
	public function init()
	{
		$this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
	}
}
