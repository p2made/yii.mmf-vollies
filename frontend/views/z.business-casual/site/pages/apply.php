<?php
/**
 * apply.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package yii2-startbootstrap-themes
 * @license MIT
 */

/* @var $this yii\web\View */

use yii\bootstrap\Html;
use p2m\helpers\FA;

$this->title = 'Apply';
$assetDir = Yii::$app->assetManager->getPublishedUrl(
	'@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual'
);
?>

<div class="container">

	<div class="row">
		<div class="box">
			<div class="col-lg-12">
				<hr>
				<h2 class="intro-text text-center">Company
					<strong>blog</strong>
				</h2>
				<hr>
			</div>
			<div class="col-lg-12 text-center">
				<img src="<?= $assetDir ?>/img/slide-1.jpg" alt="" class="img-responsive img-border img-full">
				<h2>Post Title
					<br>
					<small>October 13, 2013</small>
				</h2>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				<a href="#" class="btn btn-default btn-lg">Read More</a>
				<hr>
			</div>
			<div class="col-lg-12 text-center">
				<img src="<?= $assetDir ?>/img/slide-2.jpg" alt="" class="img-responsive img-border img-full">
				<h2>Post Title
					<br>
					<small>October 13, 2013</small>
				</h2>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				<a href="#" class="btn btn-default btn-lg">Read More</a>
				<hr>
			</div>
			<div class="col-lg-12 text-center">
				<img src="<?= $assetDir ?>/img/slide-3.jpg" alt="" class="img-responsive img-border img-full">
				<h2>Post Title
					<br>
					<small>October 13, 2013</small>
				</h2>
				<p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
				<a href="#" class="btn btn-default btn-lg">Read More</a>
				<hr>
			</div>
			<div class="col-lg-12 text-center">
				<ul class="pager">
					<li class="previous"><a href="#">&larr; Older</a>
					</li>
					<li class="next"><a href="#">Newer &rarr;</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

</div>
<!-- /.container -->
