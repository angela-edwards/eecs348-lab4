<html>
<head>
    <meta charset="utf"-8>
    <title>EECS 348 Lab 3: Practice 4</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>EECS Lab 3: Practise 4</h1>
    <form method="post">
        Enter a number:
        <input type="number" name="num" min="1" required>
        <input type="submit" value="Generate table">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $n = intval($_POST["num"]);

        if ($n > 0) {
            echo "<table>";

            echo "<tr><th>*</th>";
            for ($i = 1; $i <= $n; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            for ($row = 1; $row <= $n; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";

                for ($col = 1; $col <= $n; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
            
            echo "</tr>";
        }
        echo "</table>";
        }
    }
    ?>
</body>
</html>