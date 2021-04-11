<x-app-layout title="About Page">
    <div class="wrapper my-8">
        <div class="row">
            <div class="md-col-12">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="row justify--center">
            <div class="md-col-8">
                <div class="panel split-panel">
                    <div class="panel__body">
                        <div class="avatar">
                            <img src="{{ $post->user->avatar }}" alt="avatar">
                        </div>
                        by {{ $post->user->name }}
                        <h2 class="m-0 mb-5">{{ $post->title }}</h2>
                        {{ Str::words($post->content, 60) }}
                    </div>
                    <div class="panel__footer">
                        <a href="#" class="btn btn--primary-gradient">BACK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
