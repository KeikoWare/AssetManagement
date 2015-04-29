<html>

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

	</script>	
	
<head>
<title>CNS Asset Manager</title>
</head>
<body>
<h1>CNS Asset Manager</h1>
<h2>Introduction</h2>
Bla Bla bla bla<br><br>
<div class="container" style="width:1100px;">
<section>
<table id="assetTable" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
			<th>id</th>
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
			<th>loaction</th>
			<th>asset_created_date</th>
			<th>asset_updated_date</th>
			<th>retired</th>
      </tr>
    </thead>
 
    <tfoot>
        <tr>
			<th>id</th>
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
			<th>loaction</th>
			<th>asset_created_date</th>
			<th>asset_updated_date</th>
			<th>retired</th>
        </tr>
    </tfoot>
 </table>
</section>
</div>
</body>
</html>
