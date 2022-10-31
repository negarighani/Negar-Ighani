<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table >
    <?php
            $colNum= 9;
            $rowNum = 9;
		    for ($row = 1; $row <= $rowNum; $row++) {
			     print '<tr>';
                 for ($col = 1; $col <= $colNum; $col++) {
                     print '<td>'.$row*$col.'</td>' ;
                 }
                 print '</tr>';
            }
    ?>
</table>
</body>
</html>