<?php 
namespace app\models;

use yii\db\ActiveRecord;

class Mytable extends ActiveRecord
{
public function rules()
    {
        return [
            [['title'], 'required'],
            
        ];
    }
}
?>