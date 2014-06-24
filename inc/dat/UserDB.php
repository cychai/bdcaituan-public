<?php

include_once ROOT . "/libs/DB.php";

class UserDB {

    private static $user_info = '*';

    //获取用户数据
    public static function getUserList() {
        $sql = 'SELECT * FROM bd_ct_user';
        $dbcfg = Conf::$db['UserDB'];
        $db = DB::getInstance($dbcfg);
        $tmp = $db->get_rs($sql);

        return $tmp;
    }

    //添加用户
    public static function addUser($post){
        $sql = 'INSERT INTO bd_ct_user(`name`, sex, height, weight, size, email, mobile, address, blessings,update_time )VALUES(:name, :sex, :height, :weight, :size, :email, :mobile, :address, :blessings, NOW())';
        $dbcfg = Conf::$db['UserDB'];
        $params = array(
            'name' => $post['name'],
            'sex' => isset($post['sex']) ? $post['sex'] : 1,
            'height' => $post['height'],
            'weight' => $post['weight'],
            'size' => isset($post['size']) ? $post['size'] : 'l',
            'email' => $post['email'],
            'mobile' => $post['mobile'],
            'address' => $post['address'],
            'blessings' => $post['blessings'],
        );
        $db = DB::getInstance($dbcfg);
        $tmp = $db->affect_num($sql, $params);

        $last_insert_id = $db->last_insert_id();

        return $last_insert_id;
    }
}
