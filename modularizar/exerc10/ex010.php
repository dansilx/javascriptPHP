<?php
    require_once "../header.php";
?>
    
    <form action="ex010resposta.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="peso">Peso(kg): </label>
        <input type="number" id="peso" name="peso" step="0.01" required><br><br>

        <label for="altura">Altura(m): </label>
        <input type="number" id="altura" name="altura" step="0.01" required><br><br>

        <button type="submit">Calcular</button>
    </form>

<?php
    require_once "../footer.php";
?>