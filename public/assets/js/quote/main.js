var form_quote = document.getElementById('form_quote');
var route = document.getElementById('form_quote').action;

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
            beforeSend:function(){},
            }).done(function(response){
                console.log(response)
            })

        })

 
   



function alertPositive(text){
    Swal.fire({
        icon: 'success',
        title: text,
        showConfirmButton: false,
        timer: 1500
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


  



