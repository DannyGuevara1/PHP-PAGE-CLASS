<?php

class PaginaWeb
{

    private $path = __DIR__ . '/';

    public function index()
    {
        return basename( $_SERVER['DOCUMENT_ROOT'] . '/index2.html' );
    }

    public function about()
    {
        return basename( $_SERVER['DOCUMENT_ROOT'] . '/about.html' );
    }

    public function contact()
    {
        return basename( $_SERVER['DOCUMENT_ROOT'] . '/contact.html' );
    }
}
$componente = new PaginaWeb;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <style>
        body{
            margin: 0;
            border: 0;
            padding: 0;
        }
        .container{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-end;
            align-items: center;
            background-color: crimson;
        }
        .layoutLink{
            width: 20%;
            display: flex;
            justify-content: space-evenly;
        }
        .layoutLink a{
            font-size: 2em;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: gainsboro;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="layoutLink">
            <a href="<?php echo $componente->about(); ?>">about</a>
            <a href="<?php echo $componente->contact(); ?>">contact</a>
            <a href="<?php echo $componente->index(); ?>">index</a>
        </div>
    </div>

</body>

</html>