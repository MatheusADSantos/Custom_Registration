<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/register.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap/css/bootstrap.css') ?>">
</head>

<body id="body">

  <header>
    <h1 class="main-title">Cadastro Custom - FMobile 6.0</h1>
  </header>

  <form>
    <div class="containers container">
      <div class="container-info">
        <h2 class="sub-title">Informações da Empresa e Responsável</h2><br>

        <div class="form-group">
          <label for="indice">Índice da Empresa</label>
          <input type="text" class="form-control" id="indice" placeholder="Entre com o indice">
        </div>
        <div class="form-group">
          <label for="nameEnterprise">Nome da Empresa</label>
          <input type="text" class="form-control" id="nameEnterprise" placeholder="Entre com o nome Fantasia">
        </div>
        <div class="form-group">
          <label for="nameClient">Nome Completo</label>
          <input type="text" class="form-control" id="nameClient" placeholder="Nome e Sobrenome">
        </div>
        <div class="form-group">
          <label for="site">Site</label>
          <input type="text" class="form-control" id="site" placeholder="https://www.exemplo.com.br">
          <small id="site" class="form-text text-muted">Site estará visivel na loja | Verificar se o site está funcionando ...</small>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" placeholder="exemplo@gmail.com">
          <small id="email" class="form-text text-muted">Email estará visível na loja</small>
        </div>
        <div class="form-group">
          <label for="telphone">Telefone</label>
          <input type="text" class="form-control" id="telphone" placeholder="+DDI DDD telefone">
          <small id="telphone" class="form-text text-muted">Telefone estará visível na loja | Ex: +55 14 telefone</small>
        </div>
        <div class="form-group">
          <label for="copyright">Copyright</label>
          <input type="text" class="form-control" id="copyright" placeholder="© ano atual, nome do desenvolvedor/empresa" value="© ">
          <small id="copyright" class="form-text text-muted">Direitos autorais,caso não saiba ou não tenha, será inserido da seguinte forma: "© ano atual, nome do desenvolvedor/empresa"</small>
        </div>
      </div>
    </div>



    <div class="containers container">
      <div class="container-info-app">
        <h2 class="sub-title">Dados do App</h2>

        <div class="form-group">
          <label for="appName">Nome</label>
          <input type="text" class="form-control" id="appName" placeholder="Nome do Aplicativo">
          <small id="appName" class="form-text text-muted">Definir corretamente o nome; Será considerado as letras minúsculas, maiúsculas... "</small>
        </div>
        <div class="form-group">
          <label for="color">Cor</label>
          <input type="text" class="form-control" id="color" placeholder="#000000" value="#">
          <small id="color" class="form-text text-muted">Cor dos botões em #hexadecimal - <a href="https://celke.com.br/artigo/tabela-de-cores-html-nome-hexadecimal-rgb">link de apoio</a></small>
        </div>
      </div>
    </div>

    <div class="containers container">
      <div class="container-info-store">
        <h2 class="sub-title">Acesso às Lojas</h2>
        <small id="" class="form-text text-muted">Obs: Caso for compartilhado, favor desconsiderar esses campos</small><br>

        <div class="form-group">
          <label for="emailAndroid">Email - Android</label>
          <input type="email" class="form-control" id="emailAndroid" aria-describedby="emailHelp" placeholder="Entre com email">
          <small id="" class="form-text text-muted">Obs: Caso queira compartilhar a conta com a nós, acesse o <a target="_blank" href="https://docs.google.com/document/d/1ylskk11GHr7JPFjQckqnGDsG7BSVA-HE9gv7NogY1Eg/edit">link</a></small>
        </div>
        <div class="form-group">
          <label for="passwordAndroid">Senha</label>
          <input type="password" class="form-control" id="passwordAndroid" placeholder="Senha">
        </div>

        <br>

        <div class="form-group">
          <label for="emailIOS">Email - iOS </label>
          <input type="email" class="form-control" id="emailIOS" aria-describedby="emailHelp" placeholder="Entre com email">
          <small id="" class="form-text text-muted">Obs: Caso queira compartilhar a conta com a nós, acesse o <a target="_blank" href="https://docs.google.com/document/d/1ylskk11GHr7JPFjQckqnGDsG7BSVA-HE9gv7NogY1Eg/edit">link</a></small>
        </div>
        <div class="form-group">
          <label for="passwordIOS">Senha</label>
          <input type="password" class="form-control" id="passwordIOS" placeholder="Senha">
        </div>
      </div>
    </div>


    <div class="containers container">
      <div class="container-images">
        <h2 class="sub-title">Imagens</h2>
        <ul>
          <li>Ícone de Autenticação e Splash</li><br>
          <button class="button-image">Upload here</button><br><br>
          <li>Ícone do app</li><br>
          <button class="button-image">Upload here</button><br><br>
          <li>Ícone da loja</li><br>
          <button class="button-image">Upload here</button><br><br>
          <li>Banner</li><br>
          <button class="button-image">Upload here</button><br>
        </ul>
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>

</body>

</html>