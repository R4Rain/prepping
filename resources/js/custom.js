$(document).ready(function () {
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
    $('#photo').change(function() {
        const file = this.files[0];
        console.log(file);
        if (file) {
            let reader = new FileReader();
            reader.onload = function(event) {
                console.log(event.target.result);
                $('#card-img').prop('hidden', true);
                $('#img-preview').attr('src', event.target.result).prop('hidden', false);

                // const cropper = new Cropper(file, {
                //     aspectRatio: 1,
                //     viewMode: 0
                // });
            }
            reader.readAsDataURL(file);
        }
    });
    
    $('input[name="subscription"]').on('change', function () {
        if ($(this).is(':checked')) {
            $('#btnSubscribe').prop('disabled', false)
        }
    })

    $('#create-post-1 input[name="recipe_id"]').on('change', function () {
        $('#createPost').prop('hidden', false)
    });

    // const login = new bootstrap.Modal('#login')
    // login.show();

    // setTimeout(function() {
    //     alert.hide()
    // }, 2000);
})