<?php
class connect{
    // Khởi tạo thuộc tính cho connect
    var $db= Null;
    // Kết nối databasse
    public function __construct() {
        $dns='mysql:host=localhost;dbname=db_inf205';
        $user='root';
        $pass='';
        $this->db= new PDO($dns,$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }
    // Lấy tất cả dữ liệu từ database
    public function getList($select){
        $results = $this->db->query($select);
        return $results;
    }
    // Tạo phương thức lấy 1 kết quả
    public function getInstance($select){
        $results = $this->db->query($select);
        $result = $results->fetch();
        return $result;
    }    
    // Tạo phương thức thực thi câu lệnh insert
    public function exec($query){
        $result = $this->db->exec($query);
        return $result;
    }
}
?>