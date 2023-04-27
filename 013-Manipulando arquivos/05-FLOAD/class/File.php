<?php

   class File{

    private $link;

    public function __construct($link = ""){
        $this->link = $link;
    }

    public function Upload(){
        if($_SERVER["REQUEST_METHOD"] === "POST"){

            $file = $_FILES["fileUpload"];
    
            if($file["error"]) {
                throw new Exception("Error: " . $file["error"]);
            }
    
            $dirUploads = "uploads";
    
            if(!is_dir($dirUploads)){
                mkdir($dirUploads);
            }
    
            if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
                echo "Upload realizado com sucesso";
            } else {
                throw new Exception("Não foi possível realizar o upload");
            }
        }
    }
    

    public function Download(){
        $linkdownload = $this->link;
        $content = file_get_contents($linkdownload);
        $parse = parse_url($linkdownload);
        $basename = basename($parse["path"]);

        $extension = substr($basename, -4);

        function changeName($nome = ""){
            $nome = $_POST["userName"];
            return $nome . "user";
        }
        
        $basename = changeName() . $extension;
        $dirname = "users";

        if(!is_dir("$dirname")){
            mkdir("$dirname");
        }
        
        $local = $dirname . DIRECTORY_SEPARATOR . $basename;
        $file = fopen($local, "w+");
        fwrite($file, $content);

fclose($file);

    }

}

?>