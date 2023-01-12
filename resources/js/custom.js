$(document).ready(function () {
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ]
        } )
        .catch( error => {
            console.error( error );
        } );
    
    ClassicEditor
        .create(document.querySelector('#ingredients'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ]
        } )
        .catch( error => {
            console.error( error );
        } );
    
    ClassicEditor
        .create(document.querySelector('#steps'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ]
        } )
        .catch( error => {
            console.error( error );
        } );
    
    
    $('.input-spinner').inputSpinner({
        template:
            '<div class="input-group ${groupClass}">' +
            '<button style="min-width: ${buttonsWidth};" class="btn btn-decrement btn-outline-light" type="button">${decrementButton}</button>' +
            '<input type="text" inputmode="decimal" style="text-align: ${textAlign};" class="form-control">' +
            '<button style="min-width: ${buttonsWidth};" class="btn btn-increment btn-outline-light" type="button">${incrementButton}</button>' +
            '</div>'
    })

    $('#comment').on('keyup', function () {
        if ($(this).val() != '') {
            $('#btnComment').prop('disabled', false)
        } else {
            $('#btnComment').prop('disabled', true)
        }
    })

    // const alert = new bootstrap.Modal('#alert')
    // alert.show();

    // setTimeout(function() {
    //     alert.hide()
    // }, 2000);
})