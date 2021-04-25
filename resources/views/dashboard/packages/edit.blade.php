<x-guardian-layout type="dashboard" title="Update Packages">
    <div class="wrapper my-8">
        <div class="row">
            <div class="md-col-12">
                <h1>Update Package</h1>
            </div>
        </div>

        <form action="{{ route('dashboard.packages.update', $package) }}" method="post">
            <div class="row flex justify--center">
                @csrf
                @method('put')
                <div class="md-col-6">
                    <div class="form__group">
                        <label for="vendor_name" class="form__label">Vendor Name</label>
                        <div class="form__wrap @error('vendor_name') border--danger @enderror">
                            <input type="text" id="vendor_name" name="vendor_name" value="{{ old('vendor_name') ?: $package->vendor_name }}" class="form__item">
                        </div>
                        @error('vendor_name')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group">
                        <label for="name" class="form__label">Package Name</label>
                        <div class="form__wrap @error('name') border--danger @enderror">
                            <input type="text" id="name" name="name" value="{{ old('name') ?: $package->name }}" class="form__item">
                        </div>
                        @error('name')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group">
                        <label for="description" class="form__label">Description</label>
                        <div class="form__wrap @error('description') border--danger @enderror">
                            <textarea name="description" id="description" cols="30" rows="3" class="form__item">{{old('description') ?: $package->description }}</textarea>
                        </div>
                        @error('description')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form__group">
                        <label for="url" class="form__label">Package URL</label>
                        <div class="form__wrap @error('url') border--danger @enderror">
                            <input type="text" id="url" name="url" value="{{ old('url') ?: $package->url }}" class="form__item">
                        </div>
                        @error('description')
                        <small class="text--danger ">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form__group pt-5">
                        <button class="btn btn--block btn--primary">Update Package</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </x-app-layout>
