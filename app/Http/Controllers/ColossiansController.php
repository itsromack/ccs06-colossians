<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColossiansController extends Controller
{
    const BOOK_NAME = 'Colossians';
    const BIBLE_VERSION = 'King James Version';

    public function readAll()
    {
        return view('colossians.all', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION
        ]);
    }

    public function readByChapter($chapter_number)
    {
        return view('colossians.chapter', [
            'book_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERSION,
            'chapter_number' => $chapter_number
        ]);
    }
}
