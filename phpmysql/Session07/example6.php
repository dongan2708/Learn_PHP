<?php
$anon_class_obj = new class {
    public $greeting = 'hello';
    public $Id = 754;
    const SETT = 'some configuration';
    public function getValue()
    {
        // do some operation
        return 'some returned value';
    }
    public function getValueWithArg($str1)
    {
        // do some operation
        return 'returned value is' . $str1;
    }
};

echo '<br>';
echo $anon_class_obj->greeting;
echo '<br>';
echo $anon_class_obj->Id;
echo '<br>';
echo $anon_class_obj::SETT;
echo '<br>';
echo $anon_class_obj-> getValue();
echo '<br>';
echo $anon_class_obj-> getValueWithArg('Aptech');
echo '<br>';
echo '<br>';
?>
