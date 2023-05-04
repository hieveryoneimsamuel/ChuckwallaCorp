<?php
namespace Model;
use \DB;

class chuckwallacolormodel extends \Model{
    public static function add_color($name, $hexval){
        $id = chuckwallacolormodel::largest_id()[0]['id'];
        if($id == NULL){ $id = 1; }
        else{ $id = $id +1; }
        DB::insert('customcolors') -> set(array(
            'id' => $id,
            'name' => $name,
            'hexval' => $hexval
        )) -> execute();
    }

    public static function delete_color($color_ids) {
        // Use DB::delete to remove an item. Remember to add ->execute() to the end so that it runs the query
        // Here is a basic outline:
        // DB::delete('<THE_DATABASE_TABLE>')->where('id','in',<ARRAY_OF_IDS>)->execute();
        DB::delete('customcolors')->where(
            'id', 'in', $color_ids
        )-> execute();
    }

    public static function read_colors() {
        // Notice that this query ends in execute then as_array
        // The queries from DB just return an object that needs to be executed, then to get the results
        // You can use as_array to get them all at once or other methods to iterate over the results of the query
        // by row
        return DB::query('SELECT id, name as text, hexval as hv FROM `customcolors`', DB::SELECT)->execute()->as_array();
    }

    public static function color_count() {
        return DB::count_records('customcolors') ;
    }

    private static function largest_id() {
        return DB::query('SELECT MAX(id) as id FROM `customcolors`')->execute()->as_array();
    }

}
