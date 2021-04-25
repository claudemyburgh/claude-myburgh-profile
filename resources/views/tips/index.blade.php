<x-app-layout title="About Page">
    <div class="wrapper my-8">

        <div class="row flex">
            <div class="xs-col-6  md-col-2 relative">
                <div class="sticky">
                    <img style="max-width: 100%" src="{{ asset('img/claude.svg') }}" alt="Claude Cartoon">
                </div>
            </div>
            <div class="md-col-7">
                <h1>Coding Tips</h1>
                @foreach($tips as $tip)
                    <div class="panel split-panel mb-6">
                        <div class="panel__body">
                            <div class="avatar">
                                <img src="{{ $tip->user->avatar }}" alt="avatar">
                            </div>
                            by {{ $tip->user->name }}
                            <h2 class="m-0  pb-5 gradient-text">{{ $tip->title }}</h2>
                            {{ Str::words($tip->description, 60) }}
                        </div>
                        <div class="panel__footer flex justify--end">
                            <a href="{{ route('tips.show', $tip) }}" class="btn btn--primary-gradient">Read more</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="md-col-3 relative">
                <x-ad-sidebar></x-ad-sidebar>
            </div>
        </div>
    </div>
</x-app-layout>
