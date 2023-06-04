<?php
$name = 'saurabh';
$str = 'I am $name';
eval("\$str = \"$str\";");
echo  $str;