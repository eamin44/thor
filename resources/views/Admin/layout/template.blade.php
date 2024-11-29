<!DOCTYPE html>
<html lang="en">
  <head>
  @include('Admin.include.header')

  <style>
   .fileuplode {
      height: calc(2.25rem + 2px);
      width: 100%;
      color: #6c757d;
      padding: 0px;
      background-clip: padding-box;
      /* border: 0.5px solid #ced4da; */
      border-radius: 2px;
      font-size: 0.875rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .fileuplode:focus {
      border: 0.5px solid #006d2f;
    }
   ::-webkit-file-upload-button {
      border: none;
      outline: none;
      border-top-right-radius: 40px;
      border-bottom-right-radius: 40px;
      background-color: #6c757d;
      padding-left: 15px;
      padding-right: 15px;
      margin-right: 10px;
      cursor: pointer;
      height: 100%;
      color: white;
    }
</style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('Admin.include.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('Admin.include.topbar')
        <!-- partial -->
        <div class="main-panel">
          @yield('body')
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- @include('Admin.include.footer') -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('Admin.include.script')
    <!-- End custom js for this page -->
  </body>
</html>