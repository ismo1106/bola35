<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;
use CRUDBooster;

class AdminCreateTrnMatchController extends \crocodicstudio\crudbooster\controllers\CBController {

    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "date_match,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_action_style = "button_icon";
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "bola_kuis.trn_match";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Date Match","name"=>"date_match","callback_php"=>  date('F d, Y (H:i:s)', strtotime($row->date_match))];
			$this->col[] = ["label"=>"Liga","name"=>"id_liga","join"=>"bola_kuis.mst_liga,liga_name"];
			$this->col[] = ["label"=>"Team Home","name"=>"id_team_home","join"=>"mst_team,team_name"];
			$this->col[] = ["label"=>"Team Away","name"=>"id_team_away","join"=>"mst_team,team_name"];
			$this->col[] = ["label"=>"Result Match","name"=>"result_match"];
			$this->col[] = ["label"=>"Score Team Home","name"=>"score_team_home"];
			$this->col[] = ["label"=>"Score Team Away","name"=>"score_team_away"];
			$this->col[] = ["label"=>"Description","name"=>"description"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = array (
  'style' => '',
  'help' => '',
  'placeholder' => '',
  'readonly' => '',
  'disabled' => '',
  'label' => 'Date Match',
  'name' => 'date_match',
  'type' => 'text',
  'validation' => 'required|min:3|max:255',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'dataenum' => '',
  'datatable' => 'mst_liga,liga_name',
  'dataquery' => '',
  'style' => '',
  'help' => '',
  'datatable_where' => '',
  'datatable_format' => '',
  'parent_select' => '',
  'label' => 'Liga',
  'name' => 'id_liga',
  'type' => 'select',
  'validation' => 'required|max:255',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'dataenum' => '',
  'datatable' => 'mst_team,team_name',
  'dataquery' => '',
  'style' => '',
  'help' => '',
  'datatable_where' => '',
  'datatable_format' => '',
  'parent_select' => 'id_liga',
  'label' => 'Team Home',
  'name' => 'id_team_home',
  'type' => 'select',
  'validation' => 'required|max:255',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'dataenum' => '',
  'datatable' => 'mst_team, team_name',
  'dataquery' => '',
  'style' => '',
  'help' => '',
  'datatable_where' => '',
  'datatable_format' => '',
  'parent_select' => 'id_liga',
  'label' => 'Team Away',
  'name' => 'id_team_away',
  'type' => 'select',
  'validation' => 'required|max:255',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'dataenum' => 'Draw;Home Win;Away Win',
  'datatable' => '',
  'dataquery' => '',
  'style' => '',
  'help' => '',
  'datatable_where' => '',
  'datatable_format' => '',
  'parent_select' => '',
  'label' => 'Result Match',
  'name' => 'result_match',
  'type' => 'select',
  'validation' => '',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'style' => '',
  'help' => '',
  'placeholder' => '',
  'readonly' => '',
  'disabled' => '',
  'label' => 'Score Team Home',
  'name' => 'score_team_home',
  'type' => 'text',
  'validation' => '',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'style' => '',
  'help' => '',
  'placeholder' => '',
  'readonly' => '',
  'disabled' => '',
  'label' => 'Score Team Away',
  'name' => 'score_team_away',
  'type' => 'text',
  'validation' => '',
  'width' => 'col-sm-10',
);
			$this->form[] = array (
  'style' => '',
  'help' => '',
  'placeholder' => '',
  'readonly' => '',
  'disabled' => '',
  'label' => 'Description',
  'name' => 'description',
  'type' => 'text',
  'validation' => '',
  'width' => 'col-sm-10',
);
			# END FORM DO NOT REMOVE THIS LINE

			/*
          | ----------------------------------------------------------------------
          | Sub Module
          | ----------------------------------------------------------------------
          | @label          = Label of action
          | @path           = Path of sub module
          | @button_color   = Bootstrap Class (primary,success,warning,danger)
          | @button_icon    = Font Awesome Class
          | @parent_columns = Sparate with comma, e.g : name,created_at
          |
         */
        $this->sub_module = array();


        /*
          | ----------------------------------------------------------------------
          | Add More Action Button / Menu
          | ----------------------------------------------------------------------
          | @label       = Label of action
          | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
          | @icon        = Font awesome class icon. e.g : fa fa-bars
          | @color 	   = Default is primary. (primary, warning, succecss, info)
          | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
          |
         */
        $this->addaction = array();


        /*
          | ----------------------------------------------------------------------
          | Add More Button Selected
          | ----------------------------------------------------------------------
          | @label       = Label of action
          | @icon 	   = Icon from fontawesome
          | @name 	   = Name of button
          | Then about the action, you should code at actionButtonSelected method
          |
         */
        $this->button_selected = array();


        /*
          | ----------------------------------------------------------------------
          | Add alert message to this module at overheader
          | ----------------------------------------------------------------------
          | @message = Text of message
          | @type    = warning,success,danger,info
          |
         */
        $this->alert = array();



        /*
          | ----------------------------------------------------------------------
          | Add more button to header button
          | ----------------------------------------------------------------------
          | @label = Name of button
          | @url   = URL Target
          | @icon  = Icon from Awesome.
          |
         */
        $this->index_button = array();



        /*
          | ----------------------------------------------------------------------
          | Customize Table Row Color
          | ----------------------------------------------------------------------
          | @condition = If condition. You may use field alias. E.g : [id] == 1
          | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
          |
         */
        $this->table_row_color = array();


        /*
          | ----------------------------------------------------------------------
          | You may use this bellow array to add statistic at dashboard
          | ----------------------------------------------------------------------
          | @label, @count, @icon, @color
          |
         */
        $this->index_statistic = array();



        /*
          | ----------------------------------------------------------------------
          | Add javascript at body
          | ----------------------------------------------------------------------
          | javascript code in the variable
          | $this->script_js = "function() { ... }";
          |
         */
        $this->script_js = NULL;



        /*
          | ----------------------------------------------------------------------
          | Include Javascript File
          | ----------------------------------------------------------------------
          | URL of your javascript each array
          | $this->load_js[] = asset("myfile.js");
          |
         */
        $this->load_js = array();



        /*
          | ----------------------------------------------------------------------
          | Add css style at body
          | ----------------------------------------------------------------------
          | css code in the variable
          | $this->style_css = ".style{....}";
          |
         */
        $this->style_css = NULL;



        /*
          | ----------------------------------------------------------------------
          | Include css File
          | ----------------------------------------------------------------------
          | URL of your css each array
          | $this->load_css[] = asset("myfile.css");
          |
         */
        $this->load_css = array();
    }
    
