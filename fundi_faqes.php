<footer id="footer">
					<?php
            $rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat WHERE Pamja_faqes='fundi_faqes_Adresa'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h3><?php echo $Titulli ?></h3>
							<p><?php echo $Pershkrimi; ?>
							</p>
						</section>
			<?php } ?>
									<?php
            $rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat WHERE Pamja_faqes='fundi_faqes_Referencat'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section>
							<h4><?php echo $Titulli ?></h4>
							<?php echo $Pershkrimi; ?>
						</section>
			<?php } ?>
			</div>
			<div class="copyright">
				<?php
            $rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat WHERE Pamja_faqes='fundi_faqes_Copyright'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>

											
							<?php echo $Pershkrimi; ?>
			<?php } ?>
			</div>
			</footer>