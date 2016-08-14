<?php include '../view/admin/header_admin.php'; ?>

<section id="middle">
    <div id="middle_admin">
    	<center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Danh sách đơn hàng</h1></center>
        <center><table border="0" class="products_list_manager">
        <tr>
         <th>STT</th>
         <th>Thông tin đơn hàng</th>
         <th>Giá tiền</th>
         <th>Số lượng</th>
         <th>Tổng tiền</th>
         <th>Delete</th>
        </tr>
        
        <?php
        
        $quest = new order();
        $get = new products();
        $result = $quest->getListOrder_DESC();
        // Goi phuong thuc lay danh sach = vong lap while
         while($set = $result->fetch())
         {
           
            $name = $get -> getProductById($set['productID']);
          
            echo "<tr>";
            echo "<th>$set[orderID]</th>";
            echo "<th>";?><a href="?action=orders_view&id=<?php echo $set['orderID'] ?>"><?php echo $name['productName'];?> </a></td>
   <?php    echo "<th>"; echo number_format($set['productPrice']);echo"</th>";
            echo "<th>$set[quantity]</th>";
            echo "<th>";echo number_format($set['totals']);echo"</th>";
            echo "<th>"; ?><a href="?action=delete_order&id=<?php echo $set['orderID'] ?>"><img src="../view/img/delete-icon.png" width="35px"/></a></th>
       
           
          <?php } ?>
        
        </table></center>
        <br/>
    </div>   
</section>

<?php include '../view/website/footer.php'; ?>

