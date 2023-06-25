// Signup js


let signuppage = document.querySelector("#signuppage");
signuppage.addEventListener('submit',(e) => {
        e.preventDefault()

        let user = document.querySelector("#user").value;
        let Password = document.querySelector("#pass").value
        let ConfirmPassword = document.querySelector("#confirm").value
        if(Password == ConfirmPassword){
          localStorage.setItem('name',user)
          localStorage.setItem('Password',Password)
          window.open("http://127.0.0.1:5500/html/Login.html",'_blank')
        }
        else{
          alert("password is not match")

           
        }
        signuppage.reset()
      })





      function login() {
        window.open("http://127.0.0.1:5500/html/Login.html","_blank")
      }

//     //   Login  page js code



    


