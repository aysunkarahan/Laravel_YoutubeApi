<?php


namespace App\Http\Controllers;


class videoController extends Controller {
	

	public function Liste($pageToken){
		$url = "https://www.googleapis.com/youtube/v3/search?pageToken=".$pageToken."&key=yourYoutubeApiKey
		&channelId=(You seek which channel)&part=snippet,id&order=date&maxResults=10";
		$data = array();
		$jurl = file_get_contents($yrl,0,null,null);
		$json_result = json_decode($y);
		$data= $json_result->items;
		$next = $json_result->nextPageToken;

		if(isset($json_result->prevPageToken))
		{
			$prev = $json_result->prevPageToken;
			return view('youtube',array('data'=>$data, 'next'=>$next, 'prev'=>$prev));
		}
		return view('youtube',array('data'=>$data, 'next'=>$next));
		
		}

	

}
