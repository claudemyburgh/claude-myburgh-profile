<x-app-layout title="Home Page">

    <x-hero></x-hero>

    <div class="wrapper my-8">
        <div class="row flex justify--center">
            <div class="md-col-8 text-align-center">
                <h2>I am freelance developer web designer and a author of
                    several open source packages</h2>
                <div class="py-7 spacer">
                    <a class="btn btn--mute-outline bg--dark btn--mute:hover" href="https://github.com/DesignByCode" target="_blank">CHECK ME OUT ON GITHUB</a>
                </div>
            </div>
        </div>

        <div class="row my-6 flex">
            @foreach($packages as $p)
                <div class="md-col-4">
                    <div class="panel split-panel">
                        <div class="panel__body">
                            <h3><a href="{{ $p->url }}" target="_blank">{{ $p->name }}</a></h3>
                            {{ $p->description }}
                        </div>
                        <div class="panel__footer flex justify--end">
                            <a href="{{ $p->url }}" target="_blank" class="btn btn--primary btn--sm">View Package</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>


</x-app-layout>
