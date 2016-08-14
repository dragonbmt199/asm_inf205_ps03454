<?php include "../view/admin/header_admin.php";?>
<section id="middle">
 <div id="middle_admin">
     <br/><center><h1>Danh sách sản phẩm</h1></center><br/>
    <center><table border="0" width="840" class="products_list_manager">
        <tr>
         <th>Mã sản phẩm</th>
         <th>Tên sản phẩm</th>
         <th>Hình ảnh</th>
         <th>Giá</th>
         <th>Giới thiệu</th>
         <th>Loại sản phẩm</th>
         <th>Update</th>
         <th>Delete</th>
        </tr>      
        <?php
        $quest = new Products();
         $display = 4;
        if(isset($_GET['page']) && (int)$_GET['page']) {
                $page = $_GET['page'];
            } else { 
                $count = $quest->CountProductAll();
                $record = $count[0];
                if($record > $display) {
                    $page = ceil($record/$display);
                } else {
                    $page = 1;
                }
            }
        $start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;
        $result = $quest->getListPage($start,$display);
        
       
         while($set = $result->fetch())
         {
            echo "<tr>";
            echo "<th>$set[productID]</th>";
            echo "<th>$set[productName]</th>";
            echo "<th><img src=".'"'."../view/img/picdt/"."$set[productImage]".'"'."width=" .'"'."100px" .'"'."/></td>";
            echo "<th>$set[productPrice]₫</th>";
            echo "<th>$set[productDesc]</th>";
            echo "<th>$set[productCategory]</td>";?>
           <th><a href='?action=update_product&id=<?php echo "$set[productID]";?>'><img src="../view/img/update-icon.png" width="35px"/></a></th>
           <th><a href="?action=delete_product&id=<?php echo "$set[productID]";?>"><img src="../view/img/delete-icon.png" width="35px"/></a></th>
           </tr>
         <?php } ?>     
        </table></center>
        <?php
        if($page > 1) { 
                
                $next = $start + $display;
                $prev = $start - $display;
                $current = ($start/$display)+1;?>
                <center><table class="products_list_pages">
                        <tr>
                            <?php  //Hien thi trang Previous
                                if($current !=1) {
                                echo "<td><a href='administrator.php?action=$action&start=$prev&page=$page'>Previous</a></td>";
                                } ?>
                            
                            <?php 
                                for($i=1;$i<=$page;$i++) {
                                    if($current != $i) {
                                    echo "<td><a href='administrator.php?action=$action&start=".($display*($i-1))."&page=$page'>$i</a></td>";
                                } else {
                                    echo "<td class='current'>$i</td>";
                                }
                                } //End: FOR
                               ?>
                            
                                <?php //Hiển thị trang trước đó

                                 if($current != $page) {
                                     echo "<td><a href='administrator.php?action=$action&start=$next&page=$page'>Next</a></td>";
                                 }

                                }
                                ?>
                        </tr>
        </table> </center>
        
    </div>
    </section>
   <?php include "../view/website/footer.php";?>
