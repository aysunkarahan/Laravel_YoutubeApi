@extends('app')
@section('content')

          <div class="">
                @if(isset($data))
                    <div class=""><h1 class="">Youtube sitesine yüklenen videolar</h1></div>
                    @foreach($data as $data_list)
                    <div class="">                            
                      <div class="" style="background: url({{$data_list->snippet->thumbnails->high->url}}) no-repeat center center/100%;"></div>
                            <div class="">
                                <a href= "{{url('/video/')}}{{'/in/'}}{{$data_list->id->videoId}}"> 
				<h3 class="">
				<span>{{$data_list->snippet->title}}<br></span>
                                    </h3>
				 </a>
                                <h5>
                                    <span>Yuklenme tarihi : {{explode ("T",$data_list->snippet->publishedAt)[0]}}</span>
				 </h5>
                            </div>
                      </div>
                      <br>
                     @endforeach
                  @endif
	 </div>
             <div class="">
                @if(isset($prev))
                    <a class="" href="{{url("/video/youtube/".$prev)}}">EN YENİ VİDEOLAR</a>
                @endif
             </div>
             <div class="">
             <a class="" href="{{url("/video/youtube/".$next)}}">DAHA ESKİ VİDEOLAR</a>
            </div>
	    
@endsection
