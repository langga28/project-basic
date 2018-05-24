<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "artist".
 *
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property string $gender
 * @property string $nationality
 * @property string $DOB
 */
class Artist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * {@inheritdoc} 
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'gender', 'nationality'], 'required'],
            [['DOB'], 'safe'],
            [['firstName', 'lastName'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 10],
            [['nationality'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstName' => 'First Name',
            'lastName' => 'Last Name',
            'gender' => 'Gender',
            'nationality' => 'Nationality',
            'DOB' => 'DOB',
        ];
    }
}
