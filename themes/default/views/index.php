<?php

	$output .= '
			      <div class="jumbotron jumbotron-fluid">
			        <div class="container">
			          <h1 class="display-3">'.$frontpage_title.'</h1>
			          <p>'.$frontpage_message.'</p>
			        </div>
			      </div>

			      <div class="container">
				    <!-- Example row of columns -->
				    <div class="row">';

				    for ($i = 0; $i <= sizeof($newsTitles) - 1; $i++) {
    					$output .= '
    						<div class="col-md-'.$newsCountColSize.'">
				        		<h2>'.$newsTitles[$i].'</h2>
				        		<p>'.$newsSummaries[$i].'</p>
				        		<p><a class="btn btn-secondary" href="./news.php?newsID='.($i+1).'" role="button">More &raquo;</a></p>
				      		</div>
    					';
					}
				     
	$output .= '		</div>
				    </div>
				  </div>

	';

?>