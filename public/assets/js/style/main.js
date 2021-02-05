const openMenu = document.getElementById('show-menu');
const sideMenu = document.querySelector('.sidebar');

var display = true;

openMenu.addEventListener('click',function(){

    if(display){
        sideMenu.classList.add('active');
        display = false;
    }else{
        sideMenu.classList.remove('active');
        display = true;
    }
   
})