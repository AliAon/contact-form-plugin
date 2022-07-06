<?php
/**
 * @package Contact Form
 */

namespace Inc;

class Page{

    public  function registor(){
        add_action( 'admin_menu', array($this,'wpdocs_register_my_custom_menu_page') );
        return $this;
    }

    public function wpdocs_register_my_custom_menu_page() {
              add_menu_page( 'Contact Form','Contact Form', 'manage_options','contact_form');
              return $this;

        }


    }

?>