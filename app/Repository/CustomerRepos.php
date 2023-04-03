<?php

namespace App\Repository;

use Illuminate\Support\Facades\DB;

class CustomerRepos
{
    public static function getAllCustomer()
    {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'order by c.c_fullname';

        return DB::select($sql);
    }

    public static function getCustomerById($c_id)
    {
        $sql = 'select c.* ';
        $sql .= 'from customer as c ';
        $sql .= 'where c.c_id = ? ';

        return DB::select($sql, [$c_id]);
    }

    public static function insert($customer)
    {
        $sql = 'insert into customer ';
        $sql .= '(c_fullname, c_dob, c_gender, c_email, c_address, c_phone) ';
        $sql .= 'values (?, ?, ?, ?, ?, ?) ';

        $result = DB::insert($sql,
            [$customer->c_fullname,
                $customer->c_dob,
                $customer->c_gender,
                $customer->c_email,
                $customer->c_address,
                $customer->c_phone]);
        if ($result) {
            return DB::getPdo()->lastInsertId();
        } else {
            return -1;
        }
    }

    public static function update($customer)
    {
        $sql = 'update customer ';
        $sql .= 'set c_fullname = ?, c_dob = ?, c_gender = ?, c_email = ?, c_address = ?, c_phone = ? ';
        $sql .= 'where c_id = ? ';

        DB::update($sql,
            [$customer->c_fullname,
                $customer->c_dob,
                $customer->c_gender,
                $customer->c_email,
                $customer->c_address,
                $customer->c_phone,
                $customer->c_id]);

    }

    public static function delete($c_id)
    {
        $sql = 'delete from customer ';
        $sql .= 'where c_id = ? ';

        DB::delete($sql, [$c_id]);
    }
}
