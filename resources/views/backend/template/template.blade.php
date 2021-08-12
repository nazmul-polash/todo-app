<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- header -->
    @include('backend.includes.header')

    <!-- css -->
    @include('backend.includes.css')
  </head>

  <body>

	<!-- manubar  -->
	@include('backend.includes.manubar')

	<!-- topbar -->
	@include('backend.includes.topbar')

	<!-- rightbar -->
	@include('backend.includes.rightbar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

    	@yield('content')


        <!-- footer -->
        @include('backend.includes.footer')


    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- scripts -->
    @include('backend.includes.scripts')

  </body>
</html>
