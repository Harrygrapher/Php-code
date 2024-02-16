<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Application</title>
</head>
<body>
        <form method="POST">

            <p>1. What is the chemical symbol for water?</p>
            <input type="radio" name="q1" value="H2O"> H2O<br>
            <input type="radio" name="q1" value="CO2"> CO2<br>
            <input type="radio" name="q1" value="NaCl"> NaCl<br>

            <p>2. What is the tallest mammal on Earth?</p>
            <input type="radio" name="q2" value="Hippopotamus"> Hippopotamus<br>
            <input type="radio" name="q2" value="Giraffe"> Giraffe<br>
            <input type="radio" name="q2" value="Elephant"> Elephant<br>

            <p>3. What is the capital of Australia?</p>
            <input type="radio" name="q3" value="Sydney"> Sydney<br>
            <input type="radio" name="q3" value="Melbourne"> Melbourne<br>
            <input type="radio" name="q3" value="Canberra"> Canberra<br>

            <p>4. What is the largest ocean on Earth?</p>
            <input type="radio" name="q4" value="Atlantic Ocean"> Atlantic Ocean<br>
            <input type="radio" name="q4" value="Indian Ocean"> Indian Ocean<br>
            <input type="radio" name="q4" value="Pacific Ocean"> Pacific Ocean<br><br>

            <input type="submit" name="submit" value="Submit Quiz"><br><br>
        </form>
        <?php
            // Define correct answers
            $correctAnswers = array(
                "q1" => "H2O",
                "q2" => "Giraffe",
                "q3" => "Canberra",
                "q4" => "Pacific Ocean"
            );
            if (isset($_POST["submit"])) {
                // Initialize score
                $score = 0;
                if (isset($_POST["q1"])) {
                    $userAnswerQ1 = $_POST["q1"];
                    if ($userAnswerQ1 === $correctAnswers["q1"]) {
                        $score++;
                    }
                }
                if (isset($_POST["q2"])) {
                    $userAnswerQ2 = $_POST["q2"];
                    if ($userAnswerQ2 === $correctAnswers["q2"]) {
                        $score++;
                    }
                }
            
            if (isset($_POST["q3"])) {
                $userAnswerQ3 = $_POST["q3"];
                if ($userAnswerQ3 === $correctAnswers["q3"]) {
                    $score++;
                }
            }
                if (isset($_POST["q4"])) {
            $userAnswerQ4 = $_POST["q4"];
            if ($userAnswerQ4 === $correctAnswers["q4"]) {
                $score++;
            }
        }
                // Display the user's score
                echo "Your Score: $score out of " . count($correctAnswers);
            }
        ?>
</body>
</html>
