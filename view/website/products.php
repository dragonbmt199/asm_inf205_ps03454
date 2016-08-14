<?php include '../view/website/header.php'; ?>

    <section id="middle">
    
    	<div id="mid_left">
            <?php include '../view/website/noidung_nav_left.php'; ?>
        </div>
        
    	<div id="mid_right">
        	<div class="banner"><!-- Banner -->
            <?php include '../view/website/banner.php'; ?>
       </div><!--End Banner -->

       <div id="frame_mid">
           <div class="frame_right_sp">
          <div class="frame_tieude_mid"> <h3 id="h3">CÁC SẢN PHẨM</h3>   </div>
                    <?php
        $pro = new Products();
        
        
        $display = 12;
        if(isset($_GET['page']) && (int)$_GET['page']) {
                $page = $_GET['page'];
            } else { //neu chua xac dinh, thi tim so trang
                $count = $pro->CountProduct($Category);
                $record = $count[0];
                
                if($record > $display) {
                    $page = ceil($record/$display);
                } else {
                    $page = 1;
                }
            }
        $start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;

        $result = $pro->getListPageOrderProduct($start,$display,$Category);
        $dem =0;
        while($set = $result -> fetch()):
            $dem++;?>
           <div class="frame_sanpham">
            <div class="thumbnail-item_sp"><a href="?action=products_details&productID=<?php echo $set['productID']?>"><img class="thumbnail_sp" src="<?php echo '../view/img/picdt/'.$set['productImage']?>" alt="sp1" /></a>
            <div class="tooltip_sp"><?php echo $set['productTooltips'] ?> </div>
            </div>
            <p class="p_right"><?php echo $set['productSale'] ?></p>
            <p class="txt_red"><?php echo number_format($set['productPrice'])?>₫</p>
            <a class="a_right" href="?action=products_details&productID=<?php echo $set['productID'] ?>"><?php echo $set['productName'] ?></a>
             </div>
                        
           <?php
        if($dem%4==0)
       {
        echo '';
       }
        endwhile;  
      ?>  
            <?php 
            
            if($page > 1) { //hien thi so trang
                
                $next = $start + $display;
                $prev = $start - $display;
                $current = ($start/$display)+1;?>
          <center><div class="nextprev">
                        
                            <?php  //Hiển thị trang trước
                                if($current !=1) {
                                echo "<td><a href='index.php?action=$action&start=$prev&page=$page'>Previous</a></td>";
                                } ?>
                            
                            <?php //Hiển thị số link trang
                                for($i=1;$i<=$page;$i++) {
                                    if($current != $i) {
                                    echo "<td><a href='index.php?action=$action&start=".($display*($i-1))."&page=$page'>$i</a></td>";
                                } else {
                                    echo "<td class='current'>$i</td>";
                                }
                                } //kết thúc vòng lặp for
                               ?>
                            
                                <?php //Hiển thị trang kế tiếp

                                 if($current != $page) {
                                     echo "<td><a href='index.php?action=$action&start=$next&page=$page'>Next</a></td>";
                                 }

                                }
                                ?>
              </div>     </center>               
          </div>     	       
      </div><!-- end right_frame -->
   </div>
             <!-- end mid right -->           
    </section><!--End section middle -->

<?php include '../view/website/footer.php'; ?>