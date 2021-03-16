<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperMasterModel extends Model
{
    protected $table    =   'super_masters';
    protected $fillable =   [
                                'admin_id',
                                'super_master_name',
                                'super_master_code',
                                'super_master_password',
                                'super_master_reference',
                                'super_master_curr_limit',
                                'super_master_contact_num',
                                'super_master_share',
                                'super_master_mob_share',
                                'super_master_com_type',
                                'super_master_match_com',
                                'super_master_sess_com',
                                'super_master_flate_share',
                                'super_master_auto_limit',
                                'super_master_status'
                            ];
}
