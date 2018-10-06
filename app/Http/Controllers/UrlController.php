<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShortUrl;
use App\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    /**
     * Redirect to the specified resource.
     *
     * @param  mixed $short_url
     * @return \Illuminate\Http\Redirect
     */
    public function redirect($short_url)
    {
        $url = Url::findShort($short_url);

        return redirect($url->long_url);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreShortUrl $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShortUrl $request)
    {
        $url = Url::create([
            'long_url' => $request->input('url'),
            'short_url' => str_random(6),
        ]);

        return $url;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
