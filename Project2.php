<?php include("head.php")?>
<?php include("nav.php")?>
<div class="Project2">
    <div class="Project2">
    <h3>Some Problem Solution with PHP.</h3>
    <p>
		<h4>1.0 Ractangle Area :</h4>
        Base=50 <br> Height=20 <br>
        <?php 
        $Base=50; $Height=20; 
        ?>
        Area= Base x Height <br>	
		Area= <?php echo($C=$Base*$Height);?>

        <h4>1.1 Ractangle Area :</h4>
        Base=120 <br> Height=20 <br>
        <?php 
        $Base=120; $Height=20; 
        ?>
        Area= Base x Height <br>	
		Area= <?php echo($C=$Base*$Height);?>
		
		 <h4>2.0 Square Area :</h4>
        Arm=50 <br>  
        <?php 
        $A=50; $B=20; 
        ?>
        Area=(Arm) <sup>2</sup> <br> 
		Area= <?php echo($C=$A**2);?>

        <h4>2.1 Square Area :</h4>
        Arm=30 <br>  
        <?php 
        $A=30; $B=20; 
        ?>
        Area=(Arm) <sup>2</sup> <br> 
		Area= <?php echo($C=$A**2);?>
		
		<h4>3.0 Rombus Area :</h4>
        D<sub>1</sub>=50 <br> D<sub>2</sub>=20 <br>
        <?php 
        $D1=50; $D2=20; 
        ?>
        Area= D<sub>1</sub> * D<sub>2</sub> <br> 
		Area= <?php echo($C=0.5*$D1*$D2);?>

        <h4>3.1 Rombus Area :</h4>
        D<sub>1</sub>=70 <br> D<sub>2</sub>=50 <br>
        <?php 
        $D1=70; $D2=50; 
        ?>
        Area= D<sub>1</sub> * D<sub>2</sub> <br> 
		Area= <?php echo($C=0.5*$D1*$D2);?>
		
		
    </p>

    </div>

</div>

<?php include("footar.php")?>