<?php
$path  = "/dir1/myfile.php";
$file1 = "file1.txt";

// Return filename
// echo basename($path);

// Return filename without extension
// echo basename($path, ".php");

// Return the directory from path
// echo dirname($path);

// Check if file exists
// echo file_exists($file1);

// Get absolute path
// echo realpath($file1);

// Check if it's a file
// echo is_file($file1);

// Check if file is writable
// echo is_writable($file1);

// Check if file is readable
// echo is_readable($file1);

// Get the file size
// echo filesize($file1);

// Create a directory
// mkdir("test");

// Remove a directory
// rmdir("test");

// Copy file
// echo copy("file1.txt", "file2.txt");

// Rename the file
// rename("file2.txt", "myfile.txt");

// Delete file
// unlink("myfile.txt");

// Write from file to string
// echo file_get_contents($file1);

// Write string to file
// echo file_put_contents($file1, "Good bye world!");

// $current = file_get_contents($file1);
// $current .= "\nGood bye sleep!";

// file_put_contents($file1, $current);

// Open file for reading
// $handle = fopen($file1, "r");
// $data   = fread($handle, filesize($file1));
// echo $data;
// fclose($handle)

// Open file for writing
$handle = fopen("file2.txt", "w");
$txt    = "John Doe!\n";
fwrite($handle, $txt);
$txt = "James Smith!\n";
fwrite($handle, $txt);
fclose($handle);
