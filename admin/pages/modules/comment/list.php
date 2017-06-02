<?php

// Phân trang
$total_page = get_count('product_comment'); 
$show_page = 12;
$num_page = ceil($total_page/$show_page);
$comment = get_all('product_comment');
$get_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = $show_page*($get_page - 1);
if ($num_page > 1) {
  $comment = phan_trang('product_comment',false,false,$start,$show_page);
  
}
?>
<div class="row" >
		<div class="col-xs-12">
			<section class="panel panel-info" style="margin-top: 20px;">
			                              <header class="panel-heading">
			                                  Danh sách bình luận
			                            </header>
			                            <div class="panel-body table-responsive">
			                                <table class="table table-hover">
			                                  <thead>
			                                    <tr>
			                                      <th>ID</th>
			                                      <th>ID sản phẩm</th>
			                                      <th>Họ tên</th>
			                                      <th>Email</th>
			                                      <th>Ngày đăng</th>
			                                      <th>Trạng thái</th>
			                                      
			                                      <th></th>
			                                  </tr>
			                              </thead>
			                              <tbody>
			                                <?php if($comment) :  
			                                    foreach ($comment as $row) :
			                                ?>
			                                <tr>
			                                    <td><?php echo $row['id']; ?></td>
			                                    <td><?php echo $row['product_id']; ?></td>
			                                    <td><?php echo $row['name']; ?></td>
			                                    <td><?php echo $row['email']; ?></td>
			                                    <td><?php echo date('d-m-Y / h:i:s a',$row['written_date']); ?></td>
			                                    <?php if($row['status'] == 1){
			                                                  $st = 'Đã đăng' ;
			                                                }else if($row['status'] == 2){
			                                                  $st ='Không được đăng' ;
			                                                }else {
			                                                	$st ='Chưa duyệt' ;
			                                                	} ?>
			                                        <td><?php echo $st ?></td>		                                    
										
			                                  <!-- <td>$1500</td> -->
			                                  <td>
			                                      <a href="<?php to('comment','edit',$row['id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
			                                          <i class="fa fa-pencil-square-o"></i>
			                                      </a>
			                                  
			                                      <a href="<?php to('comment','delete',$row['id']) ?>" title="Xóa" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')">
			                                          <i class="fa fa-trash-o" ></i>
			                                      </a>
			                                  
			                                      <a href="<?php to('comment','view',$row['id']) ?>" type="button" class="btn btn-sm btn-success" title="Xem chi tiết">
			                                          <i class="fa fa-eye" ></i>
			                                      </a>
			                                  </td>
			                              </tr>
			                                <?php endforeach; endif; ?>
			                              
			                                </tbody>
			                            </table>
			                            
			                             
                      </div>
			                            </section>
		</div>
		
	
</div>
<?php if($num_page > 1) : 

                      $disabled1 = ($get_page == 1) ? 'hidden' : '';
                      $disabled2 = ($get_page == $num_page) ? 'hidden' : '';
                      // echo $link1;
                       ?>
                        <ul class="pagination" style="position: absolute; bottom: -150px;">
                          <li class="<?php echo $disabled1; ?>">
                            <a href="index.php?module=comment&action=list&page=<?php echo ($get_page-1) ?>">&laquo;</a>
                          </li>
                          <?php for($i =1;$i<= $num_page; $i++) : 
                            if($get_page == $i){
                              $active = 'active';
                            }else{
                              $active ='';
                            }
                          ?>
                            <li class="<?php echo $active; ?>"><a href="index.php?module=comment&action=list&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                          <?php endfor; ?>
                          <li class="<?php echo $disabled2; ?>">
                            <a href="index.php?module=comment&action=list&page=<?php echo ($get_page+1) ?>">&raquo;</a>
                          </li>
                        </ul>
                      <?php endif; ?> 