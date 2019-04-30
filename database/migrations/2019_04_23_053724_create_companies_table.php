<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('name')->nullable()->comment('Company name');
            $table->string('address')->nullable()->comment('Company address');
            $table->string('city')->nullable()->comment('Company city');
            $table->string('postal_code')->nullable()->comment('Company postal code');
            $table->string('country')->nullable()->comment('Company country');
            $table->string('comments')->nullable()->comment('Comments');
            $table->string('subdomain')->nullable()->comment('subdomain');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
