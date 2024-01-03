<!-- Header -->

			<header id="header">
				
				<?php
            $rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat WHERE Pamja_faqes='fillimi_faqes'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {
				
				extract($rreshti);
				
				
				if($rezultati==null)
				mysqli_free_result($rezultati);
			
			?>
			<section>
				<div class="inner">
					<h2><?php echo $Titulli ?></h2>
					<p><?php echo $Pershkrimi ?></p>
				</div>
			</section>
			<?php } ?>
		</header>