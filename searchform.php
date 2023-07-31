<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field form-control" placeholder="Pesquisar ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label'); ?>">
    </label>
    <input type="image" class="search-submit btn btn-default" src="<?php echo wp_get_upload_dir()['url']?>/icone-lupa.png" value=""/>
</form>
