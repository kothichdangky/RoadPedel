<?php

namespace App\Http\Controllers\Bicycle;
// muốn bỏ vào folder khác thì phải thêm cái này
use App\Http\Controllers\Controller;
//
use Illuminate\Support\Facades\Storage;
use App\Models\product;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    protected $Users;

    public function __construct(User $Users)
    {
        $this->Users = $Users;
    }


    public function admin()
    {
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }
        $products = product::all();

        return view('admin.admin', compact('products'));
    }

    public function User()
    {
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }
      $Users = User::all();
      return view('admin.user', compact('Users'));
    }

    public function create()
    {
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }

        $products = product::all();
        return view('admin.add',compact('products'));
    }

    public function store(Request $request){
        if (!$this->userCan('crud-customer')) {
            abort(403);
        }
        $request->validate([
            'image' => 'required|image',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);
        $products = new product();
        $products->name = $request->get('name');
        $products->intro = $request->get('intro');
        $products->price = $request->get('price');
        $products->price_sale = $request->get('price_sale');
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Kiểm tra định dạng tệp
            if (in_array($file->getClientOriginalExtension(), ['jpg', 'jpeg', 'png', 'gif'])) {
                $path = $file->store('uploads', 'public');
                $products->image = $path;
            } else {
                return back()->withErrors(['image' => 'File không hợp lệ.']);
            }
        }
        $products->save();
        return redirect()->route('road.admin');
    }

    public function destroy($id)
    {
        $products = product::findOrFail($id);

        $image = $products->image;
        if ($image) {
            Storage::delete('/public/' . $image);
        }

         $products->delete();

         $source = request()->input('source', 'index');

         return redirect()->route('road.admin');
    }

    function edit(Request $request,$id)
    {

        $products = product::findOrFail($id);
        return view('admin.edit', compact('products'));
    }

    public function update(Request $request, $id)
    {

        $products = product::findOrFail($id);

        $products->name = $request->get('name');
        $products->intro = $request->get('intro');
        $products->price = $request->get('price');
        $products->price_sale = $request->get('price_sale');

        //cap nhat anh
        if ($request->hasFile('image')) {
            //xoa anh cu neu co
            $currentImg = $products->image;
            if ($currentImg) {
                Storage::delete('/public/' . $currentImg);
            }
            // cap nhat anh moi
            $image = $request->file('image');
            $path = $image->store('uploads', 'public');
            $products->image = $path;
        }

        $products->save();
        return redirect()->route('road.admin');
    }

    public function productSections()
    {
        // Lấy danh sách tất cả sản phẩm
        $products = Product::all();

        // Lấy danh sách sản phẩm theo section
        $sections = ['featured', 'bike']; // Các section cố định
        $sectionProducts = [];

        foreach ($sections as $section) {
            $sectionProducts[$section] = Product::where('display_section', 'like', "%$section%")
                ->pluck('id')
                ->implode(',');
        }

        return view('admin.product_section', compact('products', 'sectionProducts'));
    }


    public function updateProductSections(Request $request)
{
    $sections = $request->input('sections', []); // Lấy dữ liệu từ form

    // Xóa các sản phẩm khỏi các section không được chọn
    $allProducts = Product::all();
    foreach ($allProducts as $product) {
        $currentSections = explode(',', $product->display_section ?? '');

        foreach ($currentSections as $key => $currentSection) {
            if (!isset($sections[$currentSection]) || !in_array($product->id, $sections[$currentSection])) {
                unset($currentSections[$key]);
            }
        }

        $product->display_section = implode(',', $currentSections);
        $product->save();
    }

    // Thêm các sản phẩm vào section đã được chọn
    foreach ($sections as $section => $productIds) {
        foreach ($productIds as $productId) {
            $product = Product::find($productId);
            if ($product) {
                $currentSections = explode(',', $product->display_section ?? '');

                if (!in_array($section, $currentSections)) {
                    $currentSections[] = $section;
                }

                $product->display_section = implode(',', $currentSections);
                $product->save();
            }
        }
    }

    // Lấy lại dữ liệu sau khi cập nhật
    $products = Product::all();
    $sectionProducts = [];
    foreach ($sections as $section => $productIds) {
        $sectionProducts[$section] = implode(',', $productIds);
    }

    return view('admin.product_section', compact('products', 'sectionProducts'))->with('success', 'Cập nhật thành công!');
}


    public function search(Request $request)
    {
    $keyword = $request->keyword;
    if (!$keyword) {
        return redirect()->route('road.admin');
    }
    $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->get();;
        return view('admin.admin', compact('products'));

    }

    public function test()
    {
      $Users = User::all();
      return view('admin.test', compact('Users'));
    }

    public function testadd(Request $request)
    {
        // Sửa phần khai báo model ở đây
        $Users = User::create($request->all());

        $status = 201;

        if (!$Users) {
            $status = 500;
        }

        return response() ->json([
            'User_id' => $Users['id'],
            'status' => $status,
        ]);
    }

    public function testupdate(Request $request)
    {
        $id = $request->id;
       $this->Users->where('id',$id)->update(
        [
            'name' => $request->name,
            'role' => $request->role,
        ]
        );
        $Users = $this->Users->find($id);

        $status = 201;

        if (!$Users) {
            $status = 500;
        }
        return response()->json($status);
    }

    public function destroyUser($id)
    {
        $Users = User::findOrFail($id);

         $Users->delete();

         $source = request()->input('source', 'index');


         return redirect()->route('road.users');
    }

    public function searchUser(Request $request)
    {
    $keyword = $request->keyword;
    if (!$keyword) {
        return redirect()->route('road.users');
    }
    $Users = User::where('name', 'LIKE', '%' . $keyword . '%')->get();;
        return view('admin.user', compact('Users'));

    }

    public function adminOrders() {
        $orders = Payment::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.order', compact('orders'));
    }


}


