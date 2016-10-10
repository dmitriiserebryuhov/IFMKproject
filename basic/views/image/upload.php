<?php
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
	<?= $form->field($model, 'name')->textInput() ?>
	
    <?= $form->field($model, 'link')->fileInput() ?>

    <button>Submit</button>

<?php ActiveForm::end() ?>