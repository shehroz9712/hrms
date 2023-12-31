<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ShiftSeeder::class,
            // AdminSeeder::class,
            // CountrySeeder::class,
            // UserSeeder::class,
            // DesignationSeeder::class,
            // DepartmentSeeder::clas--ss,
            // MemberCardSeeder::class,
            // CategoriesSeeder::class,
            // CitiesSeeder::class,
            // MemberAddressSeeder::class,
            // PreferencesSeeder::class,
            // DiscountSeeder::class,
            // PackageSeeder::class,
            // MembershipSeeder::class,
            // RecurringSeeder::class,
            // InvoiceSeeder::class,
            // CartSeeder::class,
            // InvoiceServiceSeeder::class,
            // ServiceSeeder::class,
            // PaymentStatusSeeder::class,
            // PaymentMethodSeeder::class,
            // OrderStatusSeeder::class,
            // AddressTypeSeeder::class,
            // CollectFromSeeder::class,
            // AreaPostCodesSeeder::class,
            // FranchisePostCodeSeeder::class,
        ]);
    }
}
