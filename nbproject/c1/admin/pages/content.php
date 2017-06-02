

<div id="page-wrapper">
<?php    
        if (isset($_GET['action'])) {
            $a = $_GET['action']; 
                        
        }else{
            $a = 'dashboard';
        }
            include $a.'.php';
    ?>

</div>
    <!-- /#wrapper -->