function InvalidMsg(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Preencha com o E-mail');
    }
    else if(textbox.validity.typeMismatch){
        textbox.setCustomValidity('E-mail Invalido');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function Invalidsenha(textbox) {
    
    if (textbox.value == '') {
        textbox.setCustomValidity('Preencha com senha');
    }
    else {
        textbox.setCustomValidity('');
    }
    return true;
}