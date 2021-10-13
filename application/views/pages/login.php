<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/login.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('css/bootstrap/css/bootstrap.css') ?>">
</head>

<body id="body">

  <header>
    <h1 class="main-title">Login</h1>
  </header>

  <form id="form">
    <div class="form-group">
      <label for="login">Login</label>
      <input type="email" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Entre com login">
    </div>
    <div class="form-group">
      <label for="passwordLogin">Senha</label>
      <input type="password" class="form-control" id="passwordLogin" placeholder="Senha">
    </div>

    <button type="submit" class="btn btn-primary" onclick="print('suhasuahsauh')">Logar</button>
  </form>

</body>

</html>