<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AnimalRepos
{
    public static function getAllAnimals() {
        $sql = 'select a.* ';
        $sql .= 'from animals as a ';
        $sql .= 'order by a.name';

        return DB::select ($sql);
    }

    public static function getAllAnimalsWithCategories() {
        $sql = 'select a.*, c.name as categoriesName ';
        $sql .= 'from animals as a ';
        $sql .= 'join categories as c on a.categoriesId = c.id ';
        $sql .= 'order by a.name';

        return DB::select ($sql);

    }

    public static function getAnimalsById($id){
        $sql = 'select a.* ';
        $sql .= 'from animals as a ';
        $sql .= 'where a.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($animal){
        $sql = 'insert into animals ';
        $sql .= '(name, quantity, habitat, description, image, categoriesId ) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';

        $result =  DB::insert($sql,
            [$animal->name,
                $animal->quantity,
                $animal->habitat,
                $animal->description,
                $animal->image,
                $animal->categoriesId]);
        if($result){
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($animal){
        $sql = 'update animals ';
        $sql .= 'set name = ?, quantity = ?, habitat = ?, description = ?, image = ?, categoriesId = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql, [$animal->name, $animal->quantity, $animal->habitat, $animal->description, $animal->image, $animal->categoriesId, $animal->id]);

    }

    public static function delete($id){
        $sql = 'delete from animals ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}
