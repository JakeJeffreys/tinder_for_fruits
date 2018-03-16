<?php

	/* KIND OF A WEIRD FORMATTING TO DO THIS, BUT I WANTED
	TO MESS AROUND WITH ORDERED LISTS. MAY NEED CHANGING IN THE FUTURE. - Jacob*/


	/* This will output 10 elements from an array that will eventually be generated
	from our recommendation calculations. I just filled the array with dummy strings
	in the initial for loop below. */

	include( 'header.php' );

	check_user( true );

	include( 'db_functions.php' );

?>

<table data-id="">

		<td id="item-container">
			Here is the image:
				<img>
				<div class="spinner-container">
						<div class="mdl-spinner mdl-js-spinner is-active"></div>
				</div>
				<div class="title top-40 centered"></div>

		</td>

</table>

<div class="mdl-grid">

    <div class="title top-40 centered mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">
        Top 10 fruits for you
    </div>

    <div class="recommendations top-40 centered mdl-cell mdl-cell--8-col mdl-cell--8-col-tablet">

		<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp centered" style="width:100%">
		  <thead>
		    <tr>
		      <th>Rank</th>
		      <th>Image</th>
		      <th>Name</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>1</td>
		      <td><img src="img/watermelon.jpg" style="width:100px;height:70px;"> <br><br> </td>
		      <td>Watermelon</td>
		    </tr>
		    <tr>
		      <td>2</td>
		      <td><img src="img/banana.jpg" style="width:100px;height:70px;"> <br><br> </td>
		      <td>Banana</td>

		    </tr>
		    <tr>
		  	  <td>3</td>
		      <td><img src="img/apple.jpg" style="width:100px;height:70px;"> <br><br> </td>
		      <td>Apple</td>

		    </tr>
		  </tbody>
		</table>

	</div>
</div>





<?php include( 'footer.php' ); ?>
<script type="text/javascript" src="js/play.js"></script>
