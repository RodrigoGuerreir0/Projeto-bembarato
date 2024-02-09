<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Produto</title>
    <style>
        /* Estilo para ajustar o tamanho do campo de data de validade */
        .container form input[type="text"],
        .container form select,
        .container form input[type="date"],
        .container form input[type="file"] {
            width: calc(100% - 12px); /* Largura do input - 12px para a margem */
            margin-bottom: 10px; /* Espaçamento entre os campos */
        }

        /* Estilo para ajustar o tamanho do campo de seleção de categoria */
        select#categoria {
            width: 200px; /* Defina o tamanho desejado aqui */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastrar Novo Produto</h2>
        <!-- Adicionando o atributo action para enviar os dados para cadastrar_produto.php -->
        <form id="cadastroForm" method="post" action="recebe-ProdutoCadastrado.php">
            <label for="codigo_barras">Código de Barras:</label>
            <input type="text" id="codigo_barras" name="codigo_barras" required><br> <!-- Adicionado campo de código de barras -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" required><br>
            <label for="imagem">Imagem:</label>
            <input type="file" id="imagem" name="imagem" accept="image/*"><br> <!-- Aceita apenas arquivos de imagem -->
            
            <label for="categoria">Categoria:</label>
            <div class="input-group">
                <select id="categoria" name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="Frios">Frios</option>
                    <option value="Bebida">Bebida</option>
                    <!-- Adicione aqui outras categorias conforme necessário -->
                </select><br>
            </div>
            <label for="estoque">Estoque:</label>
            <input type="text" id="estoque" name="estoque" required><br>
            <label for="peso">Peso:</label>
            <input type="text" id="peso" name="peso" required><br>
            <label for="valor">Valor:</label>
            <input type="text" id="valor" name="valor" required><br>
            <label for="validade">Validade:</label><br>
            <input type="date" id="validade" name="validade" required><br><br> <!-- Utiliza o tipo "date" para selecionar a data -->
            <label for="fornecedor" style="margin-right: 52px;">Fornecedor:</label> <!-- Adiciona margem para alinhar ao restante dos campos -->
            <input type="text" id="fornecedor" name="fornecedor" required><br>
            <label for="codigo_fiscal">Código Fiscal:</label>
            <input type="text" id="codigo_fiscal" name="codigo_fiscal" required><br>
            <button type="submit" class="button">Cadastrar</button> <!-- Alterado para type="submit" para enviar o formulário -->
        </form>
    </div>

    <!-- Alerta de sucesso -->
    <div id="alertaSucesso" class="alerta" style="display: none; background-color: #C8E6C9; color: #388E3C; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; padding: 20px; border-radius: 5px;">
        Produto cadastrado com sucesso!
    </div>

    <!-- Alerta de código de barras duplicado -->
    <div id="alertaDuplicado" class="alerta" style="display: none; background-color: #FFEBEE; color: #D32F2F; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; padding: 20px; border-radius: 5px;">
        O código de barras inserido já está em uso para outro produto.
    </div>

    <!-- Script para exibir os alertas -->
    <script>
        // Função para exibir o alerta de sucesso
        function exibirAlertaSucesso() {
            var alerta = document.getElementById("alertaSucesso");
            alerta.style.display = 'block';
            setTimeout(function() {
                alerta.style.display = 'none';
            }, 3000); // Tempo em milissegundos (3 segundos)
        }

        // Função para exibir o alerta de código de barras duplicado
        function exibirAlertaDuplicado() {
            var alerta = document.getElementById("alertaDuplicado");
            alerta.style.display = 'block';
            setTimeout(function() {
                alerta.style.display = 'none';
            }, 3000); // Tempo em milissegundos (3 segundos)
        }
    </script>

    <!-- Script para verificar resposta do servidor e exibir os alertas -->
    <script>
        // Função para enviar o formulário e verificar o código de barras
        document.getElementById('cadastroForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            var formData = new FormData(this);

            // Envia uma requisição AJAX
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'recebe-ProdutoCadastrado.php', true);
            xhr.onload = function () {
                if (xhr.status >= 200 && xhr.status < 300) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.error === "Código de barras duplicado") {
                        // Se o código de barras estiver duplicado, exibe o alerta correspondente
                        exibirAlertaDuplicado();
                    } else if (response.success === "Produto cadastrado com sucesso") {
                        // Se o produto foi cadastrado com sucesso, exibe o alerta correspondente
                        exibirAlertaSucesso();
                        // Limpa o formulário após o sucesso
                        document.getElementById('cadastroForm').reset();
                    }
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
