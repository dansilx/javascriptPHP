<?php
    require_once "../header.php";
?>
    
    <form action="ex010resposta.php" method="post">
        <label for="nome" class="form-label text-white my-3 h3">Nome: </label>
        <input type="text" class="form-control" id="nome" name="nome" required><br><br>

        <label for="peso" class="form-label text-white my-3 h3">Peso(kg): </label>
        <input type="number" class="form-control" id="peso" name="peso" step="0.01" required><br><br>

        <label for="altura" class="form-label text-white my-3 h3">Altura(m): </label>
        <input type="number" class="form-control" id="altura" name="altura" step="0.01" required><br><br>

        <button type="submit" class="btn btn-outline-primary mt-3">Calcular</button>
    </form>

<?php
    require_once "../footer.php";
?>