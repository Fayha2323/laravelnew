<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\category;
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select * from categorys;
        $datas = Category::get();
        return view('category.index', compact('datas'));
        // bisa pake slash atau titik
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();

        // cara kedua dan ini sifatnya opsional bisa milih salah satu diantara cara yg diatas atas atau bawah
        // $category = category::create([
        //     'name' => $request ->name,
        //     'email' => $request ->email,
        //     'password' => $request ->password,
        //     ]);

        // atau bisa pakai cara yang lebih simpel lagi dan langsung memanggil semua
        // category::create($request->all());
        return redirect()->to('category')->with('message', 'Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $category = category::where('id',$id)->first();
        $edit = Category::find($id);
        return view('category.edit', compact('edit'));
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
        // if($request->post){
        //     $password = $request->password;
        // cara diatas adalah cara pertama

        $category = Category::find($id);
        Category::where('id', $id)->update([
            'name' => $request->category_name,
            // 'email' => $request->email,
            // 'password' => $request->password,
        ]);
        // $category = category::find($id);
        // $category->name = $request->name;
        // $category->email = $request->email;
        // $category->password = $request->password;
        // $category->save();
        return redirect()->to('category')->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->to('category')->with('message', 'data berhasil di hapus');
    }
}
