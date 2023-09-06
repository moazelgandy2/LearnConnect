<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideosController extends Controller
{
    public function index()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/149632/videos', [
            'headers' => [
                'AccessKey' => '1167f63b-4818-41bf-b4b2754edd56-01f7-4fe6',
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
        $url = 'https://video.bunnycdn.com/library/149632/videos/' . $id;

        $response = $client->request('DELETE', $url, [
            'headers' => [
                'AccessKey' => '1167f63b-4818-41bf-b4b2754edd56-01f7-4fe6',
                'accept' => 'application/json',
            ],
        ]);
        return redirect()->back();
    }
    public function uploadVideo()
    {
        require_once 'vendor/autoload.php';

        // Initialize the GuzzleHTTP client
        $client = new Client();

        // Replace 'libraryId' and 'videoId' with the actual library and video IDs
        $libraryId = '149632';
        $videoId = 'your-video-id';

        // Path to the video file you want to upload
        $videoFilePath = 'path/to/your/video.mp4';

        // Read the video file content
        $videoFileContent = file_get_contents($videoFilePath);

        // Send a PUT request with the video file content
        $response = $client->request('PUT', "https://video.bunnycdn.com/library/{$libraryId}/videos/{$videoId}", [
            'headers' => [
                'AccessKey' => '1167f63b-4818-41bf-b4b2754edd56-01f7-4fe6',
                'accept' => 'application/json',
            ],
            'body' => $videoFileContent, // Set the video file content as the request body
        ]);

        echo $response->getBody();
    }

    public function home()
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/149632/videos', [
            'headers' => [
                'AccessKey' => '1167f63b-4818-41bf-b4b2754edd56-01f7-4fe6',
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

        $response = $client->request('GET', 'https://video.bunnycdn.com/library/149632/videos', [
            'headers' => [
                'AccessKey' => '1167f63b-4818-41bf-b4b2754edd56-01f7-4fe6',
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
