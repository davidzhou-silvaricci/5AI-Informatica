<?php
class File
{
  private $id;
  private $name;
  private $size;
  private $type;

  public function add($file)
  {
    $this->id = uniqid();
    $this->name = $file["name"];
    $this->size = $file["size"];
    $this->type = $file["type"];
    $this->save();
  }

  public function view($id)
  {
    return unserialize($_SESSION["files"][$id]);
  }

  public function download($filename)
  {
    $filepath = "uploads/" . $filename;
    if (file_exists($filepath)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header("Cache-Control: no-cache, must-revalidate");
      header("Expires: 0");
      header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
      header('Content-Length: ' . filesize($filepath));
      header('Pragma: public');
      flush();
      readfile($filepath);
    }
  }

  public function save()
  {
    $_SESSION["files"][$this->id] = serialize($this);
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getSize()
  {
    return $this->human_filesize($this->size);
  }

  public function getType()
  {
    return $this->type;
  }

  public static function getTextFiles()
  {
    if (!isset($_SESSION["files"])) return false;
    $files = [];
    foreach ($_SESSION["files"] as $key => $value) {
      $file = unserialize($value);
      if (substr(mime_content_type("uploads/" . $file->getName()), 0, 5) === "text/") {
        array_push($files, $file);
      }
    }
    return $files;
  }

  public static function getImageFiles()
  {
    if (!isset($_SESSION["files"])) return false;
    $files = [];
    foreach ($_SESSION["files"] as $key => $value) {
      $file = unserialize($value);
      if (substr(mime_content_type("uploads/" . $file->getName()), 0, 6) === "image/") {
        array_push($files, $file);
      }
    }
    return $files;
  }

  public static function deleteAll()
  {
    session_unset();

    // Rimuovo anche i file nelle cartelle
    $files = glob('uploads/*');
    foreach ($files as $file) if (is_file($file)) unlink($file);
  }

  private function human_filesize($bytes, $decimals = 2)
  {
    $sz = 'BKMGTP';
    $factor = floor((strlen($bytes) - 1) / 3);
    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
  }
}
