<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

echo "This is how PHP declares an array <br> <br>";

$number = array(1,3,5,7,11);
print_r($number);
echo "<br>";

$car = ["myvi", "saga", "alza"];
print_r($car);
echo "<br>";

$combine = ["myvi",1, "saga",3, "alza",5];
print_r($combine);
echo "<br> <br>";

// Multiline using heredoc
echo <<<ARRAY
Unlike other language that statically type which allow
only one data type in a variable, an array in PHP can
be delare and combine with other types together 
such as integer, string and floating point.
ARRAY;

echo "This is a difference between PHP and other language. <br><br>";

echo "This is how PHP declares variable. <br><br>";

$name = "Luqman Hamdan";
$age = 27;
$email = "umu@gmail.com";
$users = 1.1;
$price = 4.99;

echo "Your name is {$name} <br>";
echo "Your age is {$age} years old <br>";
echo "Your email is {$email} <br>";
echo "Total current user is $users k <br>";
echo "Total price for the item is \${$price}  <br><br>";

echo "This is how PHP performs counting operation. <br><br>";

echo "This is FOR loop. <br>";
$sifir=5;
for ($nombor=1; $nombor<=10; $nombor++) {
    $hasil=$sifir * $nombor;
    echo "$sifir * $nombor = $hasil\n <br>";
}
echo "<br>";

for ($count = 1; $count <= 10; $count++) {
    echo $count . " ";
}
echo "<br>";

for ($count = 1; $count <= 10; $count+=2) {
    echo $count . " ";
}
echo "<br>";

for ($count = 1; $count <= 10; $count+=3) {
    echo $count . " ";
}
echo "<br>";

for ($count = 1; $count <= 10; $count+=4) {
    echo $count . " ";
}
echo "<br>";

for ($count = 1; $count <= 10; $count+=5) {
    echo $count . " ";
}
echo "<br><br>";



echo "This is WHILE loop. <br>";
$num = 10;
while ($num >= 1) {
    echo $num . " ";
    $num--;
}
echo "<br>";

$num = 10;
while ($num >= 1) {
    echo $num . " ";
    $num-=2;
}
echo "<br>";

$num = 10;
while ($num >= 1) {
    echo $num . " ";
    $num-=3;
}
echo "<br>";

$num = 10;
while ($num >= 1) {
    echo $num . " ";
    $num-=4;
}
echo "<br>";

$num = 10;
while ($num >= 1) {
    echo $num . " ";
    $num-=5;
}
echo "<br><br>";

