<x-guardian-layout type="dashboard" title="Posts">

    <div class="wrapper my-8">
        <div class="row flex justify--center">
            <div class="md-col-8">
                <h1>Post Index</h1>

                <table>
                    <thead>
                        <tr>
                            <th width="40">ID</th>
                            <th>Title</th>
                            <th width="120">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td><button class="btn btn--danger btn--sm">DELETE</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>




            </div>
        </div>
    </div>



</x-guardian-layout>
