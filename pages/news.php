<div class="mt2cms2-c-l">
    <div class="page-hd" style="background-image: url(<?php print $site_url; ?>images/news.png)">
        <div class="bd-c">
            <h2 class="pre-social"><?php print $lang['news']; ?></h2>
			<?php if($offline) print '<small><strong><font color="red">'.$lang['server-offline'].'</font></strong></small>' ?>
        </div>
    </div>
	<?php
		if(!$offline && $database->is_loggedin())
			if($web_admin>=$news_lvl)
				include 'include/functions/add-news.php';
	?>
    <div class="bd-c">
        <ul class='blogroll'>
			<?php 
				$query = "SELECT * FROM news ORDER BY id DESC";
				$records_per_page=intval(getJsonSettings("news"));
				$newquery = $paginate->paging($query,$records_per_page);
				$paginate->dataview($newquery, $lang['sure?'], $web_admin, $news_lvl, $site_url, $lang['read-more']);
				$paginate->paginglink($query,$records_per_page,$lang['first-page'],$lang['last-page'],$site_url);		
			?>
        </ul>
    </div>
</div>