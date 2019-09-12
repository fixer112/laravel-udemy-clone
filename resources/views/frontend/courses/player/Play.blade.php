@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    <section class="bg-darkblue p-3">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between text-white">
                <div class="">
                    <h5 class="font-14 mb-2">{{ $course->title }}</h5>
                    <h2 class="font-20 font-weight-bold">{{ $playing->title }}</h2>
                </div>
                <div>
                    <a href="{{ route('frontend.course.dashboard.overview', $course->slug) }}" 
                        class="text-white font-16 font-weight-bold">
                        @lang('strings.back_to_dashboard')
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="player__jumbotron p-3">
        <base-course-player uuid="{{ $playing->uuid }}"></base-course-player>
    </section>
@endsection