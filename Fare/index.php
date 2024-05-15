<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fare Oop</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="Age" id="Age" placeholder="Age" min="10" max="80">
        <br>
        <input type="text" name="Distance" id="Distance" placeholder="Distance(km)">
        <br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>

</body>
</html>

<?php
    include "Fare.php";
    
    if(isset($_POST['btn_submit'])){
        $Age = $_POST['Age'];
        $Distance = $_POST['Distance'];

        $fare =new Fare;

        $fare->setAge($Age);
        $fare->setDistance($Distance);


        
            echo "<br>Age: " . $fare->getAge() ."<br>";

             //"Value must be greater than or equal to 10."
             //"Value must be less than or equal to 80."     

            echo "<br>Distance: " . $fare->getDistance() ."<br>";
            
            echo "<br>Fare: " . $fare->calculate_fare() ."<br>";

        

    }
?>