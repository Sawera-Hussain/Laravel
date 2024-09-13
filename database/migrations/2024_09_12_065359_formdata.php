<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::create('form',function(Blueprint $table){
            $table->id('id');
            $table->string('name',30);
            $table->string('email',30);
            $table->text('address',30);
            $table->enum('gender',['M','F','O'])->nullable();
            $table->enum('Points',['5','10','15'])->nullable();
            $table->string('password',15);
            $table->timestamps();
             });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
