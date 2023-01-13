$(document).ready(function () {
    $('#photo').change(function() {
        const file = this.files[0];
        console.log(file);
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                console.log(event.target.result);
                $('#card-img').prop('hidden', true);
                $('#img-preview').attr('src', event.target.result).prop('hidden', false);
            }
            reader.readAsDataURL(file);
        }
    });
    
    ClassicEditor
        .create(document.querySelector('#ingredients'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ]
        } )
        .catch( error => {
            console.error( error );
        } );
    
    ClassicEditor
        .create(document.querySelector('#instructions'), {
            toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList' ]
        } )
        .catch( error => {
            console.error( error );
        });

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