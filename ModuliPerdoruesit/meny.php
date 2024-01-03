
					<?php
          include("konfig.php");
            $rezultati = mysqli_query($lidhe, "SELECT * FROM tedhenat WHERE Pamja_faqes='MenyP'");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  	 echo $Pershkrimi;
			  
if($rezultati==null)
  mysqli_free_result($rezultati);

			}
            ?>
						
			