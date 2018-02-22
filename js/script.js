/*   Opening and closing sidebar functions section   */

function openSideMenu(){
    document.getElementById('side_menu').style.width = '250px';
    document.getElementById('main').style.marginLeft = '250px';
}

function closeSideMenu(){
    document.getElementById('side_menu').style.width = '0';
    document.getElementById('main').style.marginLeft = '0';
}

console.log('Maja');

 /*  Form Validation section   */

 function formValidation(forma){
    
        var name = forma.name.value;
        var email = forma.email.value;
        var comment = forma.message.value;
        console.log(name);
    
        if(name == "") {
            document.getElementById('n').textContent = 'Molimo napišite vaše ime';
            return false;
    
            } else if(name.length < 2 && name[0] != name[0].toUpperCase()){
                document.getElementById('n').textContent = 'Ime mora da sadrzi minimum 2 slova i prvo veliko';
                return false; 
        }

        if(email == "") {
            document.getElementById('e').textContent = 'Molimo upisite vaš e-mail';
            return false;
        }

        if(comment == "") {
            document.getElementById('c').textContent = 'Molimo napišite poruku';
            return false;
        }

        return true;
}

// Comment form validation

function comentFormValidation(form){
    
        var name = form.name_coment.value;
        var comment = form.comment_coment.value;
    
        if(name == "") {
            document.getElementById('cn').textContent = 'Molimo napišite vaše ime';
            return false;
    
            } else if(name.length < 2){
                document.getElementById('cn').textContent = 'Ime mora da sadrzi minimum 2 slova';
                return false; 
        }

        if(comment == "") {
            document.getElementById('cc').textContent = 'Molimo napišite poruku';
            return false;
        } else if(comment.length < 2) {
            document.getElementById('cc').textContent = 'Molimo napišite poruku';
            return false;
        }

        return true;
}

