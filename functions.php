<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_GET['submit'])){
    $arr = str_split($_GET['arr_vals']);
    $dorm = function(callable $call , string ...$nums){
      return array_sum($call($nums));
    };
    function multi(...$elem){
        return array_map(function($ch){
            return ord($ch);
        }, ...$elem);
    }
     echo($dorm('multi',...$arr));}
     else {echo "error";}
    ?>
    <form action="functions.php" method="get">
        <label for="arr_vals">Enter numbers</label>
        <input type="text" name="arr_vals" placeholder="enter pharase">
        <button type="submit" name="submit" value="sub">
            confirm!
        </button>
    </form>
</body>
</html>