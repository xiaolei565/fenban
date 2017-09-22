<?php
/**
 * 安徽理工大学微信数据查询示例代码
 * ================================
 * Copyright 2015-2017 AUST1945
 * http://www.aust.edu.cn
 * ================================
 * Author:XueLei
 * weibo：@风筝有风1234
 * Date:2017-07-26
 */

//require_once './includes/configure.php';


/*替换为你自己的数据库名*/
$dbname = "test";
 
/*依次填写，数据库地址，端口，帐号，密码*/
$host ="austnmc.bestaust.cn";
$port ="3306";//端口默认3306
$user ="root";
$pwd = "austnmc2016";

/*接着调用mysql_connect()连接服务器*/
$link = @mysql_connect("{$host}:{$port}",$user,$pwd,true);
if(!$link) {
  die("Connect Server Failed: " . mysql_error());
}
/*连接成功后立即调用mysql_select_db()选中需要连接的数据库*/
if(!mysql_select_db($dbname,$link)) {
  die("Select Database Failed: " . mysql_error($link));
}
/*至此连接已完全建立，就可对当前数据库进行相应的操作了*/
/*！！！注意，无法再通过本次连接调用mysql_select_db来切换到其它数据库了！！！*/
/* 需要再连接其它数据库，请再使用mysql_connect+mysql_select_db启动另一个连接*/
 
/**
* 接下来就可以使用其它标准php mysql函数操作进行数据库操作
*/

//创建一个数据库表
function _create_table($sql){
	mysql_query($sql) or die('创建表失败，错误信息：'.mysql_error());
	return "创建表成功";
}

//插入数据
function _insert_data($sql){
  	if(!mysql_query($sql)){
    	return 0;	//插入数据失败
    }else{
      	if(mysql_affected_rows()>0){
      		return 1;	//插入成功
      	}else{
      		return 2;	//没有行受到影响
      	}
    }
}

//删除数据
function _delete_data($sql){
  	if(!mysql_query($sql)){
    	return 0;	//删除失败
  	}else{
      	if(mysql_affected_rows()>0){
      		return 1;	//删除成功
      	}else{
      		return 2;	//没有行受到影响
      	}
    }
}

//修改数据
function _update_data($sql){
  	if(!mysql_query($sql)){
    	return 0;	//更新数据失败
    }else{
      	if(mysql_affected_rows()>0){
      		return 1;	//更新成功;
      	}else{
      		return 2;	//没有行受到影响
      	}
    }
}

//检索数据
function _select_data($sql){
	$ret = mysql_query($sql) or die('SQL语句有错误，错误信息：'.mysql_error());
	return $ret;
}

//删除表
function _drop_table($sql){
	mysql_query($sql) or die('删除表失败，错误信息：'.mysql_error());
	return "删除表成功";
}

?>
