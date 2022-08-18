<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if($attendence < 80 || $hygiene < 50 || $rating < 2){
                echo "$name, You are fired from the Rojan Kirana Passal.";
            } else {
                echo "Not Fired for now.";
            }
        }
        evaluate("Kusal Karki", 35, 70, 2);
    ?>
</body>
</html>