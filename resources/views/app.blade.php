
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>RAH - Rede de Apoio Humanitário das e nas Periferias</title>
@include('layout.css_js')

</head>
<body>
<div id="wrapper">
    <!-- -->
@include('layout.menu')




    <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="content-main">

            <!--faq-->
            <div class="blank">


                <div class="blank-page">

                    <h3 class="head-top">
                        @yield('title')
                    </h3>
                    @yield('content')

                </div>
            </div>

            <!--//faq-->
            @include('layout.footer')
            <!---->

        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<!---->
<!--scrolling js-->
@include('layout.css_js_botton')
<!--//scrolling js-->
</body>
</html>

