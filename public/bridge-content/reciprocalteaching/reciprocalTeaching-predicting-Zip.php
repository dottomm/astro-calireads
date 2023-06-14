<?php

//Enter the name of directory
   $pathdir = "predicting/";
//Enter the name to creating zipped directory
   $zipcreated = "RT-Predicting_Resources.zip";
//Create new zip class
   $newzip = new ZipArchive;
   if($newzip -> open($zipcreated, ZipArchive::CREATE ) === TRUE) {
         $dir = opendir($pathdir);
         while($file = readdir($dir)) {
            if(is_file($pathdir.$file)) {
               $newzip -> addFile($pathdir.$file, $file);
            }
         }
         $newzip ->close();
   }
header('Content-type: application/zip');
   header('Content-Disposition: attachment; filename="'.basename($zipcreated).'"');
   header("Content-length: " . filesize($zipcreated));
   header("Pragma: no-cache");
   header("Expires: 0");

   ob_clean();
   flush();

   readfile($zipcreated);

   unlink($zipcreated);


   exit;
   ?>
