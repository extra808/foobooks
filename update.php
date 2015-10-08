<?php
 $secret = "hushhushsweetdarling";
 $cwd = getcwd();
 $dump = json_encode($_POST);
 exec('echo "git pull\n"' ."$cwd\n"  .$dump .' >> storage/file');
?>