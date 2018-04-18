<?php
function func(&$str)
{
  $str .="Call by Reference";
}
$str ="Hello";
func($str);
echo $str;
?>


<?php

function setHeight($minheight=50 ) {

    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>
