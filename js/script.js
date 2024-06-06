    async function buscaCEP(cep) {
      if (cep.length !== 8) {
        document.getElementById('estado').value = '';
        document.getElementById('cidade').value = '';
        document.getElementById('endereco').value = '';
        document.getElementById('bairro').value = '';
          return;
      }
  
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
      }
  }
  