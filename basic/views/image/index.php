<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Image</h1>
<ul>
<?php foreach ($images as $image): ?>
    <li>
        <h3><?= Html::encode("{$image->name}") ?></h3>
        <img src="<?='/basic/upload/'.$image->link?>" alt="111">
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>