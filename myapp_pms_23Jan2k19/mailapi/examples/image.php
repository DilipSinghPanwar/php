<form method="post" enctype="multipart/form-data">
 <label>Email id</label>
 <input type="text" name="email"/>
 <br><br>
 <label>Subject</label>
 <input type="text" name="sub"/>
 <br><br>
 <label>Mail Body</label>
 <textarea name="msg"></textarea>
 <br><br>
  <label>Add attachment</label>
 <input type="file" name="file"/>
 <br><br>
 <input type="submit" name="s" value="Send mail"/>
</form>
<?php
if(isset($_REQUEST['s']))
{
  
  extract($_REQUEST);
  echo $size=$_FILES['file']['size'];
  echo "<br><br>";
  echo $height=$_FILES['file']['height'];
  echo "<br><br>";
  echo $width=$_FILES['file']['width'];
  
  echo "<pre>";
  print_r($_FILES);
  
  $filename=$_FILES['file']['name'];
  echo getimagesize($filename);
  
  die();
  
  
  
  $filename=$_FILES['file']['name'];
  $tempfilename=$_FILES['file']['tmp_name'];
  
  $des="images/$filename";
  move_uploaded_file($tempfilename,$des);

}
?>
