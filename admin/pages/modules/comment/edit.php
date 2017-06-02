<?php if (!empty($_GET['id'])) {
    $row = get_one('product_comment','id',$_GET['id']);
                   
    if (isset($_POST['name'])) {
        update('product_comment',$_POST,['id'=>$_GET['id']]);
        header('location: index.php?module=comment&action=list');                          
        }       
}else{
    echo 'Tham so id khong hop le';
}?>
	<div class="row">
                        <div class="col-sm-12">
                            <section class="panel panel-info" style="margin-top: 20px;">
                              <header class="panel-heading">
                                  Cập nhật bình luận
                                </header>
                                <div class="panel-body">
                                
                                <div class="add-product">
                                <?php if($row) : ?>
							        <form action="" method="POST" role="form" enctype="multipart/form-data">
							        
							            <div class="form-group">
							                
							                <input type="hidden" class="form-control" name="name" value="<?php echo $row['name']; ?>">
							            </div>
							            <div class="form-group">
							                <label for="">Nội dung </label>
							                <textarea class="form-control" name="comment" rows="5">  <?php echo $row['comment']; ?></textarea>
							            </div>

							            
							            <div class="form-group">
							                
							                <input type="hidden" class="form-control" name="product_id" value="<?php echo $row['product_id']; ?>" >
							            </div>
							            <div class="form-group">
							                
							                <input type="hidden" class="form-control" name="written_date" value="<?php echo $row['written_date']; ?>" >
							            </div>            
							            
							            <div  class="form-group">
							                <label for="">Trạng thái</label>
							                                <select name="status"  class="form-control" >
							                                    <option value="0">0 - Chưa duyệt</option>
							                                    <option value="1">1 - Duyệt-Được phép đăng</option> 
							                                    <option value="2">2 - Duyệt-Không được phép đăng</option>                                      
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

