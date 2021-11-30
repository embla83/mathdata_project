<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>Finite Fields | Projective Tree Spaces | Cubic Surface </title>
	
	<link rel="shortcut icon" href="/favicon.ico"/>

	
	<link rel="stylesheet" type="text/css" href="3dParty/bootstrap/css/bootstrap.min.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/global.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/typo.css"/>
	
	<link rel="stylesheet" type="text/css" href="3dParty/colorbox/colorbox.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/portfolio.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/testimonials.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/page-nav.css"/>
	
	<link rel="stylesheet" type="text/css" href="css/social.css"/>
	

	<!--Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic'
		  rel='stylesheet' type='text/css'/>

	<!--Fonts with Icons-->
	<link rel="stylesheet" href="3dParty/fontello/css/fontello.css"/>

</head>
<body>

<div id="pi-all">

<!-- Header -->
<div class="pi-header">


	
<!-- End header row -->

<div class="pi-header-sticky">
<!-- Header row -->
<div class="pi-section-w pi-section-white pi-shadow-bottom pi-row-reducible">
<div class="pi-section pi-row-lg">

<!-- Logo -->
<div class="pi-row-block pi-row-block-logo">
	<a href="index.html"><img src="images/finite.png" alt=""></a>
</div>
<!-- End logo -->

<!-- Text -->
<div class="pi-row-block pi-row-block-txt pi-hidden-2xs">ATLAS</div>
<!-- End text -->

</div>
<!-- End menu -->

<!-- Mobile menu button -->
<div class="pi-row-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
	<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
		<i class="icon-menu pi-text-center"></i>
	</button>
</div>


</div>
</div>
<!-- End header row -->
</div>

</div>
<!-- End header -->

<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Title bar -->
<div class="pi-section-w pi-section-base pi-section-base-gradient">
	<div class="pi-texture" style="background: url(img/hexagon.png) repeat;"></div>
	<div class="pi-section" style="padding: 30px 40px 26px;">
	
		<div class="pi-row">
			<div class="pi-col-sm-4 pi-center-text-xs">
				<h1 class="h2 pi-weight-300 pi-margin-bottom-5">Electronic Atlas of Cubic Surfaces with 27 lines</h1>
			</div>
			<div class="pi-col-sm-8 pi-text-right pi-center-text-xs">
				<p class="lead-20 pi-weight-300 pi-margin-top-5 pi-margin-bottom-5">Finite Fields | Projective Tree Spaces | Cubic Surface</p>
			</div>
		</div>
		
	</div>
</div>
<!-- End title bar -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- Breadcrumbs -->
<div class="pi-section-w pi-border-bottom pi-section-grey">
	<div class="pi-section pi-titlebar pi-breadcrumb-only">
		<div class="pi-breadcrumb pi-center-text-xs">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Finite Fiels</a></li>
				<li>GF(q)</li>
			</ul>
		</div>
	</div>
</div>
<!-- End breadcrumbs -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<?php
//session_destroy();
session_start();

$server="localhost";
$Aname="cubicvt";
$Aparola="XbGYa6JBpfMmz8CD";
$veritabani="cubicvt";

$tablo1="surface";
$db=@mysql_connect($server,$Aname,$Aparola) or die(@mysql_err());
$sec=@mysql_select_db($veritabani);


@mysql_query("SET NAMES `utf8`");
@mysql_query("SET CHARACTER SET utf8");
@mysql_query("SET NAMES = `utf8_turkish_ci` ");
?>



<?php


if(isset($_POST["next_btn"])){
	
	$_SESSION["qinput"]=$_POST["qvalue"];
	$_SESSION["qactive"]=1;
	
}else{
	$_SESSION["qactive"]=0;
}

if(isset($_POST["next_btn2"])){
	
	$_SESSION["einput"]=$_POST["evalue"];
	$_SESSION["qactive"]=1;
	$_SESSION["eaktif"]=1;
	
}else{
	$_SESSION["eaktif"]=0;
}

if(isset($_POST["search_btn"])){
	
	$_SESSION["ocngelen"]=$_POST["ocnvalue"];
	$_SESSION["qactive"]=1;
	$_SESSION["eaktif"]=1;
	echo "<meta http-equiv='refresh' content='0;URL=q23.php'>";
}


