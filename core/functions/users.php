<?php 	
	function recover($mode,$email){
		$mode=sanitize($mode);
		$email=sanitize($email);
		$user_data=user_data(user_id_from_email($email),'user_id','first_name','username');
		if($mode='username'){
			email($email,'Your username',"Hello".$user_data['first_name']."Your username is ".$user_data['username']);
		}elseif($mode='password'){
			$generated_password=substr(md5(rand(9999,999999)), 0,8);
			change_password($user_data['user_id'], $generated_password);
			email($email,'Your password',"Hello".$user_data['first_name']."Your password is ".$generated_password."\n\nPardeep");
			
		}
	}
	function activate($email,$email_code){
		
		//pardeep to test this code
		
		$email=mysql_real_escape_string($email);
		$email_code=mysql_real_escape_string($email_code);
		
		
		$query="Select count(user_id) from users where email='$email' and email_code='$email_code' and active=0";
		if(mysql_result($query, 0)==1){
			mysql_query("Update users set active=1 where email='$email'");
			return true;
		}else{
			return false;
		}
		if(empty($errors)===false){
			
		}
	}
	
	function email($to,$subject,$body){
		mail($to,$subject,$body,'From: admn@yukti-group.com');
	}
	
	function change_password($user_id,$password){
		$user_id=(int)$user_id;
		$password=md5($password);
		mysql_query("update users set password='$password' where user_id=$user_id");		
	}
	
	function array_sanitize(&$item){
		$item=htmlentities(strip_tags(mysql_real_escape_string($item)));
	}

	function user_count(){
		return mysql_result(mysql_query("SELECT count(user_id) from users where active=1"), 0);
	}
	
	function user_exists($username){		
		$username=sanitize($username);
		$query=mysql_query("SELECT count(user_id) from users where username='$username'");
		return (mysql_result($query, 0)==1)? true : false ;
	}
	
	function email_exists($email){
		$email=sanitize($email);
		$query=mysql_query("SELECT count(user_id) from users where email='$email'");
		return (mysql_result($query, 0)==1)? true : false ;
	}
	
	function email_active($email){
		$email=sanitize($email);
		$query=mysql_query("SELECT count(user_id) from users where email='$email' AND active=1");
		return (mysql_result($query, 0)==1)? true : false ;
	}
	
	function user_id_from_email($email){
		$email=sanitize($email);
		$query=mysql_query("select user_id from users where email='$email'");
		return mysql_result($query, 0,'user_id');
	}
	
	function user_id_from_username($username){
		$username=sanitize($username);
		$query=mysql_query("select user_id from users where username='$username'");
		return mysql_result($query, 0,'user_id');
	}
	
	function login($email,$password){
		$user_id=user_id_from_email($email);
		
		$email=sanitize($email);
		$password=md5(sanitize($password));
		$query=mysql_query("SELECT count('user_id') from users where email='$email' and password='$password'");
		return (mysql_result($query, 0)==1)? $user_id : false ;
	}
	
	function logged_in(){
		return (isset($_SESSION['user_id']))? true: false;
	}
	
	function user_data($user_id){
		$data=array();
		$user_id=(int)$user_id;
		
		$func_num_args=func_num_args();
		$func_get_args=func_get_args();

		if($func_num_args>1){
			unset($func_get_args[0]);
			$fields='`'.implode('`,`',$func_get_args).'`';
			echo($fields);
				
			$query="select ".$fields." from users where user_id='$user_id'";
			$data=mysql_fetch_assoc(mysql_query($query));
			return $data;			
		}
		
	}
	
	
	
	function register_user($register_data){
		//$register_data=array();
		array_walk($register_data,'array_sanitize');
		$register_data['password']=md5($register_data['password']);
		$fields='`'.implode('`,`',array_keys($register_data)).'`';
		$data='\''.implode('\',\'',$register_data).'\'';
		
		$query="insert into users (".$fields.") values (" . $data.")";
		echo($query);
		mysql_query($query) or die(mysql_error());
		email($register_data['email'],'Activate your account',"Hello " .$register_user['first_name']. ",\n\n you need to actvate your account, so use the link below \n\n http://cubengg.co.uk/activate.php?email=".$register_data['email']."&email_code=".$register_data['email_code']);
		
		
		
	}
	
	function update_user($update_data){
		//Pardeep to update this again
		global $session_user_id;
		$update_data=array();
	
		$query="insert into users (".$fields.") values (" . $data.")";
		echo($query);
		mysql_query($query) or die(mysql_error());
	
	}
?>