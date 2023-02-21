@extends('layuot.hedder')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
@section('hadder')
@endsection

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">details</th>
            <th scope="col">image</th>

            <th scope="col">action</th>

        </tr>
    </thead>
    <tbody>

        @foreach ($offre as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->details }}</td>
                <td> <img src="storage/{{ $item->image }}" width="100" height="100"></td>


                <td>
                    <a href="" class="btn btn-success">update</a>
                    <input offer_id="{{ $item->id }}" type="button" class="delete btn-submit" value="Submit" />

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $(".delete").click(function() {
            console.log("name");
            var offer_id = $(this).attr('offer_id');
            console.log(offer_id);
            $.ajax({
                type: "POST",
             
                url: "{{ route('ajax.delete') }}",

                headers: {

                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {

                    'id': offer_id
                },
                success: function(data) {
                    console.log(data);
                }
            });
        })
    });
</script>

</body>

</html>
