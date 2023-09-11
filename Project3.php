<?php include("head.php")?>
<?php include("nav.php")?>
<div class="Project3">
<h3>Some Problem Solution with PHP.</h3>
    <p>

		<h4>1.0 Floor Division :</h4>
        A=50 <br> B=20 <br>
        <?php 
        $A=50; $B=20; 
        ?>
        A%B= <?php echo($C=$A%$B);?>
		
        <h4>1.1 Floor Division :</h4>
        A=80 <br> B=50 <br>
        <?php 
        $A=80; $B=50; 
        ?>
        A%B= <?php echo($C=$A%$B);?>
		
        
		<h4>2.0 Triangle Area :</h4>
        Base=50 <br> Height=20 <br>
        <?php 
        $Base=50; $Height=20;
        ?>
        Area= 0.5 x Base x Height <br>
		Area= <?php echo($C= 0.5*$Base=50*$Height=20);?>

        <h4>2.1 Triangle Area :</h4>
        Base=560 <br> Height=80 <br>
        <?php 
        $Base=560; $Height=80;
        ?>
        Area= 0.5 x Base x Height <br>
		Area= <?php echo($C= 0.5*$Base=50*$Height=20);?>
		
		<h4>3.0 Circle Area :</h4>
        Radius=50 <br>
        <?php 
        $Radius=50; $B=20; 
        ?>
        Area=Pi x (Radius) <sup>2</sup> <br>
		Area= <?php echo($C=3.1416*$Radius**2);?>

        <h4>3.1 Circle Area :</h4>
        Radius=90 <br>
        <?php 
        $Radius=90; $B=20; 
        ?>
        Area=Pi x (Radius) <sup>2</sup> <br>
		Area= <?php echo($C=3.1416*$Radius**2);?>
		
		
            
    </p>

</div>

<?php include("footar.php")?>