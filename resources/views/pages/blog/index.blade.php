@extends('layouts.default')
@section('title')博客 - Jason.z@stop
@section('content')
    <section class="relative md:py-24 py-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold  to-blue-600  bg-clip-text">最新文章</h3>
        </div><!--end grid-->

        <div class="container max-w-6xl mx-auto my-8 mb-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-[30px]">
                @foreach($posts as $post)
                <div class="blog relative rounded-md shadow dark:shadow-gray-800 overflow-hidden">
                    <img src="{{ 'storage/' . $post->image }}" alt="">
                    <div class="content p-6">
                        <a href="{{ url('blog/' . $post->slug ) }}" class="title h5 text-lg font-medium hover:text-blue-600 duration-500 ease-in-out">{{ $post->title }}</a>
                        <p class="text-slate-400 mt-3">{{ mb_substr(strip_tags($post->content), 0,20) }}</p>

                        <div class="mt-4">
                            <a href="{{ url('blog/' . $post->slug ) }}" class="btn btn-link font-normal hover:text-blue-600 after:bg-blue-600 duration-500 ease-in-out">更多 <i class="uil uil-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!--blog end-->
                @endforeach
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    {{ $posts->links() }}
                </div>
            </div><!--end grid-->
        </div><!--end container-->
{{--        <div class="container mx-auto md:mt-24 mt-16 mb-16">--}}
{{--            <div class="md:flex justify-center">--}}
{{--                <div class="lg:w-2/3 text-center">--}}
{{--                    <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold mb-6">订阅</h3>--}}

{{--                    <p class="text-slate-400 max-w-xl mx-auto">订阅我们，获取我们的最近更新.</p>--}}
{{--                    <div class="mt-8">--}}
{{--                        <div class="text-center subcribe-form">--}}
{{--                            <form class="relative mx-auto max-w-xl">--}}
{{--                                <input type="email" id="subemail" name="name" class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-gray-100 dark:border-gray-700" placeholder="Enter your email id..">--}}
{{--                                <button type="submit" class="btn absolute top-[2px] right-[3px] h-[46px] bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-full">现在订阅</button>--}}
{{--                            </form><!--end form-->--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!--end container-->--}}
    </section>
@stop
