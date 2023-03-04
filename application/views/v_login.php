<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Login | Teknologi Informasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    </head>
    <body>
       
	   <div class="login">
	<h1>Login</h1>
    <form action="login/aksi_login" method="post" id="theForm">
    	<input type="text" id="username" name='NIM' placeholder='Username' required="required" /><hr>
        <input type="password" id='password' name='password' placeholder="Password" required="required" /><hr>
        <button type="submit" class="btn btn-primary btn-block btn-large">Login.</button>
    </form>
</div>

<script  src="<?php echo base_url() ?>assets/js/index.js"></script>

    </body>
</html>