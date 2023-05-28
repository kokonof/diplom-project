<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="mt-3">
    <label class="screen-reader-text" for="s">Search: </label>
    <input type="text" value="<?php echo get_search_query() ?>" name="s" id="s">
    <button type="submit" id="searchsubmit"><i class="bi bi-search"></i></button>
</form>
