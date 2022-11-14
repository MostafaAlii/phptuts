<?php
/**
 * DataTypes
 * 1. String
 * 2. Integer
 * 3. Float
 * 4. Boolean
 * 5. Array
 * Scalar Data Types are: String, Integer, Float, Boolean
    * Scalar Data Types بيقدم قيمه واحده فقط او ان اللمتغير يحتوى على قيمه واحدة فقط
        * String بيقدم قيمه نصيه
        * Integer: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 رقم صحيح لا يحتوى على اى كسور
        * Float: 1.1, 2.2, 3.3, 4.4, 5.5, 6.6, 7.7, 8.8, 9.9, 10.10 رقم عشرى يحتوى على كسور او فاصله عشريه
        * Boolean: true, false , 0, 1 يحتوى على قيمتين فقط true or false
 * Compound Data Types are: Array and Object
    * Compound Data Types بيقدم قيمه متعدده او ان اللمتغير يحتوى على قيمه متعدده
        * Array: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] يحتوى على قيمه متعدده
        * Object: {name: "mostafa", age: 30} يحتوى على قيمه متعدده
 * Special Data Types are: Resource and NULL
 */
// String
/*
 * ٍString Notes:
 * فى حاله ان هستخدم نصوص غفط لاغير يجب استخدام ' ' وليس " "
 * فى حاله ان ههطبع قيممه متغير بداخل متغير اخر هستخدم الـ " " مثل
 * $height = 1.75;
 * echo "my height is {$height} meters <br>";
*/
$name = "Mostafa";
echo "String Type " . $name;
echo "<hr>";
// Integer
echo "String Type With Integer <br>";
$age = 25;
echo 'my age is ' . $age . ' years old and after  ' . $age . ' will be ' . 2 * $age . ' years old <br>';
echo "max integer value is " . PHP_INT_MAX . "<br>";
echo "min integer value is " . PHP_INT_MIN . "<br>";
echo "max size of integer value is " . PHP_INT_SIZE . "<br>";
echo "<hr>";
// Float
echo "Float Type <br>";
$height = 1.75;
echo "my height is {$height} meters <br>";
echo 10e6 . "<br>";
echo 4e5;
echo "<hr>";
// Boolean
echo "Boolean Type True or False like 0 & 1  <br>";
$isMale = true;
echo $isMale;
echo "<hr>";
// Array
echo "Array Type ['mostafa', 'ali', 'ahmed'] <br>";
echo "<p>
    i have 3 friends <br>
    1. mostafa <br>
    2. ali <br>
    3. ahmed <br>
    we i need show this friends in array <br>
    make print_r() function to show array <br>
    like this: <br>
</p>";
$friends = array("Mostafa", "Ahmed", "Ali");
print_r($friends);
echo "<p>
    but i want to print a specific friend <br>
    now make echo with array name and index of friend <br>
    like this: <br>
    friends[0] <br>
    friends[1] <br>
    in friends[0] 0 is and index of frinds array and value of 0 is mostafa <br>
    in friends[1] 1 is and index of frinds array and value of 1 is ahmed <br>
    in friends[2] 2 is and index of frinds array and value of 2 is ali <br>
    like this: <br>
</p>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<hr>";