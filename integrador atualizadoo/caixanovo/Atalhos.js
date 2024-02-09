function fecharAlerta() {
    var alerta = document.querySelector('.alerta');
    if (alerta) {
        alerta.remove();
    }
}

// Função para criar o alerta
function criarAlerta() {
    // Exibe um alerta

    // Cria um elemento div para conter o conteúdo
    var container = document.createElement('div');
    container.classList.add('container', 'alerta');

    // Define o conteúdo HTML desejado
    container.innerHTML = `
        <h2>Quantidade</h2>
        <form id="formCalculo" onsubmit="realizarCalculo(); return false;">
            <input type="number" id="num1" name="num1"><br><br>
            <input type="submit" value="Calcular">
        </form>
    `;

    // Adiciona o container ao body
    document.body.appendChild(container);

    // Estilo para o container
    container.style.borderRadius = '20px';
    container.style.backgroundColor = '#1565c0';
    container.style.padding = '20px';
    container.style.position = 'absolute';
    container.style.top = '50%';
    container.style.left = '50%';
    container.style.transform = 'translate(-50%, -50%)';
    container.style.color = 'white';
    container.style.textAlign = 'center';

    // Define o foco inicial para o campo de entrada
    document.getElementById('num1').focus();
}

function realizarCalculo() {
    // Obtém o valor digitado
    var valor = document.getElementById('num1').value;
    
    // Cria um objeto FormData para enviar os dados para o PHP
    var formData = new FormData();
    formData.append('quantidade', valor);

    // Cria uma requisição AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'validarcaixa.php', true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Resposta do servidor
            fecharAlerta(); // Fecha o alerta após o envio do formulário
        } else {
        }
    };
    xhr.send(formData);
}

document.addEventListener('keydown', function(event) {
    // Verifica se a tecla Shift e a tecla F1 foram pressionadas
    if (event.shiftKey && event.key === 'F1') {
        criarAlerta();
    }

    // Verifica se a tecla Esc foi pressionada
    if (event.key === 'Escape') {
        fecharAlerta();
    }
});
