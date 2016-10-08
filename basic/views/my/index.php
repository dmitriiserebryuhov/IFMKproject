<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(['action' =>['my/create'], 'id' => 'forum_post', 'method' => 'post',]); ?>

    <?= $form->field($model, 'title') ?>    

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>