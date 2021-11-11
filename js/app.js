console.log('conectado a app.js');
mostrarLibros();

function mostrarLibros(isbn) {
    $.ajax({
        url: '../php/libros.php',
        type: 'POST',
        data: { isbn },
        success: (response) => {
            let mostrarLiderP = document.getElementById('mostrarLibros');
            mostrarLiderP.innerHTML = response;

        }
    })
}

//BUSCAR ISBN
$('#buscar_isbn').keyup(function() {
    var buscar = $('#buscar_isbn').val();
    if (buscar != "") {
        mostrarLibros(buscar);
    } else {
        mostrarLibros();
    }

});


function prestarLibro() {
    let isbn = $('#Iisbn').val();
    let estado = $('#Iestado').val();

    //suma de string
    let tem = isbn.match(/(\d)/g);
    let suma = tem.reduce((a, b) => parseInt(a) + parseInt(b));

    //Cuando se ha prestado el libro
    if (estado == 1) {
        return M.toast({ html: 'Esta libro ha sido prestado', classes: 'rounded' });
    }

    //polindromo
    let isbnReve = isbn.split("").reverse().join("");
    if (isbnReve === isbn) {
        return M.toast({ html: '“los libros palíndromos solo se pueden utilizaren la biblioteca”', classes: 'rounded' });
    }

    $.ajax({
        type: "POST",
        url: "../php/prestarLibro.php",
        data: { isbn, suma },
        dataType: "html",
        success: function(response) {
            M.toast({ html: response, classes: 'rounded' });
            mostrarLibros();
        }
    })

}


function enviaIsbn(isbn, estado) {
    $('#Iisbn').val(isbn);
    $('#Iestado').val(estado);
}