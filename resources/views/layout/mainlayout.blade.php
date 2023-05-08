<!DOCTYPE html>
<html
lang="en"
class="light-style layout-navbar-fixed layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="{{asset('admin')}}/assets/"
data-template="vertical-menu-template">

<head>
    @include('layout.partials.head')
    @include('layout.assets.css')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layout.partials.sidebar')

            <div class="layout-page">
                @include('layout.partials.navbar')

                <div class="content-wrapper">
                    @yield('content')

                    @include('layout.partials.footer')
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    @include('layout.assets.script')
</body>

</html>
