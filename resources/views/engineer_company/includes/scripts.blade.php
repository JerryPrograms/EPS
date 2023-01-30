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
<script src="{{asset('engineer_company/assets/js/theme.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.min.js"
        integrity="sha512-t3XNbzH2GEXeT9juLjifw/5ejswnjWWMMDxsdCg4+MmvrM+MwqGhxlWeFJ53xN/SBHPDnW0gXYvBx/afZZfGMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
<script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
<script src="{{asset('engineer_company/assets/js/validate.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/js/index.global.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.0/index.global.min.js"></script>


{{--<script src="{{asset('engineer_company/assets/libs/moment/min/moment.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/libs/jquery-ui-dist/jquery-ui.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/libs/fullcalendar/core/main.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/libs/fullcalendar/bootstrap/main.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/libs/fullcalendar/daygrid/main.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/libs/fullcalendar/timegrid/main.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/libs/fullcalendar/interaction/main.min.js')}}"></script>--}}
{{--<script src="{{asset('engineer_company/assets/js/pages/calendars-full.init.js')}}"></script>--}}

<script>
    function HideShow(element, current) {
        if (element.hasClass('d-none')) {
            current.children().find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            element.removeClass('d-none');
        } else {
            current.children().find('i').addClass('fa-chevron-down').removeClass('fa-chevron-up');
            element.addClass('d-none');
        }
    }

    function printForm(form) {
        form.print({
            globalStyles: true,
            mediaPrint: false,
            stylesheet: null,
            noPrintSelector: ".no-print",
            iframe: true,
            append: null,
            prepend: null,
            manuallyCopyFormValues: true,
            deferred: $.Deferred(),
            timeout: 750,
            title: null,
            doctype: '<!doctype html>'
        });
    }
</script>



