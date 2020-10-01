
<!-- 
    Files include:
    1. Jquery.js;
    2. Popper.js;
    3. Bootstrap.js;
    4. Fontanwesome.js;
    5. Fontanwesome-free.js;
-->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/fontawesome-soild.js') }}"></script>
<script src="{{ asset('js/fontawesome.js') }}"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>

// CUSTOM JS
@yield('script')