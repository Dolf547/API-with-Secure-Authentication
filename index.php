<?
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods', "PUT, POST, DELETE, GET, OPTIONS");
header('Access-Control-Allow-Headers', "Accept, Authorization, Content-Type");
//...
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/send.js"></script>
    <link rel="stylesheet" href="css/min.css">
    <title>Inputs de usuário e senha</title>
</head>

<body>
    <div class="form-container">
        <input type="text" id='user' placeholder="Usuário" required>
        <input type="password" id='password' placeholder="Senha" required>
        <input type='submit' onclick="send()" value="Comparar">
        </br>
        <input type='submit' onclick="newRequest()" value="Novo request!">
    </div>



    <div id='tableDiv'>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Usuário</th>
      <th scope="col">Senha</th>
      <th scope="col">Senha desencriptada.</th>
   
    </tr>
  </thead>
  <tbody>
    <tr>
  
      <td id='userTd'></td>
      <td id='pass'></td>
        <td id='passDescript'></td>
    </tr>
   
  </tbody>
</table>
    </div>


</body>

</html>