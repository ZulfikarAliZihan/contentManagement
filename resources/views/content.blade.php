<div class="item" id="big">
   <div class="big-cont">
    <?php 
            $count=0;
        ?>
        @foreach ($p_data as $post)
            @if ($count<1)
            @php
                if($post->type==0){
                        $url=$post->video;
                        $match="";
                            preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);       
                    }    
            @endphp

                <div class="big-image">
                    <a href="{{ URL::to('details/'.$post->id) }}">
                        @if ($post->type==1)
                        <img src="{{Storage::url($post->media)}}" alt="small Picture">
                        @endif
                        @if ($post->type==0)
                        <img src="{{URL::to('https://img.youtube.com/vi/'.$match[1].'/hqdefault.jpg')}}" alt="small Picture">
                        <i class="fa fa-2x fa-play"></i>
                    @endif
                    </a>
                </div>
                {{$post->title}} <br> 
                {{$post->brief}}
            @endif
            
            <?php 
            $count++;
            ?>
        @endforeach
    </div>
</div>


<?php 
$count=0;
?>
<div class="item">
    <div class="row">
        @foreach ($p_data as $post)
            @if ($count>0) 
            @php
            if($post->type==0){
                    $url=$post->video;
                    $match="";
                        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $match);       
                }    
            @endphp   
                <div class="col-md-6">
                    <div class="small-cont">
                        <div class="small">
                            <a href="{{ URL::to('details/'.$post->id) }}"> 
                                @if ($post->type==1)
                                    <img src="{{Storage::url($post->media)}}" alt="small Picture">
                                    
                                @endif
                                @if ($post->type==0)
                                    <img src="{{URL::to('https://img.youtube.com/vi/'.$match[1].'/hqdefault.jpg')}}" alt="small Picture">
                                    <i class="fa fa-2x fa-play"></i>
                                @endif

                                
                                
                            </a>
                        </div>
                        <p class="small-text">{{$post->title}}</p>
                    </div>
                </div>
            @endif
            <?php 
            $count++;
            ?>
        @endforeach
        
        
    </div>
    

</div>