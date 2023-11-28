var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "http://127.0.0.1:8000/user/uploadBankTransfer", // Set the url for your upload script location
    paramName: "image", // The name that will be used to transfer the file
    maxFiles: 1,
    maxFilesize: 10, // MB
    uploadMultiple: false,
   
    addRemoveLinks: true,
    acceptedFiles: "image/jpeg, image/png, image/gif, image/bmp, image/tiff, image/webp, .jpg, .jpeg, .png, .gif, .bmp, .tif, .tiff, .webp",
    method : "post",
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
   
    success: function (file, response) {
        swal.fire({
            text: "File uploaded successfully!, Please wait for the admin to approve your transfer",
            icon: "success",
            buttonsStyling: false,
            confirmButtonText: "Ok, got it!",
            customClass: {
                confirmButton: "btn font-weight-bold btn-light-primary",
            },
        }).then(function () {
            location.reload();
        });
    }
    
 
});