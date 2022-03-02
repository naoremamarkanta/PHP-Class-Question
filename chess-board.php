<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess-board</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    

	<table width="400px" border="1px" cellspacing="0px">
		<?php
        $col;
        $row;
        $value;

		for($col = 0; $col < 8; $col++) 
        {
			echo "<tr>";
			$value = $col;

			for($row = 0; $row < 8; $row++) 
            {
				if($value%2 == 0) 
                {
					echo"<td height=40px width=20px bgcolor=black></td>";
					$value++;
				}
				else 
                {
					echo"<td height=40px width=20px bgcolor=white></td>";
					$value++;
				}
			}
			echo "</tr>";
		}
		?>
	</table>

    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
