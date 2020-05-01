<?php
require_once("db_conf.php");
session_start();

if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("update oap set Option1='" . $_POST['Option1'] . "', type='" . $_POST['type']. "', Name='" . $_POST['Name']."', Cost='" . $_POST['Cost']. "', OptionHours='" . $_POST['OptionHours']. "', Weight='" . $_POST['Weight']. "',shopping_site='" . $_POST['shopping_site']. "',tech_talk='" . $_POST['tech_talk']. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:project.php');
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM oap where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
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
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body>
<main role="main">
<section class="container">
    
<div class="section">
<div class="row">
 <div class="col-md-6"><h1 class="page_header">Edit </h1></div>
    <div class="col-md-6 text-right"><a href="project.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> Back to List</a></div>
   
    </div>
    
    <div class="row">
    <div class="col-md-6 offset-md-3">
    <form name="frmAdd" action="" method="POST">
 <div class="form_element">
	  
	  <input type="text" name="Option1" class="input_text" value="<?php echo $result[0]['Option1']; ?>" placeholder="Option#" required  />
	   <label for="input" class="input_label">Option#</label>
  </div>
 <div class="form_element">
	  
	  <input type="text" name="type" class="input_text" value="<?php echo $result[0]['type']; ?>"  placeholder="type" required />
	  <label for="input" class="input_label">type</label>
  </div>
   <div class="form_element">
	  
	  <textarea name="Name" class="input_text"  placeholder="Name" required  ><?php echo $result[0]['Name']; ?></textarea>
	  <label for="input" class="input_label">Name</label>
  </div>
  <div class="form_element">
    
    <textarea name="Cost" class="input_text"  placeholder="Cost" required  ><?php echo $result[0]['Cost']; ?></textarea>
    <label for="input" class="input_label">Cost</label>
  </div>
  <div class="form_element">
    
    <textarea name="OptionHours" class="input_text"  placeholder="OptionHours" required  ><?php echo $result[0]['OptionHours']; ?></textarea>
    <label for="input" class="input_label">OptionHours</label>
  </div><div class="form_element">
    
    <textarea name="Weight" class="input_text"  placeholder="Weight" required  ><?php echo $result[0]['Weight']; ?></textarea>
    <label for="input" class="input_label">Weight</label>
  </div>
  <div class="form_element">
    
    <textarea name="shopping_site" class="input_text"  placeholder="shopping_site" required  ><?php echo $result[0]['shopping_site']; ?></textarea>
    <label for="input" class="input_label">shopping_site</label>
  </div>
  <div class="form_element">
    
    <textarea name="tech_talk" class="input_text"  placeholder="tech_talk" required  ><?php echo $result[0]['tech_talk']; ?></textarea>
    <label for="input" class="input_label">tech_talk</label>
  </div>
  <div class="form-group">
	  <input name="save_record" type="submit" value="Save" class="btn btn-primary btn-block btn-lg text-uppercase">
  </div>
  </form>
    
    </div>
    </div>
    
    </div>
    </section>
      </main>
    
    
    




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>