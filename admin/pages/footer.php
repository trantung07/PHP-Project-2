 
    </div>
    <!-- /#wrapper -->
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script src="public/tinymce/tinymce.min.js" ></script>
<script>
			tinymce.init({
			  selector: 'textarea',
			  height: 250,
			  theme: 'modern',
			  plugins: [
			    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			    'searchreplace wordcount visualblocks visualchars code fullscreen',
			    'insertdatetime media nonbreaking save table contextmenu directionality',
			    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
			  ],
			  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help code',
			  image_advtab: true,
			  templates: [
			    { title: 'Test template 1', content: 'Test 1' },
			    { title: 'Test template 2', content: 'Test 2' }
			  ],
			  // content_css: [
			  //   '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
			  //   '//www.tinymce.com/css/codepen.min.css'
			  // ]
			  	relative_urls: false,
			  	remove_script_host:false,
				filemanager_title:"Responsive Filemanager",
	    		filemanager_crossdomain: true,
	    		external_filemanager_path:"http://localhost:81/Clem/file/",
	    		external_plugins: { "filemanager" : "http://localhost:81/Clem/file/plugin.min.js"},
			});
		</script>
</body>

</html>
