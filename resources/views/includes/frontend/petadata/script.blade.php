    <!-- Bootstrap core JS-->
    <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <!-- Core theme JS-->
    <script src="{{ asset('frontend/extendpage/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ url('https://cdn.startbootstrap.com/sb-forms-latest.js') }}"></script>

    <script src="{{ url('//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" charset="utf8"
        src="{{ url('https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/fixedcolumns/4.1.0/js/dataTables.fixedColumns.min.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                scrollX: true,
                scrollY: true,
                scrollCollapse: true,
                fixedColumns: {
                    left: 2
                },
                columnDefs: {
                    width: '10%',
                    targets: 0
                }
            });
        });
        $(document).ready(function() {
            $('#dataTable2').DataTable({
                scrollX: true,
                scrollY: true,
                scrollCollapse: true,
                fixedColumns: {
                    left: 1
                },
                columnDefs: {
                    width: '10%',
                    targets: 0
                }
            });
        });
    </script>
    </body>
