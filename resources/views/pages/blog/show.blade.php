@extends('layouts.default')
@section('title'){{$post->title}} - Jason.z@stop
@section('content')
    <section class=" pb-16 pt-4 lg:pb-16 bg-white dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto container max-w-4xl">
            <article class="mx-auto w-full format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mt-16 mb-8 lg:mb-12 not-format">
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{$post->title}}</h1>
{{--                    <address class="flex items-center mb-6 not-italic">--}}
{{--                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">--}}
{{--                            <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="Jese Leos">--}}
{{--                            <div>--}}
{{--                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">z</a>--}}
{{--                                <p class="text-base font-light text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">发布于 {{ $post->created_at }}</time></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </address>--}}
                </header>
                <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img src="{{ url('storage') .'/'. $post->image }}" alt=""></div>
                <section class="">
                {!! $post->content !!}
                </section>
            </article>
        </div>
    </section>

@stop
