<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideosController extends Controller
{
    private $AccessKey = '6fc90354-0f1a-4705-b02af2528c1f-0e4d-4484';
    private $libraryId = '166065';
    private $cdnUrl = 'vz-fb992d87-afc.b-cdn.net';


    public function index()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/' . $this->libraryId . '/videos', [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
        $videos = $responseData['items']; // Only the items array
        $videosCount = $responseData['totalItems']; // Total count of videos
        $cdnUrl = $this->cdnUrl;

        session(['videosCount' => $videosCount]);

        return view('student.videos', ['videos' => $videos, 'videosCount' => $videosCount, 'cdnUrl' => $cdnUrl]);
    }


    public function deleteVideo($id)
    {
        $client = new \GuzzleHttp\Client();
        $url = 'https://video.bunnycdn.com/library/' . $this->libraryId . '/videos/' . $id;

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

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/' . $this->libraryId . '/videos', [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);
        $responseData = json_decode($response->getBody(), true);
        $videos = $responseData['items']; // Only the items array
        return view('student.index', ['videos' => $videos]);
    }


    public function admin()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/' . $this->libraryId . '/videos', [
            'headers' => [
                'AccessKey' => $this->AccessKey,
                'accept' => 'application/json',
            ],
        ]);

        $responseData = json_decode($response->getBody(), true);
        $videos = $responseData['items']; // Only the items array
        $videosCount = $responseData['totalItems']; // Total count of videos
        $cdnUrl = $this->cdnUrl;
        session(['videosCount' => $videosCount]);

        return view('admin.adminVideos', ['videos' => $videos, 'videosCount' => $videosCount, 'cdnUrl' => $cdnUrl]);
    }
}
