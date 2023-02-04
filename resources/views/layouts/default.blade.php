<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="">


<header class="py-16">
    @include('includes.header')
</header>

<main class="max-w-screen-xl mx-auto min-h-screen">
    @yield('content')
</main>

@include('includes.footer')

{{--<div class="fixed top-1/4 -right-1 z-3">--}}
{{--    <span class="relative inline-block rotate-90">--}}
{{--        <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">--}}
{{--        <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">--}}
{{--            <i class="uil uil-moon text-[20px] text-yellow-500"></i>--}}
{{--            <i class="uil uil-sun text-[20px] text-yellow-500"></i>--}}
{{--            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>--}}
{{--        </label>--}}
{{--    </span>--}}
{{--</div>--}}

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
