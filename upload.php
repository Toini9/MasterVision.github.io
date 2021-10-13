
<?php 

$repVues = './vues/';
$repInclude = './include/';
error_reporting(E_ALL);
ini_set("display_errors", 1);

  require 'include/connect_db.php'

  $file_name = $_FILES['file']['name'];

  $file_tmp_name = $_FILES['file']['tmp_name'];

  $file_dest = 'files/'.$file_name;

  move_uploaded_file($file_tmp_name, $file_dest);
  $req = $db->prepare('INSERT INTO formulairefichier(file_name,file_dest) VALUES(?,?)');
  $req->execute(array($file_name,$file_dest));
  include($repVues."vformUpload.php") ;
 ?>
