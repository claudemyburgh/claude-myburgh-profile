<x-app-layout title="About Page">
    <div class="wrapper my-8">
        <div class="row flex">
            <div class="md-col-2 relative">
                <div class="sticky">
                    <img style="max-width: 100%" src="{{ asset('img/claude.svg') }}" alt="Claude Cartoon">
                </div>
            </div>
            <div class="md-col-8">
                <h1>Blog</h1>
                <div class="panel split-panel bg--dark">
                    <div class="panel__body">
                        <div class="avatar">
                            <img src="{{ $post->user->avatar }}" alt="avatar">
                        </div>
                        by {{ $post->user->name }}
                        <h2 class="m-0 pb-5 gradient-text">{{ $post->title }}</h2>
                        {!! Str::of($post->content)->markdown()  !!}
                    </div>
                    <div class="panel__footer flex justify--between flex--align-center">
                        Posted: {{ $post->created_at->diffForHumans() }}

                        <a href="{{ url()->previous() }}" class="btn btn--primary-gradient">BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
