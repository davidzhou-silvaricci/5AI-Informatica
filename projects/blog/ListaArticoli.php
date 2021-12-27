<?php

class ListaArticoli {

  const BLOG = "index.php";
  const FORM = "form.php";
  const RESTART = self::BLOG."?restart=";

  public static function urlBlog() {
      return self::BLOG;
  }

  public static function urlForm() {
      return self::FORM;
  }

  public static function urlRestart() {
      return self::RESTART;
  }

  public static function urlView($id) {
    return "view.php?id=$id";
  }

  public static function urlEdit($id) {
    return "edit.php?id=$id";
  }

  public static function urlDelete($id) {
    return self::BLOG."?delete=$id";
  }

  public function lista() {
    if(isset($_SESSION['listaArticoli']))
      return $_SESSION['listaArticoli'];
    else return [];
  }

  public function save($value) {
    $_SESSION['listaArticoli'][$value->getID()] = serialize($value);
  }

  public function remove($id) {
    unset($_SESSION['listaArticoli'][$id]);
  }

  public function restart() {
    $_SESSION['listaArticoli'] = [];
    
    // Rimuovo anche i file nelle cartelle
    $files = glob('uploads/*');
    foreach($files as $file) if(is_file($file)) unlink($file);
    
    // echo '<div class="flex flex-wrap sm:flex-no-wrap justify-between items-center bg-green-50 overflow-hidden p-4 space-x-0 sm:space-x-2" > <div class="flex flex-1 sm:flex-initial justify-center items-baseline py-4 sm:py-0" > <span class="bg-green-300 bg-opacity-50 rounded-full p-1"> <svg class="h-10 sm:h-6 w-auto text-green-400" fill="currentColor" viewBox="0 0 20 20" > <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" ></path> </svg> </span> </div><div class="flex flex-col flex-grow text-center sm:text-left" > <h1 class="font-medium leading-relaxed sm:leading-normal"> Gli articoli sono stati eliminati correttamente. </h1> </div></div>';
  }
   
}

?>