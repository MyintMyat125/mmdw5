<?php session_start();
if(empty($_SESSION ['email']))
{
    header('location:../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<link rel="stylesheet" href="../libs/fontawesomepro/css/all.min.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/admin.css" />
		<link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
		<link rel="stylesheet" href="../css/jquery.dataTables.min.css">

		<title>Admin Dashboard</title>
	</head>

	<body>
		<div class="d-flex" id="wrapper">
			<!-- Sidebar -->
			<div class="sidebar" id="sidebar-wrapper">
				<div
					class="sidebar-heading text-center py-4 text-white fs-5 fw-bolder text-uppercase border-bottom"
				>
					<i class="fas fa-user-secret me-2"></i>Admin Dashboard
				</div>
				<div class="list-group list-group-flush my-3">
					<a
						href="../user/index.php"
						class="list-group-item list-group-item-action bg-transparent text-white active"
						><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a
					>
					<a
						href="../user/index.php"
						class="list-group-item list-group-item-action bg-transparent text-white fw-bold"
						><i class="fas fa-user-friends me-2"></i>Users</a
					>
					<a
						href="../product/index.php"
						class="list-group-item list-group-item-action bg-transparent text-white fw-bold"
						><i class="fas fa-boxes me-2"></i>Product</a
					>
					<a
						href="../faq/index.php"
						class="list-group-item list-group-item-action bg-transparent text-white fw-bold"
						><i class="far fa-question-circle me-2"></i></i>FAQ</a
					>
					<!-- <a
						href="../logout.php"
						class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
						><i class="fas fa-power-off me-2"></i>Logout</a
					> -->
				</div>
			</div>
			<!-- #sidebar-wrapper -->

			<!-- Page Content -->
			<div id="page-content-wrapper">
				<nav class="navbar navbar-expand-lg navbar-light bg-dark py-4 px-4">
					<div class="d-flex align-items-center">
						<i
							class="fas fa-align-left text-white fs-4 me-3"
							id="menu-toggle"
						></i>
						<h2 class="fs-2 m-0 text-white ">Dashboard</h2>
					</div>

					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
							<li class="nav-item dropdown">
								<a
									class="nav-link dropdown-toggle text-white fw-bold"
									href="#"
									id="navbarDropdown"
									role="button"
									data-bs-toggle="dropdown"
									aria-expanded="false"
								>
									<i class="fas fa-user me-2"></i><?php echo $_SESSION['name']; ?>
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="../logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</nav>