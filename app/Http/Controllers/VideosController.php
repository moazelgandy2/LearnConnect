<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideosController extends Controller
{
    private $AccessKey = 'BUNNY_ACCESS_KEY';
    private $libraryId = 'VIDEO_LIBRARY_ID';


    public function index()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/'.$this->libraryId .'/videos', [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
        $videos = $responseData['items']; // Only the items array
        $videosCount = $responseData['totalItems']; // Total count of videos

        session(['videosCount' => $videosCount]);

        return view('student.videos', ['videos' => $videos, 'videosCount' => $videosCount]);
    }


    public function deleteVideo($id)
    {
        $client = new \GuzzleHttp\Client();
        $url = 'https://video.bunnycdn.com/library/'.$this->libraryId.'/videos/' . $id;

        $response = $client->request('DELETE', $url, [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);
        return redirect()->back();
    }


    public function uploadVideo()
    {
    }


    public function home()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/'.$this->libraryId.'/videos', [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);
        $responseData = json_decode($response->getBody(), true);
        $videos = $responseData['items']; // Only the items array
        return view('student.index', ['videos'=>$videos]);
    }


    public function admin()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/'.$this->libraryId.'/videos', [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
        $videos = $responseData['items']; // Only the items array
        $videosCount = $responseData['totalItems']; // Total count of videos

        session(['videosCount' => $videosCount]);

        return view('admin.adminVideos', ['videos' => $videos, 'videosCount' => $videosCount]);
    }
}
