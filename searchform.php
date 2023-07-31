<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="sidebar__widget-search">
    <input value="<?php echo get_search_query() ?>" name="s" id="s" type="text" placeholder="Поиск..." class="sidebar__widget-search-input" >
    <button id="searchsubmit" value="найти" aria-label="search" class="sidebar__widget-search-button back-gr-v"><i class="icon-search"></i></button>
</form>