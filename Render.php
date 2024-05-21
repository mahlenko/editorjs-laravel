<?php

namespace Mahlenko\EditorJS;

use Illuminate\Support\Facades\View;

class Render {
    static public function make(string $json, string $prefix = 'editor__') {
        return View::make('editor.js::content', (array) json_decode($json))
            ->with('prefix', $prefix);
    }
}
