<?php

class WelcomeModel {

    public function get_demo_list() {
        $list = array(
            array('id' => 1, 'name' => 'jack', 'email' => 'jack@qq.com'),
            array('id' => 2, 'name' => 'mary', 'email' => 'mary@qq.com'),
            array('id' => 3, 'name' => 'hello', 'email' => 'hello@qq.com'),
        );
        return $list;
    }
}
