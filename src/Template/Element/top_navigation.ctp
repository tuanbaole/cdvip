<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<div class="nav toggle">
			<a id="menu_toggle"><i class="fa fa-bars"></i></a>
		</div>
		<nav class="nav navbar-nav">
			<ul class=" navbar-right">
				<li class="nav-item dropdown open" style="padding-left: 15px;">
					<a href="javascript:;"aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa fa-bell fa-2x"></i>
					</a>
					<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown" style="max-width: 10em;min-width: 10em;">
						<a class="dropdown-item"  href="javascript:;"> Thông Tin</a>
						<a class="dropdown-item"  href="<?= $this->Url->build(array('controller'=>'Users','action'=>'logout')); ?>"><i class="fa fa-sign-out pull-right"></i> Đăng Xuất</a>
					</div>
				</li>
			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->