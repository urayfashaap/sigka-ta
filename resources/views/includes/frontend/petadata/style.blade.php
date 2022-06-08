<link rel="icon" type="image/x-icon" href="{{ url('frontend/extendpage/assets/favicon.ico') }}" />
<!-- Bootstrap icons-->
<link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css') }}"
    rel="stylesheet" />
<!-- Google fonts-->
<link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" />
<link href="{{ url('https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap') }}"
    rel="stylesheet" />
<script src="{{ url('https://kit.fontawesome.com/a85a4cc8b9.js') }}" crossorigin="anonymous"></script>
<link
    href="{{ url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap') }}"
    rel="stylesheet" />
<link href="{{ url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap') }}"
    rel="stylesheet" />
{{-- Data Table Styles --}}
<link href="{{ url('//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<script src="{{ url('//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js') }}"></script>
<link href="{{ url('leaflet/package/dist/leaflet.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css"
    href="{{ url('https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css') }}">
<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css') }}">
</script>
<script src="{{ url('https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css') }}"></script>
<link href="{{ url('https://cdn.datatables.net/fixedcolumns/4.1.0/css/fixedColumns.dataTables.min.css') }}"
    rel="stylesheet">


<!-- Core theme CSS (includes Bootstrap)-->
<link href="{{ url('frontend/extendpage/css/styles.css') }}" rel="stylesheet" />


<style>
    .leaflet-container {
        height: 50vw;
        width: 50vh;
        max-width: 100%;
        max-height: 100%;
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

    @media screen and (max-width: 770px) {
        .leaflet-right .leaflet-control {
            max-heigth: 0.2rem;
            max-width: 30rem;
            font-size: 0.5rem;
        }
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
