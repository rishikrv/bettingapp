<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table    =   'clients';
    protected $fillable =   [
                                'agent_id',
                                'client_name',
                                'client_code',
                                'password',
                                'reference',
                                'client_curr_limit',
                                'client_contact_num',
                                'client_share',
                                'client_mob_share',
                                'client_com_type',
                                'client_match_com',
                                'client_sess_com',
                                'client_flate_share',
                                'client_auto_limit',
                                'client_status'
                            ];
}
?>