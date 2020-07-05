@include('master')

    <div class="container-details">
        <h1 class="text-info mt-3 mb-2">{{$p_details->title}}</h1>
        @if ($p_details->type==1)
            
            <img src="{{Storage::url($p_details->media)}}" alt="Picture">
        @endif
        @php
            $url=$p_details->video;
            $match="";
            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);       
               
        @endphp
        @if ($p_details->type==0)
        
        <iframe width="560" height="315" src="{{URL::to('https://www.youtube.com/embed/'.$match[1].'/')}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
        
        <p>{{$p_details->brief}}</p>
        <p>{{$p_details->body}}</p>
        <span>Share</span>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox"></div>
            
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f015dc5e2658a9b"></script>

    </div>
    @include('scripts')
</body>
</html>