if(isset($_POST["next_btn3"])){
	
	$_SESSION["einput2"]=$_POST["evalue2"];
	$_SESSION["eaktif2"]=1;
	
}else{
	$_SESSION["eaktif2"]=0;
}

if(isset($_POST["next_btn4"])){
	
	$_SESSION["qinput2"]=$_POST["qvalue2"];
	$_SESSION["qactive2"]=1;
	$_SESSION["eaktif2"]=1;
	
}else{
	$_SESSION["qactive2"]=0;
}

if(isset($_POST["search_btn2"])){
	
	$_SESSION["ocngelen2"]=$_POST["ocnvalue2"];
	$_SESSION["qactive2"]=1;
	$_SESSION["eaktif2"]=1;
	echo "<meta http-equiv='refresh' content='0;URL=q23.php'>";
}

if(isset($_POST["next_btn5"])){
	
	$_SESSION["qinput3"]=$_POST["qvalue3"];
	$_SESSION["qactive3"]=1;
	
}else{
	$_SESSION["qactive3"]=0;
}

if(isset($_POST["search_btn3"])){
	$_SESSION["ocngelen3"]=$_POST["ocnvalue3"];
	$_SESSION["qactive3"]=1;
	echo "<meta http-equiv='refresh' content='0;URL=q23.php'>";
}

?>

