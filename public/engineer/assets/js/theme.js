// loading bar function
function postUploadProgress(percentComplete) {
    $('.loading-bar').css('width', percentComplete + '%');
    $('.loading-bar').css('transition', 'all 0.8s');
}

function onRequestSuccess(response, button, buttonText, prompt, redirctUrl){
    if(response.success == true){
        $('html, body').animate({
                scrollTop: $("body").offset().top
        }, 500);
        prompt.html('<div class="alert alert-success mb-3">'+response.message+'</div>');
        setTimeout(() => {
            window.location.href = redirctUrl;
        }, 2000);
    }else{
        prompt.html('<div class="alert alert-danger mb-3">'+response.message+'</div>');
        button.prop('disabled', false);
        button.html(buttonText);
    }
}

function ajaxCall(form, action, btn, redirect, successCallback){
    var formData = new FormData(form[0]);
    var btnText = btn.html();
    var button = btn;
    var prompt = form.find('.prompt');
    $.ajax({
        type: "POST",
        url: action,
        dataType: 'json',
        contentType: false,
        processData: false,
        cache: false,
        data: formData,
        mimeType: "multipart/form-data",
        beforeSend: function() {
            btn.prop('disabled', true);
            btn.html('<i class="fa fa-spinner fa-spin me-1"></i> Processing');
        },
        success: function(res) {
            if((successCallback !== undefined) && (successCallback !== null)){
                successCallback(res, button, btnText, prompt, redirect);
            }
        },
        error: function(e) {}
    });
}