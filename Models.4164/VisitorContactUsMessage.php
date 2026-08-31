<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class VisitorContactUsMessage extends Model {
    protected $table = 'visitor_contactus_message';
    public $timestamps=false;
    protected $fillable = [
       'visitor_name', 'visitor_email', 'visitor_contact_no', 'visitor_message', 'submission_time', 'reply_status', 'message_status'
    ];
    
}



