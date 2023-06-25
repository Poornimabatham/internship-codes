
const inpuTask = document.querySelector("#inputtask");
const form = document.querySelector("form")
const addButton = document.querySelector("#addbutton")
const todoList = document.querySelector(".todolist");
const clear = document.querySelector(".clear")
form.addEventListener("submit",function(e){
e.preventDefault();
if(inpuTask.value == ""){
    alert("please add some text here")
}
else{
    const newTask = createNewItem(inpuTask.value);
    todoList.appendChild(newTask)
console.log(newTask)    
}
})