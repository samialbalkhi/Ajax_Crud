<div class="container">
    <h3>Add Your Offers</h3>
    <div class="container mt-3">
    </div> 
  <form id="form" enctype="multipart/form-data" class="was-validated">
    @csrf
    
    <div class="mb-3 mt-3">
        <label for="file" class="form-label">upload image</label>
        <input type="file" class="form-control" id="image" name="image">
        
    <div class="mb-3 mt-3">
        <label for="uname" class="form-label">Offer Name</label>
        <input type="text" class="form-control" placeholder="Enter offer name" id="name" name="name" >
        
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Offer Price</label>
      <input type="text" class="form-control"  placeholder="Enter Offer Price" id="price" name="price">
      
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Offer Detils</label>
      <input type="text" class="form-control"  placeholder="Enter Offer Detils" name="details" >
    
    </div>
    <div class="form-check mb-3">
      
      <input id="submit" type="button" class="btn-submit" value="Submit" />
    </div>

</form> 
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
@yield('script')
@yield("body")