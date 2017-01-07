<li class="widget-container widget-gw2-sidebar-link-two-part">
	<div class="widget widget-wide mod mod-main">
		<div class="bd eason">
			<div class="top-sidebar"><h4 style="text-transform: none !important;"><?php print $lang['user-panel']; ?></h4></div>
			<?php if($offline || !$database->is_loggedin()) { ?>
			<hr>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<form class="form" role="form" method="post" action="<?php print $site_url; ?>users/login" accept-charset="UTF-8" id="login-nav">
						<div class="form-group">
							<input type="text" name="username" pattern=".{5,64}" maxlength="64" class="form-control" placeholder="<?php print $lang['user-name-or-email']; ?>" autocomplete="off" <?php if($offline) print 'disabled'; else print 'required'; ?>>
						</div>
						<div class="form-group">
							<input type="password" name="password" pattern=".{5,16}" maxlength="16" class="form-control" placeholder="<?php print $lang['password']; ?>" <?php if($offline) print 'disabled'; else print 'required'; ?>>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success btn-block" value="<?php print $lang['login']; ?>"<?php if($offline) print ' disabled'; ?>>
						</div>
					</form>
					<?php if(!$offline) { ?>
					<hr>
					<center><a href="<?php print $site_url; ?>users/lost"><?php print $lang['forget-password']; ?></a></center>
					<?php } ?>
				</div>
			</div>
			<?php } else { ?>
			<div class="list-group">
				<?php if($web_admin) { ?>
				<a href="<?php print $site_url; ?>admin" class="list-group-item list-group-item-action"><?php print $lang['administration']; ?><?php if(checkUpdate(officialVersion())) print ' <span class="tag tag-info tag-pill float-xs-right">'.$lang['update-available'].'</span>'; ?></a>
				<?php } ?>
				<a href="<?php print $site_url; ?>user/administration" class="list-group-item list-group-item-action"><?php print $lang['account-data']; ?></a>
				<a href="<?php print $site_url; ?>user/characters" class="list-group-item list-group-item-action"><?php print $lang['chars-list']; ?></a>
				<?php if($item_shop!="") { ?>
				<a target='_blank' href="<?php print $item_shop; ?>" class="list-group-item list-group-item-action"><?php print $lang['item-shop']; ?></a>
				<?php } ?>
				<a href="<?php print $site_url; ?>users/logout" class="list-group-item list-group-item-action list-group-item-danger"><?php print $lang['logout']; ?></a>
				<?php if($web_admin) { ?>
				<a href="#" class="list-group-item list-group-item-action disabled">web_admin <?php print $web_admin; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</li>