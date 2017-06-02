<?php 

$blog = get_all('blog');

// echo '<pre>';
// var_dump($cats);
?>

	<div class="row" >
		<div class="col-xs-12">
			<section class="panel panel-info" style="margin-top: 20px;">
			                              <header class="panel-heading">
			                                  Danh sách tin tức
			                            </header>
			                            <div class="panel-body table-responsive">
			                                <table class="table table-hover">
			                                  <thead>
			                                    <tr>
			                                      <th>ID</th>
			                                      <th>Tên bài viết</th>
			                                      <th>Ảnh đại diện</th>
			                                      <th>Ngày tạo</th>
			                                      <th></th>
			                                  </tr>
			                              </thead>
			                              <tbody>
			                                <?php if($blog) :  
			                                    foreach ($blog as $row) :
			                                ?>
			                                <tr>
			                                    <td><?php echo $row['id']; ?></td>
			                                    <td><?php echo $row['name']; ?></td>
			                                   <td class="fix-img"><img src="../../uploads/products/<?php echo $row['image_title']; ?>" width="auto"></td>
			                                    <td><?php echo date('d-m-Y / h:i:s a',$row['date']); ?></td>
										
			                                  <!-- <td>$1500</td> -->
			                                  <td>
			                                      <a href="<?php to('blog','edit',$row['id']) ?>" type="button" class="btn btn-sm btn-info" title="Sửa">
			                                          <i class="fa fa-pencil-square-o"></i>
			                                      </a>
			                                  </td>
			                                  <td>
			                                      <a href="<?php to('blog','delete',$row['id']) ?>" title="Xóa" type="button" class="btn btn-sm btn-danger" title="Sửa" onclick="return confirm('Are you sure ? ')">
			                                          <i class="fa fa-trash-o" ></i>
			                                      </a>
			                                  </td>
			                                  <td>
			                                      <a href="<?php to('blog','view',$row['id']) ?>" type="button" class="btn btn-sm btn-success" title="Xem chi tiết">
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
