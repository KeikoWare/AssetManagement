<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="css/dataTables.colVis.css">

	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="js/dataTables.colVis.js"></script>	
	<script type="text/javascript" language="javascript" src="js/dataTables.responsive.js"></script>	
	
	<script type="text/javascript" language="javascript" class="init">
	$(document).ready( function () {
		$('#assetTable').DataTable( {
			responsive: {
				details: {
					type: 'inline'
				}
			},
			order: [ 0, 'asc' ],
			"dom": 'C<"clear">lfrtip',
			"colVis": {
				"buttonText": "Skjul kolonner"
			},
			"processing": true,
			"serverSide": true,
			"ajax": "scripts/server_processing.php"
	 
		} );
	} );
	
   function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
   }
</script>

<title>CNS Asset Manager</title>
</head>
<body>
<div class="content" style="width:1100px;vertical-align:center;">
<h1>CNS Asset Manager</h1>
<h2>Introduction</h2>
Bla Bla bla bla<br><br>
<div class="container" style="width:1100px;">
<section>
<table id="assetTable" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr><th>id</th>
			<th>asset_tag</th>
			<th>serial</th>
			<th>name</th>
			<th>model</th>
			<th>purchase_date</th>
			<th>supplier</th>
			<th>order_number</th>
			<th>purchase_cost</th>
			<th>warranty_in_months</th>
			<th>asset_status</th>
			<th>notes</th>
			<th>location</th>
			<th>asset_created_date</th>
			<th>asset_updated_date</th>
			<th>retired</th>
      </tr>
    </thead>
 
    <tfoot>
        <tr><th>id</th>
			<th>asset_tag</th>
			<th>serial</th>
			<th>name</th>
			<th>model</th>
			<th>purchase_date</th>
			<th>supplier</th>
			<th>order_number</th>
			<th>purchase_cost</th>
			<th>warranty_in_months</th>
			<th>asset_status</th>
			<th>notes</th>
			<th>location</th>
			<th>asset_created_date</th>
			<th>asset_updated_date</th>
			<th>retired</th>
        </tr>
    </tfoot>
 </table>
</section>
<input type='button' id='hideshow' value='Add new asset' onclick="toggle_visibility('divinputform');">
</div><!-- container div -->

<div id="divinputform" style="width:1100px;display:none;">
<form name="asset_form" action="scripts/asset_db.php" method="POST">
<table align=center>
<tr><td valign=top colspan=2><h2>Input form</h2></td></tr>
<tr><td valign=top>
<table>
<tr><th>asset_tag</th><td><input type=text name="asset_tag"></td></tr>
<tr><th>serial</th><td><input type=text name="serial"></td></tr>
<tr><th>name</th><td><input type=text name="name"></td></tr>
<tr><th>model</th><td><input type=text name="model"></td></tr>
<tr><th>purchase_date</th><td><input type=date name="purchase_date"></td></tr>
<tr><th>supplier</th><td><input type=text name="supplier"></td></tr>
<tr><th>order_number</th><td><input type=text name="order_number"></td></tr>
</table>
</td><td valign=top>
<table>
<tr><th>purchase_cost</th><td><input type=text name="purchase_cost"></td></tr>
<tr><th>warranty_in_months</th><td><input type=text name="warranty_in_months"></td></tr>
<tr><th>asset_status</th><td><input type=text name="asset_status"></td></tr>
<tr><th>notes</th><td><textarea name="notes" ></textarea></td></tr>
<tr><th>location</th><td><input type=text name="loaction"></td></tr>
<tr><th></th><td><input type=submit value="Gem"></td></tr>
</table>
</td></tr></table>
</form>
</div><!-- inputform div -->

<div id="editform" style="width:1100px;display:none;">
</div><!-- editform div -->

</div> <!-- content div -->
</body>
</html>
