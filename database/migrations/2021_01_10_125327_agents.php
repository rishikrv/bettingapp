<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Agents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            
            $table->id();
            $table->bigInteger('super_agent_id');
            $table->string('agent_name')->unique();
            $table->string('agent_code')->unique();
            $table->string('agent_password');
            $table->string('agent_reference');
            $table->bigInteger('agent_curr_limit')->nullable();
            $table->bigInteger('agent_contact_num')->unique();
            $table->decimal('agent_share',20,3);
            $table->decimal('agent_mob_share',20,3);
            $table->string('agent_com_type');
            $table->bigInteger('agent_match_com');
            $table->bigInteger('agent_sess_com');
            $table->string('agent_flate_share')->nullable();
            $table->string('agent_auto_limit')->nullable();
            $table->string('agent_status')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
