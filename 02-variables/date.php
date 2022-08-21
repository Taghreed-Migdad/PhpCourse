<?php
echo "Today is " . date("Y/m/d") . "<br>";

date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa")."<br>";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);


$Thurdate = strtotime("Thursday");
$enddate = strtotime("+6 weeks", $Thurdate);

while ($Thurdate < $enddate) {
  echo date("M d", $Thurdate) . "<br>";
  $Thurdate = strtotime("+1 week", $Thurdate);
}