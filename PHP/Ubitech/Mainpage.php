
<!DOCTYPE html>
<html>
   <head>
	  <title>jQuery Form Validation</title>	
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel='stylesheet' href='style.css' type='text/css'/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
   <body>
      <div id="message"></div>

      <div class="container">
         <form id="frm" method="post"> 
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name
            "     maxlength="30" minlength="5">
            <span class="error" id="username_err"> </span>

            
              
			<br/><br/>
			<label for="email">Email </label>
            <input type="email" id="email" name="email" placeholder="Enter your email"  >
			
			<br/><br/>
			<label for="number">Phone</label>
            <input type="numer" id="number" name="number" placeholder="Enter your number"  >
            <span class="error" id="mobile_err"> </span>

			
			
			<br/><br/>
      <div class="form-group col-md-6">
                        <label for="password">
                            Password:
                        </label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>
                        <span class="error" id="password_err"> </span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="conpassword">
                            Confirm Password:
                        </label>
                        <input type="password" name="cpass" id="cpassword" class="form-control">
                        <!-- <h5 id="conpasscheck" style="color: red;">
                            **Password didn't match
                        </h5> -->
                        <span class="error" id="cpassword_err"> </span>
                    </div>
            
			
			<button type="submit" >sumit</button>
         </form>
      </div>
	  <script src="https://code.jquery.com/jquery-3.6.0.min.js" ></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
	  <script >
      
      

var frm = $("#frm");

frm.submit(function (e) {  
         e.preventDefault();
  let fullName = $("#name").val();
  let email = $("#email").val();
  let number = $("#number").val();
  var pass = $('#password').val();
  var cpass = $('#cpassword').val();


  console.log(fullName)
  console.log(email);
  console.log(number);
  var data1=/^[a-zA-Z]+ [a-zA-Z]+$/;
   var data2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

   var data3 = /^[6-9][0-9]{9}$/;
   var pattern2 = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

//    var data4 =  (?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,});
             
            //  checkPassword()
                   
if(fullName=="" || email=="" || number=="" ){
    alert("empty feild");
}
else{
       
    if(fullName.match(data1))
      {
         
    
        $('#username_err').html('');
      // alert('Your name have accepted : you can try another');
    //   return true;
      
      if(number.match(data3))
      {
         
    
      // alert('Your number have accepted : you can try another')
      $("#mobile_err").html("");
 if(pass.match(pattern2)){
  $('#password_err').html("");

  if(pass == cpass){
    $('#cpassword_err').html('');
        return true;
  }

   
      
$.ajax({
            url:"insert.php",
            type:'POST',
            data:{
                name:fullName,
                email:email,
                number:number,
               
            },
            success:function(data)
            {
              $('#message').html(data);
// alert(status);


          
$("#frm")[0].reset();

            }
  
            
        });    
         
 }
            
      }
      else{
        // alert("invalid number:number should be start from 6/7/9 and 10 digits only");
        $("#mobile_err").html("10 digit required : starting from 6/7/9");

        return false;
      }
      }
      else{
        
        $('#username_err').html('username should be a-z ,A-Z only');
        return false;
      }

}
       
      
    
      
    
   
      
      


   
      
 
})
      
  
      
      
  
      
      
     </script>
   </body>
</html>



























