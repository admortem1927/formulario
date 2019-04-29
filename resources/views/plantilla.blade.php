<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
     Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--DATA TABLES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
    <script > window.laravel = {!!
      json_encode(['url'=>URL::to('/'),
      'token'=>csrf_token()])
    !!};</script>

    <title>TARJETA PREFERENCIAL</title>
  </head>
  <!--Top bar nav -->
  <body>
    <div class="container border">
    <ul class="nav nav-tabs">
      <li class="nav-item">
    <a class="nav-link active @yield('aAdmin')" href="{{Route('afiliacion.create')}}">Administrar Afiliacion</a>
  </li>
  
   <!--<li class="nav-item">
    <a class="nav-link active @yield('fCrear')" href="{{Route('formulario.index')}}">Administrar Usuario</a>
  </li>  
    <li class="nav-item">
    <a class="nav-link active @yield('aMostrar')" href="{{Route('afiliacion.index')}}">Mostrar Afiliacion</a>   
  </li> 
  <li class="nav-item">
    <a class="nav-link active @yield('fCrear')"href="{{Route('formulario.create')}}">Registrar Usuario</a>
  </li>-->
</ul>
    <div>
    @yield('seccion')
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="{{asset('js/app.js')}}"></script>
     <!--Data tables -->
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>     
     <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/bootbox.min.js')}}"></script>
     <script src="{{asset('js/funciones.js')}}"></script>
     
   
     </body>
  <!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">
    <!-- Footer Elements -->
    <div class="container">
      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Ibagué - Tolima</h5>
        </li>        
      </ul>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Medicadiz
      </div>
  <!-- Copyright -->
  </footer>
  <!-- fin footer-->
  </div>
</html>

