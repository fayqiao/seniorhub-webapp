<?php get_header(); ?>

<div class="row pagecont">
	
	<?php
		$postid = get_the_ID(); 	
	?> 
	<?php $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
		if($children){ ?>
		<div class="col-sm-3 pagelist">
			<ul id="leftlist">
				<?php echo $children; ?>
			</ul>
		</div>
	<?php } ?>
	
	
	<div class="col-sm-9">
<div class="breadcrumbs"> 
    <?php if(function_exists('bcn_display'))
    {
        //bcn_display();
    }?>
</div>
		<h4><?php the_title(); ?></h4>
		<?php	if(($postid != "303")&&($postid != "305")){	?>
			<?php if(have_posts()) : ?>
			   <?php while(have_posts()) : the_post(); ?>			 
			 	<?php the_content(); ?>
			
			   <?php endwhile; ?>
			<?php endif; ?>
			
		<?php	}else if($postid == "303"){	?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
		<link href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css" rel='stylesheet' type='text/css'>
		<script>
			$(document).ready(function(){
				$('#HSC_Table').dataTable();
				$('#HH_Table').dataTable();
				$('#RV_Table').dataTable();
			});
		</script>
		<?php
					include('extra_dataset.php');
					$con=mysqli_connect("localhost",NEW_DB_USER,NEW_DB_PASS,NEW_DB_NAME);

					if (mysqli_connect_errno()) {
						echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$query_hsc	=	"SELECT * FROM `Family_Health_Service_Centre`";
					
					$result = mysqli_query($con,$query_hsc);
					
					$i	=	0;
					while($row = mysqli_fetch_array($result)) {
						$results[$i]	=	$row;
						$i++;
					}
					
					
					$query_hh	=	"SELECT * FROM `Health_Hospitals_Locations`";
					
					$result_hh = mysqli_query($con,$query_hh);
					
					$i	=	0;
					while($row = mysqli_fetch_array($result_hh)) {
						$results_hh[$i]	=	$row;
						$i++;
					}
					
					$query_rv	=	"SELECT * FROM `retirement_villages`";
					
					$result_rv = mysqli_query($con,$query_rv);
					
					$i	=	0;
					while($row = mysqli_fetch_array($result_rv)) {
						$results_rv[$i]	=	$row;
						$i++;
					}
					
					mysqli_close($con);
					
		?>
			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Child and Family Health Service Centre Locations</h2>
					
					<p><br/></p>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
					<form action="" method="post">
					
						<table cellpadding="0" cellspacing="0" width="100%" id="HSC_Table">
						
							<thead>
								<tr>
									<th>Centre Name</th>
									<th>Address</th>
									<th>Suburb</th>
									<th>Postcode</th>
								</tr>
							</thead>
							
							<tbody>
								<?php
									for($i=0; $i<count($results); $i++){
								?>	
								<tr>
									<td><?php	echo $results[$i][0];	?></td>
									<td><?php	echo $results[$i][1];	?></td>
									<td><?php	echo $results[$i][2];	?></td>
									<td><?php	echo $results[$i][3];	?></td>

								</tr>
								<?php
									}
								?>
							</tbody>
							
						</table>

						
					</form>
					
				</div>		<!-- .block_content ends -->
				
			</div>		<!-- .block ends -->
			
			<hr>
			
			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>SA Health Hospitals Locations</h2>
					
					<p><br/></p>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
					<form action="" method="post">
					
						<table cellpadding="0" cellspacing="0" width="100%" id="HH_Table">
						
							<thead>
								<tr>
									<th>Centre Name</th>
									<th>Address</th>
									<th>Suburb</th>
									<th>Postcode</th>
									<th>Type</th>
								</tr>
							</thead>
							
							<tbody>
								<?php
									for($i=0; $i<count($results_hh); $i++){
								?>	
								<tr>
									<td><?php	echo $results_hh[$i][1];	?></td>
									<td><?php	echo $results_hh[$i][2];	?></td>
									<td><?php	echo $results_hh[$i][3];	?></td>
									<td><?php	echo $results_hh[$i][4];	?></td>
									<td><?php	echo $results_hh[$i][5];	?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
							
						</table>

						
					</form>
					
				</div>		<!-- .block_content ends -->
				
			</div>		<!-- .block ends -->
			
			<hr>
			
			<div class="block">
			
				<div class="block_head">
					<div class="bheadl"></div>
					<div class="bheadr"></div>
					
					<h2>Retirement Villages Locations</h2>
					
					<p><br/></p>
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
					<form action="" method="post">
					
						<table cellpadding="0" cellspacing="0" width="100%" id="RV_Table">
						
							<thead>
								<tr>
									<th>Centre Name</th>
									<th>Address</th>
									<th>AA Organisation</th>
									<th>AA Address</th>
								</tr>
							</thead>
							
							<tbody>
								<?php
									for($i=0; $i<count($results_rv); $i++){
								?>	
								<tr>
									<td><?php	echo $results_rv[$i][1];	?></td>
									<td><?php	echo $results_rv[$i][2];	?></td>
									<td><?php	echo $results_rv[$i][5];	?></td>
									<td><?php	echo $results_rv[$i][6];	?></td>
								</tr>
								<?php
									}
								?>
							</tbody>
							
						</table>

						
					</form>
					
				</div>		<!-- .block_content ends -->
				
			</div>		<!-- .block ends -->			
			
		<?php	}else if($postid == "305"){	?>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>
			<link href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css" rel='stylesheet' type='text/css'>
			<script>
			$(document).ready(function(){
				$('#LC_Table').dataTable();
			});
		</script>
			<div class="block">
			
				<div class="block_head">
				</div>		<!-- .block_head ends -->
				
				
				
				<div class="block_content">
				
					<form action="" method="post">
					
						<table cellpadding="0" cellspacing="0" width="100%" id="LC_Table">
						
							<thead>
								<tr>
									<th>Name</th>
									<th>Community</th>
									<th>Suburb</th>
									<th>interested in</th>
									<th>Say Hello</th>
								</tr>
							</thead>
							
							<tbody>
								<tr>
									<td>John Citizen</td>
									<td>Hyde Park</td>
									<td>Unley</td>
									<td>Playing Card, Swimming</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Mary Smith</td>
									<td>Hyde Park</td>
									<td>Unley</td>
									<td>Cooking, Walking</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Terry Young</td>
									<td>Magill</td>
									<td>Norwood</td>
									<td>Walking, Golf</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Peter Allen</td>
									<td>North Summit</td>
									<td>Adelaide Hill</td>
									<td>Cooking, Lawn bowling</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Mary Young</td>
									<td>Norwood</td>
									<td>Magill</td>
									<td>Lawn bowling, Walking</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Tom Smith</td>
									<td>Unley Park</td>
									<td>Unley</td>
									<td>Cooking, Walking</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Allen Young</td>
									<td>Adelaide</td>
									<td>Adelaide</td>
									<td>Golf, Walking</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>John White</td>
									<td>North Adelaide</td>
									<td>Adelaide</td>
									<td>Cooking, Walking, Playing Card</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Peter McGee</td>
									<td>Blair</td>
									<td>Blair</td>
									<td>Walking, Playing Card</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>David Thomson</td>
									<td>Burnside</td>
									<td>Burnside</td>
									<td>Cooking, Walking</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Sue White</td>
									<td>Norwood</td>
									<td>Magill</td>
									<td>Lawn bowling, Walking</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
								<tr>
									<td>Paul Smith</td>
									<td>West Lack</td>
									<td>West Lack</td>
									<td>Playing Card, Swimming</td>
									<td><a href="#">Say Hello</a></td>
								</tr>
							</tbody>
							
						</table>

						
					</form>
					
				</div>		<!-- .block_content ends -->
				
			</div>		<!-- .block ends -->
		<?php	}	?>
	
	</div>

</div>


</div>

<?php get_footer(); ?>