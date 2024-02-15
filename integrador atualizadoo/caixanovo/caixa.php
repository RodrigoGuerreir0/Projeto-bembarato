<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/caixa.css">
    <title>CAIXA ABERTO</title>
</head>
<?php
require 'validarcaixa.php';
$nome = ValidarCaixa();
$id = ValidarCaixa();
$descricao = ValidarCaixa();
$estoque = ValidarCaixa();
$valor = ValidarCaixa();
$codVenda = CodigoCaixa();
$CodProduto = ValidarCaixa();
$codigo_barras = ValidarCaixa();
$somaValores = SomarValores();
$descontoCompra = CalcularDesconto();
?>
<?php foreach ($id as $linha) { ?>
    <tr>
        <p class="txtinfoscaixa"><?php $linha["id"] ?></p>
        <?php $ultimoID = $linha["id"] ?>
    </tr>
<?php } ?>
<?php foreach ($codigo_barras as $linha) { ?>
    <tr>
        <p class="txtinfoscaixa"><?php $linha["id"] ?></p>
        <?php $ultimoCodBarra = $linha["id"] ?>
    </tr>
<?php } ?>

<?php foreach ($codVenda as $linha2) { ?>
    <tr>
        <p class="txtinfoscaixa"><?php $linha["id"] ?></p>
        <?php $ultimoCodVenda = $linha2["codVenda"] ?>
    </tr>
<?php } ?>

<body>
    <main class="main">
        <div>
            <div class="adicionaiscaixa">
                <div class="div1">
                    <p class="name"><b>MERCADO BEM BARATO</b></p>
                </div>
                <div class="div2">
                    <fieldset class="CodProduto">
                        <legend class="legend"><b>Cód. do Produto</b></legend>
                        <div class="centralizarqtdgeral-main">
                            <p class="centralizarqtdgeral">
                                <?php echo $ultimoID ?>
                            </p>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div>
            <div class="divisoria">
                <div class="caixa">
                    <div class="fundocaixa">
                        <div class="divisoriacaixa1">
                            <div>
                                <fieldset class="Logo-Produtos">
                                    <legend class="legend"><b>Logo Produtos</b></legend>
                                </fieldset>
                                <fieldset class="CodBarra">
                                    <legend class="legend"><b>Valor Desconto </b></legend>
                                    <div class="centralizarqtdgeral-main">
                                        <p class="centralizarqtdgeral">
                                            <?php echo "R$ " . $descontoCompra  ?>
                                        </p>
                                    </div>
                                </fieldset>
                                <form action="processar_compra.php" method="post">
                                    <fieldset class="ValorCompra">
                                        <legend class="legend"><b>Valor da Compra</b></legend>
                                        <div class="centralizarqtdgeral-main">
                                            <p class="centralizarqtdgeral">
                                                <?php echo "R$ " . $somaValores; ?>
                                            </p>
                                            <input type="hidden" name="valor_compra" value="<?php echo $somaValores; ?>">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn"><b>Finalizar Compra</b></button>
                                </form>
                            </div>
                        </div>
                        <div class="divisoriacaixa2">
                            <fieldset class="Caixa">
                                <div class="NumeroDeProdutos">
                                    <div class="NumeroDeProdutos-title__main">
                                        <p class="NumeroDeProdutos-title"><b>Nº</b></p>
                                    </div>
                                    <?php foreach ($id as $linha) { ?>
                                        <tr>
                                            <p class="txtinfoscaixa"><?php echo $linha["id"] ?></p>
                                            <?php $ultimoID = $linha["id"] ?>
                                        </tr>
                                    <?php } ?>
                                </div>
                                <div class="NomeDoProduto">
                                    <div class="NomeDoProduto-title__main">
                                        <p class="NomeDoProduto-title"><b>Nome</b></p>
                                    </div>
                                    <?php foreach ($nome as $linha) { ?>
                                        <tr>
                                            <p class="txtinfoscaixa"><?php echo $linha["nome"] ?></p>
                                            <?php $ultimoNome = $linha["nome"] ?>
                                        </tr>
                                    <?php } ?>
                                </div>

                                <div class="DescricaoDoProduto">
                                    <div class="DescricaoDoProduto-title__main">
                                        <p class="DescricaoDoProduto-title"><b>Descrição</b></p>
                                    </div>
                                    <?php foreach ($descricao as $linha) { ?>
                                        <tr>
                                            <p class="txtinfoscaixa"><?php echo $linha["descricao"] ?></p>

                                        </tr>
                                    <?php } ?>
                                </div>

                                <div class="QuantidadeDoProduto">
                                    <div class="QuantidadeDoProduto-title__main">
                                        <p class="QuantidadeDoProduto-title"><b>Quantidade</b></p>
                                    </div>
                                    <?php foreach ($estoque as $linha) { ?>
                                        <tr>
                                            <p class="txtinfoscaixa"><?php echo $linha["estoque"] ?></p>
                                            <?php $ultimaQuantidade = $linha["estoque"] ?>

                                        </tr>
                                    <?php } ?>
                                </div>

                                <div class="ValorDoProduto">
                                    <div class="ValorDoProduto-title__main">
                                        <p class="ValorDoProduto-title"><b>Valor</b></p>
                                    </div>
                                    <?php foreach ($valor as $linha) { ?>
                                        <tr>
                                            <p class="txtinfoscaixa"><?php echo "R$ " . $linha["valor"] ?></p>
                                            <?php $ultimoValor = $linha["valor"] ?>

                                        </tr>
                                    <?php } ?>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="atalhos">
                    <fieldset class="CodVenda">
                        <legend class="legend"><b>Cód. da Venda</b></legend>
                        <div class="centralizarqtdgeral-main">
                            <p class="centralizarqtdgeral">
                                <?php echo $ultimoCodVenda ?>
                            </p>
                        </div>
                    </fieldset>
                    <fieldset class="ValorUnidade">
                        <legend class="legend"><b>Valor Unidade</b></legend>
                        <div class="centralizarqtdgeral-main">
                            <p class="centralizarqtdgeral">
                                <?php echo "R$ " . $ultimoValor ?>
                            </p>
                        </div>
                    </fieldset>
                    <fieldset class="ValorQuantidade">
                        <legend class="legend"><b>Quantidade</b></legend>
                        <div class="centralizarqtdgeral-main">
                            <p class="centralizarqtdgeral">
                                <?php echo $ultimaQuantidade ?>
                            </p>
                        </div>
                    </fieldset>
                    <fieldset class="Atalhos">
                        <legend class="legend"><b>Atalhos</b></legend>
                    </fieldset>
                </div>
            </div>
        </div>

    </main>
</body>
<script src="Atalhos.js"></script>

</html>