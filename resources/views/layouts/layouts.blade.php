@include('layouts.includes.header')

@include('layouts.includes.navbar')

@include('layouts.includes.sidebar')


<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">

            @yield('content')

        </div>
    </div>
</div>
<!-- END: Content-->

@include('layouts.includes.footer')
