<?php

namespace App\Http\Controllers;

use DB;
use Session;
use Request;
use CRUDBooster;

class CBHook extends Controller {
    /*
      | --------------------------------------
      | Please note that you should re-login to see the session work
      | --------------------------------------
      |
     */

    public function afterLogin() {
        if (CRUDBooster::isSuperadmin() == FALSE) {
            $me = CRUDBooster::me();
            CRUDBooster::insertLog(trans("crudbooster.log_logout", ['email' => $me->email]) . ' - Akses admin ditolak');

            Session::flush();
            //return redirect()->guest('login');
            return redirect()->route('getLogin')->with('message', trans("crudbooster.message_after_logout"));
        }
    }

}
