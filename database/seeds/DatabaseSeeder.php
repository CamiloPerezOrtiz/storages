<?php

use Illuminate\Database\Seeder;
use App\License;
use App\Company;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $license = new License;
        $license->type = "SALES";
        $license->time ="12 month";
        $license->status = 1;
        $license->total_space = 2000;
        $license->total_license = 30;
        $license->free_space = 1995;
        $license->free_license = 29;
        $date = date("dm-Y");
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length_characters = strlen($characters);
        $random_value = '';
        for ($i = 0; $i < $length = 4; $i++) {
            $random_value .= $characters[rand(0, $length_characters - 1)];
        }
        $serial= "WDST-$date-$random_value";
        $license->serial = $serial;
        $license->end_date = date("Y-m-d H:i:s",strtotime(date("Y-m-d H:i:s")."+ 36 month"));
        $company = new Company;
        $company->name = 'WARRIORS LABS SA DE CV';
        $company->alias = 'warriors';
        $company->rfc = 'WARRLBS2019';
        $company->address = 'Pedro Santacilia No. 258-3';
        $user = new User;
        $user->name = 'Super';
        $user->lastname = 'User';
        $user->email = 'camilo.perez.ort@gmail.com';
        $user->space = 5;
        $user->role = "SUPER";
        $user->password = bcrypt("W@rri0rs15");
        # Guardar #
        $license->save();
        $license->company()->save($company);
        $company->users()->save($user);
    }
}
