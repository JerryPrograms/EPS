<script src="{{asset('engineer_company/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/libs/node-waves/waves.min.js')}}"></script>

<!-- apexcharts -->
<script src="{{asset('engineer_company/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- dashboard init -->
<script src="{{asset('engineer_company/assets/js/pages/dashboard.init.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
<script src="{{asset('engineer_company/assets/js/app.js')}}"></script>

<!-- App js -->
<script src="{{asset('engineer_company/assets/js/app.js')}}"></script>
<script>
    function HideShow(element) {
        if (element.hasClass('d-none')) {
            element.removeClass('d-none');
        } else {
            element.addClass('d-none');
        }
    }


    //ajax to create customer basic information
    $('#customerCreateForm').submit(function (e) {
        $('.submitbtn').html('<i class="fa fa-spinner fa-spin me-1"></i> Processing').attr('disabled', true);
        $('.submitbtn').prev().attr('disabled', true);
        e.preventDefault();
        var form = $('#customerCreateForm')[0];
        var formData = new FormData(form);
        let prompt = $('.prompt');

        $.ajax({

            type: "POST",
            url: '{{route('CustomerInfo')}}',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            mimeType: "multipart/form-data",
            beforeSend: function () {

            },
            success: function (res) {

                $('.submitbtn').html('Create').attr('disabled', false);
                $('.submitbtn').prev().attr('disabled', false);

                if (res.success == false) {


                    prompt.html('<div class="alert alert-danger">' + res.message + '</div>');

                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                    }, 2000);

                } else if (res.success == true) {

                    prompt.html('<div class="alert alert-success">' + res.message + '</div>');

                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);

                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                        {
                            {

                            }
                        }

                    }, 2000);

                }
            },
            error: function (e) {


                $('.submitbtn').html('Create').attr('disabled', false);
                $('.submitbtn').prev().attr('disabled', false);
                var first_error = '';
                $.each(e.responseJSON.errors, function (index, item) {

                    first_error = item[0];

                });
                $("div.prompt").fadeIn();
                {
                    {
                        $('.prompt').html('<div class="alert alert-danger">' + first_error + '</div>');
                    }
                }
                setTimeout(function () {
                    $("div.prompt").fadeOut();
                    {
                        {
                            prompt.html('<div class="alert alert-danger">' + first_error + '</div>');
                        }
                    }

                }, 2000);


            }

        });
    });

    //ajax to delete customer basic information
    $('#customerDeleteForm').submit(function (e) {
        $('.submitbtn').html('<i class="fa fa-spinner fa-spin me-1"></i> Processing').attr('disabled', true);
        $('.submitbtn').prev().attr('disabled', true);
        e.preventDefault();
        var form = $('#customerDeleteModal')[0];
        var formData = new FormData(form);
        let prompt = $('.prompt');

        $.ajax({

            type: "POST",
            url: '{{route('DeleteCustomerInfo')}}',
            dataType: 'json',
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            mimeType: "multipart/form-data",
            beforeSend: function () {

            },
            success: function (res) {

                $('.submitbtn').html('Create').attr('disabled', false);
                $('.submitbtn').prev().attr('disabled', false);

                if (res.success == false) {


                    prompt.html('<div class="alert alert-danger">' + res.message + '</div>');

                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                    }, 2000);

                } else if (res.success == true) {

                    prompt.html('<div class="alert alert-success">' + res.message + '</div>');

                    $("div.prompt").fadeIn();
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000);

                    setTimeout(function () {
                        $("div.prompt").fadeOut();
                        {
                            {

                            }
                        }

                    }, 2000);

                }
            },
            error: function (e) {


                $('.submitbtn').html('Create').attr('disabled', false);
                $('.submitbtn').prev().attr('disabled', false);
                var first_error = '';
                $.each(e.responseJSON.errors, function (index, item) {

                    first_error = item[0];

                });
                $("div.prompt").fadeIn();
                {
                    {
                        $('.prompt').html('<div class="alert alert-danger">' + first_error + '</div>');
                    }
                }
                setTimeout(function () {
                    $("div.prompt").fadeOut();
                    {
                        {
                            prompt.html('<div class="alert alert-danger">' + first_error + '</div>');
                        }
                    }

                }, 2000);


            }

        });
    });

</script>
