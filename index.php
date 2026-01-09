<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="resultado.php" method="POST">
 
        <div>
            <label for="nome" class="label">Nome :</label>
            <input type="text" name="nome" placeholder="Digite seu Nome">
        </div>

        <div>
            <label for="idade" class="label">Idade :</label>
            <input type="text" name="idade" placeholder="Digite sua Idade">
        </div>
       
        <div>
            <label for="nota" class="label">Nota :</label>
            <input type="text" name="nota" placeholder="Digite sua Nota">
        </div>
       
        <input type="submit" value="Enviar Formulário">
    </form>    
</body>
</html>