<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var yii\web\View $this
 * @var dektrium\user\Module $module
 */

$this->title = $title;
?>

<div class="container">
	<div class="box">

		<div class="row">
			<div class="col-md-12">
				<?= $this->render('/_alert', ['module' => $module]) ?>
			</div>
		</div>

	</div>
</div>