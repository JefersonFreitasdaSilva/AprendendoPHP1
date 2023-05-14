<! DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
	<link rel="stylesheet" href="_css/estilo.css"/>
    <title>Operações Aritmeticas</title>
</head>
<body>
<div>
    <?php
        $n1=$_GET["a"];
        $n2=$_GET["b"];
        $m= ($n1+$n2)/2;
        echo "<h2>valores recebidos: $n1 e $n2";
        echo "A média vale $m";
        echo "A soma vale ".($n1+$n2);
        echo "<br/>A divisão vale ".($n1/$n2);
        echo "<br/>A subtração vale ".($n1-$n2);
        echo "<br/>A multiplicação vale ".($n1*$n2);
        echo "<br/>O resto da divisão vale ".($n1%$n2);
        echo "<br/>O valor absoluto de $n1 e ".abs($n1);
        echo "<br/>O valor absoluto de $n2 e ".abs($n2); ///negativo vira positivo
        echo "<br/>A potencia de $n1<sup>$n2</sup> e ".pow($n1,$n2); ///elevado
        echo "<br/>A Raiz quadrada de $n1 e ".sqrt($n1);  //// raiz quadrada
        echo "<br/>A Raiz quadrada de $n2 e ".sqrt($n2);
        echo "<br/>O valor de $n1 arredondado é ".round($n1); ///arredondar valor
        echo "<br/>O valor de $n2 arredondado é ".round($n2); ///ceil(arredondar pra cima) floor (arredondar pra baixo)
        echo "<br/>O valor de $n2 somente a parte inteira é ".intval($n2);
        echo "O valor de $n1 em moeda e R$". number_format($n1,2,",",".");

        //|||    + - * / %    |||//
    ?>
</div>
</body>
</html>
