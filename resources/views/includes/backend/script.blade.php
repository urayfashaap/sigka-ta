    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('backend/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('backend/js/demo/chart-pie-demo.js') }}"></script>


    <script src="{{ url('//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                scrollX: true,
                scrollCollapse: true,
                fixedColumns: {
                    left: 2,
                    right: 1
                },
                columnDefs: [{
                    width: '2%',
                    targets: 0
                }]
            });
        });
    </script>
