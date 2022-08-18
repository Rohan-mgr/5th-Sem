<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <?php 
        function evaluate($name, $attendence, $hygiene, $rating){
            if(($attendence < 80 && $hygiene < 50) || ($hygiene < 50 && $rating < 2)){
                echo "$name, You are fierd from the Rojan Kirana Passal.";
            } else {
                echo "Not Fired for now.";
            }
        }
        evaluate("John", 80, 30, 1);
    ?>
</body>
</html>