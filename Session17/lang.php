<?php
$lang = array(
    1=> "VB",
    2=> "Java",
    3=> "Perl",
    4=> "PHP",
    5=>"VC++",
    6=>".NET");
$count = count($lang);
for ($item = 0; $item < $count; $item++){
    $row = each($lang);
    echo "$row[key] $row[value]";
    echo "<br>";
}
?>