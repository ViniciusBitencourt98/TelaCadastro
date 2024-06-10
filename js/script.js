$(document).ready(function() {
    $('#cep').mask('00000-000');
    $('#tel1').mask('(00) 00000-0000');
    $('#tel2').mask('(00) 00000-0000');
    
    document.getElementById('cep').addEventListener('input', function () {
        const cep = this.value.replace(/\D/g, ''); // Remove non-digit characters
        if (cep.length < 8) {
            document.getElementById('estado').value = '';
            document.getElementById('cidade').value = '';
            document.getElementById('endereco').value = '';
            document.getElementById('bairro').value = '';
        } else if (cep.length === 8) {
            buscaCEP(cep);
        }
    });
});

async function buscaCEP(cep) {
    if (cep.length === 8){
    try {
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        if (!response.ok) {
            throw new Error('Erro ao buscar o CEP');
        } 

        const data = await response.json();
        if (data.erro) {
            alert('CEP não encontrado');
            return;
        }

        document.getElementById('estado').value = data.uf;
        document.getElementById('cidade').value = data.localidade;
        document.getElementById('endereco').value = data.logradouro;
        document.getElementById('bairro').value = data.bairro;
    } catch (error) {
        console.error(error);
        alert('Erro ao buscar o CEP');
    } }
}