    public function getAdd() {
        $data['page_title'] = 'Add New Match';
        $data['liga'] = DB::table('mst_liga')->get();
        $this->cbView('match/add_match', $data);
    }
    
    public function getTeamByLiga(Request $req){
        $idLiga = $req->input('txtIdLiga');
        $team = DB::table('mst_team')->select('id as value_select', 'team_name as label_select')->where('id_liga', $idLiga)->get();
        return $team;
    }
    
    public function storeMatch(Request $req){
        DB::table('trn_match')->insert([
            'date_match' => date('Y-m-d H:i:s', strtotime($req->input('date_match'))),
            'id_liga' => $req->input('id_liga'),
            'id_team_home' => $req->input('id_team_home'),
            'id_team_away' => $req->input('id_team_away'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);
        
        return redirect(CRUDBooster::mainpath());
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for button selected
      | ----------------------------------------------------------------------
      | @id_selected = the id selected
      | @button_name = the name of button
      |
     */

    public function actionButtonSelected($id_selected, $button_name) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for manipulate query of index result
      | ----------------------------------------------------------------------
      | @query = current sql query
      |
     */

    public function hook_query_index(&$query) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for manipulate row of index table html
      | ----------------------------------------------------------------------
      |
     */

    public function hook_row_index($column_index, &$column_value) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for manipulate data input before add data is execute
      | ----------------------------------------------------------------------
      | @arr
      |
     */

    public function hook_before_add(&$postdata) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for execute command after add public static function called
      | ----------------------------------------------------------------------
      | @id = last insert id
      |
     */

    public function hook_after_add($id) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for manipulate data input before update data is execute
      | ----------------------------------------------------------------------
      | @postdata = input post data
      | @id       = current id
      |
     */

    public function hook_before_edit(&$postdata, $id) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for execute command after edit public static function called
      | ----------------------------------------------------------------------
      | @id       = current id
      |
     */

    public function hook_after_edit($id) {
        //Your code here 
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for execute command before delete public static function called
      | ----------------------------------------------------------------------
      | @id       = current id
      |
     */

    public function hook_before_delete($id) {
        //Your code here
    }

    /*
      | ----------------------------------------------------------------------
      | Hook for execute command after delete public static function called
      | ----------------------------------------------------------------------
      | @id       = current id
      |
     */

    public function hook_after_delete($id) {
        //Your code here
    }

    //By the way, you can still create your own method in here... :) 
}