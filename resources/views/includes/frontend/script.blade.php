    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('backend/js/demo/chart-pie-demo.js') }}"></script>

    <script>
        var menuBtn = document.getElementById("menuBtn")
        var sideNav = document.getElementById("sideNav")
        var menu = document.getElementById("menu")

        sideNav.style.right = "-250px";

        menuBtn.onclick = function() {
            if (sideNav.style.right == "-250px") {
                sideNav.style.right = "0";
                menu.src = "{{ url('frontend/images/close.png') }}";
            } else {
                sideNav.style.right = "-250px";
                menu.src = "{{ url('frontend/images/menu.png') }}";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 300
        });
    </script>
