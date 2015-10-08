<?php
 $secret = "hushhushsweetdarling";
 $dump = json_encode($_POST);
 exec('echo "git pull\n"' .$dump .' >> storage/file');
?>