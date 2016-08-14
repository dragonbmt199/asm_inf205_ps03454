<?php

class Order {
    public function __construct() {}  
    // Tạo hóa đơn khi người dùng nhấn nút Thanh toán
    public function createOrder($userid)
   {
        $db= new connect();
        $date = new DateTime("now");
        $orderdate = $date->format("Y-m-d");
        $query = "insert into db_inf205.orders(orderID,orderDate,orderTotal,userID) values (Null,'$orderdate',0,'$userid')";
        $db->exec($query); $int = $db->getInstance("select orderID from db_inf205.orders order by orderID desc limit 1");
        return $int[0];
    }
    
    // Thêm danh sách chi tiết sản phẩm từng hóa đơn
    public function insertOrderDetail($proid,$orderid,$price,$quantity,$total)
    {
        $db = new connect();
        $query = "insert into orderdetails values('$proid','$orderid','$price','$quantity','$total')";
        $db->exec($query);
    }
    
    // Cập nhật tổng hóa đơn
    public function updateOrderTotal($orderid,$total)
    {
        $db = new connect();
        $query = "update orders set orderTotal='$total' where orderID=$orderid";
        $db->exec($query);
    }
    
    // Lấy hóa đơn theo ID
    function getOrder($orderid)
    {
        $db = new connect();
        $select = "select orderID,orderDate,orderTotal,c.userID,c.fullname from db_inf205.orders o inner join user c on o.userID = c.userID where orderID='$orderid'";
        $result = $db->getInstance($select);
        return $result;
    }
    
    
    // Lấy chi tiết hóa đơn
    function getOrderDetail($orderid)
    {
        $db = new connect();
        $select = "select m.productID,productName,quantity,od.productPrice,totals from orderdetails od inner join products m on od.productID = m.productID where orderID='$orderid'";
        $result = $db->getList($select);
        return $result;
    }
    
    function getListOrder_DESC()
    {
         $db = new connect();
         $select = "select * from orderdetails ORDER BY orderID DESC";
         $result = $db->getList($select);
         return $result;
     }

     
     function getListOrderUser($id)
         {
            $db = new connect();
            $select = "select * from orders where orderID='$id'";
            $result = $db->getList($select);
            return $result ;
         }  
    function Deleteorder($id)
         {
            $db = new connect();
            $query = "delete from orderdetails where orderID='$id'";
            $db->exec($query);
         }
    
}

?>
