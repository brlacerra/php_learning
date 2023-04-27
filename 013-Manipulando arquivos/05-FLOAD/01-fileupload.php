<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="fileUpload"><br>
<button type="submit">Enviar</button>
</form>
<?php

    
    require_once "config.php";

    $upload = new File();
    $upload->Upload();


?>