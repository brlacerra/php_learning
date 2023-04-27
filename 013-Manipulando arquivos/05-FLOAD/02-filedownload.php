<form action="" method="POST" >

<input type="text" name="userName"><br>
<button type="submit">Enviar</button>
</form>
<?php
    require_once "config.php";

    $download = new File("https://www.svgrepo.com/show/76775/test.svg");
    $download->Download();
    
?>

<img src="<?=$basename?>" alt="">