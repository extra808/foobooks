<?php
 $secret = "hushhushsweetdarling";
 $dump = var_dump($_POST);
 exec('echo "git pull\n"' .$dump .' >> storage/file');
?>