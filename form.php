<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1> Gravar Imagens</h1>
    <form action="index.php" method="POST"  enctype="multipart/form-data" >
        <div class="form-group">
            <label for="image">Imagem do Produto:</label>
            <input type="file" class="form-control-file" id="img2" name="img2"  >
        </div>
        <input type="submit" class="btn btn-primary" value="Gravar Imagem" name="gravar" >
</form>
</div>

<?php

        if (!empty($_POST["gravar"]))
        {
		$localimg ="";
		if (!empty($_FILES["img2"]))  
		{
			$foto = $_FILES["img2"];
			$pasta ="img/";
			//$raiz = "../";
			
			$arquivo = isset($_FILES["img2"]) ? $_FILES["img2"] : FALSE;

			if(!$arquivo)
			{
    			echo "Não acesse esse arquivo diretamente!";
			}

			else
			{
    			$d1 = new Datetime();
                $d11 = $d1->format('U');
                $arquivos = $d11.$arquivo["name"];

                //if (move_uploaded_file($arquivo["tmp_name"], $pasta.$arquivo["name"] ))
                if (move_uploaded_file($arquivo["tmp_name"], $pasta.$arquivos ))
				{
        			$localimg =  $pasta.$arquivos; 	
                    print "Gravado com sucesso ".$localimg;
    			}
    			else
    			{
        				echo "Imagem não enviada";
    			}
			}
		}
    }

    ?>