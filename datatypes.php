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
    * Compound Data Types بيقدم قيمه متعدده او ان المتغير يحتوى على قيمه متعدده
        * Array: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10] يحتوى على قيمه متعدده
        * Object: {name: "mostafa", age: 30} يحتوى على قيمه متعدده
 * Special Data Types are: Resource and NULL
 */
// String
/*
 * ٍString Notes:
 * فى حاله ان هستخدم نصوص غفط لا غير يجب استخدام ' ' وليس " "
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
    in friends[0] 0 is and index of friends array and value of 0 is mostafa <br>
    in friends[1] 1 is and index of friends array and value of 1 is ahmed <br>
    in friends[2] 2 is and index of friends array and value of 2 is ali <br>
    like this: <br>
</p>";
echo $friends[0];
echo "<br>";
echo $friends[1];
echo "<br>";
echo $friends[2];
echo "<hr>";

// Object Type
/*
 * Object Notes:
 * Object is a data type which stores data and information on how to process that data.
 * الــ Objects هى عباره عن كائنات
 * الــ Objects هى عباره عن كائنات تحتوى على بيانات ومعلومات عن كيفيه معالجه هذه البيانات
 */
echo "Object Type <br>";
class Car { // class is a template to create objects الــ class هى قالب لانشاء الــ Objects
   // يحتوى الكلاس على البينات الاساسية التى يجب ان تكون فى جميع الكائنات منه مثل نوع السياره و عدد الابواب و نوع الماتور و هكذا
}

class Employee {
    public $name, $age, $salary; // public is a keyword to make property public الــ public هى كلمه مفتاحيه لجعل الخاصيه عامه   و الــname & age & salary هى اسماء الخاصيات الخاصه بالكائن
    public function showSalary() { // public is a keyword to make method public الــ public هى كلمه مفتاحيه لجعل الداله عامه و الــ showSalary هى اسم الداله
        echo $this->salary; // $this is a keyword to refer to the current object الــ this هى كلمه مفتاحيه للتعامل مع الكائن الحالى
    }
}

$mostafa = new Employee(); // new is a keyword to create new object الــ new هى كلمه مفتاحيه لانشاء كائن جديد
$mostafa->name = "Mostafa"; // -> is a operator to access properties الــ -> هى عمليه للوصول الى الخاصيات
$mostafa->age = 25;
$mostafa->salary = 1000;
$mostafa->showSalary();
/**********************************************************************************************************************************************************************/
// Type Casting
echo "<hr> Type Casting <br>";
echo 'Type Casting is a way to convert one data type to another data type   هى تحويل نوع معين من البيانات الى نوع اخر من البيانات <br>';
echo 'طريقة الكتابه بان اقوم بكتابه النوع الذى اريد ان احول البيانات الى هذا النوع بين الــ () <br>';
echo 'like this: (int) $age <br>';
$x = 8;
echo "x = {$x} <br>";
echo "x = " . (int) $x . "<br>";
echo "<hr>";
/**********************************************************************************************************************************************************************/
// Type Related Functions
echo "Type Related Functions الدوال المستخدمه لمعرفة نوع المتغير مثل : <br><br>";
echo "gettype() function to get type of variable لمعرفة نوع المتغير وهى يمرر لها حاجة واحدة فقط وهى اسم المتغير المراد معرفه نوعه <br>";
echo "gettype(\$x) هنا عندى متغير اسمه x وعاوز اعرف نوعه <br>";
echo 'the type of x is -> ' . gettype($x);
echo "<br><br>";
echo "settype() function to set type of variable لتغيير نوع المتغير وهى تقبل اكثر من مدخل وهى اسم المتغير والنوع الجديد للمتغير <br>";
echo "settype(\$x, 'string') هنا عندى متغير اسمه x وعاوز اغير نوعه الى نوع string <br>";
settype($x, 'integer');
echo 'the type of x is -> ' . gettype($x);
echo "<br><br>";
echo "is_array() function to check if variable is array لمعرفة اذا كان المتغير مصفوفه ام لا وهى تقبل اكثر من مدخل وهى اسم المتغير المراد معرفه نوعه <br>";
echo "is_array(\$x) هنا عندى متغير اسمه x وعاوز اعرف اذا كان مصفوفه ام لا <br>";
echo 'the type of x is -> ' . is_array($x);
echo "<br><br>";
echo "is_bool() function to check if variable is boolean لمعرفة اذا كان المتغير بوليان ام لا وهى تقبل اكثر من مدخل وهى اسم المتغير المراد معرفه نوعه <br>";
echo "is_bool(\$x) هنا عندى متغير اسمه x وعاوز اعرف اذا كان بوليان ام لا <br>";
echo 'the type of x is -> ' . is_bool($x);
echo "<br><br>";
echo "is_float() function to check if variable is float لمعرفة اذا كان المتغير فلوت ام لا وهى تقبل اكثر من مدخل وهى اسم المتغير المراد معرفه نوعه <br>";
echo "is_float(\$x) هنا عندى متغير اسمه x وعاوز اعرف اذا كان فلوت ام لا <br>";
echo 'the type of x is -> ' . is_float($x);
echo "<br><br>";
echo "is_int() function to check if variable is integer لمعرفة اذا كان المتغير انتجر ام لا وهى تقبل اكثر من مدخل وهى اسم المتغير المراد معرفه نوعه <br>";
echo "is_int(\$x) هنا عندى متغير اسمه x وعاوز اعرف اذا كان انتجر ام لا <br>";
echo 'the type of x is -> ' . is_int($x);
echo "<br><br>";
echo "is_null() function to check if variable is null لمعرفة اذا كان المتغير فارغ ام لا وهى تقبل اكثر من مدخل وهى اسم المتغير المراد معرفه نوعه <br>";
echo "is_null(\$x) هنا عندى متغير اسمه x وعاوز اعرف اذا كان فارغ ام لا <br>";
echo 'the type of x is -> ' . is_null($x);
echo "<br><br>";
echo "is_string() function to check if variable is string لمعرفة اذا كان المتغير نص ام لا وهى تقبل اكثر من مدخل وهى اسم المتغير المراد معرفه نوعه <br>";
echo "is_string(\$x) هنا عندى متغير اسمه x وعاوز اعرف اذا كان نص ام لا <br>";
echo 'the type of x is -> ' . is_string($x);