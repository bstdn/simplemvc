<?php

class WelcomeController {

    public function index() {
        //包含模型并实例化
        include './models/WelcomeModel.php';
        $model = new WelcomeModel();

        //通过模型，获取数据
        $list = $model->get_demo_list();

        include './views/welcome/index.php';
    }
}
