
{{-- jquery --}}
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 5 -->
<script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<!-- Bootstrap 4 it support click on navbar if it have problem come to look at here-->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>

{{-- check session for sweetalert library javascript --}}

@if (Session::has('alert.config'))
    
    <script>
        swal.fire(!! Session::pull('alert.config') !!);
    </script>
    
@endif