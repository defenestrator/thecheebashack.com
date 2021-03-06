<?php

use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Shoreline\ShippingAddress::class, 30)->create();
        factory(Shoreline\Strain::class, 15)->create();
        factory(Shoreline\Breeder::class, 2)->create();
        factory(Shoreline\SeedPack::class, 12)->create();
        factory(Shoreline\Image::class, 15)->create();
        factory(Shoreline\Flower::class, 15)->create();


        $tableNames = [
            'users', 'strains', 'breeders', 'invoices', 'payment_methods', 'seed_packs'
        ];
        foreach($tableNames as $tableName) {
            $records = DB::table($tableName)->where('uuid', '=', null)->get();
            foreach($records as $record) {
                DB::table($tableName)
                ->where('id', '=', $record->id)
                ->update(['uuid' => $this->makeUuid()]);
            }
        }


    }
    public function makeUuid()
    {
        $uuid ='';

        try {
            $uuid = Uuid::uuid1()->toString();
        } catch (UnsatisfiedDependencyException $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }

        return $uuid;
    }
}
