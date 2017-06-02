<?php 

if (!empty($_GET['id'])) {
    $row = get_one('product_comment','id',$_GET['id']);
}else{
    echo 'Tham so id khong hop le';
}
?>
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
          <header class="panel-heading">
              Cập nhật bình luận
            </header>
            <div class="panel-body table-responsive">
                            <p>
								<a href="index.php?module=comment&action=list" class="btn btn-primary">
									Danh sách
								</a>
								
								<a href="index.php?module=comment&action=edit&id=<?php echo $row['id'] ?>" class="btn btn-info">
									Chỉnh sửa
								</a>
								 <a href="index.php?module=comment&action=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắc muốn xóa bình luận? ')">
									Xóa 
								</a>
							</p>
                            	<?php if($row) : ?>
                                <table class="table table-hover table-bordered">
                                  <tbody>
									<tr>
										<th>ID</th>
										<td><?php echo $row['id'] ?></td>
									</tr>
									<tr>
										<th>ID Sản phẩm</th>
                                        
										<td><?php echo $row['product_id'] ?></td>
									</tr>
									<tr>
										<th>Họ tên</th>
										<td><?php echo $row['name'] ?></td>
									</tr>
									<tr>
										<th>Email</th>
										<td><?php echo $row['email'] ?></td>
									</tr>
                                    <tr>
                                        <th>Nội dung</th>
                                        <td><?php echo $row['comment'] ?></td>
                                    </tr>
									<tr>
										<th>Trạng thái</th>
                                        <?php if($row['status'] == 1){
			                                                  $st = 'Đã đăng' ;
			                                                }else if($row['status'] == 2){
			                                                  $st ='Không được đăng' ;
			                                                }else {
			                                                	$st ='Chưa duyệt' ;
			                                                	} ?>
										<td><?php echo $st ?></td>
									</tr>
                                    <tr>
                                        <th>Ngày tạo</th>
                                        <td><?php echo date('d-m-Y / h:i:s a',$row['written_date']); ?></td>
                                    </tr>
								</tbody>
                            </table>
                            <?php endif; ?>
                            
                            </div>