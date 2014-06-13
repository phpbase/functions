<?php
/**
 *	该函数用于获取Joomla新的密码的MD5码，填入对应的Joomla用户数据表的密码栏位，即可以重设密码。
 *	@copyright www.phpdb.net
 **/
function get_joomla_password($password,$salt){
	if (!$password || !$salt) return false;
	return md5($password.$salt).':'.$salt;

}

/**
 *	使用例子，把密码重设为112233的例子：
 **/
echo get_joomla_password('112233','t3Qzi1OOypjvqrvu62pKeb90wykZd3Ro');
