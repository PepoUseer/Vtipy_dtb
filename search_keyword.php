<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Accordion - Default functionality</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#accordion").accordion();
        });
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
        }

        .btn {
            border-style: 1px solid;
            border-radius: 5px;
            border-width: 0px;
            background-color: rgb(255, 0, 0);
            color: rgb(255, 255, 255);
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            padding: 7px;
        }
    </style>
</head>

<?php

include "db_connection.php";
$keywordfromform = $_GET["keyword"];

echo "<h2>Nájdené všetky vtipy so slovom $keywordfromform v hádanke:</h2>";

$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_table WHERE Joke_question LIKE '%" . $keywordfromform . "%'";
$result = $mysqli->query($sql);
?>
<div id="accordion">
    <?php
    if ($result->num_rows > 0) {



        // output data of each row
        while ($row = $result->fetch_assoc()) {
            //echo "JokeID: " . $row["JokeID"] . " - Joke Question: " . $row["Joke_question"] . " " . $row["Joke_answer"] . "<br>";
            echo "<h3>$row[Joke_question]</h3>";
            echo "<div><p>$row[Joke_answer]</p></div>";
        }
    } else {
        echo "0 results";
    }
    ?>
</div>

<br>

<a href="index.php"><button class="btn">Vrátiť sa späť do menu</button></a>
