<!DOCTYPE html>
<html>
<body>
<?php
echo "this is array count function"."<br/>";
$NAME=array("HEMA","SAPNA","PREETI","TRUPTI");
echo count($NAME)."<br/>";
echo "this is in_array function"."<br/>";
if (in_array("HEMA", $NAME))
  {
  echo "Name found in array"."<br/>";
  }
else
  {
  echo "Name not found in array"."<br/>";
  }
echo "this is array sort function"."<br/>";
sort($NAME);
foreach ($NAME as $key => $val) {
    echo "NAME[" . $key . "] = " . $val . "<br/>";
}

echo "this is array end function"."<br/>";
echo end($NAME)."<br/>";

echo "this is array prev function"."<br/>";
echo prev($NAME)."<br/>";
echo "this is array slice function"."<br/>";
print_r(array_slice($NAME,2));
?>
</body>
</html>
