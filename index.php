<?php
// 1. LÓGICA DO BACK-END (PHP)
$mensagemSucesso = "";

// Verifica se o formulário foi enviado através do método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aqui simulamos o recebimento dos dados. 
    // Em um sistema real, você poderia salvar isso em um banco de dados.
    $mensagemSucesso = "Relatório enviado com sucesso! O Guardião recebeu suas credenciais. Prepare sua mente...";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call of Cthulhu - Recrutamento PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Topo / Alerta Misterioso -->
    <header class="hero">
        <h1>PROCURAM-SE INVESTIGADORES</h1>
        <p class="aviso">O desaparecimento em Arkham esconde verdades que a mente humana não está pronta para suportar.</p>
        <a href="#formulario" class="btn-cta">Aceitar o Caso</a>
    </header>

    <!-- Detalhes do Caso -->
    <main class="detalhes">
        <h2>Dossiê da Investigação</h2>
        <ul>
            <li><strong>Sistema:</strong> Call of Cthulhu (7ª Edição)</li>
            <li><strong>Cenário:</strong> Arkham, 1920 (Mistério e Terror Cósmico)</li>
            <li><strong>Tecnologia:</strong> Processado nativamente com PHP 🐘</li>
        </ul>
    </main>

    <!-- Seção do Formulário / Validação PHP -->
    <section id="formulario" class="inscricao">
        <h2>Alistamento de Jogadores</h2>
        <p>Para se alistar, clique no botão abaixo para enviar suas coordenadas criptografadas ao Mestre.</p>

        <!-- Se o formulário foi enviado, exibe a mensagem de sucesso do PHP -->
        <?php if (!empty($mensagemSucesso)): ?>
            <div class="alerta-sucesso">
                🐙 <?php echo $mensagemSucesso; ?>
            </div>
        <?php endif; ?>

        <!-- Formulário HTML que aponta para a própria página PHP -->
        <form action="index.php" method="POST" class="container-link">
            <span class="subtitulo-link">Clique para confirmar sua inscrição na mesa:</span>
            
            <!-- Transformamos o link antigo em um botão real de envio (submit) -->
            <button type="submit" class="btn-forms">📋 Enviar Ficha ao Guardião</button>
        </form>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn. 🐙</p>
    </footer>

</body>
</html>