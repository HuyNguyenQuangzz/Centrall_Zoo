<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class FoodRepos
{
    //Many relationship with other table
    public static function getAllFoods()
    {
        $sql = 'select f.* ';
        $sql .= 'from foods as f ';
        $sql .= 'order by f.f_name ';

        return DB::select($sql);
    }

    public static function getFoodsByAnimalId($animalId)
    {
        $sql = 'select af.animalId, f.f_id, f.f_name, f.f_image ';
        $sql .= 'from foods as f ';
        $sql .= 'join animals_foods as af on f.f_id = af.foodId ';
        $sql .= 'where af.animalId = ? ';

        return DB::select($sql, [$animalId]);
    }

    public static function insertAnimalFoodRelationship($animalId, $selectedF)
    {
        foreach ($selectedF as $fId) {
            $sql = 'insert into animals_foods ';
            $sql .= '(animalId, foodId) ';
            $sql .= 'values (?, ?) ';

            DB::insert($sql, [$animalId, $fId]);
        }
    }

    public static function deleteAnimalFoodRelationship($animalId)
    {

        $sql = 'delete from animals_foods ';
        $sql .= 'where animalId = ? ';

        DB::delete($sql, [$animalId]);

    }

    // C R U D Food
    public static function getFoodById($id)
    {
        $sql = 'select f.* ';
        $sql .= 'from foods as f ';
        $sql .= 'where f.f_id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($foods)
    {
        $sql = 'insert into foods ';
        $sql .= '(f_name, f_image) ';
        $sql .= 'values (?, ?) ';

        $result = DB::insert($sql,
            [$foods->f_name,
                $foods->f_image]);
        if ($result) {
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($foods)
    {
        $sql = 'update foods ';
        $sql .= 'set f_name = ?, f_image = ? ';
        $sql .= 'where f_id = ? ';

        DB::update($sql, [$foods->f_name,  $foods->f_image, $foods->f_id]);

    }

    public static function delete($id)
    {
        $sql = 'delete from foods ';
        $sql .= 'where f_id = ? ';

        DB::delete($sql, [$id]);
    }
}

