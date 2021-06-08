let list = document.getElementsByClassName("container-list");
let order = document.getElementsByClassName("container-order");

function viewList(){
    let addBtn = document.getElementById('add-hotel-btn');
    addBtn.style.display = "inline-block";
    list[0].style.opacity = 1;
    list[0].style.zIndex = 3;
    order[0].style.opacity = 0;
    order[0].style.zIndex = -1;
}
function viewOrder(){
    let addBtn = document.getElementById('add-hotel-btn');
    order[0].style.opacity = 1;
    order[0].style.zIndex = 3;
    list[0].style.opacity = 0;
    list[0].style.zIndex = -1;
    addBtn.style.display = "none";
}
function addHotel(){
    let addForm = document.getElementById("add-form-container");
    addForm.style.opacity = 1;
    addForm.style.pointerEvents = "auto";
}
function exitAddForm(){
    let addForm = document.getElementById("add-form-container");
    addForm.style.opacity = 0;
    addForm.style.pointerEvents = "none";
}
function editForm(){
    let editForm = document.getElementById("edit-form-container");
    editForm.style.opacity = 1;
    editForm.style.pointerEvents = "auto";
}
function exitEditForm(){
    let editForm = document.getElementById("edit-form-container");
    editForm.style.opacity = 0;
    editForm.style.pointerEvents = "none";
}
function deleteFunction(){
    let deleteBtn = confirm("Are you sure you want to delete?");
    if(deleteBtn == true){

    }
    else{
        
    }
}