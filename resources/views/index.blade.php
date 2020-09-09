<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>
    <meta charset="utf-8"/>
    <title>Metronic | Dashboard</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]},
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->

    <!--begin::Global Theme Styles -->
    <link href="{{ asset('/assets/vendors/base/vendors.bundle.css')  }}" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
    <link href="{{ asset('/assets/demo/default/base/style.bundle.css')  }}" rel="stylesheet" type="text/css"/>
{{--    <link href="{{ '/assets/vendors/custom/datatables/datatables.bundle.css' }}" rel="stylesheet" type="text/css" />--}}

    <!--RTL version:<link href="assets/demo/default/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{ asset('/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>

    <!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

    <!--    <link href="<%= BASE_URL %>assets/vendors/custom/datatables/datatables.bundle.scss" rel="stylesheet" type="text/css" />-->

    <!--end::Page Vendors Styles -->
    <link rel="shortcut icon" href="{{ asset('/assets/demo/default/media/img/logo/favicon.ico')  }}"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

<!-- begin:: Page -->
<div id="app"></div>

<!-- BEGIN: Header -->

<!-- END: Header -->

<!-- begin::Body -->

<!-- end:: Body -->

<!-- begin::Footer -->

<!-- end::Footer -->
<!-- end:: Page -->

<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->

<!-- begin::Scroll Top -->

<script src="{{ mix('js/app.js') }}"></script>
<!--begin::Global Theme Bundle -->
<script src="{{ asset('/assets/vendors/base/vendors.bundle.js')  }}" type="text/javascript"></script>
<script src="{{ asset('/assets/demo/default/base/scripts.bundle.js')  }}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->
<!--<script src="<%= BASE_URL %>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>-->
<!--<script src="<%= BASE_URL %>assets/demo/default/custom/crud/datatables/advanced/multiple-controls.js" type="text/javascript"></script>-->

<!--begin::Page Vendors -->
<script src="{{ asset('/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')  }}" type="text/javascript"></script>

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
<script src="{{ asset('/assets/app/js/dashboard.js')  }}" type="text/javascript"></script>

{{--<script src="{{ asset('/assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>--}}

<!--end::Page Vendors -->

<!--begin::Page Scripts -->
{{--<script src="{{ asset('/assets/demo/default/custom/crud/datatables/advanced/multiple-controls.js') }}" type="text/javascript"></script>--}}
<!--end::Page Scripts -->
</body>
<!-- "css-loader": "^3.4.2", -->

<!-- end::Body -->
</html>
