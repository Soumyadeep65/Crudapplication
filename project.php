<?php

require_once("db_conf.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="RNS">
    <meta name="author" content="">
    <title>Option Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body>
    
<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM oap ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<!--<div style="text-align:right;margin:20px 0px;"><a href="project_add.php" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Create New project</a></div>-->

<main role="main" class="container">
<div class="page_header">
<div class="row">
    <div class="col-md-6">
        <h2>Option Administration Page</h2>
    </div>
    <div class="col-md-6">
    <div class="text-right"><a class="btn btn-primary" href="#" onclick="HTMLtoPDF()"></i>Pdf</a></div>
    </div>
    <div class="col-md-6">
        <div class="text-left"><a href="project_add.php" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a></div>
    </div>
<style type="text/css">
      /* Dropdown Button */
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>

<div class="dropdown">
  <button class="dropbtn">Filter Type:</button>
  <div class="dropdown-content">
    <a href="#" id="all">All</a>
    <a href="#" id="21-aud">21-Audio</a>
    <a href="#" id="99-cus">99-custom</a>
  </div>
</div>
</div>
</div>
<div class="section" id="HTMLtoPDF">
<table id="p_tbl" class="table table-striped table-bordered">
  <thead class="thead-dark">
	<tr>
         <th width="10%">Option#</th>
	  <th width="20%">Type</th>
	  <th  width="20%">Name</th>
	  <th  width="5%">Cost/Direct/Price</th>
      <th class="table-header" width="5%">Option Hours</th>
    <th class="table-header" width="5%">Weight</th>
    <th class="table-header" width="10%">Shopping site content</th>
    <th class="table-header" width="10%">Tech Talk</th>
	  <th align="center" width="10%">Edit</th>
    <th align="center" width="10%">Delete</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php

	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr>
		<td><?php echo $row["Option1"]; ?></td>
		<td><?php echo $row["type"]; ?></td>
		<td><?php echo $row["Name"]; ?></td>
    <td><?php echo $row["Cost"]; ?></td>
    <td><?php echo $row["OptionHours"]; ?></td>
    <td><?php echo $row["Weight"]; ?></td>
    <td><?php echo $row["shopping_site"]; ?></td>
    <td><?php echo $row["tech_talk"]; ?></td>
          <td  align="center"><a class="btn btn-sm btn-info" href='project_edit.php?id=<?php echo $row['id']; ?>'><i class="fa fa-edit"></i></a></td>
      <td  align="center"><a class="btn" href='project_delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" /></a></td>
	  </tr>
    <?php

		}
	}

	?>
  </tbody>
</table>
    </div>
    <script src="js/jspdf.js"></script>
  <script src="js/jquery-2.1.3.js"></script>
  <script src="js/pdfFromHTML.js"></script>
<script src="js/script.js"></script>
 <script type="text/javascript" src="js/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
  $(document).ready(function() {
    $('#p_tbl').DataTable();
} );
</script>
<script type="text/javascript">
      $("#all").click(function () {
        var rows = $("#p_tbl").find("tr").hide();
    rows.show();
 });
   $("#21-aud").click(function () {
    var rows = $("#p_tbl").find("tr").hide();
    rows.filter(":contains('21-Audio Dist')").show();
 });
   $("#99-cus").click(function () {
    var rows = $("#p_tbl").find("tr").hide();
    rows.filter(":contains('99-custom')").show();
 });
    </script>

</main>
</body>
</html>