<?php

$biodata = [
    "name" => "arkademy",
    "age" => 24,
    "hobbies" => ["reading", "papercraft"],
    "IsMarried" => false,
    "schoolList" => array(
        "yearIn" => 2013,
        "yearOut" => 2017,
        "major" => "Mechanical Engineering"
    ),
    "skills" => array(
        "skillName" => "Javascript",
        "level" => "advanced"
    ),
    "interestInCoding" => true
];

print_r(
"name : ".$biodata["name"].'<br/>'
."age : ".$biodata["age"].'<br/>'
."hobbies : ".$biodata["hobbies"][0].", ".$biodata["hobbies"][1].'<br/>'
."IsMarried : ".$biodata["IsMarried"].'<br/>'
."schoolList : ".'<br/>'
."&emsp;"."year in = ".$biodata["schoolList"]["yearIn"].'<br/>'
."&emsp;"."year out = ".$biodata["schoolList"]["yearOut"].'<br/>'
."&emsp;"."major = ".$biodata["schoolList"]["major"].'<br/>'
."skills : ".'<br/>'
."&emsp;"."skill name: ".$biodata["skills"]["skillName"].'<br/>'
."&emsp;"."level : ".$biodata["skills"]["level"].'<br/>'
."interested in coding : ".$biodata["interestInCoding"].'<br/>');
echo '<br/>';
echo '<hr/>';
$mtk = 80;
$bahasaIndonesia = 90;
$bahasaInggris = 89;
$ipa = 69;

$rata2 = ($mtk + $bahasaIndonesia + $bahasaInggris + $ipa)/4;
echo "Rata-rata = $rata2";
echo '<br/>';
if ($rata2 < 60){
    echo "Grade : E";
}else if($rata2 < 70){
    echo "Grade : D";
}else if($rata2 < 80){
    echo "Grade : C";
}else if($rata2 < 90){
    echo "Grade : B";
}else if($rata2 < 100){
    echo "Grade : A";
}
echo '<br/>';
echo '<hr/>';

$printSegitiga = 6;

for ($i=0; $i <= $printSegitiga; $i++) { 
    for ($j=1; $j <= $printSegitiga - $i; $j++){
        echo $j." ";
    }
    echo '<br/>';
}

echo '<hr/>';

$data = [
    "id" => 1,
    "name" => "Muhammad Muzmi' Ulya",
    "username" => "muzmi",
    "email" => "muhammadmuzmiulya@gmail.com",
    "address" => array(
        "street" => "Kulas light",
        "suite" => "Apt. 556",
        "city" => "Gwenborough",
        "zipcode" => "92998-3874"
    ),
    "phone" => "1-770-736-8031 x56442",
    "website" => "hildergard.org"
];

print_r("street : ".$data["address"]["street"].'<br/>'."city : ".$data["address"]["city"]);

echo '<br/>';
echo '<hr/>';

?>