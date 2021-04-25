<x-app-layout title="Home Page">

    <x-hero></x-hero>

    <div class="wrapper my-8">
        <div class="row flex justify--center">
            <div class="md-col-8 text-align-center">
                <h2>I am freelance developer web designer and a author of
                    several open source packages</h2>
                <div class="py-7 spacer">
                    <a class="btn btn--mute-outline bg--dark btn--mute:hover" href="#">CHECK ME OUT ON GITHUB</a>
                </div>
            </div>
        </div>
    <pre>


        @foreach($posts as $p)
            <li>{{ $p->title }}</li>
        @endforeach


    </pre>
{{--        <div class="row flex justify--center">--}}
{{--            <div class="md-col-10">--}}
{{--                <div class="row">--}}
{{--                    <div id="repos"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>




</x-app-layout>
