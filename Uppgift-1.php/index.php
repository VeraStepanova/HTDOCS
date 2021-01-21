<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <br>
    <?php
    $dag[0] = "Söndag";
    $dag[1] = "Måndag";
    $dag[2] = "Tisdag";
    $dag[3] = "Onsdag";
    $dag[4] = "Torsdag";
    $dag[5] = "Fredag";
    $dag[6] = "Lördag";
    $datum[0] = "-";
    $datum[1] = "januari";
    $datum[2] = "februari";
    $datum[3] = "mars";
    $datum[4] = "april";
    $datum[5] = "maj";
    $datum[6] = "juni";
    $datum[7] = "juli";
    $datum[8] = "augusti";
    $datum[9] = "september";
    $datum[10] = "oktober";
    $datum[11] = "november";
    $datum[12] = "december";
    $dag2 = (int)date("w");
    $datum2 = (int)date("m");

    date_default_timezone_set("Europe/Stockholm");
    echo "<b>Vecka</b> " . date("<b>W</b>") . " - " . "<b>". $dag[$dag2] . 
    "</b>" . " " . "<b>den</b>" . " " . date("<b>d</b>") . " " . "<b>" . 
    $datum[$datum2] . "</b>" . date("<b> Y</b>") . " <b>kl. </b>" . date("<b>h:i</b>");

    ?>

    <br><br><br>
    <?php

    $firstnameErr = $lastnameErr = $emailErr = $sumErr = "";
    $firstname = $lastname = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["firstname"])) {
            $firstnameErr = "Name is required";
        } else {
            $firstname = test_input($_POST["firstname"]);
        }

        if (empty($_POST["lastname"])) {
            $lastnameErr = "Last name is required";
        } else {
            $lastname = test_input($_POST["lastname"]);
        }
        if (!preg_match("/^[a-zA-Z-'åöä ]*$/", $firstname)) {
            $firstnameErr = "Only letters allowed";
        }

        if (!preg_match("/^[a-zA-Z-'åöä ]*$/", $lastname)) {
            $lastnameErr = "Only letters allowed";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        return $data;
    }
    ?>

    <h2>Fill in your first and last name:</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        First name: <input type="text" name="firstname">
        <span class="error">* <?php echo $firstnameErr; ?></span>
        <br><br>
        Last name: <input type="text" name="lastname">
        <span class="error">* <?php echo $lastnameErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    <?php
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $firstname = trim($firstname);
    $lastname = trim($lastname);
    $firstname = str_replace("ö", "o", $firstname);
    $firstname = str_replace("ä", "a", $firstname);
    $firstname = str_replace("å", "a", $firstname);
    $lastname = str_replace("ö", "o", $lastname);
    $lastname = str_replace("ä", "a", $lastname);
    $lastname = str_replace("å", "a", $lastname);

    $sum = strlen($firstname) + strlen($lastname);

    if ($sum > "20") {
        echo "Your first name and last name together
    cannot be longer than 20 characters.";
    } else {
        echo "<h2>Your email is:</h2>";
        echo strtolower($firstname) . "&period;" . strtolower($lastname) . "&commat;yh.nackademin.se";
    }
    ?>
</body>
</html>