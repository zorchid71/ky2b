<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPage1() {
        return $this->render('page1');
    }

    public function actionPage2() {
        //การส่งค่าไปที่ view
        $hello = "Hello world   kittiporn"; //paramiter ที่ส่งไป page2
        $a = 5;
        $b = 4;
        $c = $a + $b;
        return $this->render('page2', [
                    'hello' => $hello,
                    'a' => $a,
                    'b' => $b,
                    'c' => $c
        ]);
    }

    public function actionPage3() {
        return $this->render('page3');
    }

}
