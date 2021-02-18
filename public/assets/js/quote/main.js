var form_quote = document.getElementById('form_quote');
var route = document.getElementById('form_quote').action;

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

        form_quote.addEventListener('submit',function(e){
            e.preventDefault();

            var name = document.getElementsByName('name');
            var email = document.getElementsByName('email');
            var phone_number = document.getElementsByName('phone_number');
            var comment = document.getElementsByName('comment');
            var form_data = $(this);

             if(name[0].value === ''){
                 alertNegative('Debes ingresar el nombre');
                 return false;
             }else if (email[0].value === ''){
                 alertNegative('Debes ingresar un email');
                 return false;
             }else if (!(/^[_a-z0-9]+(\.[_a-z0-9]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})/i).test(email[0].value)) {
                 alertNegative('El email ingresado es invalido'); 
                 return false;
               }
             else if(phone_number[0].value === ''){
                 alertNegative('Debes ingresar un numero de contacto al cual te contactaremos');
                 return false;
             }else if (!/^[0-9]+$/.test(phone_number[0].value)) {
                 alertNegative('El número de telefono debe contener solo números')
                 return false;
               }

        
            $.ajax({
            url:route,
            type:'POST',
            data:form_data.serialize(),
            beforeSend:function(){
                showLoader('.btn-send','.loaderBtn','.txtSend');
            },
            }).done(function(response){

               hideLoader('.btn-send','.loaderBtn','.txtSend','Enviar')
                  
                if(response[0].name){

                    alertNegative(response[0].name);
                    return false;
                }else if(response[0].email){

                    alertNegative(response[0].email);
                    return false;

                }else if(response[0].phone_number){
                    alertNegative(response[0].phone_number);
                    return false;

                }else if(response[0].success){
                    
                    $("#form_quote").trigger("reset");
                    alertPositive('Enviado correctamente');
                    return false;
                }
            })

        })
        
var route_Statistic = $("meta[name='routeName']").attr("content");  

$(document).on('click','.facebook_nav',function(){

    click('facebook_nav');

}) 
$(document).on('click','.instagram_nav',function(){

    click('instagram_nav');

}) 
$(document).on('click','.sell_gold_desktop',function(){

    click('sell_gold_desktop');

}) 
$(document).on('click','.quote_desktop',function(){

    click('quote_desktop');

}) 
$(document).on('click','.sell_gold_mobile',function(){

    click('sell_gold_mobile');

}) 
$(document).on('click','.quote_mobile',function(){

    click('quote_mobile');

}) 
$(document).on('click','.phone_one',function(){

    click('phone_one');

}) 
$(document).on('click','.phone_two',function(){

    click('phone_two');

}) 
$(document).on('click','.email',function(){

    click('email');

}) 
$(document).on('click','.instagram_footer_mobile',function(){

    click('instagram_footer_mobile');

}) 
$(document).on('click','.facebook_footer_mobile',function(){

    click('facebook_footer_mobile');

}) 
$(document).on('click','.contact_whatsapp',function(){

    click('contact_whatsapp');

}) 

function click(click){

    const object = {
        click
    }

    $.ajax({
    url:route_Statistic,
    type:'POST',
    data:object,
    beforeSend:function(){},
    }).done(function(response){
      
    })

}

      
 
   
function alertPositive(text){
    Swal.fire({
        icon: 'success',
        title: text,
        showConfirmButton: false,
        timer: 2500
      });
 }

function alertNegative(text){
    Swal.fire({
        icon: 'error',
        title: text,
        showConfirmButton: false,
        timer: 1500
      });
}

 // LOADER


 function showLoader(idParent,btnClass,txtClass){

    $(idParent +' '+ btnClass).removeClass('hiddenLoader');
    $(idParent +' '+ txtClass).attr('disabled',true);
    $(idParent +' '+ txtClass).text('');
  
  }
  
  function hideLoader(idParent,btnClass,txtClass,txtBtn){
  
    $(idParent +' '+ btnClass).addClass('hiddenLoader');
    $(idParent +' '+ txtClass).attr('disabled',false);
    $(idParent +' '+ txtClass).text(txtBtn);
  }
  

 


  



