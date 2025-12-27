<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\NewsPost;
use Illuminate\Http\Request;

class NewController extends Controller
{


    public function new()
    {
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }
        $NewsPosts = NewsPost::all();

        return view('admin.new', compact('NewsPosts'));
    }

    public function newcreate()
    {
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }
        $NewsPosts = NewsPost::all();
        return view('admin.newadd',compact('NewsPosts'));
    }

    public function newstore(Request $request){
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }
        $NewsPosts = new NewsPost();
        $NewsPosts->heading = $request->get('heading');
        $NewsPosts->text = $request->get('text');
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Kiểm tra định dạng tệp
            if (in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                $path = $file->store('uploads', 'public');
                $NewsPosts->image = $path;
            } else {
                return back()->withErrors(['image' => 'File không hợp lệ.']);
            }
        }
        $NewsPosts->save();
        return redirect()->route('road.new');
    }

    public function newdestroy($id)
    {
        $NewsPosts = NewsPost::findOrFail($id);

        $image = $NewsPosts->image;
        if ($image) {
            Storage::delete('/public/' . $image);
        }


         $NewsPosts->delete();

         $source = request()->input('source', 'index');


         return redirect()->route('road.new');
    }

    function newedit(Request $request,$id)
    {
        $NewsPosts = NewsPost::findOrFail($id);
        return view('admin.newedit', compact('NewsPosts'));
    }

    public function newupdate(Request $request, $id)
    {
        $NewsPosts = NewsPost::findOrFail($id);
        $NewsPosts->heading = $request->get('heading');
        $NewsPosts->text = $request->get('text');

        //cap nhat anh
        if ($request->hasFile('image')) {
            //xoa anh cu neu co
            $currentImg = $NewsPosts->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            // cap nhat anh moi
            $image = $request->file('image');
            $path = $image->store('uploads', 'public');
            $NewsPosts->image = $path;
        }

        $NewsPosts->save();
        //tao moi xong quay ve trang danh sach blog
        return redirect()->route('road.new');
    }
}
