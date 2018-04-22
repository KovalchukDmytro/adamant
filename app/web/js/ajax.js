if(document.getElementById('form'))
{

    document.getElementById('form').addEventListener('submit', function(evt){

        var form_obj=document.getElementById('form');
        var error_msg = "Пожалуйста, заполните все обязательные поля.";
        var is_error = false;
        for (var i = 0; form_obj_elem = form_obj.elements[i]; i++)
        {
            if (form_obj_elem.type=="file" || form_obj_elem.type=="text"){
                if (form_obj_elem.getAttribute("required") && !form_obj_elem.value){
                    is_error = true;
                }
            }
        }

        if (is_error)
        {
            alert(error_msg);
        }
        else
        {
            // var fin=true;
            var http = new XMLHttpRequest(), f = this;
            evt.preventDefault();
            console.log(f);
            http.open("POST", "/form/save", true);
            http.onloadstart = function(){

            }

            http.onload = function(){
                //modal_ok();
            }

            http.onerror = function() {
                //fin=false;
                //alert('Извините, данные не были переданы');
            }
            http.send(new FormData(f));
        }
    }, false);

}