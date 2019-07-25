<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
            $table->bigIncrements('id');
                      

            $table->string('link_site', 200);    
            $table->string('username', 100);    
            $table->string('email', 100);    
            $table->string('link_página', 200);    
            $table->longText('google_code');    
            $table->longText('rd_code');   
            $table->longText('facebook_code');   
            $table->string('escola', 50);    
            $table->string('estado', 50);    
            $table->string('cidade', 70);    
            $table->string('bairro', 70);    

            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escolas');
    }
}
