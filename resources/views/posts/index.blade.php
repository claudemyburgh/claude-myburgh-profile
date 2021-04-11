<x-app-layout title="About Page">
    <div class="wrapper my-8">

        <div class="row flex">
            <div class="xs-col-6  md-col-2 relative">
                <div class="sticky">
                    <img style="max-width: 100%" src="{{ asset('img/claude.svg') }}" alt="Claude Cartoon">
                </div>
            </div>
            <div class="md-col-8">
                <h1>Blog</h1>
                @foreach($posts as $post)
                    <div class="panel split-panel mb-6">
                        <div class="panel__body">
                            <div class="avatar">
                                <img src="{{ $post->user->avatar }}" alt="avatar">
                            </div>
                            by {{ $post->user->name }}
                            <h2 class="m-0  pb-5 gradient-text">{{ $post->title }}</h2>
                            {{ Str::words($post->description, 60) }}
                        </div>
                        <div class="panel__footer flex justify--end">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn--primary-gradient">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
