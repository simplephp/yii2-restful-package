<?php

/* @var $this \yii\web\View */
/* @var $content string */

use api\assets\AppAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="no-skin">
<?php $this->beginBody() ?>
<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							 管理系统 V 1.0
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 通知
								</li>

								<li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														新邮件
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>
									</ul>
								</div></li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php  echo empty(Yii::$app->user->identity->avatar) ? Yii::getAlias('@avatar') . 'profile-pic.jpg' : Yii::getAlias('@avatar') . Yii::$app->user->identity->avatar; ?>" alt="<?php echo Yii::$app->user->identity->relname;?>">
								<span class="user-info">
									<small>Welcome,</small>
									<?php
									    if (Yii::$app->user->isGuest) {
								        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
								    } else {
								        echo Yii::$app->user->identity->relname;
								    }
								    ?>
									
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo Url::toRoute('/user/dashboard/usersetting');?>">
										<i class="ace-icon fa fa-cog"></i>
										用户设置
									</a>
								</li>

								<li>
									<a href="<?php echo Url::toRoute('/user/dashboard/profile');?>">
										<i class="ace-icon fa fa-user"></i>
										用户资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo Url::toRoute('/site/logout');?>" data-method="post">
										<i class="ace-icon fa fa-power-off"></i>
										注销
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar responsive" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<!-- #section:basics/sidebar.layout.shortcuts -->
						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>

						<!-- /section:basics/sidebar.layout.shortcuts -->
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->
				<!--nav-->
				
				<?php
					echo Menu::widget([
					    'items' => [
					        [
					        	'label' => '控制台', 
					        	'url' => ['/site/index'],
					        	'template' => '<a href="{url}"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text">{label}</span></a>',
					        ],
					        [
					        	'label' => '系统配置', 
					        	'url' => ['/system/index'],
					        	'template' => '<a href="{url}" class="dropdown-toggle"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text">{label}</span><b class="arrow fa fa-angle-down"></b></a>',
					        	'items' => [
									[
										'label' => '系统参数配置', 
										'url' => ['/system/config/index'],
										'active' => $this->context->route == 'system/config/index',
										'activeCssClass' => 'active',
										'template' => '<a href="{url}"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text">{label}</span></a>',
									],
								],
					        ],
					        [
					        	'label' => '用户中心', 
					        	'url' => ['/user/config'],

					        	'template' => '<a href="{url}"><i class="menu-icon fa fa-tachometer"></i><span class="menu-text">{label}</span></a>',
					        ],
					    ],
						'options' => [
							'class' => 'nav nav-list',
							'style'=>'top: 0px;',

						],
						'submenuTemplate' => "\n<ul class='submenu'>\n{items}\n</ul>\n",
						'encodeLabels' => false,
						'activeCssClass' => 'active open',
						'activateParents' => true,  
					]);
					?>

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<?= Breadcrumbs::widget([
						            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
						        ]) ?>
							</li>
							 
						</ul><!-- /.breadcrumb -->
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
							    <?= Alert::widget() ?>
        						<?= $content ?>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
