<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Happy Harry's Hardware product Information</h1>
  <form action="./request.php" method="GET">
    <div>
      <label>
        Enter product code (Use AB## format):
      </label>
    </div>
    <div>
      <input type="text" name="code" />
    </div>
    <div>
      <label>
        Please enter description:
      </label>
    </div>
    <input type="text" name="email" />
    <button type="submit">Send product code</button>
    <button type="reset">Reset</button>

  </form>
</body>

</html>