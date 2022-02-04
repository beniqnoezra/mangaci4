<?php

namespace App\Models;

use CodeIgniter\Model;

class MangaModel extends Model
{
    protected $table = 'manga';
    protected $useTimestamps = true;
    protected $allowFields = ['title', 'slug', 'author', 'publisher', 'cover'];

    public function getManga($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