<div class="pi-section-w pi-section-white">
	<div class="pi-section pi-padding-bottom-10">
		
	<div class="pi-row">
			
			<!-- Col 6 -->
			<div class="pi-col-xs-4">
				
				<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
					Cubic Surfaces
				</h4>
				
				<p>
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</p>
				
				<hr class="pi-divider-gap-20">
				
				<!-- Forms -->
				<form role="form" name="form1" action="selection3.php" method="post">
				
					<!-- Row -->
					<div class="pi-row pi-grid-small-margins">
						
						<!-- Col 6 -->
						<div class="pi-col-sm-4">
						
							<h6 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15">
								Choose q
							</h6>
				<div class="form-group">
					<select class="form-control input-lg" id="exampleInputLarge-select" name="qvalue">
					
				<?php
					if(isset($_SESSION["qinput"]))
						echo "<option value='$_SESSION[qinput]'>$_SESSION[qinput]</option>";
							
					$GirisSorgu=mysql_query("SELECT DISTINCT Q FROM $tablo1 order by Q ASC;");
					while($row=mysql_fetch_array($GirisSorgu))
						{
								echo "<option value='$row[Q]'>$row[Q]</option>";
						}					
				?>
							
								</select>

							</div>

			<?php
			
				if($_SESSION["qactive"]==1 or $_SESSION["eaktif"]==1){
					

			echo "<h6 class='pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15'>
								CHOOSE E
							</h6>
				
							<div class='form-group'>
								<select class='form-control input-lg' id='exampleInputLarge-select' name='evalue'>";
								
					if(isset($_SESSION["einput"]))
						echo "<option value='$_SESSION[einput]'>$_SESSION[einput]</option>";
					
					$GirisSorgu2=mysql_query("SELECT DISTINCT E FROM $tablo1 where Q='$_SESSION[qinput]' order by E ASC;");
					while($row2=mysql_fetch_array($GirisSorgu2))
						{
								echo "<option value='$row2[E]'>$row2[E]</option>";
						}					
							echo"	</select>
							</div>";
					
				}
			?>									
			

			<?php
			
				if($_SESSION["eaktif"]==1){
					

			echo "<h6 class='pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15'>
								Choose OCN Type

							</h6>
				
							<div class='form-group'>
								<select class='form-control input-lg' id='exampleInputLarge-select' name='ocnvalue'>";
								
					if(isset($_SESSION["ocngelen"]))
						echo "<option value='$_SESSION[ocngelen]'>$_SESSION[ocngelen]</option>";
					
					$GirisSorgu3=mysql_query("SELECT OCN FROM $tablo1 where Q='$_SESSION[qinput]' and E='$_SESSION[einput]' order by OCN ASC;");
					while($row3=mysql_fetch_array($GirisSorgu3))
						{
								echo "<option value='$row3[OCN]'>$row3[OCN]</option>";
						}					
							echo"	</select>
							</div>";
					
				}
			?>			
						</div>
						<!-- End col 6 -->

						<!-- Col 6 -->
						<div class="pi-col-sm-4">
					</br>	
					<div class="form-group">
						<input class='btn pi-btn-base pi-btn-big' type='submit' name='next_btn' value='Next' />
					</div>		
				
			<?php
			if($_SESSION["qactive"]==1  or $_SESSION["eaktif"]==1){
				
				echo "</br></br>	
					<div class='form-group'>
						<input class='btn pi-btn-base pi-btn-big' type='submit' name='next_btn2' value='Next' />
					</div>";
			}
			?>
					</div>
						<!-- End col 6 -->
						
				</div>
					<!-- End row -->
					
				<!-- End forms -->
			<?php
			if($_SESSION["qactive"]==1  and $_SESSION["eaktif"]==1){
				
				echo "<input class='btn pi-btn-base pi-btn-big' type='submit' name='search_btn' value='Go to details' />";
			}?>		
			
			</div>
				</form>
			<!-- End col 6 -->
			<div class="pi-col-xs-4">
				
				<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
					Cubic Surfaces
				</h4>
				
				<p>
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</p>
				
				<hr class="pi-divider-gap-20">
				
				<!-- Forms -->
				<form role="form" name="form2" action="selection3.php" method="post">
				
					<!-- Row -->
					<div class="pi-row pi-grid-small-margins">
						
						<!-- Col 6 -->
						<div class="pi-col-sm-4">
						
							<h6 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15">
								Choose e
							</h6>
				<div class="form-group">
					<select class="form-control input-lg" id="exampleInputLarge-select" name="evalue2">
					
				<?php
					if(isset($_SESSION["einput2"]))
						echo "<option value='$_SESSION[einput2]'>$_SESSION[einput2]</option>";
							
					$GirisSorgu4=mysql_query("SELECT DISTINCT E FROM $tablo1 order by E ASC;");
					while($row4=mysql_fetch_array($GirisSorgu4))
						{
								echo "<option value='$row4[E]'>$row4[E]</option>";
						}					
				?>
							
								</select>

							</div>

			<?php
			
				if($_SESSION["eaktif2"]==1 or $_SESSION["qactive2"]==1){
					

			echo "<h6 class='pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15'>
								CHOOSE Q
							</h6>
				
							<div class='form-group'>
								<select class='form-control input-lg' id='exampleInputLarge-select' name='qvalue2'>";
								
					if(isset($_SESSION["qinput2"]))
						echo "<option value='$_SESSION[qinput2]'>$_SESSION[qinput2]</option>";
					
					$GirisSorgu2=mysql_query("SELECT DISTINCT Q FROM $tablo1 where E='$_SESSION[einput2]' order by Q ASC;");
					while($row4=mysql_fetch_array($GirisSorgu2))
						{
								echo "<option value='$row4[Q]'>$row4[Q]</option>";
						}					
							echo"	</select>
							</div>";
					
				}
			?>									
			

			<?php
			
				if($_SESSION["qactive2"]==1){
					

			echo "<h6 class='pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15'>
								Choose OCN Type

							</h6>
				
							<div class='form-group'>
								<select class='form-control input-lg' id='exampleInputLarge-select' name='ocnvalue2'>";
								
					if(isset($_SESSION["ocngelen2"]))
						echo "<option value='$_SESSION[ocngelen2]'>$_SESSION[ocngelen2]</option>";
					
					$GirisSorgu5=mysql_query("SELECT OCN FROM $tablo1 where Q='$_SESSION[qinput2]' and E='$_SESSION[einput2]' order by OCN ASC;");
					while($row5=mysql_fetch_array($GirisSorgu5))
						{
								echo "<option value='$row5[OCN]'>$row5[OCN]</option>";
						}					
							echo"	</select>
							</div>";
					
				}
			?>			
						</div>
						<!-- End col 6 -->

						<!-- Col 6 -->
						<div class="pi-col-sm-4">
					</br>	
					<div class="form-group">
						<input class='btn pi-btn-base pi-btn-big' type='submit' name='next_btn3' value='Next' />
					</div>		
				
			<?php
			if($_SESSION["qactive2"]==1  or $_SESSION["eaktif2"]==1){
				
				echo "</br></br>	
					<div class='form-group'>
						<input class='btn pi-btn-base pi-btn-big' type='submit' name='next_btn4' value='Next' />
					</div>";
			}
			?>
						</div>
						<!-- End col 6 -->
						
					</div>
					<!-- End row -->
					
				<!-- End forms -->
				<?php
			if($_SESSION["qactive2"]==1  and $_SESSION["eaktif2"]==1){
				
				echo "<input class='btn pi-btn-base pi-btn-big' type='submit' name='search_btn2' value='Go to details' />";
			}?>	
			</div>
				</form>

