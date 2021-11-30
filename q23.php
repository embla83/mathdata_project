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
		<link rel="stylesheet" type="text/css" href="css/tables.css"/>
			<link rel="stylesheet" type="text/css" href="css/counters.css"/>
	

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





<div class="pi-section-w pi-section-white">
	<div class="pi-section">
		
		<!-- Row -->
		<div class="pi-row">
			
			<!-- Col 6 -->
			<div class="pi-col-sm-5">
				<div class="pi-text-center">
			<h1 class="pi-uppercase pi-weight-700 pi-has-border pi-has-tall-border pi-has-short-border pi-margin-bottom-70">
				GEOMETRIC PROPERTIES
			</h1>
			<hr class="pi-divider-gap-70">
		
		
		<hr class="pi-divider-gap-20">
		
		<!-- Table -->
		<div class="pi-responsive-table-sm">
			<table class="pi-table pi-table-hovered pi-table-zebra">
			
				<!-- Table head -->
				<thead>
				
					<!-- Table row -->
					<tr>
						<th style="width: 50px;">
							<i class="icon-clock pi-tooltip pi-tooltip-base" data-placement="right" title="" data-original-title="Consectetur adipisicing elit, sed do eiusmod tempor incididunt"></i>
						</th>
						<th>
							Properties
						</th>
						<th>
							Result
						</th>
					
					</tr>
					<!-- End table row -->
				
				</thead>
				<!-- End table head -->
				
				<!-- Table body -->
				<tbody>
<?php
/*
nbPts, nbLines, nbE, nbDouble, nbSingle ,
 nbPtsNotOn , nbHesse , nbAxes, Eqn20, 
 Equation, `Lines` , `CollStabOrder` , 
 ProjStabOrder , nbOrbE , nbOrbDouble , 
 nbOrbPtsNotOn , nbOrbLines , nbOrbSingleSix , 
 nbOrbTriPlanes, nbOrbHesse, nbOrbTrihedralPairs 
*/


/*echo "qaktif ".$_SESSION["qaktif"]."</br>";
echo "eaktif ".$_SESSION["eaktif"]."</br>";
echo "qaktif2 ".$_SESSION["qaktif2"]."</br>";
echo "eaktif2 ".$_SESSION["eaktif2"]."</br>";
echo "qaktif3 ".$_SESSION["qaktif3"]."</br>";*/

if($_SESSION["qaktif"]==1 and $_SESSION["eaktif"]==1)
{
$Sorgu1=mysql_query("SELECT nbPts, nbLines, nbE, nbDouble, nbSingle , nbPtsNotOn , nbHesse , nbAxes, Eqn20, Equation, `Lines` , `CollStabOrder` , ProjStabOrder , nbOrbE , nbOrbDouble , nbOrbPtsNotOn , nbOrbLines , nbOrbSingleSix , nbOrbTriPlanes, nbOrbHesse, nbOrbTrihedralPairs FROM $tablo1 where Q='$_SESSION[qgelen]' and E='$_SESSION[egelen]' and OCN='$_SESSION[ocngelen]';");
$row1=mysql_fetch_array($Sorgu1);
}else if($_SESSION["qaktif2"]==1 and $_SESSION["eaktif2"]==1)
{
$Sorgu2=mysql_query("SELECT nbPts, nbLines, nbE, nbDouble, nbSingle , nbPtsNotOn , nbHesse , nbAxes, Eqn20, Equation, `Lines` , `CollStabOrder` , ProjStabOrder , nbOrbE , nbOrbDouble , nbOrbPtsNotOn , nbOrbLines , nbOrbSingleSix , nbOrbTriPlanes, nbOrbHesse, nbOrbTrihedralPairs FROM $tablo1 where Q='$_SESSION[qgelen2]' and E='$_SESSION[egelen2]' and OCN='$_SESSION[ocngelen2]';");
$row1=mysql_fetch_array($Sorgu2);
}else if($_SESSION["qaktif3"]==1)
{
$Sorgu3=mysql_query("SELECT nbPts, nbLines, nbE, nbDouble, nbSingle , nbPtsNotOn , nbHesse , nbAxes, Eqn20, Equation, `Lines` , `CollStabOrder` , ProjStabOrder , nbOrbE , nbOrbDouble , nbOrbPtsNotOn , nbOrbLines , nbOrbSingleSix , nbOrbTriPlanes, nbOrbHesse, nbOrbTrihedralPairs FROM $tablo1 where Q='$_SESSION[qgelen3]' and OCN='$_SESSION[ocngelen3]';");
$row1=mysql_fetch_array($Sorgu3);
}else{}

					
						
