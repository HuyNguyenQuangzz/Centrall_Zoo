<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class AdminRepos
{
    public static function getAllAdmins()
    {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'order by a.a_username';

        return DB::select($sql);
    }

    public static function getAdminById($id)
    {
        $sql = 'select a.* ';
        $sql .= 'from admin as a ';
        $sql .= 'where a.id = ? ';

        return DB::select($sql, [$id]);
    }

    public static function insert($admin)
    {
        $sql = 'insert into admin ';
        $sql .= '(a_username, a_password_hash, a_fullname, a_phone, a_email) ';
        $sql .= 'values (?, ?, ?, ?, ?) ';

        $result = DB::insert($sql,
            [$admin->a_username,
                $admin->a_password_hash,
                $admin->a_fullname,
                $admin->a_phone,
                $admin->a_email]);
        if ($result) {
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($admin)
    {
        $sql = 'update admin ';
        $sql .= 'set a_username = ?, a_password_hash = ?, a_fullname = ?, a_phone = ?, a_email = ? ';
        $sql .= 'where id = ? ';

        DB::update($sql,
            [$admin->a_username,
                $admin->a_password_hash,
                $admin->a_fullname,
                $admin->a_phone,
                $admin->a_email,
                $admin->id]);

    }

    public static function delete($id)
    {
        $sql = 'delete from admin ';
        $sql .= 'where id = ? ';

        DB::delete($sql, [$id]);
    }
}

