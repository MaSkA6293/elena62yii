<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $surname;
    public $phone;
    public $email;
    public $message;
    public $verifyCode;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'surname', 'phone','email', 'message'], 'required'],
            [['phone'], 'number'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'captchaAction'=>'site/captcha'],
        ];
    }


    public function attributeLabels()
    {
        return [
           'name' => 'Имя',
           'surname' => 'Фамилия',
           'phone' => 'Телефон',
           'email' => 'Электронный адрес',
           'message' => 'Сообщение',
           'verifyCode' => 'Подтвердите код',
        ];
    }


     public function contact($emailto)
        {

            /* Проверяем форму на валидацию */
            if ($this->validate()) {
                Yii::$app->mailer->compose()
                ->setFrom([$this->email => $this->name])  /*от кого */
                ->setTo($emailto) /*куда*/
                ->setSubject($this->surname)  /*имя отправителя*/
                ->setTextBody($this->message)  /*текст сообщения*/
                ->send(); /*отправка*/

                return true;
            } else {
                return false;
            }
        }


}
