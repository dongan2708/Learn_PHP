<HTML>
<HEAD>
    <TITLE>Static Variables</TITLE>
</HEAD>
<BODY>
<?php
function decrement()
{
    static $static_int1 = 99;
    $static_int1--;
    echo "The decrement value is $static_int1";
}
decrement();
?>
</BODY>
</HTML>