document.getElementById("button").addEventListener("click",function(){
    document.querySelector(".popup").style.display="flex";
})
document.querySelector(".close").addEventListener("click",function(){
    document.querySelector('.popup').style.display="none";
})




// var form = document.getElementById("signup");
//       form.addEventListener("submit", function (event) {
//         event.preventDefault();
//         let identity = document.getElementById("identity").value;
//         let name = document.getElementById("name").value;
//         let salary = document.getElementById("salary").value;
//         document.write(identity);
//         document.write(name);
//         document.write(salary);
//       });



function Insert(){
  let identity = document.getElementById("identity").value;
          let name = document.getElementById("name").value;
          let salary = document.getElementById("salary").value;

          let table = `<tr>
          <td>${identity}</td>
          <tr><td>${name}</td></tr>
          <tr>          <td>${salary}</td></tr>

          </tr>`;
          document.getElementById('tbl').innerHTML +=table;

          
          
  document.querySelector(".container").style.display="none"
  document.querySelector("#display").style.display="flex";


}

function addition(){
  let one = document.getElementById('one').value;
  let two = document.getElementById('two').value;
  let three = document.getElementById('three').value
   
  let total = +one + +two  + +three;
   document.getElementById('total').value = total;


}
