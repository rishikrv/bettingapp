<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterModel extends Model
{
    protected $table    =   'masters';
    protected $fillable =   [
                                'super_master_id',
                                'master_name',
                                'master_code',
                                'master_password',
                                'master_reference',
                                'master_curr_limit',
                                'master_contact_num',
                                'master_share',
                                'master_mob_share',
                                'master_com_type',
                                'master_match_com',
                                'master_sess_com',
                                'master_flate_share',
                                'master_auto_limit',
                                'master_status'
                            ];
}
