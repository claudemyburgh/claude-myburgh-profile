<x-guardian-layout type="dashboard" title="Create Post">
    <div class="wrapper my-8">
        <div class="row">
            <div class="md-col-12">
                <h1>Update Tut</h1>
            </div>
        </div>

        <div class="row justify--center ">
            <div class="md-col-6">
                <form action="{{ route('dashboard.tuts.update', $tut) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form__group">
                        <label for="title" class="form__label">Title</label>
                        <div class="form__wrap @error('title') border--danger @enderror">
                            <input type="text" id="title" name="title" value="{{ old('title') ?: $tut->title }}" class="form__item">
                        </div>
                        @error('title')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group">
                        <label for="description" class="form__label">Description</label>
                        <div class="form__wrap @error('description') border--danger @enderror">
                            <textarea name="description" id="description" cols="30" rows="3" class="form__item">{{old('description') ?: $tut->description}}</textarea>
                        </div>
                        @error('description')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group pt-5">
                        <button class="btn btn--block btn--primary">Update Tut</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="md-col-6">
                @if($tut->media)
                    <div class="row">
                        @foreach($tut->media as $media)
                            <div class="md-col-12 relative">
                                <img width="100%" src="{{ $media->getUrl() }}" alt="image 1">
                                <form method="post" action="{{ route('dashboard.tuts.delete', $media) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn--danger">
                                        <svg height="20" width="20" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clipRule="evenodd" /></svg>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('dashboard.tuts.upload', $tut) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form__group">
                        <label class="form__label">
                            Image
                        </label>
                        <div class="form__wrap">
                            <input type="file" name="image[]" class="form__item" multiple>
                        </div>
                    </div>
                    <div class="form__group">
                        <button class="btn btn--primary" type="submit">Add Images</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    </x-app-layout>
