<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>TicketAPP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- Bootstrap Css -->
    <link href="{{ URL::asset('/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ URL::asset('/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />

    <link href="{{ URL::asset('/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    @stack('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="http://fonts.cdnfonts.com/css/nunito" rel="stylesheet">

    <link rel="icon" href="{{ asset('/assets/images/favicion.png') }}" />

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <!-- Start wrapper -->
    <div class="wrapper">
        <!-- Left Sidebar Start -->
        @include('dashboard.layouts.slidebar')
        <!-- Left Sidebar End -->

        <div class="content-page">
            <!-- Topbar Start -->
            @include('dashboard.layouts.header')
            <!-- end Topbar -->
            <div>@yield('container')</div>
        </div>
    </div>
    <!-- END wrapper -->

    {{-- Footer --}}
    @include('dashboard.layouts.footer')

    {{-- JS --}}
    <script src="{{ url::asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ url::asset('assets/js/app.min.js') }}"></script>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();

            if ($value) {
                $('.alldata').hide();
                $('.searchdata').show();
            } else {
                $('.alldata').show();
                $('.searchdata').id();
            }
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    console.log(data);
                    $('#Content').html(data);
                }
            });
        })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>

</html>
