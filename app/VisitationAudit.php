<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisitationAudit extends Model
{
    use SoftDeletes;
    
    protected $table="visitation_audit";

    Protected $fillable = ['page_type', 'page_id', 'link_page', 'count', 'user_email', 'ip_address'];
}
