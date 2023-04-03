<?php

namespace App\Http\Controllers;

use App\Repository\FoodRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodControllerWithRepos extends Controller
{

    public function index()
    {
        $foods = FoodRepos::getAllFoods();
        return view('Zoo.FoodForAnimal.index',
            [
                'foods' => $foods,
            ]);
    }

    public function show($f_id)
    {

        $foods = FoodRepos::getFoodById($f_id); //this is always an array of objects
        return view('Zoo.FoodForAnimal.show',
            [
                'foods' => $foods[0] //get the first element
            ]
        );
    }

    public function create()
    {

        return view(
            'Zoo.FoodForAnimal.new',
            ["foods" => (object)[
                'f_id' => '',
                'f_name' => '',
                'f_image' => ''
            ]]);

    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate(); //shortcut

        $foods = (object)[
            'f_name' => $request->input('f_name'),
            'f_image' => $request->input('f_image')
        ];

        $newId = FoodRepos::insert($foods);

        return redirect()
            ->action('FoodControllerWithRepos@index')
            ->with('msg', 'New Food for Animal with id: '.$newId.' has been inserted');
    }

    public function edit($f_id)
    {
        $foods = FoodRepos::getFoodById($f_id); //this is always an array


        return view(
            'Zoo.FoodForAnimal.update',
            ["foods" => $foods[0]]);
    }

    public function update(Request $request, $f_id)
    {
        if ($f_id != $request->input('f_id')) {
            //id in query string must match id in hidden input
            return redirect()->action('FoodControllerWithRepos@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $foods = (object)[
            'f_id' => $request->input('f_id'),
            'f_name' => $request->input('f_name'),
            'f_image' => $request->input('f_image')
        ];
        FoodRepos::update($foods);

        return redirect()->action('FoodControllerWithRepos@index')
            ->with('msg', 'Update Successfully');;
    }

    public function confirm($f_id){
        $foods = FoodRepos::getFoodById($f_id); //this is always an array

        return view('Zoo.FoodForAnimal.confirm',
            [
                'foods' => $foods[0]
            ]
        );
    }

    public function destroy(Request $request, $f_id)
    {
        if ($request->input('id') != $f_id) {
            //id in query string must match id in hidden input
            return redirect()->action('FoodControllerWithRepos@index');
        }

        FoodRepos::delete($f_id);


        return redirect()->action('FoodControllerWithRepos@index')
            ->with('msg', 'Delete Successfully');
    }

    private function formValidate($request)
    {
        return Validator::make(
            $request->all(),
            [
                'f_name' => ['required', 'min:2'],
                'f_image' => ['required', 'min:2']

            ],
            [
                //change validation message
                'f_name.required' => 'Please input name of Food',
                'f_image.required' => 'Please input image of Food',
            ]
        );
    }




}
