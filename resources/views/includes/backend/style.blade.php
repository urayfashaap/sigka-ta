    <!-- Custom fonts for this template-->
    <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    {{-- css leaflet --}}
    <link href="{{ url('leaflet/package/dist/leaflet.css') }}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ url('backend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- Data Table Styles --}}
    <link href="{{ url('//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ url('https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css') }}"
        rel="stylesheet">



    <style>
        .leaflet-container {
            height: 50vw;
            width: 50vh;
            max-width: 100%;
            max-height: 100%;
        }

        #note-storet {
            font-size: 1rem;
            align-items: flex-end;
        }

        #label-calc {
            font-size: 0.8rem;
            text-align: center;
            white-space: nowrap;
        }

        /*Legend specific*/
        .legend {
            padding: 6px 8px;
            font: 14px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            /*box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);*/
            /*border-radius: 5px;*/
            line-height: 24px;
            color: #555;
        }

        .legend h4 {
            text-align: center;
            font-size: 16px;
            margin: 2px 12px 8px;
            color: #777;
        }

        .legend span {
            position: relative;
            bottom: 3px;
        }

        .legend img {
            width: 18px;
            height: 18px;
            float: left;
            margin: 0 8px 0 0;
            opacity: 0.7;
        }

        div.dataTables_wrapper {
            width: 80vw;
            margin: 0 auto;
        }

        th,
        td {
            white-space: nowrap;
        }
    </style>
