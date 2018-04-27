<?php
?>
</div><!-- #content -->
<footer>
    <ul>
        <li><a href=".">Opcion 1</a></li>
        <li><a href="#">Opcion 2</a></li>
        <li><a href="#">Opcion 3</a></li>
        <li><a href="acerca-de.php">Opcion 4</a></li>
    </ul>
   
    <p>Ejemplo</p>
</footer>
   

<head>
<title>About</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/CabinSketch_700.font.js"></script>
<script type="text/javascript" src="js/EB_Garamond_400.font.js"></script>

</head>
<body id="page1">
<div class="main">

<!-- footer -->
	<footer>
		<div class="wrapper">
			<article class="col">
				<h5>Columna 1</h5>
				<ul class="list1">
					<li><a href="#">Opcion 1</a></li>
					<li><a href="#">Opcion 2</a></li>
					<li><a href="#">Opcion 3 </a></li>
					<li><a href="#">Opcion 4</a></li>
					<li><a href="#">Opcion 5 </a></li>
				</ul>
			</article>
			<article class="col pad_left2">
				<h5>Columna 2</h5>
				<ul class="list1">
					<li><a href="#">Opcion 1</a></li>
					<li><a href="#">Opcion 2</a></li>
					<li><a href="#">Opcion 3</a></li>
					<li><a href="#">Opcion 4 </a></li>
					<li><a href="#">Opcion 5</a></li>
				</ul>
			</article>
			
			
				</form>
			
	</footer>
<!-- / footer -->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
	$(window).load(function() {
	$('#nivo_slider').nivoSlider({
		effect:'fold', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'
		slices:7,
		animSpeed:500,
		pauseTime:6000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:false, //Only show on hover
		controlNav:true, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		controlNavThumbsFromRel:false, //Use image rel for thumbs
		controlNavThumbsSearch: '.jpg', //Replace this with...
		controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:1, //Universal caption opacity
		beforeChange:function(){},
		afterChange:function(){},
		slideshowEnd:function(){} //Triggers after all slides have been shown
	});
});
</script>
</body>

     


