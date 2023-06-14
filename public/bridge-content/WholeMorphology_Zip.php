
<?php
/ define some basics
$rootPath = './Morphology';
$archiveName = 'WholeMorphologyZipfile.zip';

// initialize the ZIP archive
$zip = new ZipArchive;
$zip->open($archiveName, ZipArchive::CREATE);

// create recursive directory iterator
$files = new RecursiveIteratorIterator (new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY);

// let's iterate
foreach ($files as $name => $file) {
   $filePath = $file->getRealPath();
   $zip->addFile($filePath);
}

// close the zip file
if (!$zip->close()) {
   echo '
There was a problem writing the ZIP archive.

';
} else {
   echo '
Successfully created the ZIP Archive!

';
}
   ?>
