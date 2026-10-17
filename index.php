<?php
require_once __DIR__ . '/templates/_cabecalho.php';
?>

<main class="detalhes">
    <ul>
        <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col"><h2 class="text-center">Dossiê da Investigação</h2></div>
                <div class="col"><h2 class="text-center">Mais Informações</h2>
            
            </div>
                <div class="col">Column</div>
                <div class="col">Column</div>
            </div>
        </div>
    </ul>



        <ul>
            <div class="container text-justify" >
                <div class="row row-cols-4">
                    <div class="col-6"><h2 class="text-center">Dossiê da Investigação</h2></div>   
                        
                        <div class="col"><h2 class="text-center">Mais Informações</h2></div>

                        <div class="col-6">Em 2014, um estranho meteoro cai em uma pequena fazenda isolada no interior e pouco foi divulgado sobre o assunto. Há algo estranho nesse acontecimento, você consegue sentir, mas será que está pronto para descobrir?</div>
                        
                        <div class="col"><strong>Sistema:</strong></div>
                            <li>Call of Cthulhu (7ª Edição)</li>

                        <div class="col-6"></div>

                        <div class="col"><strong>Cenário:</strong></div>
                            <li>Fazenda Ypê Virente, 2014 (Mistério e Horror Cósmico)</li>
                        
                        <div class="col-6"></div>

                        <div class="col"><strong>Horários:</strong></div>
                            <li>Sábados às 20:00h via Discord</li>  
                </div>
            </div>
        </ul>
   
</main>

    <section id="formulario" class="inscricao">
        <h2>Alistamento de Jogadores</h2>
        <p>Para se alistar, clique no botão abaixo para enviar suas coordenadas criptografadas ao Mestre.</p>

        <form action="index.php" method="POST" class="container-link">
            <span class="subtitulo-link">Clique para confirmar sua inscrição na mesa:</span>
 
            <button type="submit" class="btn-forms">Enviar Ficha ao Guardião</button>
        </form>
    </section>

<?php
require_once __DIR__ . '/templates/_rodape.php';
?>