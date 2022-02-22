<?php

function html_combo(string $name, array $items, int $selected=0) :string {
    //<select name="town"
    echo '<p>città</p>';
    $html = '<select name="'.$name.'">';
    //<option value = '0'></option>
    foreach($items as $index => $value){
        $html .= '<option value="'.$index.'" ';
        if ($index==$selected) {
            $html .= 'selected';
        }
        
        
        $html .='>' . $value . '</option>';
    }

    //</select>
    $html .= '</select>';

    /* print_r($html);
    die(); */

    return $html;
}