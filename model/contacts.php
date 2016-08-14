<?php
class contacts {
    //Khởi tạo thuộc tính cho lớp users
        var $contactID = null;
        var $contactName = null;
        var $contactEmail = null;
        var $contactPhone = null;
        var $contactDesc = null;
        
    public function __construct() { }
     //Khởi tạo phương thức lấy danh sách từ form liên hệ
        function getContactlist() 
        { 
            $db = new connect();
            $select = "select * from contacts";
            return $db->getList($select);
        }       
        
     //Lấy thông tin từ contact theo ID
        function getListById($contactID)
         {
            $db = new connect();
            $select = "select * from contacts where contactID='$contactID'";
            $result = $db->getList($select);
            $quest = $result->fetch();
            return $quest;
         }  
         
      //Khai báo phương thức thêm thông tin từ form liên hệ
         function addContact($fullname,$email,$sdt,$contactdesc)
          { 
            $db = new connect();
            $query = "INSERT INTO contacts(contactName,contactEmail,contactPhone,contactDesc) VALUES ('$fullname','$email','$sdt','$contactdesc')";
            $db->exec($query);
          }        
          //Khai báo phương thức xoá thông tin liên hệ
        function deleteContact($contactID)
         {
            $db = new connect();
            $query = "delete from contacts where contactID = $contactID";
            $db->exec($query);
         }
}

?>

