@include('master')
    <div class="container">
        <h1 class="text-primary text-center m-5">Manage all Image Post and Video Post</h1>
        <a href="{{route('insert')}}" style="float: right;"> <button class="btn btn-info mb-2">Insert new Post</button></a>
        <table class="table table-bordered">
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>
                    @php
                    if($post->type==1)
                    echo "Post";
                    else {
                        echo "Video";
                    }
                    @endphp
                </td>
                <td>@php
                    if($post->is_published==0)
                    echo "Unpublished";
                    else {
                        echo "Published";
                    }
                    @endphp
                    
                    
                </td>
                
                <td>
                    @if ($post->is_published==0)
                        <form action="{{route('publish',$post->id)}}" method="post">
                        {{csrf_field()}} 
                        <button class="btn btn-success">Publish</button>
                        </form>
                    @endif
                    @if ($post->is_published==1)
                        <form action="{{route('un_publish',$post->id)}}" method="post">
                        {{csrf_field()}} 
                        <button class="btn btn-danger">Unpublish</button>
                        </form>
                    @endif

                    
                </td>
            </tr>  
            @endforeach
            
        </table>
    </div>
    @include('scripts')
</body>
</html>