<div class="container">
    <h3>Add Your Offers</h3>
    <div class="container mt-3">
    </div> 
  <form action="" enctype="multipart/form-data"  method="get"  class="was-validated">
    @csrf
    
    <div class="mb-3 mt-3">
        <label for="file" class="form-label">upload image</label>
        <input type="file" class="form-control" name="image">
        
    <div class="mb-3 mt-3">
        <label for="uname" class="form-label">Offer Name</label>
        <input type="text" class="form-control" placeholder="Enter offer name" name="name" >
        
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Offer Price</label>
      <input type="text" class="form-control"  placeholder="Enter Offer Price" name="price">
      
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Offer Detils</label>
      <input type="text" class="form-control"  placeholder="Enter Offer Detils" name="details" >
    
    </div>
    <div class="form-check mb-3">
      
      <button type="submit" class="btn btn-primary">seve offer</button>
    </div>

</form> 
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@yield('script')
@yield("body")