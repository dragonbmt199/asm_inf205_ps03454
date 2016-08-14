<?php

class Products {
    var $productID = null;
    var $productName = null;
    var $productImage ="img/";
    var $productPrice =null;
    var $productDesc =null;
    var $productSale =null;
    var $productTooltips = null;
    
    public function __construct() { }
    // Lấy danh sách sản phẩm từ database
     function getList()
    {
         $db = new connect();
         $select = "select * from db_inf205";
         $result = $db->getList($select);
         return $result;
     }
     
     function getList_DESC()
    {
         $db = new connect();
         $select = "select * from products ORDER BY productID DESC";
         $result = $db->getList($select);
         return $result;
     }
     
     // Lấy danh sách sản phẩm có liệt kê theo trang
     function getListPage($from,$to)
     {
         $db = new connect();
         $select = "select * from products ORDER BY productID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }
     
     function getListPageOrderProduct($from,$to,$category)
     {
         $db = new connect();
         $select = "select * from products WHERE productCategory='$category' ORDER BY productID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }
     function CountProduct($productname)
    {
        $db = new connect();
        $select = "select Count(*) from products WHERE productCategory='$productname'";
        $result = $db->getInstance($select);
        return $result; 
    }
    
     function CountProductAll()
    {
        $db = new connect();
        $select = "select Count(*) from products";
        $result = $db->getInstance($select);
        return $result; 
    }
     
     // Lấy thông tin chi tiết sản phẩm theo ID
     function getProductById($productID)
     {
         $db = new connect();
         $select = "select * from products where productID=$productID";
         $result=$db->getInstance($select);
         return $result;
     }
    //Thêm sản phẩm mới
     function Addproduct($tensanpham,$image,$price,$mota,$mathang,$brand,$cauhinh,$product)
     {
            $db = new connect();
            $query = "INSERT INTO products(productName,productImage,productPrice,productDesc,productCategory,productBrand,productTooltips,productGroup) VALUES ('$tensanpham','$image','$price','$mota','$mathang','$brand','$cauhinh',$product')";
            $db->exec($query);
     }
     //Update sản phẩm
     function Editproduct($tensanpham,$image,$price,$mota,$mathang,$brand,$cauhinh,$productID)
     {
         $db = new connect();
         $query = "UPDATE products set productName='$tensanpham',productImage='$image',productPrice='$price',productDesc='$mota',productCategory= '$mathang', productBrand='$brand', productTooltips='$cauhinh' where productID='$productID'";
         $db->exec($query);
     }
     //Xoá sản phẩm
     function Deleteproduct($productID)
         {
            $db = new connect();
            $query = "delete from products where productID = '$productID'";
            $db->exec($query);
         }
}

?>
