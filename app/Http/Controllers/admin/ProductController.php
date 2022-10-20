<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _contruct()
    {
        $this->model = new Product();
    }
    public function index(Request $request)
    {
        // $name = $request->get('name');
        // $limit = Arr::get($name, 'limit', 10);
        // if ($name) {
        //     $produc = Product::where('name', 'like', '%' . $name . '%')->paginate($limit);
        // }
        // return response()->json($produc);
        $product = Product::paginate(2);
        return view('admin.product.List', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addProduct()
    {
        return view('admin.product.addProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products',
            'slug' => 'required|unique:products',
            'quantily' => 'required',
            'price' => 'required',
            'size' => 'required|starts_with:S,M,L,XL,XXL',
            'date' => 'required|date',
            'thumnail' => 'required|mimes:jpg,bmp,png|file',
            'saled' => 'required',
            'view' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'status' => 'required|in:0,1',


        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $input = $request->all();
        $input['slug'] = Str::kebab($input['slug']);
        if ($request->hasFile('thumnail')) {
            $path = 'uploads/images';
            $thumnail = $request->file('thumnail');
            $image = $thumnail->getClientOriginalName();
            $path_name = $request->file('thumnail')->move(public_path($path), $image);
            $input['thumnail'] = $image;
        }

        $product = Product::create($input);
        return view('admin.product.List', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $input = $request->all();
        $input = Product::find($id);
        $input->name = $request->name;

        $input->slug = $request->slug;
        $input->quantily = $request->quantily;
        $input->price = $request->price;
        $input->size = $request->size;
        $input->date = $request->date;
        $input->thumnail = $request->thumnail;
        $input->saled = $request->saled;
        $input->view = $request->view;
        $input->category_id = $request->category_id;
        $input->brand_id = $request->brand_id;
        $input->description = $request->description;
        $input->tags = $request->tags;
        $input->status = $request->status;
        $input->save();
        return response()->json(['status' => 'Đã cập nhật thành công']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json(['status' => 'Đã xóa thành công']);
    }
}