<div class="pi-col-xs-4">
				
				<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
					Cubic Surfaces
				</h4>
				
				<p>
					Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</p>
				
				<hr class="pi-divider-gap-20">
				
				<!-- Forms -->
				<form role="form" name="form3" action="selection3.php" method="post">
				
					<!-- Row -->
					<div class="pi-row pi-grid-small-margins">
						
						<!-- Col 6 -->
						<div class="pi-col-sm-4">
						
							<h6 class="pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15">
								Choose q
							</h6>
				<div class="form-group">
					<select class="form-control input-lg" id="exampleInputLarge-select" name="qvalue3">
					
				<?php
					if(isset($_SESSION["qinput3"]))
						echo "<option value='$_SESSION[qinput3]'>$_SESSION[qinput3]</option>";
							
					$GirisSorgu6=mysql_query("SELECT DISTINCT Q FROM $tablo1 order by Q ASC;");
					while($row6=mysql_fetch_array($GirisSorgu6))
						{
								echo "<option value='$row6[Q]'>$row6[Q]</option>";
						}					
				?>
							
								</select>

							</div>
									
			

			<?php
			
				if($_SESSION["qactive3"]==1){
					

			echo "<h6 class='pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-15'>
								Choose OCN Type

							</h6>
				
							<div class='form-group'>
								<select class='form-control input-lg' id='exampleInputLarge-select' name='ocnvalue3'>";
								
					if(isset($_SESSION["ocngelen3"]))
						echo "<option value='$_SESSION[ocngelen3]'>$_SESSION[ocngelen3]</option>";
					
					$GirisSorgu7=mysql_query("SELECT OCN FROM $tablo1 where Q='$_SESSION[qinput3]' order by OCN ASC;");
					while($row7=mysql_fetch_array($GirisSorgu7))
						{
								echo "<option value='$row7[OCN]'>$row7[OCN]</option>";
						}					
							echo"	</select>
							</div>";
					
				}
			?>			
						</div>
						<!-- End col 6 -->

						<!-- Col 6 -->
						<div class="pi-col-sm-4">
					</br>	
					<div class="form-group">
						<input class='btn pi-btn-base pi-btn-big' type='submit' name='next_btn5' value='Next' />
					</div>		
				

						</div>
						<!-- End col 6 -->
						
					</div>
					<!-- End row -->
					
				<!-- End forms -->
				<?php
				if($_SESSION["qactive3"]==1){
				
				echo "<input class='btn pi-btn-base pi-btn-big' type='submit' name='search_btn3' value='Go to details' />";
				}?>	
			</div>
				</form>
			
			<!-- Col 6 -->
			<div class="pi-col-xs-6">
				<BR>	<BR>	<BR>
				<h4 class="pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-25">
				Results
				</h4>
				
				<p>
					<i>i, Orbiter Number, Report </i>
				</p>
				
				<hr class="pi-divider-gap-20">
				
			
				
				<div class="form-group">
								<div class="pi-input-with-icon pi-input-with-icon-lg">
									<div class="pi-input-icon"><i class="icon-pencil"></i></div>
									<textarea class="form-control input-lg" id="exampleInputLarge-text-area" placeholder="i, Orbiter Number, Report " rows="4"></textarea>
								</div>
							</div>
				
			
				
			
				
			</div>
			<!-- End col 6 -->
			
		</div>
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<!-- - - - - - - - - - END SECTION - - - - - - - - - --></div>


</div>
<div class="pi-scroll-top-arrow" data-scroll-to="0"></div>

<script src="3dParty/jquery-1.11.0.min.js"></script>
<script src="3dParty/bootstrap/js/bootstrap.min.js"></script>
<script src="3dParty/requestAnimationFramePolyfill.min.js"></script>
<script src="3dParty/jquery.easing.1.3.js"></script>
<script src="3dParty/jquery.scrollTo.min.js"></script>
<script src="3dParty/colorbox/jquery.colorbox-min.js"></script>
<script src="scripts/pi.global.js"></script>


</body>
</html>