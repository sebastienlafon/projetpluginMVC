<?php
 
/**
 * la page controleur du plugin 
 *
 * */
class fooController
{
    /**
     * the class constructor
     *
     */
    public function __construct()
    {
		 if( !is_admin() ):
        add_action( 'wp', array( $this, 'init' ) );
    endif;
    }
	public function init()
	{
		//il s'agit d'un article à afficher?Si c'est le cas alors, on filtre le contenu\
		if( is_single() )
			add_filter( 'the_content', array(&$this, 'render_foo_single_post' ) );
	}

    public function render_foo_single_post($content )
    {
		
		//require_once our model
		require_once( 'models/foo-model.php' );
		//instantiate the model
		$fooModel = new fooModel;

		//get the message
		$message = $fooModel->get_message();

		//require_once our view
		require_once( 'views/foo-single-post-html.php' );

		//render the view
		$content = fooSinglePostHtmlView::render( $message ) . $content ;
		
		//return the result
        return $content;
    }
	
}


/**
 * instanciation de la classe
 */ 
$foo = new fooController;
?>



