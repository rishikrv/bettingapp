<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_masters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('admin_id');
            $table->string('super_master_name')->unique();
            $table->string('super_master_code')->unique();;
            $table->string('super_master_password');
            $table->string('super_master_reference');
            $table->bigInteger('super_master_curr_limit')->nullable();
            $table->bigInteger('super_master_contact_num')->unique();
            $table->decimal('super_master_share',20,3);
            $table->decimal('super_master_mob_share',20,3);
            $table->string('super_master_com_type');
            $table->bigInteger('super_master_match_com');
            $table->bigInteger('super_master_sess_com');          
            $table->string('super_master_flate_share')->nullable();
            $table->string('super_master_auto_limit')->nullable();
            $table->string('super_master_status')->nullable();
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
        Schema::dropIfExists('super_masters');
    }
}
