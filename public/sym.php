
<?php
$output=null;
$resultCode=null;
//get the memory info of a Ubuntu machine
$u=shell_exec("pwd 2>&1 ");
echo "Returned with status $u and output uu:\n";
print_r($u);
