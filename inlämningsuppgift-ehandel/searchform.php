
<form id="searchform" class="searchform" action="/" method="get">
        <div>
            <label class="screen-reader-text">Sök efter:</label>
            <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required />
            <input type="submit" value="Sök" />
        </div>
    </form>