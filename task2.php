<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous">
</head>
<body>

<?php
$Myurl = $_POST["URL"] ;
function urlEdit($url)
{
    $trimedUrl = trim($url);
    $NewChar= strripos($trimedUrl,"/");
    if ($NewChar == false) {
        echo ("<h1> please inter a valid Url</h1>");
    } else {
        $splited_part = substr($trimedUrl,$NewChar+1);

        echo('
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
        <div class="container">
                <div class=" row text-center " style="background-color: rgb(255, 72, 0);">
                     <div class="col-6 text-center  " > <h1 style="color: aqua" class=" text-center ps-5 "> the Next characters are '.$splited_part .'</h1></div>
                </div>
            </div>
            
        </body>
        </html>');
    }
    

}
if ($Myurl ==null) {
    echo("<h1> please inter a valid url </h1>");
}
else {
    urlEdit($Myurl);
    }
   

?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>
</body>
</html>