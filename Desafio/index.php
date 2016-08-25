<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Cadastro</title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form>
            <div class="row">
                Nome Completo
                <input type="text" name="nome" placeholder="Nome Completo" />
            </div>
            <div class="row">
                Telefone
                <input type="text" name="telefone" placeholder="Telefone" />
            </div>
            <div class="row">
                Tipo
                <select>
                    <option value="1">Visitante</option>
                    <option value="2">Consolidacao</option>
                    <option value="3">Membro</option>
                </select>
            </div>
            <div>
                <input type="submit" value="SALVAR" />
            </div>
        </form>
    </body>
</html>
