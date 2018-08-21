<html>
<head>
<script type="text/javascript"></script>
</head>
<body>
<?php
echo ("<h1>Hello World from helloworld.php</h1>");
print ('<h2>From a print \' statement</h2>');
$name = 'Aditya';
$age = 20;
echo $name . "<br>";
#string interpolation
echo 'My name is $name <br>';
echo "My name is $name <br>";
$name = $name . ' SP';
print 'My name is $name <br>';
print "My name is $name <br>";
#Constant
define('PI', 3.141);
echo PI;
echo "The value of PI is ". PI . "<br>";

$a = 20;
$b = 30;
$c = $a < $b ? $a : $b;
echo $c;

$fruits[0] ='banana';
$fruits[1] = 'grapes';
#echo "Fruits". $fruits
echo $fruits[0]. " " . $fruits[1];
echo "<br>";
print_r($fruits);
echo "<br>";
var_dump($fruits);
echo "<br>";
$users = array();
var_dump($users);
$countries = array('India','SL','Burma', 20);
var_dump($countries);
echo "<br>". count($countries) . " " .sizeof($countries);
$urls = array('prod_url' => 'prod.xyz.com', 'ua_url' => 'ua.xyz.com');
var_dump($urls);
echo $urls['prod_url'];
$projs = array('proj1' => $urls, 'proj2' => array('prod_url'=>'a.com', 'ua_url'=>'b.com'));
echo "<hr>";
var_dump($projs);
echo "<hr>". $projs['proj1']['prod_url'];
var_dump($projs);
#phpinfo();

if(count($countries) > 0){
    echo "Countries";
} else {
    echo "Empty";
}
echo "<hr>";
if (isset($projs['proj3'])){
    echo "Prod url of proj2" . $projs['proj3']['prod_url'];
} else {
    echo "proj3 not available";
}
echo "<hr>";
$i=0;
echo "<h4>Fruits using while</h4>";
while ($i < count($fruits)){
    echo "<li>". $fruits[$i]. "</li>";
    $i++;
}

echo "<h4>Fruits using for</h4>";
for($i= 0 ; $i < count($fruits) ; $i++){
    echo "<li>". $fruits[$i]. "</li>";
}

echo "<h4>Fruits using foreach</h4>";
foreach($fruits as $fruit){
    echo "<li>". $fruit . "</li>";
}
echo "<hr>";
function full_name($fn, $ln){
    return $fn . " " . $ln;
}
function with_sal($fullname, $sal){
    return $sal. "." . $fullname;
}

echo with_sal(full_name('Aditya', 'SP'), 'Mr');

?>
</body>
</html>