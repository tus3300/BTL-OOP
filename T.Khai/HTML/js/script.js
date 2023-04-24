

const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
        const X = this.pageXOffset;
    if(X>1){toP.classList.add("active")}
    else {
        toP.classList.remove("active")
    }
})

const itemsliderbar = document.querySelectorAll(".category-left-li")
itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click",function() {
        menu.classList.toggle("block")
    })
})