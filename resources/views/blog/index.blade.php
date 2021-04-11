<x-app-layout title="About Page">
    <div class="wrapper my-8">
        <div class="row">
            <div class="md-col-12">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="row justify--center">
            @foreach($posts as $post)
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
                            <a href="{{ route('blog.show', $post) }}" class="btn btn--primary-gradient">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
