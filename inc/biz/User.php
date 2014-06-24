<?php
include_once ROOT . '/dat/UserDB.php';

class User {

    public static function get_user_list() {
        $userInfo = UserDB::getUserList();
        return $userInfo;
    }

    public static function add_user($post) {
    	//var_dump($post); exit;
    	$order_num = $post['order-num'];
    	if($order_num == 1 ){
			$res = UserDB::addUser($post);
    	}else if($order_num > 1){
    		// first insert pre post
    		$pre_post = array(
	    		'name' => $post['name'],
	    		'sex' => $post['sex'],
	    		'height' => $post['height'],
	    		'weight' => $post['weight'],
	    		'size' => $post['size'],
	    		'email' => $post['email'],
	    		'mobile' => $post['mobile'],
	    		'address' => $post['address'],
	    		'blessings' => $post['blessings'],
    		);
    		$res = UserDB::addUser($pre_post);

    		// second insert new post
    		$loop = $post['order-num'];
	    	for($_i = 1; $_i < $loop; $_i++){
	    		$form_data = self::build_post($post, $_i);
	    		$res = UserDB::addUser($form_data);
	    	}
    	}

        return $res;
    }

    public static function build_post($form, $i){
	 	$post = array(
    		'name' => $form['name'],
    		'sex' => $form['sex_' . $i],
    		'height' => $form['height_' . $i],
    		'weight' => $form['weight_' . $i],
    		'size' => $form['size_' . $i],
    		'email' => $form['email'],
    		'mobile' => $form['mobile'],
    		'address' => $form['address'],
    		'blessings' => $form['blessings'],
    	);

    	return $post;
    }
}

