<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>
					
				<!-- Search Data -->
				<form action="/cariproduk" method="GET" class="input-group">
				    <a href="#" class="btn btn-search-back search-arrow-back"><i class="bx bx-arrow-back"></i></a>
				    <input type="text" class="form-control" name="query" id="queryInput" placeholder="Cari Produk">
				    <button type="submit" class="btn btn-search" id="searchButton"><i class="lni lni-search-alt"></i></button>
				</form>
				<script>
				    $(document).ready(function() {
				        $('#searchButton').click(function(e) {
				            e.preventDefault(); // Menghentikan perilaku default dari tag <a>

				            var query = $('#queryInput').val();
				            $.ajax({
				                url: '{{ route("cariproduk") }}',
				                method: 'GET',
				                data: { query: query },
				                success: function(response) {
				                    // Handle response here (e.g., update the DOM with search results)
				                    $('#hasilPencarian').html(response); // Misalnya, update bagian hasil pencarian di halaman
				                },
				                error: function(xhr, status, error) {
				                    console.error(xhr.responseText);
				                }
				            });
				        });
				    });
				</script>


				<div class="right-topbar ms-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						
						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
								<div class="d-flex user-box align-items-center">
									<div class="user-info">
										<p class="user-name mb-0">{{Auth::user()->name}}</p>
										<p class="designattion mb-0">{{Auth::user()->role}}</p>
									</div>
									<img src="{{ asset('syndash/codervent.com/syndash/demo/vertical/assets/images/avatars/avatar-111.png')}}" class="user-img" alt="user avatar">
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end">
									
								<a class="dropdown-item" href="/logout">
									<i class="bx bx-power-off"></i><span>Logout</span></a>
							</div>
						</li>
					
					</ul>
				</div>
			</nav>
		</header>