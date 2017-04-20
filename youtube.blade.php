@extends('app')
@section('content')
    
            <div class="">
                @if(isset($data))
                    <div class=""><h1 class="">Youtube sitesine yüklenen videolar</h1></div>
                    @foreach($data as $data_list)
                        <div class="">
                            
                            <div class="" style="background: url({{$lid->snippet->thumbnails->high->url}}) no-repeat center center/100%;">
                            </div>
                            <div class="">
                                <a href= "{{url('/video/')}}{{'/in/'}}{{$data_list->id->videoId}}"> <h3 class=""><span>
						            {{$data_list->snippet->title}}<br><span class="widow-killer"></span>
							</span>
                                    </h3></a>
                                <h5 class=class="element-masked-y">

                                    <span>Yuklenme tarihi : {{explode ("T",$data_list->snippet->publishedAt)[0]}}</span></h5>

                            </div>
                        </div>
                        <br>
                     @endforeach

            @endif

@endsection