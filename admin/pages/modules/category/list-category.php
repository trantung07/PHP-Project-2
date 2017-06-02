<?php 

$cats = get_all('category');

// echo '<pre>';
// var_dump($cats);
?>

	<div class="row" >
		<div class="col-md-8 col-xs-12">
			<section class="panel panel-info" style="margin-top: 20px;">
			                              <header class="panel-heading">
			                                  Danh sách nhóm sản phẩm
			                            </header>
			                            <div class="panel-body table-responsive">
			                                <table class="table table-hover">
			                                  <thead>
			                                    <tr>
			                                      <th>ID</th>
			                                      <th>Tên nhóm sản phẩm</th>
			                                      <th>Trạng thái</th>
			                                      <th>Ngày tạo</th>
			                                      <th></th>
			                                      <th></th>
			                                      <th></th>
			                                  </tr>
			                              </thead>
			                              <tbody>
			                                <?php if($cats) :  
			                                    foreach ($cats as $row) :
			                                ?>
			                                <tr>
			                                    <td><?php echo $row['category_id']; ?></td>
			                                    <td><?php echo $row['category_name']; ?></td>
			                                    <?php if($row['status'] == 1){
			                                                  $st = 'Enabled' ;
			                                                }else{
			                                                  $st ='Disabled' ;
			                                                } ?>
			                                        <td><?php echo $st ?></td>
			                                    <td><?php echo date('d-m-Y / h:i:s a',$row['created_date']); ?></td>
										
			                                  <!-- <td>$1500</td> -->
			                                  <td>
			                                      <a href="<?php to('category','edit-category',$row['category_id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
			                                          <i class="fa fa-pencil-square-o"></i>
			                                      </a>
			                                  </td>
			                                  <td>
			                                      <a href="<?php to('category','delete-category',$row['category_id']) ?>" title="Xóa" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ? ')">
			                                          <i class="fa fa-trash-o" ></i>
			                                      </a>
			                                  </td>
			                                  <td>
			                                      <a href="<?php to('category','view-category',$row['category_id']) ?>" type="button" class="btn btn-sm btn-success" title="Xem chi tiết">
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
