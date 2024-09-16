<!-- Chapter 4 Exercise (Pages 210 - 211) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Form</title>
</head>
<body style = "text-align: center; background-color: #71e58a; color: #428eb8">
    <h1>Number Form</h1>
    <h3>All in One Form Validator</h3>
    <?php
        $DisplayForm = true;
        $Number = "";

        if(isset($_POST["Submit"])) {
            # This block only runs when the page is loaded by clicking submit
            $Number = $_POST["Number"];
            if (is_numeric($Number)) {
                $DisplayForm = false;
            } else {
                echo "<p>Please only enter a NUMERIC value!</p>";
                $DisplayForm = true;
            }
        }

        # Determine if the displayForm variable is true of false
        if($DisplayForm) {
            # Either the page loaded for the first time, or form stays displayed due to input errors
            ?>
                <form name = "NumberForm" action = "NumberForm.php" method = "post">
                    <label for = "num">Enter a number:</label>
                    <input type = "text" name = "Number" id = "num" value = "<?php echo $Number; ?>">
                    <p>
                        <input type = "reset" value = "Clear Form" /> &nbsp;&nbsp;
                        <input type = "submit" name = "Submit" value = "Send Form" />
                    </p>
                </form>

            <?php
        } else {
            # Form was submitted properly
            echo "<p>Thank you for entering a number!</p>";
            echo "<p>Your number, $Number squared is: ", ($Number * $Number),".</p>";
            echo "<p><a href = 'NumberForm.php'>Try Again?</a></p>";
        }
    ?>
</body>
</html>