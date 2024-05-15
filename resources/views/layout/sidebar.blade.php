		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div class="">
					<img src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/logo-icon.png')}}" class="logo-icon-2" alt="" />
				</div>
				<div>
					<h4 class="logo-text">BookCashier</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>
			<ul class="metismenu" id="menu">
				@if(Auth::user()->role == 'Admin')
				<li class="menu-label">Dashboard</li>
				<li>
					<a href="/">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="menu-label">Data Pelanggan</li>
				<li>
					<a href="/pelanggan">
						<div class="parent-icon icon-color-5"><i class="fadeIn animated bx bx-user"></i>
						</div>
						<div class="menu-title">Data Pelanggan</div>
					</a>
				</li>
				
				<li class="menu-label">Data Produk</li>
				<li>
					<a href="/produk">
						<div class="parent-icon icon-color-2"><i class="fadeIn animated bx bx-package"></i>
						</div>
						<div class="menu-title">Data Produk</div>
					</a>
				</li>

				<li class="menu-label">Data Penjualan</li>
				<li>
					<a href="/penjualan">
						<div class="parent-icon icon-color-4"><i class="fadeIn animated bx bx-bar-chart-alt-2"></i>
						</div>
						<div class="menu-title">Data Penjualan</div>
					</a>
				</li>

				<li class="menu-label">Data Petugas</li>
				<li>
					<a href="/datapetugas">
						<div class="parent-icon icon-color-3"><i class="fadeIn animated bx bx-user-plus"></i>
						</div>
						<div class="menu-title">Data Petugas</div>
					</a>
				</li>
				@endif
			
				@if(Auth::user()->role == 'Petugas')
				<li class="menu-label">Dashboard</li>
				<li>
					<a href="/welcomep">
						<div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="menu-label">Data Pelanggan</li>
				<li>
					<a href="/pelanggan">
						<div class="parent-icon icon-color-5"><i class="fadeIn animated bx bx-user"></i>
						</div>
						<div class="menu-title">Data Pelanggan</div>
					</a>
				</li>

				<li class="menu-label">Data Produk</li>
				<li>
					<a href="/produk">
						<div class="parent-icon icon-color-2"><i class="fadeIn animated bx bx-package"></i>
						</div>
						<div class="menu-title">Data Produk</div>
					</a>
				</li>
			    
			    <li class="menu-label">Data Penjualan</li>
				<li>
					<a href="/penjualan">
						<div class="parent-icon icon-color-4"><i class="fadeIn animated bx bx-bar-chart-alt-2"></i>
						</div>
						<div class="menu-title">Data Penjualan</div>
					</a>
				</li>
				
				@endif

			</ul>
		</div>
