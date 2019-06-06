<?php
function isPrime($n)
{
    $flag = 1;
    for($i=2;$i<=sqrt($n);$i++)
    {
        if($n%$i==0 && $n>2)
        {
            $flag = 0;
        }
    }
    return $flag;
}
function showPrime($n)
{

    $i=2;
    $count =1;
    (string) $result = "";
    while($count<=$n)
    {
        if(isPrime($i)==1)
        {
            $result .= $i." &nbsp;";
            $count++;
        }
        $i++;
    }
    return $result;
}

if(isset($_POST["ok"]))
{
    $kq ="";
    $n = $_POST["n"];
    $kq = showPrime($n);
}
?>

<form  method="post">
                    <input type="text" name="n" value="<?php if(isset($_POST["n"])){echo $_POST["n"];} ?>" />
                    <input style="width:100px; height:30px;" type="submit" value="Liệt Kê" name="ok" />
                    <strong> Kết quả: <?php if(isset($_POST["n"])){echo $kq;} ?> </strong>
</form>
</body>
</html>