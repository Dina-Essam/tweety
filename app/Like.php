<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasCompositePrimaryKey;
    protected $guarded=[];
    protected $primaryKey = array('user_id','tweet_id');

}
