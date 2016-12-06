<?php
    function paginate($nb_enregistrement, $nb_par_page, $module, $action, $options = "")
    {
        $nb_pages = ceil($nb_enregistrement/ $nb_par_page);

        echo "<div class='paginate'><ul class='ul-paginate'>";
            for($i = 1; $i <= $nb_pages ; $i++)
            {
                echo'<li><a href="?module='. $module .'&action='. $action .'&page='. $i . $options .'"> Page '. $i .'</a> <span class="separation">-</span></li>';
            }
        echo "</ul></div>";
    }


    function scroll_list($select_name, $class_name, $id_name, $data, $id_column, $value_column, $options = array())
    {

        echo '<select name="' . $select_name .'" class="' . $class_name .'" id="' . $id_name .'">';
            if (isset($options["default"]))
            {
                echo '<option value="0" disabled selected>'. $options["default"] .'</option>';
            }

            foreach ($data as $rec)
            {
                echo '<option value="'. $rec[$id_column] .'"';
                if ((isset($options["selected"])) && ($rec[$id_column] == $options["selected"]))
                {
                    echo 'selected';
                }
                echo'>';
                echo $rec[$value_column];
                echo '</option>';
             }
        echo '</select>';
    }
