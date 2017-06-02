<div class="row">
    <div class="col-md-8">
        <section class="panel panel-info" style="margin-top: 20px;">
            <header class="panel-heading" >
                Thêm mới nhóm sản phẩm
            </header>                                
            <div class="panel-body">
				
					<form action="" method="POST" role="form">
						
						<div class="form-group">
							<label for="">Tên nhóm sản phẩm</label>
							<input type="text" class="form-control" name="category_name" >
						</div>	
						
						<div class="form-group">
							<label for="">Mô tả</label>
							<textarea rows="4"  class="form-control" name="description">  </textarea>
						</div>
						
						<div class="form-group">
							<div class="" >
								<label for="">Trạng thái</label>
							</div>
							<div>
								<input type="radio" name="status" value="1" checked>Enabled<br>
								<input type="radio" name="status" value="0">Disabled<br>
							</div>
						</div>
						<div class="form-group">
							
							<input type="hidden" class="form-control" name="created_date" value="<?php echo time() ?>">
						</div>

						<button type="submit" class="btn btn-primary">Thêm mới</button>
						
					</form>
				</div>
			</div>
		</section>
                            


    </div>     
</div>


<?php 
            if (isset($_POST['category_name'])) {
                
                insert('category',$_POST);
                header('Location: index.php?module=category&action=list-category');

            }
            
         ?>

