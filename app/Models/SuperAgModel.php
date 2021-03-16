<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperAgModel extends Model
{
    protected $table    =   'super_agents';
    protected $fillable =   [
                                'master_id',
                                'super_agent_name',
                                'super_agent_code',
                                'super_agent_password',
                                'super_agent_reference',
                                'super_agent_curr_limit',
                                'super_agent_contact_num',
                                'super_agent_share',
                                'super_agent_mob_share',
                                'super_agent_com_type',
                                'super_agent_match_com',
                                'super_agent_sess_com',
                                'super_agent_flate_share',
                                'super_agent_auto_limit',
                                'super_agent_status'
                            ];
}
