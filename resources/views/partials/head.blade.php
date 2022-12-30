<base href="">
<meta charset="utf-8" />
<title>
    @section('title')
        {{ config('app.name') }}
    @show
</title>
<link rel="icon" href="{!! asset('assets/media/logos/favicon.png') !!}" />
<meta name="description" content="Updates and statistics">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!--begin::Fonts -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

    <!--begin:: Vendor Plugins -->
<link href="{{ asset('assets/plugins/general/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/tether/dist/css/tether.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css') }}"
    rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/plugins/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css') }}"
    rel="stylesheet" type="text/css" />

<link href="{{ asset('assets/plugins/general/bootstrap-timepicker/css/bootstrap-timepicker.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/select2/dist/css/select2.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/nouislider/distribute/nouislider.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/owl.carousel/dist/assets/owl.theme.default.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/quill/dist/quill.snow.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/@yaireo/tagify/dist/tagify.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/summernote/dist/summernote.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/bootstrap-markdown/css/bootstrap-markdown.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/dual-listbox/dist/dual-listbox.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/sweetalert2/dist/sweetalert2.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/general/plugins/line-awesome/css/line-awesome.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/plugins/flaticon/flaticon.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/plugins/flaticon2/flaticon.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/general/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
    type="text/css" />

<!--end:: Vendor Plugins -->
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />

<!--begin:: Vendor Plugins for custom pages -->
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/custom/@fullcalendar/core/main.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/@fullcalendar/daygrid/main.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/custom/@fullcalendar/list/main.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/@fullcalendar/timegrid/main.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link
    href="{{ asset('assets/plugins/custom/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link
    href="{{ asset('assets/plugins/custom/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/jstree/dist/themes/default/style.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/plugins/custom/jqvmap/dist/jqvmap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/plugins/custom/uppy/dist/uppy.min.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" />
<link href="{{ asset('assets/css/skins/header/base/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/skins/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/skins/brand/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/skins/aside/dark.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/parsley_new.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/components-rounded.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('css/image-uploader.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/custom.css') }}"  rel="stylesheet" type="text/css">

@yield('css')