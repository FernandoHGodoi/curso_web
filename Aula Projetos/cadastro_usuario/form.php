<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<!-- BOOTSTRAP -->
<form class="row g-3" action="envia_form.php" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="exemplo@email.com">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password"  name="senha"  class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua 5, Jd Abc">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Complemento</label>
    <input type="text" name="complemento" class="form-control" id="inputAddress2" placeholder="Apartmento, Condominio">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <select id="inputState" name="cidade" class="form-select">
        <option selected>...</option>
        <option>Campinas</option>
        <option>São José dos Campos</option>
        <option>São Paulo</option>
        <option>Rio de Janeiro</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" name="estado" class="form-select">
        <option selected>...</option>
        <option>Acre</option>
        <option>Alagoas</option>
        <option>Amapá</option>
        <option>Amazonas</option>
        <option>Bahia</option>
        <option>Ceará</option>
        <option>Distrito Federal</option>
        <option>Espírito Santo</option>
        <option>Goiás</option>
        <option>Maranhão</option>
        <option>Mato Grosso</option>
        <option>Mato Grosso do Sul</option>
        <option>Minas Gerais</option>
        <option>Pará</option>
        <option>Paraíba</option>
        <option>Paraná</option>
        <option>Pernambuco</option>
        <option>Piauí</option>
        <option>Rio de Janeiro</option>
        <option>Rio Grande do Norte</option>
        <option>Rio Grande do Sul</option>
        <option>Rondônia</option>
        <option>Roraima</option>
        <option>Santa Catarina</option>
        <option>São Paulo</option>
        <option>Sergipe</option>
        <option>Tocantins</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">CEP</label>
    <input type="text" id="cep" name="cep" class="form-control">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<!-- FIM BOOTSTRAP -->
    
</body>
</html>

<!-- UTILIZANDO MASCARA PARA FORÇAR USUÁRIO A DIGITAR A QUANTIDADE E O TIPO DE CARACTERES -->
<script>
    $( "#cep" ).keypress(function() {
        $(this).mask('00.000-000');
    });
</script>