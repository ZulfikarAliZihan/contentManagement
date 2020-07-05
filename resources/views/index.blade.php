@include('master')

<div class="row" id="res-test">
    <div class="col-md-8">
        <h3 class="text-info">Section 1</h3>
        <div class="flex-own">
              
            @include('content', ['p_data' => $sec1])
        </div>
    </div>
    <hr>
    <div class="col-md-4">
        <h3 class="text-info">Section 2</h3>
        @include('content', ['p_data' => $sec2])  
        
        
    </div>
    
</div>
@include('scripts')
</body>
</html>