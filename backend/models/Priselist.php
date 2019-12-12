<?php

namespace backend\models;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "priselist".
 *
 * @property int $id
 * @property int $type
 * @property string $name
 * @property string $prise
 *
 * @property Typeuslugi $type0
 */
class Priselist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'priselist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'name', 'prise'], 'required'],
            [['type'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['prise'], 'string', 'max' => 20],
            [['type'], 'exist', 'skipOnError' => true, 'targetClass' => Typeuslugi::className(), 'targetAttribute' => ['type' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'prise' => 'Prise',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType0()
    {
        return $this->hasOne(Typeuslugi::className(), ['id' => 'type']);
    }

        public function getParentName()
        {
            $parent = $this->type0;

            return $parent ? $parent->name : '';
        }

        public static function getParentsList()
{
    // Выбираем только те категории, у которых есть дочерние категории
    $parents = Typeuslugi::find()
        ->select(['typeuslugi.id', 'typeuslugi.name'])
        ->join('INNER JOIN', 'priselist', 'priselist.type = typeuslugi.id')
        ->distinct(true)
        ->all();


        return ArrayHelper::map($parents, 'id','name');
}


}
