<?php



error_reporting(E_ALL);

ini_set('display_errors', '1');
ini_set('max_execution_time', '-1');



// $HOME= '/opt/bitnami/apache2/htdocs/temp/';
// $PATH = "/usr/bin";
// putenv('PATH=/usr/bin');
// //echo $PATH;die;
// $command = 'echo $HOME  & echo $PATH  & UNO_PATH=/usr/lib/libreoffice &  
//            /opt/unoconv -vvvv --format pdf --output test.pdf test.doc';

// $op=exec($command, $output, $result_var);
// print_r($result_var);//die;
// print_r($output);//die;


shell_exec("/usr/bin/unoconv -f pdf test.doc");


?>