<x-guardian-layout type="dashboard" title="Create Packages">
<div class="wrapper my-8">
    <div class="row">
        <div class="md-col-12">
            <h1>Create Package</h1>
        </div>
    </div>
    <div class="row flex justify--center">
        <div class="md-col-6">
            <form action="{{ route('dashboard.packages.store') }}" method="post">
                @csrf
                <div class="form__group">
                    <label for="vendor_name" class="form__label">Vendor Name</label>
                    <div class="form__wrap @error('vendor_name') border--danger @enderror">
                        <input type="text" id="vendor_name" name="vendor_name" value="{{ old('vendor_name') }}" class="form__item">
                    </div>
                    @error('vendor_name')
                    <small class="text--danger ">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form__group">
                    <label for="name" class="form__label">Package Name</label>
                    <div class="form__wrap @error('name') border--danger @enderror">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form__item">
                    </div>
                    @error('name')
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
                    <label for="url" class="form__label">Package URL</label>
                    <div class="form__wrap @error('url') border--danger @enderror">
                        <input type="text" id="url" name="url" value="{{ old('url') }}" class="form__item">
                    </div>
                    @error('description')
                    <small class="text--danger ">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form__group pt-5">
                    <button class="btn btn--block btn--primary">Create Package</button>
                </div>
            </form>
        </div>
        <div class="md-col-6">
            <h3>All Packages</h3>
            @if($packages->count())
                <ul>
                    @foreach($packages as $package)
                        <li><a href="{{ route('dashboard.packages.edit', $package) }}">{{ $package->name }}</a></li>
                    @endforeach
                </ul>
            @else
                <strong>You have no Packages</strong>
            @endif
        </div>
    </div>
</div>
</x-app-layout>
