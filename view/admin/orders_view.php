<?php include '../view/admin/header_admin.php'; ?>
<?php
$id = $_GET['id'];      
        $objQuest = new Order();
        $result = $objQuest->getOrder($id);
?>
<section id="middle">
    <div id="middle_admin">
        <center><h1 style=" margin: 20px; color: #900; font-size: 24px;">Thông tin chi tiết đơn hàng</h1></center>
        <br/>
        <center><table border="0"  width="400" class="products_list_manager">
        <tr>
                    <th>Mã hóa đơn</th>
                    <th> <?php echo $result[0]; ?></th>
                </tr>
                
                <tr>
                    <th>Ngày mua</th>
                    <th> <?php echo $result[1]; ?></th>
                </tr>
                
                 <tr>
                    <th>Tổng tiền</th>
                    <th> <?php echo number_format($result[2]); ?>₫</th>
                </tr>
                
                <tr>
                    <th>Tên khách hàng</th>
                    <th> <?php echo $result[4]; ?></th>
                </tr>
        
        </table></center>
    </div>
</section>