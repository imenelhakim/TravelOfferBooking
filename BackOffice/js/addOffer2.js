function validerFormulaire(){
    var title = document.getElementById('title').value
    // var dest = document.getElementById('destination').value 
    var dep_date = document.getElementById('dep_date').value 
    var ret_date = document.getElementById('ret_date').value 
    // var price = document.getElementById('price').value 


    var titre_msg = document.getElementById('titre_msg')

    if(title.length < 3){
        // alert('Le titre doit contenir au moins 3 caractères.')
        titre_msg.textContent = 'Le titre doit contenir au moins 3 caractères.'
        titre_msg.style.color = 'red'
        return false
    } else {
        titre_msg.textContent = 'Correct.'
        titre_msg.style.color = 'green'
    }  

    // // var pattern = /^[a-zA-Z\s]$/;
    // if( dest.length < 3 && !/^[a-zA-Z\s]$/.test(dest) ){
    //     alert('La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.')
    //     return false
    // }

    if (ret_date <= dep_date ) {
        alert('La date de retour doit être ultérieure à la date de départ.')
        return false
    }

    // if(price < 0 ){
    //     alert('Le prix doit être un nombre positif.')
    // }



    return true
}


document.getElementById('form').addEventListener('keyup',function(e){
    e.preventDefault()
    validerFormulaire()
})