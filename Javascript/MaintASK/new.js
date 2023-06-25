let form = document.querySelector("form");
let demo = document.querySelector("#demo");
form.addEventListener("submit", (e) => {
  e.preventDefault();
  // location.href="http://127.0.0.1:5501/MaintASK/myPage.html"
  let fullName = document.getElementById("validationServer01").value;
  let password = document.getElementById("validationServer02").value;

//   localStorage.setItem("name",fullName)
//   localStorage.setItem("Password",password)
  
  
 
   
  if (fullName ==  localStorage.getItem('name') && password == localStorage.getItem('Password') ) {
    window.open("http://127.0.0.1:5501/MaintASK/myPage.html", "_blank");

  } else {
    

    alert("invalid credentials");


  }

  
  form.reset()
});



function validateForm(args) {
  if (args.value.length > 0) {
    args.classList.remove("is-invalid");
    args.classList.add("is-valid");
  } else {
    args.classList.remove("is-valid");
    args.classList.add("is-invalid");
  }
}


 demo.addEventListener('click',() => {


    window.open("http://127.0.0.1:5501/MaintASK/Forget.html","_blank");



 })

//  let demo2 = document.querySelector("demo2")

//  demo2.addEventListener('click',()=> {
//   window.open("http://127.0.0.1:5501/MaintASK/Signup.html","_blank")
//  })
function SignUp(){
    window.open("http://127.0.0.1:5501/MaintASK/Signup.html","_blank")

  
}