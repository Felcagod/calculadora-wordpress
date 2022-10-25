<?php
add_action('admin_menu' , 'pone_register_menus');

function pone_register_menus(){
    add_options_page('Plugin Felca', 'Bem vindos', 'manage_options', 'pone_hello_page', 'pone_render_page'); 
}

function pone_render_page(){
    ?>
    <div class="wrap">
    <h2> Sejam Bem Vindos
    </h2>
    <p class="description">
        Esta e a minha primeira pagina criada com o Plugin !!
    </p>
    <?php
    echo plugins_url('admin.css', __FILE__);
    
    ?>
    </div>
    <?php
}
    ?>
