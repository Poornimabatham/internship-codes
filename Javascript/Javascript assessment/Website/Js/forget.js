
// Forget Password code


let form= document.querySelector("#forget")
form.addEventListener('submit',(e) => {
    e.preventDefault();


    let username = document.querySelector("#username").value
    let password = document.querySelector("#pass").value;

    let Confirm = document.querySelector("#Confirmpass").value
    if(username == localStorage.getItem('name'))
    {
      
    //   alert("username exist")
      if(password == Confirm)
      {
        localStorage.setItem('name',username)

        localStorage.setItem("Password",password)

        window.open("http://127.0.0.1:5500/html/Login.html","_blank");

      }
      else{
        alert("password is not matching")
      }

    }
    
    
    
form.reset();


 })