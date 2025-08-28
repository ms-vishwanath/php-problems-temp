<!DOCTYPE html>
<html>
<head>
    <title>String and Array Functions</title>
</head>
<body>
    <?php
    $str = "Hello PHP World";
    echo "Original String: $str <br>";
    echo "String Length: " . strlen($str) . "<br>";
    echo "Word Count: " . str_word_count($str) . "<br>";
    echo "Reversed String: " . strrev($str) . "<br>";
    echo "Position of 'PHP': " . strpos($str, "PHP") . "<br>";
    echo "Replace 'World' with 'Bots': " . str_replace("World", "Bots", $str) . "<br><br>";

    $arr = array(10, 20, 30, 40, 50);
    echo "Original Array: ";
    print_r($arr);
    echo "<br>";
    echo "Array Count: " . count($arr) . "<br>";
    echo "Sum of Array: " . array_sum($arr) . "<br>";
    echo "Reversed Array: ";
    print_r(array_reverse($arr));
    echo "<br>";
    echo "Sorted Array: ";
    sort($arr);
    print_r($arr);
    ?>
</body>
</html>
