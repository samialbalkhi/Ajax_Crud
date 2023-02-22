
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body> 
  
  <h3>Update Your Offers</h3>
 
  <div class="container mt-3">
        

      <form action="" id="offer_id" method="POST" class="was-validated">
        @csrf
       
        <input type="hidden"  name="offer_id" value="{{$offer->id}}">
        <div class="mb-3 mt-3">
            <label for="file" class="form-label">upload image</label>
            <input type="file" class="form-control" name="image" value="{{$offer->image}}">
        </div>
        <div class="mb-3 mt-3">
          <label for="uname" class="form-label">Offer Name</label>
          <input type="text" class="form-control" name="name" value="{{$offer->name}}">

        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Offer Price</label>
          <input type="text" class="form-control" name="price" value="{{$offer->price}}">
          
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Offer Detils</label>
          <input type="text" class="form-control" name="details" value="{{$offer->details}}">
         
        
        </div>
        <div class="form-check mb-3">
          
          <button type="submit" id="update_offer" class="btn btn-primary">update offer</button>
        </div>
      </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script>
        $(document).on('click','#update_offer',function(e){
            e.preventDefault();
            var form = new FormData($('#offer_id')[0]);
            console.log(form);
        $.ajax({
            type: "post",
            processData: false,
            contentType: false,
            url: "{{route('updateoffer')}}",
            enctype: "multipart/form-data",

            headers: {
   
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        },
            data: form,
                
                success: function (data) {
                    
                        if(data.status == 'success'){
                            alert('Success');
                        }else{
                            alert('Error');
                        }
                }   
            });
        })
        </script>
</body>
</html>
