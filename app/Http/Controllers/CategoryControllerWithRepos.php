<?php

namespace App\Http\Controllers;

use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryControllerWithRepos extends Controller
{
    public function index()
    {
        $categories = CategoryRepos::getAllCategories();
        return view('Zoo.CategoryWithRepos.index',
            [
                'categories' => $categories,
            ]);
    }

    public function show($id)
    {

        $categories = CategoryRepos::getCategoriesById($id); //this is always an array of objects
        return view('Zoo.CategoryWithRepos.show',
            [
                'categories' => $categories[0] //get the first element
            ]
        );
    }

    public function create()
    {
        return view(
            'Zoo.CategoryWithRepos.new',
            ["categories" => (object)[
                'id' => '',
                'name' => '',
                'description' => '',
                'image' => ''
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $categories = (object)[
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ];

        $newId = CategoryRepos::insert($categories);

        return redirect()
            ->action('CategoryControllerWithRepos@index')
            ->with('msg', 'New Category with id: ' . $newId . ' has been inserted');
    }

    public function edit($id)
    {
        $categories = CategoryRepos::getCategoriesById($id); //this is always an array


        return view(
            'Zoo.CategoryWithRepos.update',
            ["categories" => $categories[0]]);
    }

    public function update(Request $request, $id)
    {
        if ($id != $request->input('id')) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $categories = (object)[
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ];
        CategoryRepos::update($categories);

        return redirect()->action('CategoryControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($id)
    {
        $categories = CategoryRepos::getCategoriesById($id); //this is always an array

        return view('Zoo.CategoryWithRepos.confirm',
            [
                'categories' => $categories[0]
            ]
        );
    }

    public function destroy(Request $request, $id)
    {
        if ($request->input('id') != $id) {
            //id in query string must match id in hidden input
            return redirect()->action('CategoryControllerWithRepos@index');
        }

        CategoryRepos::delete($id);


        return redirect()->action('CategoryControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'name' => ['required'],
                'description' => ['required'],
//                'image' => ['required'],
            ],
            [
                //change validation message
                'title.starts_with' => 'Title must start with letter a',
                'name.required' => 'Please input name of Category :D',
                'description.required' => 'Please input description of Category :D',
                'image.required' => 'Please input image of Category :hehe',
            ]
        );
    }
}
