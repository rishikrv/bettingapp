table


<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuperAgents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_agents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('master_id');
            $table->string('super_agent_name')->unique();
            $table->string('super_agent_code')->unique();
            $table->string('super_agent_password');
            $table->string('super_agent_reference');
            $table->bigInteger('super_agent_curr_limit')->nullable();
            $table->bigInteger('super_agent_contact_num')->unique();
            $table->decimal('super_agent_share',20,3);
            $table->decimal('super_agent_mob_share',20,3);
            $table->string('super_agent_com_type');
            $table->bigInteger('super_agent_match_com');
            $table->bigInteger('super_agent_sess_com');
            $table->string('super_agent_flate_share')->nullable();
            $table->string('super_agent_auto_limit')->nullable();
            $table->string('super_agent_status')->nullable();
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
        Schema::dropIfExists('super_agents');
    }
}
