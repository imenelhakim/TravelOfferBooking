function validerFormulaire(){
    var title = document.getElementById('title').value
    var dest = document.getElementById('destination').value 
    var dep_date = document.getElementById('dep_date').value 
    var ret_date = document.getElementById('ret_date').value 
    var price = document.getElementById('price').value 


    var titre_msg = document.getElementById('titre_msg')
    var dest_msg = document.getElementById('dest_msg')
    var return_msg = document.getElementById('return_msg')
    var price_msg = document.getElementById('price_msg')
    

    if(title.length < 3){
        // alert('Le titre doit contenir au moins 3 caractères.')
        titre_msg.textContent = 'Le titre doit contenir au moins 3 caractères.'
        titre_msg.style.color = 'red'
        return false
    } else {
        titre_msg.textContent = 'Correct.'
        titre_msg.style.color = 'green'
    }  

    // var pattern = /^[a-zA-Z\s]$/;
    var destinationPattern = /^[A-Za-z\s]{3,}$/;
    if( !destinationPattern.test(dest) ){
        dest_msg.textContent = 'La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.'
        dest_msg.style.color = 'red'
        return false
    } else {
        dest_msg.textContent = 'Correct.'
        dest_msg.style.color = 'green'
    } 

    if (ret_date <= dep_date ) {
        return_msg.textContent = 'La date de retour doit être ultérieure à la date de départ.'
        return_msg.style.color = 'red'
        return false
    } else {
        return_msg.textContent = 'Correct.'
        return_msg.style.color = 'green'
    } 

    if (price <= 0 || isNaN(price)) {
        price_msg.textContent = 'Le prix doit être un nombre positif.'
        price_msg.style.color = 'red'
        return false
    } else {
        price_msg.textContent = 'Correct.'
        price_msg.style.color = 'green'
    }



    return true
}


document.getElementById('form').addEventListener('keyup',function(e){
    e.preventDefault()
    validerFormulaire()
})