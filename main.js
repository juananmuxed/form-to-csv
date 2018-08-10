(window).addEventListener('load', function() {
    var form = $('#formulartrio')
    var forms = document.getElementsByClassName('poes');
    var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        else{
            $.ajax({
                type: 'post',
                url: 'php/cont-datos.php',
                data: $('form').serialize(),
                success:function(){
                    console.log('Form Sended');
                }
            });
        }
        form.classList.add('was-validated');
      });
    });
});