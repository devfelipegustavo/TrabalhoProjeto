<?php
    include "header.php";
    include "dados.php";
?>

<main>
    <h1>Profissionais Disponiveis:</h1>
    <div class="grid">

        <?php
            $i = 1;
            shuffle($produtos);
            foreach($produtos as $produto) { 
        ?>
           
           <div class="coluna">
                <img src="imagens/<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
           
                <p>
                    <strong><?=$produto["nome"]?></strong><br>
                    R$ <?=$produto["valor"]?>
                </p>

                <p>
                    <a href="produto.php?id=<?=$produto["id"]?>">Detalhes</a>
                </p>
            </div>

        <?php 
                $i++;//RTA
                if($i > 4) break;
            }
        ?>

    </div>
</main>

<?php
    include "footer.php";
?>