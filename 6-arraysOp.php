<?php
$numbers  = array(5,8,100,3,4);
echo "Count".count($numbers);
sort($numbers);
print_r($numbers);
?>
Max number: <?php    echo max($numbers );   ?>

Min number: <?php    echo min($numbers );   ?>

Arry rever sort <?php rsort($numbers );
echo print_r($numbers );   ?>

Is 10 in array <?php echo in_array(10, $numbers );     ?>
<br/>
Is 12 in array <?php echo in_array(100, $numbers );     ?>



