<?php
/**
 * AppAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, Maleny Music Festival, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-a6e
 * @license MIT
 */

/**
 * Load this asset with...
 * backend\assets\AppAsset::register($this);
 *
 * or specify as a dependency with...
 *	 'backend\assets\AppAsset',
 */

namespace backend\assets;

class AppAsset extends \p2m\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@backend/assets/lib',
			'js' => [
			],
		],

		'depends' => [
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
