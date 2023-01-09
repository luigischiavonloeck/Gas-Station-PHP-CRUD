<link rel="stylesheet" href="../../assets/css/cadastro.css">
<title>Alterar</title>
</head>
<?php
include_once('../logic/funcoes_posto.php');
include_once('../logic/conecta_DB.php');
$postos = listarPostoSemPreco($conexao);
?>

<body>
    <main>
        <form action="../logic/logica_preco.php" method="post" autocomplete="off" id="cadastro">
            <h3>Alterar</h3>
            <div class="grid">
                <div><label for="gasolina_cm">Gasolina Comum</label><input class="input" type="number" placeholder="Digite o preço da gasolina" name="gasolina_cm" id="gasolina_cm" step="0.0001" min="0" max="20" value="<?php echo $preco['gasolina_cm']; ?>"></div>
                <div><label for="gasolina_at">Gasolina Adtivada</label><input class="input" type="number" placeholder="Digite o preço da gasolina" name="gasolina_at" id="gasolina_at" step="0.0001" min="0" max="20" value="<?php echo $preco['gasolina_at']; ?>"></div>
                <div><label for="etanol">Etanol</label><input class="input" type="number" placeholder="Digite o preço do etanol" name="etanol" id="etanol" step="0.0001" min="0" max="20" value="<?php echo $preco['etanol']; ?>"></div>
                <div><label for="diesel">Diesel Comum</label><input class="input" type="number" placeholder="Digite o preço do diesel" name="diesel" id="diesel" step="0.0001" min="0" max="20" value="<?php echo $preco['diesel']; ?>"></div>
                <div><label for="diesel_at">Diesel Adtivada</label><input class="input" type="number" placeholder="Digite o preço do diesel" name="diesel_at" id="diesel_at" step="0.0001" min="0" max="20" value="<?php echo $preco['diesel_at']; ?>"></div>
            </div>
            <label for="cod_posto">Posto </label><select name="cod_posto" class="input">
                <option value="<?php echo $preco['posto_cod']; ?>"><?php echo $preco['nm_posto']; ?></option>
                <?php
                if (empty($postos)) {
                ?>
                    <option value="">Não exitem outros postos sem preço</option>
                    <?php
                } else {
                    foreach ($postos as $posto) {
                    ?>
                        <option value="<?php echo $posto['cod_posto'] ?>"><?php echo $posto['nm_posto'] ?></option>
                <?php
                    }
                } ?>
            </select>
            <input type="hidden" id='cod_preco' name='cod_preco' value="<?php echo $preco['cod_preco']; ?>">
            <button type="submit" id='alterar' name='alterar' value="alterar">Alterar</button>
            <button type="button" onclick="location.href='../../preco.php'" id="voltar">Voltar</button>
        </form>
    </main>
</body>
<script src="..\..\assets\js\validacao_preco.js"></script>

</html>