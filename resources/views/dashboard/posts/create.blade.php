<x-guardian-layout type="dashboard" title="Create Post">
    <div class="wrapper my-8">
        <div class="row">
            <div class="md-col-12">
                <h1>Create Blog Post</h1>
            </div>
        </div>
        <div class="row">
            <div class="md-col-6">
                <form action="{{ route('dashboard.posts.store') }}" method="post">

                    @csrf
                    <div class="form__group">
                        <label for="title" class="form__label">Title</label>
                        <div class="form__wrap @error('title') border--danger @enderror">
                            <input type="text" id="title" name="title" value="{{ old('title') }}" class="form__item">
                        </div>
                        @error('title')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group">
                        <label for="description" class="form__label">Description</label>
                        <div class="form__wrap @error('description') border--danger @enderror">
                            <textarea name="description" id="description" cols="30" rows="3" class="form__item">{{old('description')}}</textarea>
                        </div>
                        @error('description')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group">
                        <label for="content" class="form__label">Content</label>
                        <div class="form__wrap @error('content') border--danger @enderror">
                            <textarea name="content" id="content" cols="30" rows="10" class="form__item">{{ old('content') }}</textarea>
                        </div>
                        @error('content')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group pt-5">
                        <button class="btn btn--block btn--primary">Create Post</button>
                    </div>
                </form>
            </div>
            <div class="md-col-6">
                <h3>All Posts</h3>
                @if($posts->count())
                    <ul>
                        @foreach($posts as $post)
                            <li><a href="{{ route('dashboard.posts.edit', $post) }}">{{ $post->title }}</a></li>
                        @endforeach
                    </ul>
                @else
                    <strong>You have no Posts</strong>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
