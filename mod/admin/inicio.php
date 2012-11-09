<div id="inicio">
	<div id="content">
		<div id="content-header">
			<h1>Bienvenido <?php if (isset($_SESSION['user'])) { echo $_SESSION['user']; } ?></h1>
		</div>
		<div id="breadcrumb">
			<a href="./" class="tip-bottom" data-original-title="Go to Home"><i class="icon-home"></i> Home</a>
			<a href="./" class="current">Dashboard</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12 center" style="text-align: center;">					
					<ul class="stat-boxes">
						<li>
							<div class="right">
								<strong>
									<?php
										if(file_exists('../consultas/admin/user_visits.php')){ include('../consultas/admin/user_visits.php'); }
									?>
								</strong>
								Users Visits
							</div>
						</li>
						<li>
							<div class="right">
								<strong>
									<?php
										if(file_exists('../consultas/admin/usuarios_existentes.php')){ include('../consultas/admin/usuarios_existentes.php'); }
									?>
								</strong>
								<i class="icon-user"></i>
								Users
							</div>
						</li>
						<li>
							<div class="right">
								<strong>
									<?php 
										if(file_exists('../consultas/admin/items_comprados.php')){ include('../consultas/admin/items_comprados.php'); }
									?>
								</strong>
								<i class="icon-shopping-cart"></i>
								Shop Items
							</div>
						</li>
						<li>
							<div class="right">
								<strong>
									<?php 
										if(file_exists('../consultas/admin/usuarios_online.php')){ include('../consultas/admin/usuarios_online.php'); }
									?>
								</strong>
								<i class="icon-arrow-right"></i>
								Users Online
							</div>
						</li>
						<li>
							<div class="right">
								<strong>
									<?php 
										if(file_exists('../consultas/admin/cotizaciones_pendientes.php')){ include('../consultas/admin/cotizaciones_pendientes.php'); }
									?>
								</strong>
								<i class="icon-repeat"></i>
								Pending Orders
							</div>
						</li>
					</ul>
				</div>	
			</div>
			<div class="row-fluid">
				<div class="span12 center" style="text-align: center;">					
					<ul class="quick-actions">
						<li class="linkcomprasr">
							<a href="#compras">
								<i class="icon-shopping-bag"></i>
								Manage Orders
							</a>
						</li>
						<li class="linkusuarios">
							<a href="#">
								<i class="icon-people"></i>
								Manage Users
							</a>
						</li>
						<li>
							<a href="../../phpmyadmin/">
								<i class="icon-database"></i>
								Manage DB
							</a>
						</li>
						<li>
							<a id="linkseguridad" href="#seguridad">
								<i class="icon-lock"></i>
								Security
							</a>
						</li>
					</ul>
				</div>	
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="widget-box">
	                    <div class="widget-title">
	                        <span class="icon"><i class="icon-repeat"></i></span>
	                        <h5>Recent Activity</h5>
	                    </div>
	                    <div class="widget-content nopadding">
	                        <ul class="activity-list">
	                            <li><a href="#">
	                                <i class="icon-user"></i>
	                                <strong>Admin</strong> added <strong>1 user</strong> <span>2 hours ago</span>
	                            </a></li>
	                            <li><a href="#">
	                                <i class="icon-file"></i>
	                                <strong>Caroline Trin</strong> write a <strong>blog post</strong> <span>Yesterday</span>
	                            </a></li>
	                            <li><a href="#">
	                                <i class="icon-envelope"></i>
	                                <strong>John Doe</strong> sent a <strong>message</strong> <span>2 days ago</span>
	                            </a></li>
	                            <li><a href="#">
	                                <i class="icon-picture"></i>
	                                <strong>Matt Armon</strong> updated <strong>profile photo</strong> <span>2 days ago</span>
	                            </a></li>
	                            <li><a href="#">
	                                <i class="icon-user"></i>
	                                <strong>Admin</strong> bans <strong>3 users</strong> <span>week ago</span>
	                            </a></li>
	                        </ul>
	                    </div>
	                </div>
				</div>
			</div>
			<div class="row-fluid">
				<div id="footer" class="span12">
					2012 AltiviaOT Admin. Brought to you by <a href="">Djom20</a>
				</div>
			</div>
		</div>
	</div>
</div>