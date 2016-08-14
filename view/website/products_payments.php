<?php include "../view/website/header.php";?>
<section id="middle">
    <div id="middle_admin">
        <?php
        $o = new Order();
        $result = $o->getOrder($_SESSION['order_id']);
        $orderid = $result[0];
        $datecreate = $result[1];
        $customerid = $result[3];
        $customername = $result[4];
        $d = new DateTime($datecreate);
        echo '<center>';
        echo '<h1>Mã hóa đơn: '.$orderid.'</h1>';
        echo '<h4>Khách hàng: ['.$customerid.'] '.$customername.'</h4>';
        echo '<h4>Ngày lập: '.$d->format('d/m/Y').'</h4>';
        echo '</center>';
        ?>
            <br/>
        <table width="100%" class="cart_list">
            
            <tr>
                <td>Mã hàng</td>
                <td>Tên</td>
                <td>Số lượng</td>
                <td>Đơn giá</td>
                <td>Thành tiền</td>
            </tr>
            
        <?php $result1 = $o->getOrderDetail($_SESSION['order_id']);
        
        while($set = $result1->fetch()): ?>
            <tr>
                <td><?php echo $set['productID'] ?></td>
                <td><?php echo $set['productName'] ?></td>
                <td><?php echo $set['quantity'] ?></td>
                <td><?php echo $set['productPrice']?></td>
                <td><?php echo number_format($set['totals']); ?></td>
            </tr>
         <?php endwhile; ?>
            <tr>
                <td colspan="4">Tổng hóa đơn</td>
                <td><?php echo number_format($result['orderTotal']); ?></td>
            </tr> </table><br/><br/>
    </div>
</section>
<?php include "../view/website/footer.php";?>
