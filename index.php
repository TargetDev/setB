<!-- 
      created by:
        Charissa Arellano 
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
        window.history.pushState('calculator', 'Title', 'containers/calculator.php') 
        : 
        alert("Error Password or Username")
        ;
      }

    </script>
    <script src="javascript/index.js"></script>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
