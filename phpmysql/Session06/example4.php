<HTML>
<HEAD>
    <TITLE>Local Variable</TITLE>
</HEAD>
<BODY>
<?php
function sum()
{
    $int1 = 43.4;
    $int2 = 13;
    $int3 = $int1 + $int2;

    echo "The sum of $int1 + $int2 = $int3";
}
sum();
?>
</BODY>
</HTML>