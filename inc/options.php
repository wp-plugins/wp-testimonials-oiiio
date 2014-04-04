<?php global $oiiio_testimonials_options;
	if ( !isset( $_REQUEST['updated'] ) )
		$_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>
<div class="wrap">
	<div id="icon-options-general" class="icon32"></div>
	<h2>wp testimonials</h2>
	<?php if ( false !== $_REQUEST['updated'] ) : ?>
        <div class="updated fade"><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
    <?php endif; // If the form has just been submitted, this shows the notification ?>
	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<h3><span>wp testimonials settings</span></h3>
						<div class="inside">
                        	<img src="<?php echo plugins_url( 'wp-testimonials-oiiio/inc/images/pro-version.PNG') ?>" />
                            <p><a href="http://oiiio.us/testimonials/" class="button-primary" target="_blank">Click Here Buy Pro Version</a></p>
						</div>
					</div>
				</div>
			</div>
			<div id="postbox-container-1" class="postbox-container">
				<div class="meta-box-sortables">
					<div class="postbox">
						<h3><span>short code</span></h3>
						<div class="inside">
							<p class="description">where you wanna see the testimonials just place this short code there : <code>[testimonials]</code></p>
						</div>
					</div>
				</div>
				<div class="meta-box-sortables">
					<div class="postbox">
						<h3><span>Author</span></h3>
						<div class="inside">
							<p><a href="http://oiiio.us/testimonials/" target="_blank">view plugin documentations</a></p>
                            <p><a href="http://oiiio.us/plugins/" target="_blank">view author's all plugins</a></p>
                            <p><a href="http://oiiio.us/themes/" target="_blank">view author's all themes</a></p>
						</div>
					</div>
				</div>                
                
			</div>
		</div>
		<br class="clear">
	</div>
</div>