@extends('layouts.default')
@section('title')
    关于我 - Jason.z
@stop
@section('content')
    <section class="relative md:py-32 py-24 min-h-screen">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 gap-8">
                <div class=" dark:shadow-gray-800 overflow-hidden">
                    <div class="md:flex items-center">
                        <div class="relative md:shrink-0">
                            <img src="https://images.unsplash.com/photo-1562813733-b31f71025d54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2069&q=80" class="h-full w-full object-cover lg:w-[500px] md:w-80 lg:h-full md:h-96" alt="">
                        </div>

                        <div class="p-8">
                            <h3 class="mb-8 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold  to-blue-600  bg-clip-text">关于我</h3>
                            <p class="text-slate-400 dark:text-white mt-6">80后程序员.三娃的爹。</p>
                            <p class="text-slate-400 dark:text-white mt-6">修过电脑，扛过机箱。折腾游戏将近十载，混迹区块链三年，给别人开发网页APP无数。</p>
                            <p class="text-slate-400 dark:text-white mt-6">而如今尘埃已定，一心投身于学习研究之中。</p>
                            <p class="text-slate-400 dark:text-white mt-6">希望能为互联网事业尽一点儿微薄之力。</p>
                        </div>
                    </div><!--end flex-->
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
@stop

@section('script')
{{--    <script src="{{ asset('js/typed.min.js') }}"></script>--}}
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>


@stop
