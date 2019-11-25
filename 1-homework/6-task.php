<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1,
        table {
            font-family: arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:hover {
            background-color: #999;
            color: azure;
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>Таблица умножения</h1>
<table>
    <?php
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        for ($y = 1; $y <= 10; $y++) {
            $result = $x * $y;
            if (($x % 2 == 0) && ($y % 2 == 0)) {
                echo "<td style=\"color:green;\">( $result )</td>";
            } elseif (($x % 2 != 0) && ($y % 2 != 0)) {
                echo "<td style=\"color:red;\">[ $result ]</td>";
            } else {
                echo "<td>$result</td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>



