<?php include("head.php")?>
<?php include("nav.php")?>
<div class="main" style="width: 900px;height:200px; background-color:lightgreen;  text-align:center;font-size:30px;">
    <?php
        $server="localhost";
        $username="root";
        $password="";
        $databasename="library_management_4_1_cst";
        $connect = mysqli_connect($server, $username,$password,$databasename);

        if($connect){
            echo("Database connected");
        }
        else{
            echo("mysqli_connect_error()");
        }
    
    ?>

</div>

<?php include("footar.php")?>