@extends('layuot.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
@section('hadder')
@endsection


@section("body")
@endsection
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@section('script')
<script>

    $(document).ready(function(){

      
    
// variable_name.append(key_2, value_2);
        $("#submit").click(function() {
        console.log("button");

          
        var image=$( '#image' )[0].files[0]
        var fname=$("#name").val();
        var price=$("#price").val();
        var details=$("#details").val();
      
        var form = new FormData();

        form.append('name', fname);
        form.append('price', price);
        form.append('details', details);
        form.append('image', image);
    
        $.ajax({
            type: "post",
            processData: false,
            contentType: false,
            url: "{{route('ajax.insert')}}",
            headers: {
                
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        },
        // processData: false,
            data: form,
            success: function (data) {
            }  
            
        });
        
               
            });
        })
    </script>
@endsection
</body>
</html>
