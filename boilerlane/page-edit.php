<?php

get_header(); 
    
    // Using Form Name
    acfe_form('my-form');
    
    // Using Form ID
    acfe_form(120);
    
    // Using Form Array
    acfe_form(array(
        'name' => 'my-form'
    ));

get_sidebar();
get_footer();

    ?>