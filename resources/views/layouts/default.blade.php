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

<div class="fixed top-1/4 -right-1 z-3">
    <span class="relative inline-block rotate-90">
        <input type="checkbox" class="checkbox opacity-0 absolute" id="chk">
        <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
            <i class="uil uil-moon text-[20px] text-yellow-500"></i>
            <i class="uil uil-sun text-[20px] text-yellow-500"></i>
            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
        </label>
    </span>
</div>

<script src="https://unpkg.com/jquery@3.6.1/dist/jquery.js"></script>
{{--<script src="{{ asset('js/clipboard.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/toastify.js') }}"></script>--}}
{{--<script src="{{ asset('js/letter-avatar.js') }}"></script>--}}
{{--<script src="{{ asset('js/jquery.validate.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/messages_zh.js') }}"></script>--}}
{{--<script src="{{ asset('js/additional-methods.min.js') }}"></script>--}}
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
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
        hm.src = "https://hm.baidu.com/hm.js?45bb2f8a8f79229f16881dd1839445bc";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PV0F0T5S6J"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PV0F0T5S6J');
</script>
</body>
</html>
