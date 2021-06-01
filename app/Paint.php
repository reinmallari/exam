<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{

  protected $table = "paint";
  public $timestamps = true;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'plate_no',
      'current_color',
      'target_color',
      'status',
      'created_by'
  ];

  public static function get_list_cars(){

    $list = DB::select("SELECT
            plate_no,
            current_color,
            target_color,
            status
        FROM paint
        ORDER BY id ASC");

    return $list;
  }
}
