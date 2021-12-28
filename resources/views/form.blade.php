

   @foreach ($errors->all() as $error)
   <li>{{ $error }}</li>
@endforeach

<form action="<?php echo url('/storeData')?> " method="get">
    <input type="hidden" name="_token">
  <div class="form-group">
    <label for="exampleInputEmail1"> title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">content</label>
    <input type="text"  name="content" class="form-control">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>