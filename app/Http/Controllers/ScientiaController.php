<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScientiaController extends Controller
{
    public function searchText(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:10|max:300',
            'abstract' => 'required|string|min:10|max:6000',
            'top_n' => 'required|integer|min:1|max:4712',
        ]);

        return view(
            'scientia.search',
            [
                'result' => Http::get(env("SCIENTIA_API_URL") . '/find_similar?' . http_build_query($request->only('title', 'abstract', 'top_n')))->json(),
                'activeTab' => 1,
            ],
        );
    }

    public function searchPdf(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'top_n_pdf' => 'required|integer'
        ]);

        $fileContent = file_get_contents($request->file('file')->getRealPath());

        return view(
            'scientia.search',
            [
                'result' => Http::attach(
                    'file',
                    $fileContent,
                    'file'
                )->post(env("SCIENTIA_API_URL") . '/find_similar_pdf', [
                    'top_n' => $request->input('top_n_pdf')
                ])->json(),
                'activeTab' => 2,
                'base64File' => base64_encode($fileContent),
            ],
        );
    }
}
