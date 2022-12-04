<html xmlns="http://www.w3.org/1999/xhtml">
<header>

    <link rel="stylesheet" href="/wp-content/plugins/js_composer/assets/lib/flexslider2/flexslider-rtl-min.css?ver=2.7.2.0"/>
<style>



</style>

</header>

<body>
    


    <div class="flexslider">
        <ul class="slides">
            @foreach ($product->img as $v)
                <li data-thumb="/img/products/{{ $v }}">
                    <img src="/img/products/{{ $v }}" />
                </li>
            @endforeach
        </ul>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src='/wp-content/plugins/js_composer/assets/lib/flexslider2/jquery.flexslider-min.js?ver=2.7.2.0' id='flexslider-js'></script>
    <script>

        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });

    </script>

</body>

</html>