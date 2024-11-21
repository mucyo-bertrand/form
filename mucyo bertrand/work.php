<?php
$f_name=$_POST['f_name'];
$s_name=$_POST['s_name'];
$year=$_POST['year'];
$gender=$_POST['g'];
$email=$_POST['email'];
$date=$_POST['date'];
$count=$_POST['count'];
$app=$_POST['app'];
$marks=$_POST['marks'];
$rate=$_POST['range'];
$color=$_POST['color'];
echo ("
<table border=1 solid f>
<tr>
<th>First Name</th>
<th>second name</th>
<th>year</th>
<th>gender</th>
<th>email</th>
<th>date of birth</th>
<th>country</th>
<th>application time</th>
<th>marks</th>
<th>RATE US</th>
<th>color</th>
</tr>
<tr>
    <td> $f_name </td>
    <td> $s_name </td>
    <td> $year </td>
    <td> $gender </td>
    <td> $email </td>
    <td> $date </td>
    <td> $count </td>
    <td> $app </td>
    <td> $marks </td>
    <td> $rate </td>
    <td> $color </td>
</tr>
</table>
");
?> 