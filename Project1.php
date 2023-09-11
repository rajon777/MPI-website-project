<?php include("head.php")?>
<?php include("nav.php")?>
<div class="Project1">
<h3>Some Problem Solution with PHP.</h3>
    <p>

        <h4>1.0 Addition :</h4>
        A=50 <br> B=20 <br>
        <?php 
        $A=50; $B=20; 
        ?>
        A+B= <?php echo($C=$A+$B);?>
		
        <h4>1.1 Addition :</h4>
        A=70 <br> B=30 <br>
        <?php 
        $A=70; $B=30; 
        ?>
        A+B= <?php echo($C=$A+$B);?>

		<h4>2.0 Substraction :</h4>
        A=50 <br> B=20 <br>
        <?php 
        $A=50; $B=20; 
        ?>
        A-B= <?php echo($C=$A-$B);?>

        <h4>2.1 Substraction :</h4>
        A=80 <br> B=40 <br>
        <?php 
        $A=80; $B=40; 
        ?>
        A-B= <?php echo($C=$A-$B);?>
		
		<h4>3.0 Multiplication :</h4>
        A=50 <br> B=20 <br>
        <?php 
        $A=50; $B=20; 
        ?>
        AxB= <?php echo($C=$A*$B);?>

        <h4>3.1 Multiplication :</h4>
        A=200 <br> B=20 <br>
        <?php 
        $A=50; $B=20; 
        ?>
        AxB= <?php echo($C=$A*$B);?>
		
		<h4>4.0 Division :</h4>
        A=50 <br> B=20 <br>
        <?php 
        $A=50; $B=20; 
        ?>
        A/B= <?php echo($C=$A/$B);?>

        <h4>4.1 Division :</h4>
        A=200 <br> B=20 <br>
        <?php 
        $A=200; $B=40; 
        ?>
        A/B= <?php echo($C=$A/$B);?>
		
		
    </p>

</div>

<?php include("footar.php")?>