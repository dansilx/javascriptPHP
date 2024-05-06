<?php
    require_once "../header.php";
?>

    <form action="ex002resposta.php" method="post">
        <label class="form-label text-white my-3 h4">Informe um valor em cada input</label><br><br>

        <?php 
            for ($i=0;$i < 7;$i++) {
                echo '<input type="number" class="form-control" name="numeros[]"><br>';
            }
        ?>
        
        <button type="submit" class="btn btn-outline-primary mt-3">Enviar</button>
    </form>

<?php
    require_once "../footer.php";
?>
