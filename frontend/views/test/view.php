<?php
use yii\helpers\Url;
?>
<h1><?php echo $item['title']; ?></h1>
<p><?php echo $item['content']; ?></p>

<a href="<?= Url::to(['test/index']); ?>" class="btn btn-info">Back</a>