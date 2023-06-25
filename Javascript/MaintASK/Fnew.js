

let form= document.querySelector("form")
form.addEventListener('submit',(e) => {
    e.preventDefault();


    let password = document.getElementById("validationServer02").value;

    localStorage.setItem("Password",password)

            window.open("http://127.0.0.1:5501/MaintASK/index.html","_blank");

    // if(password == localStorage.getItem('Password'))
    // {
    //     window.open("http://127.0.0.1:5501/MaintASK/index.html","_blank");
    // }

 })