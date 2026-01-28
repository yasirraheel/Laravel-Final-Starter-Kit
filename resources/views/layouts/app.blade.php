<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <!-- Page Title -->
   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Favicon -->
   <link rel="shortcut icon" href="{{ asset('Dashmin_html/assets/img/favicon.png') }}">

   <!-- Web Fonts -->
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

   <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('Dashmin_html/assets/bootstrap/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('Dashmin_html/assets/fonts/icofont/icofont.min.css') }}">
   <link rel="stylesheet" href="{{ asset('Dashmin_html/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
   <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('Dashmin_html/assets/plugins/apex/apexcharts.css') }}">
   <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

   <!-- ======= MAIN STYLES ======= -->
   <link rel="stylesheet" href="{{ asset('Dashmin_html/assets/css/style.css') }}">
   <!-- ======= END MAIN STYLES ======= -->

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   @livewireStyles
</head>

<body>

   <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

      @include('partials.header')

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         @include('partials.sidebar')

         <!-- Main Content -->
         <div class="main-content">
            <div class="container-fluid">
               @if (isset($header))
                  <div class="mb-4">
                     {{ $header }}
                  </div>
               @endif

               {{ $slot }}
            </div>
         </div>
         <!-- End Main Content -->
      </div>
      <!-- End Main Wrapper -->

      @include('partials.footer')
   </div>
   <!-- End wrapper -->

   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
   <script src="{{ asset('Dashmin_html/assets/js/jquery.min.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/js/script.js') }}"></script>
   <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

   <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
   <script src="{{ asset('Dashmin_html/assets/plugins/apex/apexcharts.min.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/plugins/apex/custom-apexcharts.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/plugins/toastr/toastr.min.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/plugins/toastr/toastr.js') }}"></script>
   <script src="{{ asset('Dashmin_html/assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
   <script>
       @if(session('success'))
           toastr.success("{{ session('success') }}");
       @endif
       @if(session('error'))
           toastr.error("{{ session('error') }}");
       @endif
       @if(session('warning'))
           toastr.warning("{{ session('warning') }}");
       @endif
       @if(session('info'))
           toastr.info("{{ session('info') }}");
       @endif

       @if($errors->any())
           toastr.error("Please fix the highlighted errors.");
       @endif

       function deleteConfirm(formId) {
           Swal.fire({
               title: "Are you sure?",
               text: "You won't be able to revert this!",
               type: "warning",
               showCancelButton: !0,
               confirmButtonColor: "#3085d6",
               cancelButtonColor: "#d33",
               confirmButtonText: "Yes, delete it!",
               confirmButtonClass: "btn long",
               cancelButtonClass: "btn long bg-danger ml-1",
               buttonsStyling: !1,
           }).then(function (t) {
               if (t.value) {
                   document.getElementById(formId).submit();
               }
           });
       }
   </script>
   <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->

   @stack('modals')
   @livewireScripts
</body>

</html>
