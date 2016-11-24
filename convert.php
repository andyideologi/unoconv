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

$HOME = '/home/bitnami'; 
/* $HOME :this is the root directory path which you can get through env array.
if you are using terminal then enter command 'echo $HOME' and enter. You will get home directory path */
putenv('PATH=/opt/bitnami/frameworks/laravel/app/Console:/opt/bitnami/frameworks/cakephp/bin:/opt/bitnami/frameworks/codeigniter/bin:/opt/bitnami/frameworks/symfony/bin:/opt/bitnami/frameworks/zendframework/app/Console:/opt/bitnami/git/bin:/opt/bitnami/varnish/bin:/opt/bitnami/sqlite/bin:/opt/bitnami/php/bin:/opt/bitnami/mysql/bin:/opt/bitnami/apache2/bin:/opt/bitnami/common/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games');
/* You can get PATH using 'echo $PATH' on terminal. You have to put all paths to PATH variable using putenv */

shell_exec("/usr/bin/unoconv -f pdf test.doc");


?>
