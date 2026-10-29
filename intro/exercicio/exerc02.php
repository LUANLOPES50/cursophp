<?php
include('../banco/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>filmes</title>
</head>


<body>
    <header>

        <section>

            <h1>filmes </h1>

        </section>

        <nav>

            <ul>

                <li><a href="filmes"> filmes </a> </li>

                <li> <a href="series"> séries </a> </li>

                <li> <a href="busca"> busca </a> </li>
            </ul>

        </nav>

    </header>


    <section class="SectionPrincipal">



        <?php
        for ($i = 0; $i < count($nome_categorias); $i++) {
            echo "<h3>" . utf8_encode($nome_categorias[$i]) . "</h3>";
        }




        ?>










        <?php

        for ($i = 0; $i < count($nome_filmes); $i++) {

            echo "<section class='primeirofilme'>
    
            <img src='" . utf8_encode($imagem[$i]) . "' alt='' width='100' height='100' />
            <div class='conteudofilmes'>
                <h2>" . $nome_filmes[$i] . "</h2>
                <p>
                    " . utf8_encode($sinopse[$i]) . "
                </p>
            </div>
    
    
            <div class='botoes'>
                <button>
                    <svg xmlns='http://w3.org' viewBox='0 0 24 24' width='25' height='25' fill='currentColor'>
                        <path d='M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z' />
                    </svg>
                </button>
    
                <button>
                    <svg width='25' height='25' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                        <path d='M17.5 2.5C15.8431 2.5 14.5 3.84315 14.5 5.5C14.5 5.76447 14.5342 6.02096 14.5985 6.26526C14.5276 6.2799 14.4577 6.30512 14.3909 6.34157L11.6343 7.84513L8.1279 9.84881C8.09206 9.86929 8.05855 
                    9.89228 8.02747 9.91743C7.58006 9.65224 7.05781 9.5 6.5 9.5C4.84315 9.5 3.5 10.8431 3.5 12.5C3.5 14.1569 4.84315 15.5 6.5 15.5C7.37407 15.5 8.16083 15.1262 8.70915 14.5297L11.6357 16.1556L14.5902 
                    17.7671C14.5313 18.0017 14.5 18.2472 14.5 18.5C14.5 20.1569 15.8431 21.5 17.5 21.5C19.1569 21.5 20.5 20.1569 20.5 18.5C20.5 16.8431 19.1569 15.5 17.5 15.5C16.6356 15.5 15.8565 15.8656 15.3091 
                    16.4506L12.3617 14.843L9.4163 13.2066C9.47101 12.98 9.5 12.7434 9.5 12.5C9.5 11.9603 9.35749 11.4539 9.10805 11.0164L12.3657 9.15486L15.1091 7.65842C15.1762 7.62185 15.2354 7.57653 15.2862 
                    7.52466C15.8347 8.12408 16.6235 8.5 17.5 8.5C19.1569 8.5 20.5 7.15685 20.5 5.5C20.5 3.84315 19.1569 2.5 17.5 2.5Z' fill='#3b82f6'></path>
                    </svg>
                </button>
            </div>
        </section>";
        }


        ?>




    </section>


</body>

</html>