<!-- jQuery -->
<script src="{{asset('/admin/assets/js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('/admin/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/admin/assets/js/bootstrap.min.js')}}"></script>


<!-- Chart JS -->
<script src="{{asset('/admin/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('/admin/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/admin/assets/js/chart.js')}}"></script>

<!-- JS for sweet alert -->
<script src="{{ asset('/admin/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('/admin/assets/js/jquery.sweet-alert.custom.js') }}"></script>

<!-- Jquery for datatable -->
<script src="{{ asset('/admin/assets/datatable/js/jquery.dataTables.js') }}"></script>

<!-- Date-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<!-- Custom JS -->
<script src="{{ asset('/admin/assets/js/app.js') }}"></script>

<!-- Seletc2 js -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



@yield('js')