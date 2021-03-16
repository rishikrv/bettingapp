<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Seld\PharUtils\Timestamps;

class AgentsModel extends Model
{
    protected $table    =   'agents';
    protected $fillable =   [
                                'super_agent_id',
                                'agent_name',
                                'agent_code',
                                'agent_password',
                                'agent_reference',
                                'agent_curr_limit',
                                'agent_contact_num',
                                'agent_share',
                                'agent_mob_share',
                                'agent_com_type',
                                'agent_match_com',
                                'agent_sess_com',
                                'agent_flate_share',
                                'agent_auto_limit',
                                'agent_status'
                               
                            ];
        public $timestamps=false;
}
?>
