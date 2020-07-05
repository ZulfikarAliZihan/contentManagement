@include('master')
   <div class="container">
    <h1 class="text-info text-center">Welcome To Admin Panel</h1>
        <div class="btn-container">
            <a href="{{route('insert')}}" target="_blank"> <button class="btn btn-info">Add new Post</button></a>
            <a href="{{route('manage')}}" target="_blank"> <button class="btn btn-info">Manage all Post</button></a> <br>
            <a href="{{route('index')}}" target="_blank"> <button class="btn btn-primary mt-2 form-control">View Site</button></a>
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