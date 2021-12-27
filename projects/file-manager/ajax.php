<?php

include("autoloader.php");

/*
$arr_file_types = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

if (!(in_array($_FILES['file']['type'], $arr_file_types))) {
  echo "false";
  return;
}
*/

if(substr($_FILES['file']['type'], 0, 6) === "image/") {
  echo "image";
}
else if(substr($_FILES['file']['type'], 0, 5) === "text/") {
  echo "text";
}
else {
  echo "false";
  return;
}

if (!file_exists('uploads')) {
  mkdir('uploads', 0777);
}

// Si potrebbe usare anche uniqid(true) o entrambi insieme.
$filename = time().'_'.$_FILES['file']['name'];
  
move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/'.$filename);
  
echo 'uploads/'.$filename;

// Aggiungo il file in sessione
$file = new File();
$file->add(["name" => $filename, "size" => filesize('uploads/'.$filename), "type" => $_FILES['file']['type']]);

die;