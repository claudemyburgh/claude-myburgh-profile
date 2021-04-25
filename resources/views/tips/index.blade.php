<x-app-layout title="About Page">
    <div class="wrapper my-8">

        <div class="row flex">
            <div class="xs-col-6  md-col-2 relative">
                <x-left-sidebar></x-left-sidebar>
            </div>
            <div class="md-col-7">
                <h1>Coding Tips</h1>
                @foreach($tips as $tip)
                    <div class="panel split-panel mb-6">
                        <article class="panel__body flex flex--row justify--between">
                            @if($tip->media('tuts')->count())
                                <div class="panel__thumb">
                                    <img width="150" height="150" src="{{ $tip->media('tuts')->first()->getUrl('thumb') }}" alt="tab">
                                </div>
                            @endif
                            <div class="panel__left">
                                <div class="flex flex--align-center mb-3">
                                    <div class="avatar mr-3 flex">
                                        <img src="{{ $tip->user->avatar }}" alt="avatar">
                                    </div>
                                    by {{ $tip->user->name }}
                                </div>
                                <header>
                                    <h2 class="m-0  pb-5 gradient-text">{{ $tip->title }}</h2>
                                </header>
                                {{ Str::words($tip->description, 60) }}
                            </div>

                        </article>
                        <footer class="panel__footer flex justify--between flex--align-center">
                            {{ $tip->created_at->diffForHumans() }}
                            <a href="{{ route('tips.show', $tip) }}" class="btn btn--primary-gradient">Read more</a>
                        </footer>
                    </div>
                @endforeach
            </div>
            <div class="md-col-3 relative">
                <x-ad-sidebar></x-ad-sidebar>
            </div>
        </div>
    </div>
</x-app-layout>
