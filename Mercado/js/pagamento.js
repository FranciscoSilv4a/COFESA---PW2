function mostrarCamposCartao() {
    var formaPagamento = document.getElementById("formaPagamento").value;
    var containerDadosCartao = document.getElementById("dadosCartao");
    //
    containerDadosCartao.style.display = (formaPagamento == "cartao")? "block" : "none";
}
function formatarData(input) {
    var valor = input.value.replace(/\D/g, '');
    
    if(valor.length >= 2) {
        input.value = valor.substring(0, 2) + '/' + valor.substring(2, 4);
    }
    else {
        input.value = valor;
    }
}
function formatarNum(input) {
    var valor = input.value.replace(/\D/g, '');
    input.value = valor;
}