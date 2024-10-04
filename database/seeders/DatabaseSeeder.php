<?php

namespace Database\Seeders;

use App\Models\Bank;
use App\Models\Client;
use App\Models\Contact;
use App\Models\LeasingCompany;
use App\Models\Supplier;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $banks = Bank::factory()->count(5)->create();
        $clients = Client::factory()->count(5)->create();
        $leasingCompanies = LeasingCompany::factory()->count(5)->create();
        $suppliers = Supplier::factory()->count(5)->create();

        $contacts = Contact::factory()->count(10)->create();

        foreach ($banks as $bank) {
            $bank->contacts()->attach($contacts->random(rand(1, 3)));
        }

        foreach ($clients as $client) {
            $client->contacts()->attach($contacts->random(rand(1, 3)));
        }

        foreach ($leasingCompanies as $leasingCompanie) {
            $leasingCompanie->contacts()->attach($contacts->random(rand(1, 3)));
        }

        foreach ($suppliers as $supplier) {
            $supplier->contacts()->attach($contacts->random(rand(1, 3)));
        }
    }
}
