<?php

if( !class_exists( fooSinglePostHtmlView) ):

    class fooSinglePostHtmlView
    {
 
        public static function render(){
			?>
				<h1><?php echo $message?></h1>
				<p>This is a single post.</p>
			<?php
        }
		public function render_foo_single_post( $content ){	
			//include our view
			require_once( 'views/foo-single-post-html.php' );

			//render the view
			$content = fooSinglePostHtmlView::render( $message ) . $content ;

			//return the result
			return $content;
		}
    }
endif;
?>