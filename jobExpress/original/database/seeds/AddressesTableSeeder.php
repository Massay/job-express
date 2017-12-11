<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address = new \App\Address();
        $address->name="Kanifing Industrial Estate";
        $address->save();

        $address = new \App\Address();
        $address->name="Kairaba Avenue";
        $address->save();

        $address = new \App\Address();
        $address->name="Serrekunda";
        $address->save();
        $address = new \App\Address();
        $address->name="Banjul";
        $address->save();
        $address = new \App\Address();
        $address->name="Brimaka";
        $address->save();
        $address = new \App\Address();
        $address->name="Fajara";
        $address->save();
        $address = new \App\Address();
        $address->name="Bakau";
        $address->save();
        $address = new \App\Address();
        $address->name="Lamin";
        $address->save();
        $address = new \App\Address();
        $address->name="Kololi";
        $address->save();
        $address = new \App\Address();
        $address->name="Kotu";
        $address->save();
        $address = new \App\Address();
        $address->name="Tabokoto";
        $address->save();
        $address = new \App\Address();
        $address->name="Latrikunda";
        $address->save();
        $address = new \App\Address();
        $address->name="Senegambia";
        $address->save();
    }
}
