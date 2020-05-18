<?php

namespace App\Http\Controllers;

use DB;
use App\Blog;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
	
		public function migrate()
			{
				
		$start = time();
		$end =  (time() + 15);
		do {	
				$client = new Client();
				$response = $client->request('GET', 'https://sq1-api-test.herokuapp.com/posts');
				$statusCode = $response->getStatusCode();
				//$body = $response->getBody()->getContents();
				//$posts = json_decode($body);
				
				$posts = json_decode( $response->getBody()->getContents());	
				
				foreach($posts->data as $record)
				{
					$author = 1;
					$title = $record->title ;
					$body = $record->description ;
					$created_at = $record->publication_date;
					$data=array('author'=>$author,"title"=>$title,"body"=>$body,"created_at"=>$created_at);
					DB::table('blogs')->insert($data);
				}   

		
		
		} while ($end > time());
				
				return view('migrate');

			}
				
}
