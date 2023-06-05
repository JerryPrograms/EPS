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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

<!-- toastr plugin -->
<script src="{{asset('engineer_company/assets/libs/toastr/build/toastr.min.js')}}"></script>

<!-- toastr init -->
<script src="{{asset('engineer_company/assets/js/pages/toastr.init.js')}}"></script>
<script src="{{asset('engineer_company/assets/js/jquery-time-picker.js')}}"></script>
<script src="{{asset('engineer_company/assets/js/moment.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/js/daterangepicker.min.js')}}"></script>
<script src="{{asset('engineer_company/assets/js/jquery.sumoselect.js')}}"></script>
<script src="{{asset('engineer_company/assets/css/flatpickr.js')}}"></script>

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

    @php
        $routes = ['building-info','as-and-engineer-company','parking-facility','key-accessory-history','parts-replacement-history','monthly-regular-inspection','emergency-dispatch-checklist','manage-attachments'];
    @endphp

    @if(in_array(request()->segment(2),$routes))

    $(window).on('load', function () {
        $('.customer-details').addClass('mm-active');
        $('.customer-details a').attr('aria-expanded', 'true');
        $('.sub-menu').attr('aria-expanded', 'true');
        $('.sub-menu .mm-collapse').addClass('mm-show');
        $('.sub-menu .mm-collapse').attr('aria-expanded', 'true');
        $('.sub-menu').removeClass('mm-collapse');
        if ('{{request()->segment(2)}}' == 'building-info') {
            $('.a a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'as-and-engineer-company') {
            $('.b a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'parking-facility') {
            $('.c a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'key-accessory-history') {
            $('.d a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'parts-replacement-history') {
            $('.e a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'monthly-regular-inspection') {
            $('.f a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'emergency-dispatch-checklist') {
            $('.g a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        } else if ('{{request()->segment(2)}}' == 'manage-attachments') {
            $('.h a').get(0).style.cssText = 'color:blue !important';
            $('.a a').attr('href', '{{route('ec.CreateBuildingInfo',request()->segment(3))}}');
            $('.b a').attr('href', '{{route('write_regular_inspection_log',request()->segment(3))}}');
            $('.c a').attr('href', '{{route('ec.CreateParkingFacility',request()->segment(3))}}');
            $('.d a').attr('href', '{{route('ec.CreateKeyAccessoryHistory',request()->segment(3))}}');
            $('.e a').attr('href', '{{route('ec.CreatePartsReplacementHistory',request()->segment(3))}}');
            $('.f a').attr('href', '{{route('ec.CreateMonthlyRegularInspection',request()->segment(3))}}');
            $('.g a').attr('href', '{{route('ec.CreateEmergencyDispatchChecklist',request()->segment(3))}}');
            $('.h a').attr('href', '{{route('ec.CreateManageAttachments',request()->segment(3))}}');
            $('.i a').attr('href', '{{route('contracts_management_list',request()->segment(3))}}');
            $('.j a').attr('href', '{{route('ec.GetQuoteManagement',request()->segment(3))}}');
        }


    });


    @endif


</script>
<script src="{{asset('engineer_company/assets/BsMultiSelect.js')}}"></script>


