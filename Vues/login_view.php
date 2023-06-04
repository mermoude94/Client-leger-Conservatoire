<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Vues/CSS/style.css" rel="stylesheet">
    <title>Login Page</title>
  </head>
  <body>
    <div>
        <h1>Login Page</h1>
        <?php if (isset($error_message)): ?>
          <p><?php echo $error_message; ?></p>
        <?php endif; ?>
      <form class="login" action="index.php?uc=login" method="POST">
        <input type="hidden" name="uc" value="login">
        <input type="hidden" name="action" value="submit">
        <label for="id">Identifiant</label>
        <input type="text" name="id" id="id" required><br><br>
        <label for="password">Mot De Passe</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>