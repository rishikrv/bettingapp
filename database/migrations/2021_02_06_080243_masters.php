<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Masters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('super_master_id');
            $table->string('master_name')->unique();
            $table->string('master_code')->unique();;
            $table->string('master_password');
            $table->string('master_reference');
            $table->bigInteger('master_curr_limit')->nullable();
            $table->bigInteger('master_contact_num')->unique();
            $table->decimal('master_share',20,3);
            $table->decimal('master_mob_share',20,3);
            $table->string('master_com_type');
            $table->bigInteger('master_match_com');
            $table->bigInteger('master_sess_com');          
            $table->string('master_flate_share')->nullable();
            $table->string('master_auto_limit')->nullable();
            $table->string('master_status')->nullable();
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
        Schema::dropIfExists('masters');
    }
}
