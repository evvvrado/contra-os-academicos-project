<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParametrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parametros', function (Blueprint $table) {
            $table->id();
            $table->string("valor_1");
            $table->string("valor_2");
            $table->string("descricao");
            $table->timestamps();
        });

        for ($i = 1; $i <= 7; $i++) {
            DB::table('parametros')->insert([
                'valor_1' => '0',
                'valor_2' => '0',
                'descricao' => 'desc'.$i
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parametros');
    }
}
