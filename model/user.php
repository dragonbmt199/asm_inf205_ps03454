<?php
class user
{
    // Khởi tạo thuộc tính cho lớp user
    var $userID = null;
    var $fullname = Null;
    var $username = Null;
    var $password = Null;
    var $email = Null;
    var $diachi = Null;
    var $sodienthoai = Null;
    
    public function __construct() {} 
    
    // Khai báo phương thức lấy tài khoản đăng nhập    
    public function checkUser($username,$password) 
    { 
        $db = new connect();               
        $select="SELECT * FROM user WHERE username='$username' AND password='$password'"; 
        $result = $db->getInstance($select); 
        //echo $select; 
        if($result!=null) 
            return true; 
        else 
            return false; 
    }
    function getUser() 
        { 
            $db = new connect();
            $select = "select * from user";
            return $db->getList($select);
        }  
    public function userid($username,$password){
        $db = new connect();
        $select = "SELECT userID FROM user WHERE username='$username' AND password='$password'";
        $result = $db->getInstance($select);
        return $result;    
    }
    public function permision($username,$password) 
    { 
        $db = new connect(); 
        $select = "select * from user where username='$username' and password='$password' "; 
        return $db->getList($select); 
       
    }
    function getInfoById($username){
        $db = new connect();
        $select = "select * from user where username='$username'";
        $result = $db->getList($select);
        $quest = $result->fetch();
        return $quest;
    }    
    //Khai báo phương thức đăng ký tài khoản
    function insertUser($fullname,$username,$password,$email,$diachi,$sdt,$permissions)
        { 
        $db = new connect();
        $query = "INSERT INTO user(fullname,username,password,email,diachi,sdt,permissions) VALUES ('$fullname','$username','$password','$email','$diachi','$sdt','$permissions')";
        $db->exec($query);
        }
    
    // Khai báo phương thức kiểm tra mật khẩu
    public function checkPassword($username,$email) 
    { 
        $db = new connect();               
        $select="select * from user where username='$username' or email='$email'"; 
        $result = $db->getInstance($select); 
        //echo $select; 
        if($result!=null) 
            return true; 
        else 
            return false; 
    }
    //Khai báo phương thức chỉnh sửa thông tin đăng nhập
    public function updatePassword($username,$newpassword)
        { 
        $db = new connect();
        $query = "update user set password='$newpassword' where username='$username'";
        $db->exec($query);
        }
    public function getPassword(){ 
        $pass_length = 8;         
        $symbol = "~!@#$%^&*(){}[]<>"; 
        $symbol_count = strlen($symbol); 
        $index = mt_rand(0,$symbol_count); 
        $this->password = substr($symbol,$index,1); 
        $this->password .= chr(mt_rand(48,57)); 
        $this->password .= chr(mt_rand(65,90));
        while(strlen($this->password) < $pass_length) 
        { 
            $this->password .= chr(mt_rand(97,122)); 
        }                
        $this->password = str_shuffle($this->password);         
        return $this->password; 
    } 
    public function checkInfo($username,$email)
     {
        $db = new connect(); 
        $select="select * from user where username='$username' and email='$email'";
        $result = $db->getInstance($select);
        // echo $select;
        if($result!=null)
        return true;
        else
        return false;
    }
}  ?>

