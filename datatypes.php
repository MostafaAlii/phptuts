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
$name = "Mostafa";
echo $name;
echo "<br>";
// Integer
$age = 25;
echo $age;
echo "<br>";
// Float
$height = 1.75;
echo $height;
echo "<br>";
// Boolean
$isMale = true;
echo $isMale;
echo "<br>";
// Array
$friends = array("Mostafa", "Ahmed", "Ali");
echo $friends[0];
echo "<br>";
