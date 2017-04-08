<?php
	function getAll($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl}";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;
		}else{
			$error = "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	}

	function getNews($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl} ORDER BY news_id DESC";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;
		}else{
			$error = "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	}
	
	function getEvents($tbl) {
		include('connect.php');
		$queryAll = "SELECT * FROM {$tbl} ORDER BY events_id DESC";
		$runAll = mysqli_query($link, $queryAll);
		if($runAll){
			return $runAll;
		}else{
			$error = "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	}

	function getImage($tbl) {
		require_once('connect.php');

		$queryAll = "SELECT * FROM {$tbl} order by images_id";

		$runAll = mysqli_query($link, $queryAll);

		if($runAll){
			return $runAll;
		}else{
			$error = "There was an error accessing this information. Please contact your admin.";
			return $error;
		}
	}
	
	function filterType($tbl1, $tbl2, $tbl3, $col1, $col2, $col3, $filter) {
		include('connect.php');
		//$tbl1, $tbl2, $tbl3, $col1, $col2, $col3, $filter
		
		/*$tbl1 = "tbl_movies";
		$tbl2 = "tbl_cat";
		$tbl3 = "tbl_L_mc";
		$col1 = "movies_id";
		$col2 = "cat_id";
		$col3 = "cat_name";
		$filter = "action";*/
		
		$queryFilter = "SELECT * FROM {$tbl1}, {$tbl2}, {$tbl3} WHERE {$tbl1}.{$col1} = {$tbl3}.{$col1} AND {$tbl2}.{$col2} = {$tbl3}.{$col2} AND {$tbl2}.{$col3} = '{$filter}'";
		
		//echo $filterQuery;
		
		$runFilter = mysqli_query($link, $queryFilter);
		
		if($runFilter){
			return $runFilter;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}
?>