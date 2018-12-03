<?php
chdir("/opt/solr-4.2.0/example/");

exec("java -jar start.jar > output.log 2>&1 &");

?>
