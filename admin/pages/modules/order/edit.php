<?php if (!empty($_GET['id'])) {
    $row = get_one('`order`','id',$_GET['id']);
                   
    if (isset($_POST['customer_id'])) {
        update('`order`',$_POST,['id'=>$_GET['id']]);
        header('location: index.php?module=order&action=list');                          
        }       
}else{
    echo 'Tham so id khong hop le';
}?>
	<div class="row">
                        <div class="col-sm-12">
                            <section class="panel panel-info" style="margin-top: 20px;">
                              <header class="panel-heading">
                                  Cập nhật đơn hàng
                                </header>
                                <div class="panel-body">
                                
                                <div class="add-product">
                                <?php if($row) : ?>
							        <form action="" method="POST" role="form" enctype="multipart/form-data">
							        
							            <div class="form-group">
							                
							                <input type="hidden" class="form-control" name="customer_id" value="<?php echo $row['customer_id']; ?>">
							            </div>					            				            
							            
							            
							            <div  class="form-group">
							                <label for="">Trạng thái</label>
							                                <select name="status"  class="form-control" >
							                                    <option value="0">Đang xử lý</option>
							                                    <option value="1">Đang giao hàng</option>
							                                     <option value="2">Đã kết thúc</option>                                      
							                                </select>
							            </div>
							            
							            
							            <button type="submit" class="btn btn-primary">Cập nhật</button>
							        </form>
							        <?php endif; ?>
							    </div>
							    </div>
							    </section>
                    </div>
                    </div>

