<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}

/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
}
</style>
</head>

<!------ Include the above in your HEAD tag ---------->
<body>
<div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			
<h3>Password Validation</h3>
<p>Try to submit the form.</p>
  <form action="/action_page.php">
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="usrname" required>
<div id="message">
  <p id="letter" class="invalid">User Name is Required!.</p>
</div>
    <label for="psw">Password</label>
    <input type="password" id="pwd" name="psw" pattern=""required>
    <input type="submit" value="Submit">
  </form>



    		</div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>				
<script>
var myUser = document.getElementById("usrname");
var myPwd = document.getElementById("pwd");

// When the user clicks on the password field, show the message box
myUser.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myUser.onblur = function() {
    document.getElementById("message").style.display = "none";
}
    myUser.onkeyup = function() {
  if(myUser="") {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
}
</script>
</body>
</html>