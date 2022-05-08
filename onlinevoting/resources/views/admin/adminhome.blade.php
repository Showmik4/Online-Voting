<x-app-layout>
</x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title> Admin</title>
      <!-- plugins:css -->
      @include('admin.admincss')
    </head>
    <body>
   
      <div class="container-scroller">
      @include('admin.sidebar')
  
     
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.adminscript')
      
      <!-- End custom js for this page -->
    </body>
  </html>         


