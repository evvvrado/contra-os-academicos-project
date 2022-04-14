<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Faker as Faker;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 100);
            $table->string("telefone", 15)->nullable();
            $table->boolean("ativo")->default(true);
            $table->timestamps();
        });

        // $faker = Faker\Factory::create();

        // for($i = 0; $i < 20; $i++){
        //     DB::table('fornecedors')->insert([
        //         'nome' => $faker->name,
        //         'telefone' => $faker->numerify('(##) #####-####'),
        //         'ativo' => true
        //     ]);
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedors');
    }
}
