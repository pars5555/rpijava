<?php
exec('sh /var/www/rpijava_git_update.sh  2>&1', $output);
if (is_array($output))
{
    foreach($output as $out)
    echo $out ."\r\n";
}else
{
var_dump($output);
}


?>