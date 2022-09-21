<?php
    $arr = ['danki code é bom', 'cursos da danki code', 'danki code desenvolvimento web'];
    if(isset($_POST['acao'])){
        $texto = $_POST['texto'];
        $finalArr = [];
        foreach ($arr as $key => $value) {
            if(preg_match('/'.$texto.'/', $value)){
                $finalValue = preg_replace('/'.$texto.'/', '<b>$0</b>', $value);
                $finalArr[] = $finalValue;
            }
        }
        print_r($finalArr);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="texto" id="">
        <input type="submit" value="Enviar" name="acao">
    </form>
</body>
</html>