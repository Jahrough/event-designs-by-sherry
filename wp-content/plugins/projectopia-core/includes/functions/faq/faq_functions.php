<?php
add_action( "wp_ajax_cqpim_update_faq_order", "cqpim_update_faq_order");
function cqpim_update_faq_order() {
	// Must be logged in
    if ( ! is_user_logged_in() ) {
        wp_send_json_error( 'Authentication required.' );
    }
	//prevent guest users from updating faq
	if ( ! current_user_can( 'edit_posts' ) ) {
        wp_send_json_error( esc_html__( 'Insufficient permissions.', 'projectopia-core' ) );
    }
	// CSRF check
    check_ajax_referer( PTO_GLOBAL_NONCE, 'pto_nonce' );
	if ( empty( $_POST['post'] ) || empty( $_POST['order'] ) ) {
		pto_send_json( array( 
			'error' => true,
		) ); 
	}
	update_post_meta(intval($_POST['post']), 'faq_order', sanitize_text_field(wp_unslash($_POST['order'])));   
	pto_send_json( array( 
		'error' => false,
	) ); 
}

add_filter( 'the_content', 'pto_replace_faq_content' );
function pto_replace_faq_content( $content ) {
    if ( is_singular('cqpim_faq') ) {
		global $post;
		$content = get_post_meta($post->ID, 'terms', true);
    }
    return $content;
}