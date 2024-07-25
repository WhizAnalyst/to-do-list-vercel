<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $status
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task','description'], 'required'],
            [['status'], 'integer'],
            [['task','description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'status' => 'Status',
        ];
    }
}
