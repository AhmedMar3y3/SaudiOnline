<?php
namespace Modules\Articles\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    public function upload(Request $request)
    {
        $urls = [];
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $path = $file->store('images', 'public');
                $fullUrl = url('storage/' . $path); 
                $urls[] = $fullUrl;
            }
        }
        return response()->json($urls);
    }
}

