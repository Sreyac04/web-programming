<?php
$student=array("Shahma","Ayisha","Razim","Izzah mehrin","Masood");
echo "Original array of student:<br>";
print_r($student);
echo "<br><br>"
asort($student);
echo"Array sorted in ascending order(asort):<br>";
print_r($student);
echo "<br><br>"
arsort($student);
echo"Array sorted in descending order(arsort):<br>";
print_r($student);
echo "<br><br>"
?>
