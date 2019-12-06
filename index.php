
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <?php
        $numero1 = 5;
        $numero2 = 10;
        $resultado = $numero1 + $numero2;
    ?>

    <div> Resultado de sumar: 5 + 10 = <?php echo $resultado?></div>
    <div> Resultado de sumar: 5 + 10 = <?php echo $numero1 + $numero2?></div>

    <table class="tablacss">
        <tr>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
        </tr>
        <tr>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
        </tr>
        <tr>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
        </tr>
        <tr>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
            <td><p>valor</p></td>
        </tr>
    </table>

    <div>
        <p> primer asignacion: 
            <?php
                echo $n=1;
            ?>    
        </p>
        <p> Segunda asignacion: 
            <?php
                echo ++$n;
            ?>    
        </p>
        <p> Tercer Asignacion: 
            <?php
                echo $n=$n+1;
            ?>    
        </p>
    </div>


    <div>
    <?php
        echo "<table border=1>";
        $n=1;
        for ($n1=1; $n1<=10; $n1++)
        {
            echo "<tr>";
            for ($n2=1; $n2<=10; $n2++)
            {
                echo "<td>", $n, "</td>";
                $n=$n+1;
            }
        echo "</tr>";
        }
        echo "</table>";
    ?>
    </div>

    <div>
        <table class="tablacss">
            <?php        
        $n=1;
        for ($n1=1; $n1<=10; $n1++)
        {
            echo "<tr>";
            for ($n2=1; $n2<=10; $n2++)
            {
                echo "<td>", $n, "</td>";
                $n=$n+1;
            }
        echo "</tr>";
        }
            ?>
        </table>

    </div>



</body>
</html>

