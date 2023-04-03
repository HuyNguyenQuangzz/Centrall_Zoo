<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CategoryRepos
{
    public static function getAllCategories(){
        $sql = 'select c.* ';
        $sql .= 'from categories as c ';
        $sql .= 'order by c.name ';

        return DB::select($sql);
    }

    public static function getCategoriesByAnimalId($animalId){
        $sql = 'select c.* ';
        $sql .= 'from categories as c ';
        $sql .= 'join animals as a on c.id = a.categoriesId ';
        $sql .= 'where a.id = ?';

        return DB::select($sql, [$animalId]);
    }

//    public static function getAllCategories() {
//        $sql = 'select c.* ';
//        $sql .= 'from categories as c ';
//        $sql .= 'order by c.name';
//
//        return DB::select ($sql);
//    }
//
    public static function getCategoriesById($id){
        $sql = 'select c.* ';
        $sql .= 'from categories as c ';
        $sql .= 'where c.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($categories){
        $sql = 'insert into categories ';
        $sql .= '(name, description, image) ';
        $sql .= 'values (?, ?, ?) ';

        $result =  DB::insert($sql, [$categories->name, $categories->description, $categories->image]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($categories){
        $sql = 'update categories ';
        $sql .= 'set name = ?, description = ?, image = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$categories->name, $categories->description, $categories->image, $categories->id]);

    }

    public static function delete($id){
        $sql = 'delete from categories ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }

}
