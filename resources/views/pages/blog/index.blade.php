@extends('layouts.default')
@section('title')
    博客 - Jason.z
@stop
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
    </section>
@stop
