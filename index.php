<!-- 
      created by:
        Fedz 
-->
<!-- bootstrap connection and script using bootstrap 4.0-->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- jQuery connection -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- index css-->
<link rel="stylesheet" href="css/index.css"> 



<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first" >
      <img src="assets/user.png" id="usrIcon" height="50dp" width="50dp" />
    </div>

    <!-- Login Form -->
    <form name="login">

      <input type="text"  class="fadeIn second" name="userid" placeholder="login" autofocus="userid">
      <input type="text" lass="fadeIn third" name="pswrd" placeholder="password">
      <input type="submit" class="fadeIn fourth" onclick="check(this.form)"  value="Log In">
    </form>

    <script language="javascript">
      function check(form) {
        form.userid.value == "q" && form.pswrd.value == "q"
        ? 
        window.history.pushState('page2', 'Title', '/page2.php') 
        : 
        alert("Error Password or Username")
        ;
      }

    </script>
    <script src="jquery/index.js"></script>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>




<!-- 
    <html>
    <head>
    <title>
    Login page
    </title>
    </head>
    <body>
    <h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt;
    color:#00FF00;>
    Simple Login Page
    </h1>
    <form name="login">
    Username<input type="text" name="userid"/>
    Password<input type="password" name="pswrd"/>
    <input type="button" onclick="check(this.form)" value="Login"/>
    <input type="reset" value="Cancel"/>
    </form>
    <script language="javascript">
    function check(form)/*function to check userid & password*/
    {
     /*the following code checkes whether the entered userid and password are matching*/
     if(form.userid.value == "myuserid" && form.pswrd.value == "mypswrd")
      {
        window.open('target.html')/*opens the target page while Id & password matches*/
      }
     else
     {
       alert("Error Password or Username")/*displays error message*/
      }
    }
    </script>
    </body>
    </html>

 -->