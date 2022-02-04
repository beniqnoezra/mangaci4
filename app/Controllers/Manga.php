<?php

namespace App\Controllers;

use App\Models\MangaModel;

class Manga extends BaseController
{
    protected $mangaModel;

    public function __constuct()
    {
        $this->mangaModel = new MangaModel();
    }

    public function index()
    {
        $mangaModel = new MangaModel();
        $manga = $mangaModel->findAll();

        $data = [
            'title' => 'List of Manga',
            'manga' => $manga
        ];

        // $mangaModel = new \App\Models\MangaModel();
        // $mangaModel = new MangaModel();

        return view('manga/index', $data);
    }

    public function detail($slug)
    {
        $mangaModel = new MangaModel();
        $manga = $mangaModel->findAll();

        $data = [
            'title' => 'Detail Manga',
            'manga' => $manga
        ];
        return view('manga/detail', $data);
    }
}
