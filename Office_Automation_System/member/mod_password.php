<?php
 
(!defined('IN_TOA') || !defined('IN_ADMIN')) && exit('Access Denied!');

empty($do) && $do = 'list';
if ($do == 'list') {
		include_once('template/password.php');
} elseif ($do == 'save') {
	$id = $_USER->id;
	
	$user = $db->fetch_one_array("SELECT password FROM ".DB_TABLEPRE."user WHERE id = '$id'  ");
	if(md5(getGP('oldpassword','P'))==$user['password']){
		$user = array(
			'password' => md5(getGP('password','P'))
		);
		update_db('user',$user, array('id'=>$id));
	}else{
		show_msg('输入的旧密码不匹配，请重新输入！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');	
	}
	show_msg('密码修改成功！', 'admin.php?ac='.$ac.'&fileurl='.$fileurl.'');	

} 
?>