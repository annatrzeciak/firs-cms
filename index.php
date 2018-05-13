<?php require('header.php')?>
	<div id="banner">
		<div class="content"><img src="images/img04.jpg" width="980" height="270" alt="" /></div>
		<div><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	</div>
	<div id="page">
		<div id="content">
<?php echo readContent(1); ?>
					</div>

		<!-- end #content -->
		<div id="sidebar">
			<h2>News list</h2>

				<?php
					$news=lastNews();
					foreach ($news as $key => $value) {
						echo "<div class='news'><h3>";
						echo $value[1];
						echo '</h3><span class="date">';
						echo $value[3].'</span><br>';
						echo substr($value[2], 0,100).'...<br><br></div>';
					}
				?>


		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div class="container"><img src="images/img03.png" width="1000" height="40" alt="" /></div>
	<!-- end #page -->
</div>


<?php require('footer.php')?>
