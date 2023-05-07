<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="">


<main class=" mx-auto min-h-screen">
    @yield('content')
</main>


<script src="https://unpkg.com/jquery@3.6.1/dist/jquery.js"></script>
<script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script type="text/javascript" src="https://unpkg.com/prismjs@1.29.0/components/prism-core.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/prismjs@1.29.0/plugins/autoloader/prism-autoloader.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/prismjs@1.29.0/plugins/toolbar/prism-toolbar.min.js"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

@yield('script')

<script type="text/javascript">
    $(document).ready(function () {

    });
</script>


<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?9df80c64395dc22f25b7879090db0805";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body>
</html>
