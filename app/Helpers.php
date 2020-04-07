<?php

function flash($message, $type='info'){
    session()->flash('message',$message);
    session()->flash('type',$type);  //  info - danger - success - warning

}
