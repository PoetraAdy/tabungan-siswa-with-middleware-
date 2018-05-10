<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap-material-design.js')}}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="{{ asset('assets/js/plugins/chartist.min.js')}}"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('assets/js/plugins/arrive.min.js')}}" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="{{ asset('assets/js/material-dashboard.js?v=2.0.0')}}"></script>
<!-- demo init -->
<script src="{{ asset('assets/js/plugins/demo.js')}}"></script>

<!-- Data Tables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
<script src="{{ asset('datatables/datatables.js')}}"></script>
<script src="{{ asset('datatables/datatables.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
<!-- Sweet Alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('swal/swal.js')}}"></script>
