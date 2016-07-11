<?php
namespace common\widgets\map;

use yii\base\Widget;
class MapWidget extends Widget
{
    /**
     * 初始化
     * @see \yii\base\Object::init()
     */
    public function init(){
        parent::init();  //直接使用所继承的父类的init函数，未重写init    
    }
    
    
    public function run(){
        $connection = \Yii::$app->db;
        $command = $connection->createCommand('SELECT address FROM room');
        $addresses = $command->queryColumn();//获取房屋地址列，此为在主页面显示的，获取了所有的房屋地址
        return $this->render('index',['addresses'=>json_encode($addresses)]);
    }
}