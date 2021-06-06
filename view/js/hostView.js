let list = document.getElementsByClassName("container-list");
let order = document.getElementsByClassName("container-order");
function viewList(){
    list[0].style.opacity = 1;
    list[0].style.zIndex = 3;
    order[0].style.opacity = 0;
    order[0].style.zIndex = -1;
}
function viewOrder(){
    order[0].style.opacity = 1;
    order[0].style.zIndex = 3;
    list[0].style.opacity = 0;
    list[0].style.zIndex = -1;
}