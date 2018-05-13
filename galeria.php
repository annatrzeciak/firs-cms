<?php require('header.php')?>
	<div id="banner">
		<div class="content"><img src="images/img04.jpg" width="980" height="270" alt="" /></div>
		<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	</div>
	<div id="page">
		<div id="content">
<?php echo readContent(2); ?>
<a href="/images/img07.jpg" data-lightbox="roadtrip"><img src='images/timg07.jpg'/></a>
<a href="/images/img08.jpg" data-lightbox="roadtrip"><img src='images/timg08.jpg'/></a>
<a href="/images/img09.jpg" data-lightbox="roadtrip"><img src='images/timg09.jpg'/></a>
<a href="/images/img10.jpg" data-lightbox="roadtrip"><img src='images/timg10.jpg'/></a>

							</div>

		<!-- end #content -->
		<div id="sidebar">

					<?php require('quote.php') ?>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	<!-- end #page -->
</div>


<?php require('footer.php')?>
