<?php
/**
 * FAQ Section
 * 
 * slug: event-management-blocks/faq-section
 * title: FAQ Section
 * categories: event-management-blocks
 */

    return array(
        'title'      =>__( 'FAQ Section', 'event-management-blocks' ),
        'categories' => array( 'event-management-blocks' ),
        'content'    => '<!-- wp:group {"className":"faq-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"80%"}} -->
      <div class="wp-block-group faq-section has-tertiary-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns"><!-- wp:column {"className":"faq-left wow bounceInUp center","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-column faq-left wow bounceInUp center"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent","fontSize":"medium","fontFamily":"lato"} -->
    <p class="has-accent-color has-text-color has-link-color has-lato-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html__('Frequently Asked Questions','event-management-blocks').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","fontSize":"26px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"lato"} -->
    <h2 class="wp-block-heading has-background-color has-text-color has-link-color has-lato-font-family" style="font-size:26px;font-style:normal;font-weight:800">'. esc_html__('Have Any Questions For Us?','event-management-blocks').'</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"short-para-text","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.7"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small","fontFamily":"lato"} -->
    <p class="short-para-text has-background-color has-text-color has-link-color has-lato-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400;line-height:1.7">'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s','event-management-blocks').'</p>
    <!-- /wp:paragraph -->

    <!-- wp:image {"id":6,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/FAQ.png" alt="" class="wp-image-6"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column -->

    <!-- wp:column {"className":"faq-right wow bounceInDown center","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
    <div class="wp-block-column faq-right wow bounceInDown center"><!-- wp:details {"showContent":true,"className":"faq-list"} -->
    <details class="wp-block-details faq-list" open><summary>'. esc_html__('What services does your agency offer?','event-management-blocks').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
    <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','event-management-blocks').'</p>
    <!-- /wp:paragraph --></details>
    <!-- /wp:details -->

    <!-- wp:details {"className":"faq-list"} -->
    <details class="wp-block-details faq-list"><summary>'. esc_html__('Who do you work with?','event-management-blocks').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
    <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','event-management-blocks').'</p>
    <!-- /wp:paragraph --></details>
    <!-- /wp:details -->

    <!-- wp:details {"className":"faq-list"} -->
    <details class="wp-block-details faq-list"><summary>'. esc_html__('Do you offer customized marketing packages?','event-management-blocks').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
    <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','event-management-blocks').'</p>
    <!-- /wp:paragraph --></details>
    <!-- /wp:details -->

    <!-- wp:details {"className":"faq-list"} -->
    <details class="wp-block-details faq-list"><summary>'. esc_html__('Can you help us improve our SEO rankings?','event-management-blocks').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
    <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','event-management-blocks').'</p>
    <!-- /wp:paragraph --></details>
    <!-- /wp:details -->

    <!-- wp:details {"className":"faq-list"} -->
    <details class="wp-block-details faq-list"><summary>'. esc_html__('Do you manage social media accounts?','event-management-blocks').'</summary><!-- wp:paragraph {"placeholder":"Type / to add a hidden block"} -->
    <p>'. esc_html__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','event-management-blocks').'</p>
    <!-- /wp:paragraph --></details>
    <!-- /wp:details --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->

    <!-- wp:spacer {"height":"80px"} -->
    <div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->',
    );