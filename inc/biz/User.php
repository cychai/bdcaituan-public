<?php
include_once ROOT . '/dat/UserDB.php';

class User {

    public static function get_user_list() {
        $userInfo = UserDB::getUserList();
        return $userInfo;
    }

    public static function add_user($post) {
        $res = UserDB::addUser($post);
        return $res;
    }
}

