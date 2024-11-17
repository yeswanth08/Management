 <?php
	$alldata=$dbobj->fetchAll("select * from banner order by id desc");
?> 
<style type="text/css">
	table{
		
		font-size: 18px;
	}
	.section{
		margin-top: 40px;
	}
</style>


<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>S.No.</th>
		<th>Title</th>
		<th>Description</th>
		<th>Images</th>
		<th>Action</th>
	</tr>
	<tr>
		<td colspan="5"><a href="<?php echo BASEURL;?>">Add New Record</a></td>
	</tr>
	<?php
	$sno=0;
	foreach ($alldata as $data) {
	?>
	<tr>
		<td><?php echo ++$sno; ?></td>
		<td><?php echo $data['title'] ?></td>
		<td><?php echo $data['description'] ?></td>
		<td>
			<?php if($data['image']){
							if(file_exists("public/images/$data[image]")){
							?>
								<img class="one" src="<?php echo BASEURL."public/images/$data[image]";?>" height="50px" width="50px" />
							<?php

							}else{
								echo "Not uploaded Properly";
							}

						}else{
							echo "not uploaded";
						}				
			?>
		</td>
		<td>
			<a href="<?php echo BASEURL;?>">Edit</a>&nbsp; &nbsp; | &nbsp; &nbsp;
			<a href="">Delete</a>
		</td>
	</tr>
	<?php } ?>
	
</table>

<?php include "modules/about/index.php";?>
<div class="section">
	<?php include "modules/services/index.php";?>
	<?php include "modules/team/index.php";?>
	<?php include "modules/food/index.php";?>
	<?php include "modules/food/index.php";?>
	<?php include "modules/contact/index.php";?>
</div>


<script type="text/javascript">
	function delclick(path)
	{
		if(confirm("do you want to delete this record")){
			location.href=path;
		}
	}
</script>