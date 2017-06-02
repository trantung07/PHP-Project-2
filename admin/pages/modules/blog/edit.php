<?php 
 if ($_POST) {
    $file = $_POST['image_title'];

    if (!$file['error']) {
        if (move_uploaded_file($file['tmp_name'], '../../uploads/products/'.$file['name'])) {
            $_POST['image_title'] = $file['name'];
        }
    }
}
?>
<?php if (!empty($_GET['id'])) {
                    $row = get_one('blog','id',$_GET['id']);
                    if (isset($_POST['name'])) {
                        update('blog',$_POST,['id'=>$_GET['id']]);
                        header('location: index.php?module=blog&action=list');                          
                        }       
                }else{
                    echo 'Tham so id khong hop le';
                }?>
<div class="row">
    <div class="col-md-8">
        <section class="panel panel-info" style="margin-top: 20px;">
            <header class="panel-heading" >
                Chỉnh sửa bài viết
            </header>                                
            <div class="panel-body">
                <?php if($row) : ?>
                    <form action="" method="POST" role="form">
                        
                        <div class="form-group">
                            <label for="">Tên bài viết</label>
                            <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                        </div>  
                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <a data-toggle="modal"  href="javascript:;" data-target="#modal-file" class="btn" type="button">Chọn ảnh</a>
                        <input type="text"  name="image_title" id="image" value="<?php echo $row['image_title'];?>"/>
                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                        </div>
                        <div class="form-group">
                            <label for="">Nội dung</label>
                            <textarea rows="10"  class="form-control" name="content" value="<?php echo $row['content'];?>">  
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Xác nhận</button>
                        
                    </form>
                <?php endif; ?>
                </div>
            </div>
        </section>
                            


    </div>     
</div>

<div class="modal fade" id="modal-file">
    <div class="modal-dialog modal-lg" style="width:80%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                    <iframe src="http://localhost:81/Clem/file/dialog.php?type=2&field_id=image&relative_url=1&remove_script_host=1" style="border:0; width:100%; height:450px; overflow:hidden"></iframe>
            </div>
        </div>
    </div>
</div>
