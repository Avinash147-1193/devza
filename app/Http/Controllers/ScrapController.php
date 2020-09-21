<?php

namespace App\Http\Controllers;

use App\Models\Scrap;
use Goutte\Client;
use Illuminate\Http\Request;

class ScrapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://devza.com/cftest.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "authority: devza.com",
            "cache-control: max-age=0",
            "upgrade-insecure-requests: 1",
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36",
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
            "sec-fetch-site: none",
            "sec-fetch-mode: navigate",
            "sec-fetch-user: ?1",
            "sec-fetch-dest: document",
            "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7",
            "cookie: __cfduid=d594f41003b737731148f05700e7c05491600622677; cf_chl_rc_i=1; cf_chl_prog=a23; cf_clearance=9c28afb320327479033f547edb2faabe193fc52f-1600698174-0-1zfbf03a0fz22f66879z42fc9f5b-250; __cfduid=d22c8e0b6aac3ba2d95ac4da06b75fd271600624880; cf_clearance=df01076ebde0ed6663b7232894bff0e95ffcd92f-1600698314-0-1zfbf03a0fz22f66879z42fc9f5b-250"
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function k2s(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.k2s.cc/v1/users/me",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "authority: api.k2s.cc",
            "accept: application/json, text/plain, */*",
            "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36",
            "origin: https://k2s.cc",
            "sec-fetch-site: same-site",
            "sec-fetch-mode: cors",
            "sec-fetch-dest: empty",
            "referer: https://k2s.cc/profile",
            "accept-language: en-IN,en-GB;q=0.9,en-US;q=0.8,en;q=0.7",
            "cookie: __cfduid=d650f9199a25694265db1c58641899c4d1600622612; pcId=s%3A2c7e79d852013.TLFhoP8BrCfXdp%2BRRRdn2z83DBlHiL4TGcOzNMoznL4; G_ENABLED_IDPS=google; accessToken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjM4NzUxNDc3LCJhdWQiOiJ1c2VyIiwidHlwZSI6ImFjY2Vzc1Rva2VuIiwiaXNzIjoiazJzIiwiY0lkIjoiNWFjZDlmYTBmYzRlMDcxYzcxNTcxYTQwIiwianRpIjoiYWYzNWY1ZGYyYjAyMSIsInNnbiI6IjI0M2U1YThjYjciLCJpYXQiOjE2MDA2NzA4MDAsImV4cCI6MTYwMTI3NTYwMH0.c-kSnTaEcbR0oJOkKnaFZGl8T5G08BsSVKjmuLsNu6o; refreshToken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjM4NzUxNDc3LCJhdWQiOiJ1c2VyIiwidHlwZSI6InJlZnJlc2hUb2tlbiIsImlzcyI6ImsycyIsImNJZCI6IjVhY2Q5ZmEwZmM0ZTA3MWM3MTU3MWE0MCIsImp0aSI6IjBkYTZkNzE3MzU5OWEiLCJzZ24iOiIyNDNlNWE4Y2I3IiwiaWF0IjoxNjAwNjcwODAwLCJleHAiOjE2MDMyNjI4MDB9.sJueklIkyc1pDoUzCkty1NZ2HroK2Eic8Cwxb9mVOQw; pcId=s%3A2c7e79d852013.TLFhoP8BrCfXdp%2BRRRdn2z83DBlHiL4TGcOzNMoznL4; accessToken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjM4NzUxNDc3LCJhdWQiOiJ1c2VyIiwidHlwZSI6ImFjY2Vzc1Rva2VuIiwiaXNzIjoiazJzIiwiY0lkIjoiNWFjZDlmYTBmYzRlMDcxYzcxNTcxYTQwIiwianRpIjoiNTQ2MTMzNDdiZmVlMyIsInNnbiI6IjI0M2U1YThjYjciLCJpYXQiOjE2MDA2MzIyNjQsImV4cCI6MTYwMTIzNzA2NH0.fL814WO7aREN_AG9dHjujNg7SNUKjcayU8l2-QX5JwE; refreshToken=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOjM4NzUxNDc3LCJhdWQiOiJ1c2VyIiwidHlwZSI6InJlZnJlc2hUb2tlbiIsImlzcyI6ImsycyIsImNJZCI6IjVhY2Q5ZmEwZmM0ZTA3MWM3MTU3MWE0MCIsImp0aSI6IjgxNDYyMWYwYzcwY2IiLCJzZ24iOiIyNDNlNWE4Y2I3IiwiaWF0IjoxNjAwNjMyMjY0LCJleHAiOjE2MDMyMjQyNjR9.nWRDYg--1OPHFSf5E87naffNxiNp_1nE0bUd18XDhtE",
            "if-none-match: W/\"122-KGIULiiZaxM9ZevZ1UC0SleGLd8\""
          ),
        ));

        $response = curl_exec($curl);
        $response = json_decode($response);
        curl_close($curl);
        echo 'email: '.$response->email.'<br>';
        echo 'created at: '.$response->createdAt.'<br>';
        echo 'updated at: '.$response->updatedAt.'<br>';
        echo 'is verified: '.$response->isVerifiedEmail.'<br>';
        echo 'Account type: '.$response->accountType.'<br>';
        echo 'Traffic left today for viewing/downloading: '.'10 GB'.'<br>';
        echo 'Used Traffic : '.'0 GB'.'<br>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scrap  $scrap
     * @return \Illuminate\Http\Response
     */
    public function show(Scrap $scrap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scrap  $scrap
     * @return \Illuminate\Http\Response
     */
    public function edit(Scrap $scrap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scrap  $scrap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scrap $scrap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scrap  $scrap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scrap $scrap)
    {
        //
    }
}
