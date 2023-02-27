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

        $("#submit").click(function() {
            $('#image_erorr').text('');
            $('#name_erorr').text('');
            $('#price_erorr').text('');
            $('#details_erorr').text('');

            
        var form = new FormData($('#form')[0]);
        $.ajax({
            type: "post",
            enctype: "multipart/form-data",
            processData: false,
            contentType: false,
            url: "{{route('ajax.insert')}}",

            headers: {
   
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        },
            data: form,
            success: function (data) {
            
                if(data.status == true){

                    alert(data.messege);
        }
    },
    error:function (reject) {
        var respones = $.parseJSON(reject.responseText);
    
        $.each(respones.errors, function (key,val){
            console.log(val[0]);
            $("#"+key+"_erorr").text(val);
        
        });
    }
        
        })     
            });
        })
    </script>
@endsection
</body>
</html>
