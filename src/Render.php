<?php

namespace Mahlenko\EditorJS;

use Illuminate\Support\Facades\View;

class Render {
    static public function make($json, string $prefix = 'editor__') {
        if (is_string($json)) {
            $json = json_decode($json);
        } else {
            $json = json_decode(json_encode($json));
        }

        if (!isset($json->blocks)) {
            return '<p style="font-size: 0.86rem; font-weight: bold; margin: .5rem 0;">⚠️ The content does not match Editor.JS</p>';
        }

        return View::make('editor.js::content', (array) $json)
            ->with('prefix', $prefix);
    }
}
