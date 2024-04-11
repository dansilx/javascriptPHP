<?php 

    require_once 'Produto.php';
    require_once 'Estatisticas.php';

    // echo "<pre>";
    // print_r([
    //     "nomes" => $_POST['nome'],
    //     "precos" => $_POST['preco']
    // ]); 
    // echo "</pre>";

    // exit;

    $opcao = (int) $_POST["opcao"];

    echo $opcao;

    $produtos = array();
    foreach($_POST['nome'] as $key => $nome)
    {
        $preco = $_POST['preco'][$key]; //retorna o preço do produto
        $produtos[] = new Produto($nome, $preco);
    }
    $stats = new Estatisticas($produtos);

    switch ($opcao) {
        case 1:
            echo "Quantidade de produtos com preço inferior a R$50,00: " .count($stats->getInferior()). "<br>";
            break;

        case 2:
            echo "Quantidade de produtos com preço entre R$50,00 e R$100,00: " .count($stats->getEntre()). "<br>";
            break;
        
        case 3:
            echo "Quantidade de produtos com preço superior a R$100,00: " .count($stats->getSuperior()). "<br>";
            break;
        
        case 4:
            $nomes = array();
            foreach ($stats->getInferior() as $produto) {               
                    $nomes[] = $produto->getNome();                
            }
            echo "Nomes dos produtos com preço inferior a R$50,00: " . implode(', ', $nomes);
            break;
        
        case 5:
            $nomes = array();
            foreach ($stats->getEntre() as $produto) {               
                    $nomes[] = $produto->getNome();                
            }
            echo "Nomes dos produtos com preço entre R$50,00 e R$100,00: " . implode(', ', $nomes);
            break;
        
        case 6:
            $nomes = array();
            foreach ($stats->getSuperior() as $produto) {               
                    $nomes[] = $produto->getNome();                
            }
            echo "Nomes dos produtos com preço superior a R$100,00: " . implode(', ', $nomes);
            break;

        case 7:
            echo "Média dos preços dos produtos com preço inferior a R$50,00: " . $stats->calcMedia($stas->getInferior()) . "<br>";
            break;

        case 8:
            echo "Média dos preços dos produtos com preço entre R$50,00 e R$100,00: " . $stats->calcMedia($stats->getEntre()) . "<br>";
            break;
        
        case 9:
            echo "Média dos preços dos produtos com preço superior a R$100,00: " . $stats->calcMedia($stats->getSuperior()) . "<br>";

        default:
            echo "Opção Inválida.";
    }
