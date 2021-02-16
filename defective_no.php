<!DOCTYPE html>
<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a number: <input type="number" name="num">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = htmlspecialchars($_REQUEST['num']); 
    if (empty($n)) 
    {
        echo "No number entered";
    } 
    else 
    {
        $s=0;
        for($i=1;$i<=$n;$i++)
        {
            if($n%$i==0)
            {
                $s+=$i;
            }
        }
        $ans = (2*$n-$s);
        if($s<=2*$n)
        {
            echo"$n is deficient number<br>";
            echo"Deficiency = $ans";
        }
        else
        {
            echo"$n is not a deficient number.";
        }
    }
}
?>

</body>
</html>