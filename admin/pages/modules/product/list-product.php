<?php 

$products = get_all('product');

// Phân trang
$total_page = get_count('product'); 
$show_page = 8;
$num_page = ceil($total_page/$show_page);
//$comment = get_all('comment',false,false,8);
$get_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = $show_page*($get_page - 1);
if ($num_page > 1) {
  $products = phan_trang('product',false,false,$start,$show_page);
  
}
?>

	<div class="row" >
		<div class="col-xs-12 ">
			<section class="panel panel-info" style="margin-top: 20px;">
			    <header class="panel-heading">
			        Danh sách sản phẩm
			    </header>
			<div class="panel-body">
				
				<p>
					<a href="index.php?module=product&action=add-product" class="btn btn-success btn-sm">Thêm mới</a>
				</p>
				<table class="table table-hover table-responsive  text-center">
					<thead>
						<tr>
							<th>Id</th>
							<th>Hình ảnh</th>
							<th>Tên sản phẩm</th>
							<th>Giá bán (đ/kg)</th>
							<th>Lượt xem</th>
							<th>Id nhóm SP thứ cấp</th>
							<th>Trạng thái</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if($products) :  
							foreach ($products as $row) :
								//var_dump($products);
								?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td class="fix-img"><img src="../../uploads/products/<?php echo $row['image']; ?>" width="auto"></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo number_format($row['price'],0,' ','.') ?></td>
							
									<td><?php echo $row['views']; ?></td>
									<td><?php echo $row['id_subcate']; ?></td>
									
									<?php if($row['status'] == 1){
			                                                  $st = 'Enabled' ;
			                                                }else {
			                                                	$st ='Disabled' ;
			                                                	} ?>
			                                        <td><?php echo $st ?></td>
									<td>
										<a href="<?php to('product','edit-product',$row['id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
			                                <i class="fa fa-pencil-square-o"></i>
			                            </a>
			                            <a href="<?php to('product','delete-product',$row['id']) ?>" title="Xóa" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa? ')">
			                                <i class="fa fa-trash-o" ></i>
			                            </a>		                                      
			                            <a href="<?php to('product','view-product',$row['id']) ?>" type="button" class="btn btn-sm btn-success" title="Xem chi tiết">
			                                <i class="fa fa-eye" ></i>
			                           	</a>
									</td>
								</tr>
							<?php endforeach; endif; ?>
						</tbody>
				</table>
		<?php if($num_page > 1) : 

                $disabled1 = ($get_page == 1) ? 'hidden' : '';
                $disabled2 = ($get_page == $num_page) ? 'hidden' : '';
                // echo $link1;
                 ?>
                  <ul class="pagination">
                    <li class="<?php echo $disabled1; ?>">
                      <a href="index.php?module=product&action=list-product&page=<?php echo ($get_page-1) ?>">&laquo;</a>
                    </li>
                    <?php for($i =1;$i<= $num_page; $i++) : 
                      if($get_page == $i){
                        $active = 'active';
                      }else{
                        $active ='';
                      }
                    ?>
                      <li class="<?php echo $active; ?>"><a href="index.php?module=product&action=list-product&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endfor; ?>
                    <li class="<?php echo $disabled2; ?>">
                      <a href="index.php?module=product&action=list-product&page=<?php echo ($get_page+1) ?>">&raquo;</a>
                    </li>
                  </ul>
                <?php endif; ?> 
			</div>
			 
			</section>
		</div>
	</div>
	

