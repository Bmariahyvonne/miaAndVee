<div class="card mb-3">
<img src="{{ URL::asset('/img/test.png') }}" class="card-img-top" alt="..." height="500">
<div class="card-body">
<h5 class="card-title">List of subscribers</h5>
<p class="card-text">You can find the comments of our listners here</p>
<table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Location</th>
                <th scope="col">Episode</th>
                <th scope="col">Comment</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($subscribers as $subscriber)
            <tr>
                <td>{{ $subscriber->name }}</td>
                <td>{{ $subscriber->email }}</td>
                <td>{{ $subscriber->location }}</td>
                <td>{{ $subscriber->episode }}</td>
                <td>{{ $subscriber->comment }}</td>
                <td>
                    <a href="{{ url('/edit/'.$subscriber->id) }}" class="btn btn-sm btn-warning">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
</div>
 
    




   