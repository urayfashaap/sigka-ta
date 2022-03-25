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
