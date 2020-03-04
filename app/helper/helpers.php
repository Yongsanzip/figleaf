<?php


/********************************************
 * @param $email
 * @param int $size
 * @return string
 ********************************************/

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

if (! function_exists('summernote_save_image')) {

    function summernote_save_image($content,$path) {

        $dom = new \DOMDocument();
        $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');
        foreach($images as $k => $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $filename = uniqid();
                $filepath = "$path$filename.$mimetype";
                $image = Image::make($src)->encode($mimetype, 100);                                              // encode file to the specified mimetype
                Storage::disk('public')->put($filepath,$image->encode());
                $new_src = asset('storage/'.$filepath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
            }
        }
        return $dom->saveHTML();
    }
}
