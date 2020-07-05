@include('master')
   <div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 class="text-primary text-center">Insert new Item</h1>
            
                <h2 class="text-danger"><?php 
                
                    echo $show ?? '';
                
                ?></h2>
            
            <form action="{{route('add')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
            <span>Title</span>
            <input type="text" name="title" class="form-control" required>
            <span>Brief</span>
            <input type="text" name="brief" class="form-control" required>
            <span>Body</span>
            <textarea name="body" id="" cols="30" rows="8" class="form-control"required></textarea>
            <span>Section</span>
            <select name="section" id="" class="form-control" required>
                <option value="1">Section 1</option>
                <option value="2">Section 2</option>
            </select>
            <span>Select type(Video or Post)</span>
            <select class="type" name="type" id="" class="form-control" required>
                <option value="1">Image</option>
                <option value="0">Video</option>
            </select>
            <input type="text" id="video" name="video" class="form-control mt-1" placeholder="Enter your youtube video link" disabled required>
            <span>Image</span>
            <input type="file" name="media" class="form-control" required>
            <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
            </form>
        </div>
        <a href="{{route('manage')}}"> <button class="btn btn-info mt-2">Manage all Post</button></a>
        <div class="col-md-3">
        </div>
    </div>
   </div>
   @include('scripts')

   <script>
    $(document).ready(function() {
        
        $("select.type").change(function(){
        var selectedCountry = $(this).children("option:selected").val();
        if(selectedCountry==0){
        $('#video').removeAttr("disabled");
        $('input[type="file"]').attr("disabled","disabled");
        }
        else{
            $('#video').attr("disabled","disabled");
            $('input[type="file"]').removeAttr("disabled");
        }
        
});
    });
  </script>
    

</body>
</html>