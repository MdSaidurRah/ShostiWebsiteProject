<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
class Project extends Model {
    protected $table = 'project';
    public $timestamps=false;
    protected $fillable = [
        'project_name','project_description','project_status','entityObjectOrder', 'budget_amount', 'funded_by', 'starting_date',
        'program_id', 'program_name','location','account_id','salary_head','salary_sub_head','salary_child_head'
    ];
    public static function boot() {
        parent::boot();
        static::creating(function($post) {
            $post->createdBy = Session::get('userId');
        });
        static::updating(function($post) {
            $post->updatedBy = Session::get('userId');
        });
    }
}