?>
					<!-- Table row -->
					<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td style="white-space: nowrap;">
							The Number of Points
						</td>
						<td>
							<div><strong><?=$row1['nbPts'];?></strong></div>
						</td>
					
					</tr>
						<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Cupidatat non proident"></i>
						</td>
						<td>
							The Number of Lines
						</td>
						<td>
							<div><strong><?=$row1['nbLines'];?></strong></div>				
						</td>
					
					</tr><tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Nam libero tempore, cum soluta nobis est eligendi"></i>
						</td>
						<td>
							The Number of Eckardt points

						</td>
						<td>
									<div><strong><?=$row1['nbE'];?></strong></div>						
						</td>
						
					</tr>
					<!-- End table row -->
					
					<!-- Table row -->
					<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Ratione voluptatem sequi"></i>
						</td>
						<td>
							The Number of Double points

						</td>
						<td>
						<div><strong><?=$row1['nbDouble'];?></strong></div>	
								
						</td>
						
					</tr>
					<!-- End table row -->
					
					<!-- Table row -->
					<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Magnam aliquam"></i>
						</td>
						<td>
							The Number of Single points
						</td>
						<td>
						<div><strong><?=$row1['nbSingle'];?></strong></div>
							
						</td>
						
					</tr>
										<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Magnam aliquam"></i>
						</td>
						<td>
							The Number of Points not on any line
						</td>
						<td>
						<div><strong><?=$row1['nbPtsNotOn'];?></strong></div>
							
						</td>
						
					</tr>
												<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Magnam aliquam"></i>
						</td>
						<td>
							The Number of Hesse configurations
						</td>
						<td>
						<div><strong><?=$row1['nbHesse'];?></strong></div>
							
						</td>
						
					</tr>
					<!-- End table row -->
											<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Magnam aliquam"></i>
						</td>
						<td>
							The number of Axes
						</td>
						<td>
						<div><strong><?=$row1['nbAxes'];?></strong></div>
							
						</td>
						
					</tr>
					<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Magnam aliquam"></i>
						</td>
						<td>
							The equation of \mathcal{F} in Orbiter LAbelling
						</td>
						<td>
							<div><strong><?=$row1['Eqn20'];?></strong></div>
						</td>
						
					</tr>
					<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Magnam aliquam"></i>
						</td>
						<td>
							All 27 lines of \mathcal{F} in orbiter labelling
						</td>
						<td>
							<div style="width:300px;word-wrap:break-word;"><strong><?=$row1['Lines'];?></strong></div> 
						</td>
						
					</tr>
						
				</tbody>
				<!-- End table body -->
				
			</table>
		</div>
		<!-- End table -->
		</div>
			</div>
			<!-- End col 6 -->
			
			<!-- Col 6 -->
			<div class="pi-col-sm-7">
				<div class="pi-text-center">
			<h1 class="pi-uppercase pi-weight-700 pi-has-border pi-has-tall-border pi-has-short-border pi-margin-bottom-70">
				GROUP THEORETIC PROPERTIES
			</h1>
			<hr class="pi-divider-gap-70">
		
		
		<hr class="pi-divider-gap-20">
		
		<!-- Table -->
		<div class="pi-responsive-table-sm" style="margin-left:150px;">
			<table class="pi-table pi-table-hovered pi-table-zebra">
			
				<!-- Table head -->
				<thead>
				
					<!-- Table row -->
					<tr>
						<th style="width: 50px;">
							<i class="icon-clock pi-tooltip pi-tooltip-base" data-placement="right" title="" data-original-title="Consectetur adipisicing elit, sed do eiusmod tempor incididunt"></i>
						</th>
						<th>
							Properties
						</th>
						<th>
							Result
						</th>
					
					</tr>
					<!-- End table row -->
				
				</thead>
				<!-- End table head -->
				
				<!-- Table body -->
				<tbody>
				
					<!-- Table row -->
					<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							Collineation Stabiliser order
						</td>
						<td>
						<div><strong><?=$row1['CollStabOrder'];?></strong></div>
						</td>
					
					</tr>
					
							<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							Projective Stabiliser order
						</td>
						<td>
						<div><strong><?=$row1['ProjStabOrder'];?></strong></div>
								
						</td>
					
					</tr>
								<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of Eckardt points of \mathcal{F} 
						</td>
						<td>
						<div><strong><?=$row1['nbOrbE'];?></strong></div>
								
						</td>
					
					</tr>
								<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of double points of \mathcal{F} 
						</td>
						<td>
						<div><strong><?=$row1['nbOrbDouble'];?></strong></div>
								
						</td>
					
					</tr>
					
													<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of the points not on any line of \mathcal{F}
						</td>
						<td>
						<div><strong><?=$row1['nbOrbPtsNotOn'];?></strong></div>
								
						</td>
					
					</tr>
												<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of lines of \mathcal{F} 
						</td>
						<td>
						<div><strong><?=$row1['nbOrbLines'];?></strong></div>
								
						</td>
					
					</tr>
												<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of half double sixes of \mathcal{F} 
						</td>
						<td>
						<div><strong><?=$row1['nbOrbSingleSix'];?></strong></div>
								
						</td>
					
					</tr>
											<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of tritangent planes of \mathcal{F} 
						</td>
						<td>
						<div><strong><?=$row1['nbOrbTriPlanes'];?></strong></div>
					
						</td>
					
					</tr>
										<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of Hesse configurations of \mathcal{F} 
						</td>
						<td>
						<div><strong><?=$row1['nbOrbHesse'];?></strong></div>
								
						</td>
					
					</tr>
									<tr>
						<td>
							<i class="icon-fast-forward" data-placement="right" title="" data-original-title="Eiusmod tempor incididunt"></i>
						</td>
						<td>
							The number of orbits of collination group of \mathcal{F} on the set of trihedral pairs of \mathcal{F}
						</td>
						<td>
						<div><strong><?=$row1['nbOrbTrihedralPairs'];?></strong></div>
								
						</td>
					
					</tr>
				</tbody>
				<!-- End table body -->
				
			</table>
		</div>
		<!-- End table -->
		</div>
			</div>
		<!-- End row -->
		
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
<script src="scripts/pi.counter.js"></script>
<script src="scripts/pi.init.counter.js"></script>
<script src="3dParty/gauge.min.js"></script>
<script src="3dParty/inview.js"></script>

</body>
</html>