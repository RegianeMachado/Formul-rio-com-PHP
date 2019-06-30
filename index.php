<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Regiane Machado">
        <meta name="viewport" content="width=device-width">
        <title>Formulário de Cadastro</title>  
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>      
    </head>
    <body>
        <div class="div">     
            <form action="php/formulario.php" method="POST" class="form" name="form">
                <img src="images/logo.png" alt="logotipo" class="logo">
                <legend>Formulário de cadastro</legend>
                <label>Nome:*</label>
                <input type="text" name="nome" class="form_name" id="nome" onKeyPress="return validaTexto(event);" placeholder="Nome Completo" autofocus >
                <label>Idade:*</label>
                <input type="number" name="idade" class="form_idade" id="idade" placeholder="Apenas números. Ex: 21">
                <label>Estado:*</label>
                <select class="uf" name="uf" id="uf">
                    <option value=0>Selecione seu Estado</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                <button type="submit" class="botao" id="btn" name="btn">Cadastrar</button>
            </form>
        </div>
        <script src="js/validaFormulario.js" type="text/javascript"></script>
        <script>
                    function validaTexto(letra) {
                        var letra = letra.which || letra.keyCode;
                        if ((letra >= 48 && letra <= 57)) {
                            alert('Digite apenas letras');
                            return false;
                        } else {
                            return true;
                        }
                    }
        </script>
    </body>
</html>
