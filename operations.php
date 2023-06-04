<?php

function inputFields($placeholder, $name, $values, $type)
{
    $ele = "
     <div class=\"form-group my-4\">
             <input type= '$type' name= '$name'
             placeholder= '$placeholder' class=\"form-control\" value='$values' autocomplete=\"off\">
     </div>
            ";

    echo $ele;
}
