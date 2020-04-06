<?php

function flash($Message, $Type='info'){
    session()->flash('Message',$Message);
    session()->flash('Type',$Type);  //  info - danger - success - warning

}
