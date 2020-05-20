<?php

	require_once('conn.php');
	
	if(isset($_POST["id_horse"])){
		
		$output = '';
		
		$query_horse = "SELECT * FROM horses WHERE id_horse = '".$_POST["id_horse"]."'";
		$result_horse = mysqli_query($conn, $query_horse);
		
		$output .= '
		
			<div class="table-responsive">
				<table class="table table-bordered">';
			
			while($row = mysqli_fetch_array($result_horse)){
				
				$output .= '
				
					<tr>
						<td width="30%"><label> Name </label></td>
						<td width="30%"><label>'.$row["horse_name"].'</label></td>
					</tr>
					
					<tr>
						<td width="30%"><label> Date Of Birth </label></td>
						<td width="30%"><label>'.$row["date_of_birth"].'</label></td>
					</tr>
					
					<tr>
						<td width="30%"><label> Sex </label></td>
						<td width="30%"><label>'.$row["sex"].'</label></td>
					</tr>
					
					<tr>
						<td width="30%"><label> Colour </label></td>
						<td width="30%"><label>'.$row["colour"].'</label></td>
					</tr>
					
					<tr>
						<td width="30%"><label> Trainer </label></td>
						<td width="30%"><label>'.$row["trainer"].'</label></td>
					</tr>
					
				
				';
				
			}
			
			$output .= "</table></div>";
			echo $output;
		
	}
	
?>