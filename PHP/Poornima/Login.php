<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DATA</title>
    <style>
        *{ box-sizing: border-box; }
        html, body{ margin: 0; padding: 0; }
        .container{
            margin: 10px 50px;
        }
        .form-group{
            margin: 10px;
        }
         
         .form-group0{
               
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        
        input{
            width: 100%;
            border: solid 1px #eee;
            padding: 15px 10px;
        }
        button{
            width: 200px;
            padding: 15px;
            margin-left: 250px;
            background: #fff;
            color: dodgerblue;
            border: solid 1px dodgerblue;
            border-radius:33px;
            cursor: pointer;
            transition:  all .38s ease-in-out;
        }
        button:hover{
            background: dodgerblue;
            color: #fff;
        }
        table tr td{
            border: solid 1px #eee;
            padding: 10px;
        }
        .form-group:before{
         content: " *";
         color: red;
        }
        .container {
    width: 640px;
    height: 660px;
    align: center;
    border: 5px solid #339;
}
.he{
text-align:center;
}
.c1{
margin-left: auto;
margin-right:auto;
}
    </style>


</head>
<body>
    
    <div class="container">
        <h2 class="he"><u>Registration Form</u></h2>
        <br><br>
        <form action="test1.php", method="POST">
            <div class="form-group">
             <b>First Name</b>   <input type="text" name="fname" id="fname" required placeholder="Enter first name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
             </div>
            <div class="form-group">
             <b>Last Name</b>   <input type="text" name="lname" id="lname"  required placeholder="Enter last name" pattern="^[A-Z]\w*$"  oninvalid="this.setCustomValidity('Please make first letter of your name as capital')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Email Address</b>  <input type="email" name="email" id="email" placeholder="Enter email address"  required oninvalid="this.setCustomValidity('Please give valid format, like @yahoo.com or @gmail.com, etc,.')" onchange="try{setCustomValidity('')}catch(e){}"></input>
           </div>
            <div class="form-group">
              <b>Password</b>  <input type="password" name="pwd" id="pwd" placeholder="Enter new password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z]).{6,10}" title="Password should be of 6-10 length and should contain atleast one character and one number"></input>
              </div>
             <div class="form-group">
               <b>Confirm Password</b> <input type="password" name="psw-repeat" id="psw-repeat" placeholder="Repeat your password" required>
            </div>
            <div class="form-group0">
            <b>Date Of Birth</b> 
            <input type="date" id="birthday" name="birthday" min="1900-01-01" max="2010-12-31" >
            </div>
            <div class="form-group1">
                <button type="submit">Sign Up</button>
            </div>
        </form>
          </div>
        
     
 
    
   <script>
var password = document.getElementById("pwd")
  , confirm_password = document.getElementById("psw-repeat");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;