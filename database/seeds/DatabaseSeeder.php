<?php

use Illuminate\Database\Seeder;
use App\SubscriptionPlans;
use App\AdverticeCategories;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SubscriptionTableSeeder::class);
         $this->call(AdverticeCategoriesTableSeeder::class);
    }
}
class SubscriptionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('subscription_plans')->delete();
        SubscriptionPlans::create(['title'=>'Free','discription'=>'Free time period','time_duration'=>'2','price'=>'00']);
        SubscriptionPlans::create(['title'=>'Basic','discription'=>'Basic time period','time_duration'=>'5','price'=>'50']);
        SubscriptionPlans::create(['title'=>'Standard','discription'=>'Standard time period','time_duration'=>'10','price'=>'100']);
        SubscriptionPlans::create(['title'=>'Premium','discription'=>'Premium time period','time_duration'=>'15','price'=>'150']);
    }

}

class AdverticeCategoriesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('advertice_categories')->delete();

        AdverticeCategories::create(['name'=>'Propertice']);
        AdverticeCategories::create(['name'=>'Vehicals']);
        AdverticeCategories::create(['name'=>'Electronics']);
    }

}