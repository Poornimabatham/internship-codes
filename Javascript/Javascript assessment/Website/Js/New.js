
let form = document.querySelector("form")


    

form.addEventListener("submit", (e) => {
  e.preventDefault();
  // location.href="http://127.0.0.1:5501/MaintASK/myPage.html"
  let fullName = document.getElementById("username").value;
  let password = document.getElementById("password").value;

  
  
 
   
  if (fullName ==  localStorage.getItem('name') && password == localStorage.getItem('Password') ) {
    window.open("http://127.0.0.1:5500/html/index.html", "_blank");
    let arr = []
    arr.push({
      "fullName":fullName,
      "password":password
    })
    console.log(arr)

  } else {
    

    alert("invalid credentials");


  }

  
  form.reset()
});

function loginPage(){
  window.open("http://127.0.0.1:5500/html/Signup.html","_blank")
}
function demo(){
  window.open("http://127.0.0.1:5500/html/Forget.html","_blank")
}