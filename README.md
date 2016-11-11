
UNOCONV - Universal Office Conversion ======================

Credit goes to : Dag Wieers ( https://github.com/dagwieers )
================================================================================================================

We use Unoconv to convert any like doc, odt, ppt file into pdf using command line or PHP. 
To do it with PHP , we just need to execute 'unoconv -f pdf doc_file_path/filename.doc' command using PHP function (shell_exec()).


 ** I have implemented example on MAC OS and Amazon EC2 ubuntu 14.04. ** 

Before we use unoconv, it is very important that we should install Libreoffice and Unoconv with proper versions.
If you install wrong version of Libreoffice or Unoconv then there are possibiities of getting confusing error messages. 
I lost 3 days just because of wrong version installation.

Example 1:
----------
---------------------------------------

I implemented unoconv on Local for MAMP , Mac OS.
 
      a) MAMP
      b) Libreoffice 4.2.5.2 
                   - ( I will suggest that you should not install newer version of Libreoffice. Unoconv do not understand file structure of newer versions )
                   - link where you will find all versions of libreoffice(https://downloadarchive.documentfoundation.org/libreoffice/old/)

      c) Unoconv 0.6 / 0.7
                  - When you install unoconv , you should immediately find where it is installed.
                  - if you are using Ubuntu or linux the you can search it by command 'which unoconv'. You will get the where it is installed.
                  - link to download unoconv ( sudo wget https://raw.githubusercontent.com/dagwieers/unoconv/master/unoconv )

Below are the steps and commands to install and execute unoconv using PHP.

Step 1) Install Libreoffice 4.2.5.2 dmg file :

       - link : 
              https://downloadarchive.documentfoundation.org/libreoffice/old/4.2.5.2/mac/x86_64/LibreOffice_4.2.5.2_MacOS_x86-64.dmg
       - Install Libreoffice on MAC OS. It is same as any other app installation.
       - Keep in mind that there should be only one version installed. Will suggest you to uninstall OPenOffice if it is installed.

Step 2) Install unoconv from command line :

       -  execute this command from Command line ( sudo wget https://raw.githubusercontent.com/dagwieers/unoconv/master/unoconv ) 
       - you can execute all commands from root or from your project directory. 
       - After successful installation execute another command 'which unoconv'. This command give you the path where it is installed.


       You are done with installation.

Step 3) Create PHP script for file conversion :

      - create simple php file.
      - paste below code and edit :
      <?php
       

       shell_exec('unoconv_file_path_which_you_got_using_which_command -f pdf path_of_the_file_which_has_to_be_converted');

       // example : shell_exec('usr/bin/unoconv -f pdf example.doc')


      ?>  

      - when you run the page from browser you will get file converted into pdf in the same folder where your original file is present.
      
      - You can also try below code for conversion,
      <?php
                 $HOME= '/opt/bitnami/apache2/htdocs/temp/'; // path of home directory
				 $PATH = "/usr/bin";
				 putenv('PATH=/usr/bin');
				 
				 $command = 'echo $HOME  & echo $PATH  & UNO_PATH=/usr/lib/libreoffice &  
				            /opt/unoconv -vvvv --format pdf --output test.pdf test.doc';

				 $op=exec($command, $output, $result_var);
				 print_r($result_var);
				 print_r($output);
      ?>


      Thats it!!

..........................................................................................................
Example 2 
-----------
---------------------------------------     

Implementation of unoconv on Amazon EC2 ubuntu 14.04 

          As we are dealing with Amazon we use command line for every installation.


Step 1) Install libreoffice 4.2.5.2 through command line :


     - downloaded tar.gz file of expected version deb file. 
     Execute command 'sudo wget https://downloadarchive.documentfoundation.org/libreoffice/old/4.2.5.2/deb/x86_64/LibreOffice_4.2.5.2_Linux_x86-64_deb.tar.gz'
     - Extract tar file.
     Execute command 'sudo tar zxvf LibreOffice_4.2.5.2_Linux_x86-64_deb.tar.gz'
     - Go to DEBS folder
     Execute command 'cd DEBS'
     - Install all debian file packages.
     Execute command 'sudo dpkg -i *.deb'

     You are done with libreoffice installation.

Step 2) Install unoconv file through command line :

     - Execute command 'sudo wget https://raw.githubusercontent.com/dagwieers/unoconv/master/unoconv'
     - when installation complete execute command 'which unoconv'
     - copy this path for file coversion use.

Step 3) follow step 3 in example 1.

You are done.


  Please suggest any change. These 2 examples are working fine for me.
             













