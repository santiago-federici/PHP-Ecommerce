<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce | Register</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="form.css">

</head>

<body>
  <main class="wrapper">

    <a href="../home.php" class='back-arrow'>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-left" width="35" height="35" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M5 12l14 0"></path>
        <path d="M5 12l6 6"></path>
        <path d="M5 12l6 -6"></path>
      </svg>
    </a>        

    <form  action="./registerFormHandler.php" method='post' class='form register-form'>
      <h1>Register</h1>
      <input 
        type="text" 
        placeholder='Name...' 
        name="username" 
        id="username">

      <input 
        type="password" 
        placeholder='Password...' 
        name="password"
        id="password">

      <input 
        type="password" 
        placeholder='Repeat password...' 
        name="repeatpassword"
        id="repeatpassword">

      <button type='submit' class='primary-btn'>Submit</button>

      <div class='errors-container'></div>


      <p class='not-registered'>Already have an account? Click <a href='./loginForm.php' class='here-link'>here</a> to log in.</p>
    </form>
  </main>
</body>

<script src="./registerFormValidation.js"></script>


</html>