<x-app-layout title="About Page">
    <div class="wrapper my-8">
        <div class="row flex">
            <div class="md-col-2 relative">
                <x-left-sidebar></x-left-sidebar>
            </div>
            <div class="md-col-7">
                <h1>Coding Tips</h1>

                <div class="panel split-panel mb-5">
                    <articel class="panel__body">
                        <header>
                            <h2 class="m-0 pb-5 gradient-text">{{ $tip->title }}</h2>
                        </header>
                        {!! Str::of($tip->description)->markdown()  !!}
                    </articel>
                    <footer class="panel__footer flex justify--between flex--align-center">
                        Posted: {{ $tip->created_at->diffForHumans() }}
                        <a href="{{ url()->previous() }}" class="btn btn--primary-gradient">BACK</a>
                    </footer>
                </div>

                <div class="row">
                    <div class="sm-col-8 sm-offset-2">
                        @foreach($tip->media as $media)
                            <div class="panel split-panel mb-5">
                                <img width="100%" style="display: block" src="{{ $media->getUrl() }}" alt="">
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="md-col-3 relative">
                <x-ad-sidebar></x-ad-sidebar>
            </div>
        </div>
</x-app-layout>
