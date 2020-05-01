<?php
session_start();
require_once("db_conf.php");
if(!empty($_POST["add_record"])) {
	$sql = "INSERT INTO oap (Option1,type,Name,Cost,OptionHours,Weight,shopping_site,tech_talk) VALUES (:Option1,:type,:Name,:Cost,:OptionHours,:Weight,:shopping_site,:tech_talk)";
	$pdo_statement = $pdo_conn->prepare( $sql );
	$result = $pdo_statement->execute( array(':Option1'=>$_POST['Option1'],':type'=>$_POST['type'],':Name'=>$_POST['Name'],':Cost'=>$_POST['Cost'],':OptionHours'=>$_POST['OptionHours'],':Weight'=>$_POST['Weight']  ,':shopping_site'=>$_POST['shopping_site'],':tech_talk'=>$_POST['tech_talk']));
	if (!empty($result) ){
	  header('location:project.php');
	}
}
?>
<!doctype html>
<html lang="en">
<meta name="viewport" content="initial-scale=1.0">
        <meta charset="utf-8">
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
<div class="page_header">
<div class="row">
    <div class="col-md-6"><h2>Add New</h2></div>
    <div class="col-md-6 text-right"><a href="project.php" class="btn btn-primary"><i class="fa fa-angle-left"></i> Back to List</a></div>
    </div>
    </div>
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="frm-add">
<form name="frmAdd" action="" method="POST">
  <div class="form_element">
<style>          
          #map { 
            height: 300px;    
            width: 550px;            
          }          
        </style> 

    <input type="text" name="Option1" id="Option1" value ="" class="input_text" placeholder="Enter Option#" required/>
         <label for="input" class="input_label">Option#</label>
 </div> 
<div class="form_element">
    <input type="text" class="input_text" name="type" id="type" placeholder="Enter type" required>
    <label for="input" class="input_label">type</label>
  </div>
 <div class="form_element">
   <textarea class="input_text" name="Name" id="Name" placeholder="Enter Name" required></textarea>    
    <label for="input" class="input_label">Name</label>
  </div>
  <div class="form_element">
   <textarea class="input_text" name="Cost" id="Cost" placeholder="Enter Cost/Direct/Price" required></textarea>    
    <label for="input" class="input_label">Cost/Direct/Price</label>
  </div>
  <div class="form_element">
   <textarea class="input_text" name="OptionHours" id="OptionHours" placeholder="Enter Option Hours" required></textarea>    
    <label for="input" class="input_label">Option Hours</label>
  </div>
  <div class="form_element">
   <textarea class="input_text" name="Weight" id="Weight" placeholder="Enter Weight" required></textarea>    
    <label for="input" class="input_label">Weight</label>
  </div>
  <div class="form_element">
   <textarea class="input_text" name="shopping_site" id="shopping_site" placeholder="Enter Shopping Site content" required></textarea>    
    <label for="input" class="input_label">Shopping Site content</label>
  </div>
  <div class="form_element">
   <textarea class="input_text" name="tech_talk" id="tech_talk" placeholder="Enter Tech talk" required></textarea>    
    <label for="input" class="input_label">Tech talk</label>
  </div>
  <div class="form-group">
      <button name="add_record" id="add_record" type="submit" value="Add project" class="btn btn-primary btn-block btn-lg text-uppercase">Add New</button>
  </div>
  </form>
</div> 
    </div>
    </div>
    </div>
</section>
    </main>

 <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
     <script src="js/bootstrap.js"></script>
</body>
</html>