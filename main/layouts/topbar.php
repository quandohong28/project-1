<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
	<div class="container-fluid py-1 px-3">
		<h6 class="font-weight-bolder mb-0">Xin chào!</h6>
		<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
				<div class="input-group">
					<span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
					<input type="text" class="form-control" placeholder="Tìm kiếm...">
				</div>
			</div>
			<ul class="navbar-nav justify-content-end">
				<li class="nav-item d-xl-none ps-3 d-flex align-items-center me-3">
					<a href="#" class="nav-link text-body p-0" id="iconNavbarSidenav">
						<div class="sidenav-toggler-inner">
							<i class="sidenav-toggler-line"></i>
							<i class="sidenav-toggler-line"></i>
							<i class="sidenav-toggler-line"></i>
						</div>
					</a>
				</li>
				<li class="nav-item dropdown pe-2 d-flex align-items-center">
					<a href="#" class="nav-link text-body p-0" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-bell cursor-pointer"></i>
					</a>
					<ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownNotification">
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="">
								<div class="d-flex py-1">
									<div class="my-auto">
										<img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
									</div>
									<div class="d-flex flex-column justify-content-center">
										<h6 class="text-sm font-weight-normal mb-1">
											<span class="font-weight-bold">New message</span> from Laur
										</h6>
										<p class="text-xs text-secondary mb-0 ">
											<i class="fa fa-clock me-1"></i>
											13 minutes ago
										</p>
									</div>
								</div>
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="">
								<div class="d-flex py-1">
									<div class="my-auto">
										<img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
									</div>
									<div class="d-flex flex-column justify-content-center">
										<h6 class="text-sm font-weight-normal mb-1">
											<span class="font-weight-bold">New album</span> by Travis Scott
										</h6>
										<p class="text-xs text-secondary mb-0 ">
											<i class="fa fa-clock me-1"></i>
											1 day
										</p>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a class="dropdown-item border-radius-md" href="">
								<div class="d-flex py-1">
									<div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
										<svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
											<title>credit-card</title>
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
													<g transform="translate(1716.000000, 291.000000)">
														<g transform="translate(453.000000, 454.000000)">
															<path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
															<path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
														</g>
													</g>
												</g>
											</g>
										</svg>
									</div>
									<div class="d-flex flex-column justify-content-center">
										<h6 class="text-sm font-weight-normal mb-1">
											Payment successfully completed
										</h6>
										<p class="text-xs text-secondary mb-0 ">
											<i class="fa fa-clock me-1"></i>
											2 days
										</p>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown pe-3 d-flex align-items-center ms-3">
					<a href="#" class="nav-link text-body p-0" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
						<img class="rounded-circle me-2" src="<?= $avatar_path . $employee['employee_avatar'] ?>" alt="" width="40px">
						<span class="text-success"><?= $employee['employee_name'] ?></span>
					</a>
					<ul class="dropdown-menu  dropdown-menu-end  px-2 me-sm-n4" aria-labelledby="dropdownUser">
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=profile">
								Hồ sơ cá nhân
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=job_desc">
								Mô tả công việc
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=salary">
								Phiếu báo lương
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=benefit">
								Phúc lợi
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=contract">
								Hợp đồng
							</a>
						</li>
						<hr class="border-top border-dark">
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=change_password">
								<i class="fa fa-lock me-2"></i>
								Đổi mật khẩu
							</a>
						</li>
						<li class="mb-2">
							<a class="dropdown-item border-radius-md" href="?act=setting">
								<i class="fa fa-wrench me-2"></i>
								Thiết lập
							</a>
						</li>
						<li class="mb-2">
							<button type="button" class="dropdown-item border-radius-md text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
								<i class="fa fa-right-from-bracket me-2"></i>
								Đăng xuất
							</button>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="logoutModal">Đăng xuất</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid my-3">
					Nhấn nút đăng xuất để thoát khỏi phiên làm việc hiện tại
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
				<a href="?act=logout" class="btn btn-danger">Đăng xuất</a>
			</div>
		</div>
	</div>
</div>

<script>
	var modalId = document.getElementById('modalId');

	modalId.addEventListener('show.bs.modal', function(event) {
		// Button that triggered the modal
		let button = event.relatedTarget;
		// Extract info from data-bs-* attributes
		let recipient = button.getAttribute('data-bs-whatever');

		// Use above variables to manipulate the DOM
	});
</script>