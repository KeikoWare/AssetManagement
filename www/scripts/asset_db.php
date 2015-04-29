<?php
    /* Database connection information */
    $mySql['user']       = "assetmanager";
    $mySql['password']   = "4t6ZsSqZp5tceqKU";
    $mySql['db']         = "assetmanager";
    $mySql['server']     = "localhost";

    /*
     * MySQL connection
     */
    if ( ! $mySql['link'] = mysql_pconnect( $mySql['server'], $mySql['user'], $mySql['password']  ) )
    {
        fatal_error( 'Could not open connection to server' );
    }
 
    if ( ! mysql_select_db( $mySql['db'], $mySql['link'] ) )
    {
        fatal_error( 'Could not select database ' );
    }
	mysql_set_charset('utf8', $mySql['link']);

	$aColumns = array( 'id', 'asset_tag', 'serial', 'name', 'model', 'purchase_date', 'supplier', 'order_number', 'purchase_cost', 'warranty_in_months', 'asset_status', 'notes', 'loaction', 'asset_created_date', 'asset_updated_date', 'retired' );
	
	if(isset($_REQUEST['id']) && $_REQUEST['id']!= ""){
		//update scenario
		$sql = "UPDATE asset SET ";
		for($i = 0 ; $i < count($aColumns); $i++){
			if($_REQUEST[$aColumns[$i]] != "") $sql .= $aColumns[$i]." = '".mysql_real_escape_string($_REQUEST[$aColumns[$i]])."', ";
		}
		$sql=substr($sql,0,-2)." WHERE id = ".$_REQUEST['id'];
	} else {
		// insert scenario
		$sql = " INSERT INTO asset ";
		$sqlCol = "";
		$sqlVal = "";
		for($i = 1 ; $i < count($aColumns); $i++){
			if($_REQUEST[$aColumns[$i]] != "") {
				$sqlCol .= $aColumns[$i].", ";
				$sqlVal .= "'".mysql_real_escape_string($_REQUEST[$aColumns[$i]])."', ";
			}
		}
		$sql = $sql ."($sqlCol asset_created_date) VALUES ( $sqlVal NOW())";
		
	}
	mysql_query($sql);
	if(mysql_errno()>0){
		echo $sql."\n<br>".mysql_errno()." -> ".mysql_error();
		die;
	}
	header("Location: " . $_SERVER["HTTP_REFERER"]."?mysql_err=".urlencode(mysql_error()));
?>