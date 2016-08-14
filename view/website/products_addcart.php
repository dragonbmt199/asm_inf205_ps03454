<?php include "../view/website/header.php";?>
<section id="middle">
    <div id="middle_admin">
        <?php
        if(isset($_SESSION['check'])){
        if(!isset($_SESSION['cartview']) || count($_SESSION['cartview'])==0){
            echo"<center><br/><br/><h3>Bạn chưa chọn sản phẩm nào</h3>";
            echo '<br/><br/>'.'Giỏ hàng rỗng'."</center>".'<br/><br/><br/><br/>';
            unset($_SESSION['tongtien']);
            }else{
        ?>
        <center><h1>Danh sách sản phẩm </h1></center>
            <form action="../controller/index.php" method="post">
            <input type="hidden" name="action" value="update_cart"/>
            <table class="cart_list">
            <tr>
            <td class="cart_list_title">Tên sản phẩm</td>
            <td class="cart_list_title">Giá</td>
            <td class="cart_list_title">Hình ảnh</td>
            <td class="cart_list_title">Số lượng</td>
            <td class="cart_list_title">Thành tiền</td>
            </tr>          
        <?php
         foreach($_SESSION['cartview'] as $key => $item):
            $cost = number_format($item['cost'],2);
            $total = number_format($item['total'],2);
        ?>
        <tr>
            <td> <?php echo $item['name'];?> </td>
            <td> <?php echo $cost?> </td>
            <td> <img src="../view/img/picdt/<?php echo $item['img'];?>" width="100px" /> </td> 
            <td> <input type="text" name="newqty[<?php echo $key; ?>]" value="<?php echo $item['qty']; ?>" size="4" class="cart_list_qty"/> </td>
            <td> <?php echo $total; ?> </td> 
        </tr>
         
         <?php endforeach; ?>   
         
        <tr>
            <td colspan="3" style="text-align: center; background:#666; color:#900; font-size: 12px;">
                <b>Tổng tiền</b>
            </td>
            <td colspan="2"> 
                <h3><?php echo get_subtotal();?>₫</h3>
                <?php
                $tongtien = get_subtotal();
                $tongsanpham = get_subtotalitem();
                $_SESSION['tongtien']=$tongtien;
                $_SESSION['tongsanpham']=$tongsanpham;
                ?>
             </td>
         </tr>
         
        <tr>
            <td colspan="5">
                <input type="submit" value="Update Cart" style="cursor:pointer;color: #000; background:#e9e9e9; border:1px solid #ccc; margin:5px; padding:5px;"/>
                 
           </td>
        </tr>
            </table>
            <br/>
            <center><p>Chọn "Update cart" để cập nhật số lượng hàng. Chọn 0 để bỏ mặt hàng.</p></center>
        </form>
                        
                        
        <center><table class="cart_list_options">
          
                <tr>
                    <td>
                        <a href="?action=payments"><img src="../view/img/payments.png" width="50"></a><p><b>Thanh toán</b> </p>
                    </td>
                    <td>
                        <a href="?action=products_smathphone"><img src="../view/img/shop-cart-add-icon.png" width="50"></a><p><b>Thêm sản phẩm</b> </p>
                    </td>
                    <td>
                        <a href="?action=empty_cart"><img src="../view/img/shopping-cart-remove-icon.png" width="50"></a> <p><b>Xóa giỏ hàng</b> </p>
                    </td>
                    
                </tr>
        </table></center>               
          <?php } ?>
          <?php }
          else
          {
            echo '<center><br/><br/><h3>Bạn phải đăng nhập để thực hiện chức năng này</h3>';
            echo '<br/>';
            echo ' <form action="?action=login" method="post" ><input type="submit" name="go_login" value="Đi đến trang đăng nhâp" 
                     style="cursor:pointer;color: #000; background:#e9e9e9; border:1px solid #ccc; margin:5px; padding:5px;" /></form>';
            echo '</center><br/><br/><br/><br/><br/><br/>';
          }
           ?>
    </div>
</section>
<?php include "../view/website/footer.php";?>

