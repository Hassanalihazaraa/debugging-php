<?php
//strict mode
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Below are several code blocks, read them, understand them and try to find whats wrong.
// Once this exercise is finished, we'll go over the code all together and we can share how we debugged the following problems.
// Try to fix the code every time and good luck ! (write down how you found out the answer and how you debugged the problem)
// =============================================================================================================================

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercise 1 starts here:";
function new_exercise($number)
{
    $block = "<br/><hr/><br/><br/>Exercise $number starts here:<br/>";
    echo $block;
}


new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;


new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
$str = '"Debugged !" Also very fun';
echo substr($str, 0, 12);


new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!
foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}
print_r($week);

new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alphabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array
$arr = [];
for ($letter = 'a'; strlen($letter) <= 1; $letter++) {
    array_push($arr, $letter);
}
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$array = [];
function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];
    foreach ($params as $param) {
        if ($param == "") {
            $param = randomHeroName();
            array_push($array, $param);
        }
    }
    return implode(" - ", $params);
}

function randomGenerate($randName)
{
    for ($i = $randName; $i > 0; $i--) {
        array_push($array, randomHeroName());
    }
    return $randName;
}


function randomHeroName()
{
    $firstNames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $lastNames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$firstNames, $lastNames];
    $randName = $heroes[rand(0, count($heroes) - 1)][rand(0, 10)];
    return randomGenerate($randName);
}

echo "Here is the name: " . combineNames(randomHeroName(), randomHeroName());


//exercise 7
new_exercise(7);
function copyright(int $year)
{
    return "&copy; $year BeCode";
}

//print the copyright
echo copyright((int)date('Y'));

//exercise 8
new_exercise(8);
function login(string $email, string $password)
{
    if ($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith';
    } else {
        return 'No access';
    }

}

//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
echo "<br/>";
echo login('john@example.be', 'dfgidfgdfg');
echo "<br/>";
echo login('wrong@example.be', 'wrong');

//exercise 9
new_exercise(9);
function isLinkValid(string $link)
{
    $unAcceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');
    foreach ($unAcceptables as $unAcceptable) {
        if (strpos($link, $unAcceptable) == true) {
            echo 'Unacceptable Found<br />';
            return;
        }
    }
    echo 'Acceptable<br />';
    return;
}

//invalid link
isLinkValid('http://www.google.com/hack.pdf');
//invalid link
isLinkValid('https://google.com');
//VALID link
isLinkValid('http://google.com');
//VALID link
isLinkValid('http://google.com/test.txt');


//exercise 10
new_exercise(10);
//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$arrayLength = count($areTheseFruits);
for ($i = 0; $i < $arrayLength; $i++) {
    if (!in_array($areTheseFruits[$i], $validFruits, true)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this