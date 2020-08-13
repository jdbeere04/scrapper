<?php
        include("simple_html_dom.php");
?>
<!DOCTYPE html>
    <head>
    </head>
    <body>
      <div class = "inputs" type = "container">
          <form method = "get">
              <input type = "text" name = "ID"><br>
              <input type = "submit" name = "submit"><br>
           </form>
      </div>     
      <?php

            if(isset($_GET["submit"]))
            {
                $id = $_GET["ID"];
                $html = file_get_html("https://www.shutterstock.com/image-illustration/" . $id);
                    if(!$id){
                        
                        die();

                    } elseif  ($id > 0){

                        $list = $html->find('div[class="C_a_03061"]', 0);
                        foreach( $list->find('a') as $element ){
                            echo $element -> plaintext;
                            echo "<br>";
                        }

                    }
            } 
        ?>
    </body>
</html>
