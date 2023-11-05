<?php
error_reporting(0);
//let' first define our directory
$directory = "editx";

// lets the get file
//select file 
$file_contents = file_get_contents($directory."/".$_GET['file_name']);

//as you can see disply view and edit
//the output is testing

if ($_POST['submit']) {

      file_put_contents($directory."/".$_GET['file_name'], $_POST['file_contents']);
}

?>

<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">    
   <style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>  
     
     
     
     
<title>Php editor</title>
</head>
<body>








<?php
//let's try to display the contents of our directory 
$scan_directory = scandir ($directory);


foreach ($scan_directory as $files)
{

// we will check if the files in our directory are directory
// or not. if its's not directory it will be displayed 
// otherwise it will not be displayed.



if (!is_dir($files))
{

      //lets's cereate a link this time that will be called 
      // if we click the file name 

 echo "<a href='?p=edit&file_name=".$files."'>".$files."</a> <br>";

    }
}
?>

<!--
      this time cerate the text editor
-->
<hr>
<form method="post">
      <input type="text" name="file_name" readonly value="<?php echo $_GET['file_name']?>"><br>
<textarea cols="30" rows="4" inputMode="numeric" maxLength="10" name="file_contents"><?php echo $file_contents ?></textarea>
<BR><BR>
<input type ="submit" class="button"  value="Save Changes" name="submit">

<input type="submit" class="button" value="Refresh" 
    onclick="window.location='editx.html';" />

</form>

</body>
</html>

