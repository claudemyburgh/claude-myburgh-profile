<x-guardian-layout type="dashboard" title="Create Tips">
    <div class="wrapper my-8">
        <div class="row">
            <div class="md-col-12">
                <h1>Create Tips</h1>
            </div>
        </div>
        <form action="{{ route('dashboard.tips.store') }}" method="post">
            <div class="row">
                @csrf
                <div class="md-col-6">
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
                    <div class="form__group pt-5">
                        <button class="btn btn--block btn--primary">Create Tips</button>
                    </div>
                </div>
                <div class="md-col-6">
                    <h3>All Tips</h3>
                    @if($tips->count())
                        <ul>
                            @foreach($tips as $tip)
                                <li><a href="{{ route('dashboard.tips.edit', $tip) }}">{{ $tip->title }}</a></li>
                            @endforeach
                        </ul>

                    @else
                        <strong>You have no tips</strong>
                    @endif

                </div>
            </div>
        </form>
    </div>
    </x-app-layout>
