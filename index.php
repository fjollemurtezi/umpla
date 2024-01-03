<?php
/* Index.php faqja qe permban formen e loginit) */
	include('kycu.php'); // Include Login Script
	if ((isset($_SESSION['perdoruesi_umpla']) != '')) 
	{
		header('Location: ballina.php');
	}	
?>

<!DOCTYPE html>
<html>
<head>
		<title>Moduli i Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="jquery.js"></script>

	<script>
    $(document).ready(function () {
        $.getJSON("test.json", function (data) {

            var arrItems = [];      // THE ARRAY TO STORE JSON ITEMS.
            $.each(data, function (index, value) {
                arrItems.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });

            // EXTRACT VALUE FOR TABLE HEADER.
            var col = [];
            for (var i = 0; i < arrItems.length; i++) {
                for (var key in arrItems[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            // CREATE DYNAMIC TABLE.
            var table = document.createElement("table");

            // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

            var tr = table.insertRow(-1);                   // TABLE ROW.

           /* for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");      // TABLE HEADER.
                th.innerHTML = col[i];
                tr.appendChild(th);
            }*/

            // ADD JSON DATA TO THE TABLE AS ROWS.
            for (var i = 0; i < arrItems.length; i++) {

                tr = table.insertRow(-1);

                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = arrItems[i][col[j]];
                }
            }

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("shfaqTedhenen");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        });
    });
</script>
	
	</head>
      <body class="is-preload">

<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php include("fillimi_faqes.php"); ?>
					<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
							
							<blockquote id=shfaqTedhenen></blockquote>
											
	<section>
    <form method="post" action="#">
		<div class="row gtr-uniform">
		<div class="col-6 col-12-xsmall">
        <input type="text" name="emri" placeholder="Emri" /><br><br>
		</div>
		<div class="col-6 col-12-xsmall">
        <input type="password" name="fjalekalimi" placeholder="Fjalekalimi" />  <br><br>
		</div>
		<div class="col-12">
		   <ul class="actions">
			<li><input type="submit" name="submit" value="Kycu"/></li>
			</ul>
	   </div>
	   </div>
    </form>
	</section>
    	</section>
	</div>
	<!-- Footer -->
	<?php include("fundi_faqes.php"); ?>
</div>
	
	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>



