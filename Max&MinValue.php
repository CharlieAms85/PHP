<!DOCTYPE html>
<html>

<head>
	<title> Pangram</title>
</head>

<body>
<form method="post">
	Insert your numbers (separeted by comas) <br>
  <input type="text" name="number"/><br>  
  <button type="submit" name="submit">Submit</button>
</form>
<?php
    if(isset($_POST["submit"])){
    $num = $_POST["number"];
    $numbers= explode(',', $num);
    $i=1;
    while ($i <count($numbers)){
        $j=$i;
        while ($j>0 && $numbers[$j-1]>$numbers[$j]){
        $aux=$numbers[$j-1];
        $numbers[$j-1]=$numbers[$j];
        $numbers[$j]=$aux;
        $j--;
        }
        $i++;
        $b=$i;
    }
    $b=count($numbers);
    $c=$b-1;
    echo "Your values were:". $num ."<br>";
    echo "El valor máximo es:" .$numbers[$c] ."<br>";
    echo "El valor minimo es:" .$numbers[0] ."<br>";
}
    ?>

</body>
</html>
