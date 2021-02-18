const openMenu = document.getElementById('show-menu');
const sideMenu = document.querySelector('.sidebar');

var display = true;

openMenu.addEventListener('click',function(){

    removeSideFromSide();
   
})


$(document).on("click", function (e) {
    removeSidebarFromBody(e);
  });

//   secciones


$(document).on('click','#buy-side, #buy-side-desktop',function(){
    
    removeIfVisible();
    $('html, body').animate({
        scrollTop: $('#buy').offset().top -68
      }, 700);

        
})

$(document).on('click','#buy-role-desktop, #buy-role',function(){
    
    removeIfVisible();
    $('html, body').animate({
        scrollTop: $('#rolex').offset().top -68
      }, 700);

        
})

$(document).on('click','#buy-daimond-desktop, #buy-daimond',function(){
    
    removeIfVisible();
    $('html, body').animate({
        scrollTop: $('#daimond').offset().top -68
      }, 700);

        
})


$(document).on('click','#go-contact-desktop, #go-contact',function(){
    
    removeIfVisible();
    $('html, body').animate({
        scrollTop: $('#contact').offset().top -68
      }, 700);

        
})

// botones venta y cotizar

$(document).on('click','.sell_gold_desktop,.sell_gold_mobile',function(){

    var text ='*¡Hola!*,%20vengo%20desde%20la%20*web%20wwww.rivasjoyas.com*%20%0aQuiero%20vender%20mis%20prendas'; 

    window.open('https://api.whatsapp.com/send?phone=+541131366295&text='+text, '_blank');
  
})

$(document).on('click','.quote_desktop,.quote_mobile',function(){

    var text = '*¡Hola!*,%20vengo%20desde%20la%20*web%20wwww.rivasjoyas.com*%20%0aQuisiera%20cotizar%20mis%20prendas';

    window.open('https://api.whatsapp.com/send?phone=+541131366295&text='+text, '_blank');
  
})


// whatsapp


$(document).on('click','.contact_whatsapp',function(){

    var text = '*¡Hola!*,%20vengo%20desde%20la%20*web%20wwww.rivasjoyas.com*%20%0aQuisiera%20realizar%20una%20consulta';

    window.open('https://api.whatsapp.com/send?phone=+541131366295&text='+text, '_blank');
  
})

// email

$(document).on('click','.email',function(){

var email = 'contacto@rivasjoyas.com';
var subject = 'Rivas Joyas Consulta';
var emailBody = 'Hola, vengo desde la web www.rivasjoyas.com, quisiera realizar una consulta con respecto a la venta y compra de oro.';
window.location = 'mailto:' + email + '?subject=' + subject + '&body=' +   emailBody;


})


// facebook

$(document).on('click','.facebook_nav,.facebook_footer_mobile',function(){

    window.open('https://www.facebook.com/alvaro.aliaga.90', '_blank');

})

// instagram

$(document).on('click','.instagram_nav,.instagram_footer_mobile',function(){

    window.open('https://www.instagram.com/celularescapitalfederal/', '_blank');

})








function removeSideFromSide(){

    if(display){
        sideMenu.classList.add('active');
        display = false;
        
    }else{
        sideMenu.classList.remove('active');
        display = true;
   
    }
}

function removeIfVisible(){

    if(!display){
        sideMenu.classList.remove('active');
        display = true;

    }
}

function removeSidebarFromBody(e){

    var container = $("#navbar");
    var containertwo = $(".sidebar");
  
    if (!container.is(e.target) && container.has(e.target).length === 0 && !containertwo.is(e.target) && containertwo.has(e.target).length === 0) {
      
      if (!display) {
        sideMenu.classList.remove('active');
        display = true;
      }
    }

}
  
