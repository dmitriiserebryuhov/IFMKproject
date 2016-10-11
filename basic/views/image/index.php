<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>Image</h1>
<p>
        <?= Html::a('Create Image', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<div class="container">
        <div class="row">
<?php foreach ($images as $image): ?>
	   <div class="col-md-6 myblock">
        <h3><?= Html::encode ("{$image->name}") ?></h3>
    </div>
    <div class="col-md-6 myblock">
        <img src="<?='/basic/upload/'.$image->link?>" width="100" height="111" alt="111">
    </div>
<?php endforeach;?>
</div>
</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>