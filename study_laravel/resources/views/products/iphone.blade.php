	<x-layout title="Home">
		<section class="main">
			<article class="product-full">
				<div class="grid">
					<h1 class="product-full__tile">iPhone</h1>
					<article class="product-full__banner">
						<div class="slider">
							<div class="slider-prev">
								<i class="fa fa-angle-left slider-prev__icon"></i>
							</div>
							
							<ul class="slider-dots">
								<li class="slider-dot-item active" data-index="0"></li>
								<li class="slider-dot-item" data-index="1"></li>
								<li class="slider-dot-item" data-index="2"></li>
							</ul>
							<div class="slider-wrapper">
								<div class="slider-main">
									<div class="banner__item">
										<a class="banner__item-link" href="" target="_blank"><img class="banner__item-img" src="frontend/img/BANNER/iPhone/danh mục ip 13-T4-02.jpeg" alt="banner"></a>
									</div>
									<div class="banner__item">
										<a class="banner__item-link" href="" target="_blank"><img class="banner__item-img" src="frontend/img/BANNER/iPhone/danh mục iphone ipad-10.jpg" alt="banner"></a>
									</div>
									<div class="banner__item">
										<a class="banner__item-link" href="" target="_blank"><img class="banner__item-img" src="frontend/img/BANNER/iPhone/ip14 yellow_danh mục (1).jpeg" alt="banner"></a>
									</div>
								</div>
							</div>
							<div class="slider-next">
								<i class="fa fa-angle-right slider-next__icon"></i>
							</div>
						</div>
					</article>

					<article class="product-sort">
						<ul class="product-list">
							<li class="product-list__item product-item--active">
								<a href="" class="product-list__link ">Tất cả</a>
							</li>
							<li class="product-list__item">
								<a href="" class="product-list__link ">iPhone 14 series</a>
							</li>
							<li class="product-list__item">
								<a href="" class="product-list__link ">iPhone 13 series</a>
							</li>
							<li class="product-list__item">
								<a href="" class="product-list__link ">iPhone 12 series</a>
							</li>
							<li class="product-list__item">
								<a href="" class="product-list__link ">iPhone 11 series</a>
							</li>
						</ul>
						<form action="#" method="post">
							@csrf
							<select class="product-sorting">
								<option value="">Thứ tự hiển thị</option>
								<option value="1" >Giá cao đến thấp</option>
								<option value="2" >Giá thấp đến cao</option>
							</select>
						</form>
					</article>

					<article class="product-full-item-detail">
						<div class="grid__row">
							@foreach ($iphone as $item)
								<div class="grid__column-4 mt-3">
									<div class="home-product-item">
										<div class="home-product__img">
											<a class="home-product__img-link" href="{{ URL::to('/detail/'.$item->id) }}">
												<img src="{{ URL::to( 'frontend/'.$item->image )}}" />
											</a>
										</div>
										<div class="home-product__detail">
											<h3 class="home-product__detail-name"><a href="{{ URL::to('/detail/'.$item->id) }}">{{ $item->name_product }}</a></h3>
											<div class="home-product__detail-price">
												<span class="home-product__detail-price-new">{{ number_format($item->price, 0, ',', '.') . ' ' . '₫' }}</span>
												<span class="home-product__detail-price-old">{{ number_format($item->discount, 0, ',', '.') . ' ' . '₫' }}</span>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
						<div class="product-full-item-detail__number-page">
							<ul class="number-page__list">
								<li class="number-page__item">
									{{$iphone->links()}}
								</li>
							</ul>
						</div>
					</article>
		
					<article class="product-full-description">
						<div class="product-full-description__container">
							<div class="product-full-description__item">
								<h1 class="product-full-description__item-title">Lịch sử hình thành và phát triển của iPhone</h1>
								<div class="product-full-description__item-detail">
									<p>
										iPhone là dòng điện thoại thông minh được phát triển từ Apple Inc, được ra mắt lần đầu tiên bởi Steve Jobs và mở bán năm 2007.
										Bên cạnh tính năng của một máy điện thoại thông thường, iPhone còn được trang bị màn hình cảm ứng, camera, khả năng chơi nhạc
										và chiếu phim, trình duyệt web... Phiên bản thứ hai là iPhone 3G ra mắt tháng 7 năm 2008, được trang bị thêm hệ thống định vị
										toàn cầu, mạng 3G tốc độ cao. Trải qua 15 năm tính đến nay đã có đến 34 mẫu iPhone được sản xuất từ dòng 2G cho đến
										iPhone 13 Pro Max và Apple là một trong những thương hiệu điện thoại được yêu thích và sử dụng phổ biến nhất trên thế giới.
									</p>
								</div>
							</div>
							<div class="product-full-description__item">
								<h1 class="product-full-description__item-title">iPhone có những mã máy nào?</h1>
								<div class="product-full-description__item-detail">
									<p>
										Những chiếc iPhone do Apple phân phối tại thị trường nước nào thì sẽ mang mã của nước đó. Ví dụ: LL: Mỹ, ZA: Singapore,
										TH: Thái Lan, JA: Nhật Bản, Những mã này xuất hiện tại Việt Nam đều là hàng xách tay, nhập khẩu. Còn tại Việt Nam,
										iPhone sẽ được mang mã VN/A. Tất cả các mã này đều là hàng chính hãng phân phối của Apple. Lợi thế khi bạn sử dụng
										iPhone mã VN/A đó là chế độ bảo hành tốt hơn với 12 tháng theo tiêu chuẩn của Apple. iPhone của bạn sẽ được bảo hành tại
										tất cả các trung tâm bảo hành Apple tại Việt Nam, một số mã quốc tế bị từ chối bảo hành và phải đem ra các
										trung tâm bảo hành Apple tại nước ngoài. Rất là phức tạp đúng không nào?
									</p>
								</div>
							</div>
							<div class="product-full-description__item">
								<h1 class="product-full-description__item-title">Apple đã khai tử những dòng iPhone nào?</h1>
								<div class="product-full-description__item-detail">
									<p>
										Tính đến nay, Apple đã khai tử (ngừng sản xuất) các dòng iPhone đời cũ bao gồm: iPhone 2G, iPhone 3G, iPhone 4,
										iPhone 5 series, iPhone 6 series, iPhone 7 series, iPhone 8 series, iPhone X series, iPhone SE (thế hệ 1),
										iPhone SE (thế hệ 2), iPhone 11 Pro, iPhone 11 Pro Max, iPhone 12 Pro, iPhone 12 Pro Max.
									</p>
								</div>
							</div>
							<div class="product-full-description__item">
								<h1 class="product-full-description__item-title">ShopDunk cung cấp những dòng iPhone nào?</h1>
								<div class="product-full-description__item-detail">
									<p>
										ShopDunk là một trong những thương hiệu bán lẻ được Apple uỷ quyền tại Việt Nam, đáp ứng được các yêu cầu khắt khe từ Apple
										như: dịch vụ kinh doanh, dịch vụ chăm sóc khách hàng, vị trí đặt cửa hàng...
									</p>
									<p>
										Những chiếc iPhone do Apple Việt Nam phân phối tại nước ta đều mang mã VN/A và được bảo hành 12 tháng theo theo tiêu chuẩn
										tại các trung tâm bảo hành Apple. Các dòng iPhone được cung cấp tại ShopDunk gồm: iPhone 11, iPhone 12, iPhone 12 mini, iPhone 13 series, iPhone SE 3 (2022).
										Phone 11 được trang bị màn hình LCD và không hỗ trợ HDR, nâng cấp với chế độ chụp đêm Night Mode cùng Deep Fusion. Camera trước được nâng độ phân giải từ 7MP
										lên thành 12MP. Được trang bị chip A13 Bionic và hỗ trợ công nghệ WiFi 6. Với 6 màu sắc bắt mắt: Đen, Trắng, Xanh Mint, Đỏ, Vàng, Tím.
									</p>
									<p>
										iPhone 12 mini, iPhone 12 là những chiếc iPhone đầu tiên của hãng hỗ trợ mạng di động 5G. Apple đã thay đổi thiết kế của
										iPhone từ khung viền bo tròn thành khung viền vuông vức như những dòng iPhone 5 và sử dụng mặt kính trước Ceramic Shield.
										Ngoài ra, hộp của thiết bị iPhone 12 và các dòng iPhone sau đều đã được loại bỏ củ sạc.
									</p>
									<p>
										Tháng 9 năm 2021, Apple đã chính thức ra mắt 4 chiếc iPhone mới của hãng bao gồm iPhone 13 mini, iPhone 13, iPhone 13 Pro,
										iPhone 13 Pro Max. Các cụm Camera trên bộ 4 iPhone mới của Apple đều to hơn một chút so với thế hệ tiền nhiệm
										và phần tai thỏ ở mặt trước cũng được làm nhỏ hơn. Đối với iPhone 13 Pro và iPhone 13 Pro Max, Apple đã nâng cấp bộ nhớ
										tối đa của máy lên đến 1TB. Đi cùng với đó là tần số quét của dòng iPhone 13 cũng đã được nâng cấp lên 120Hz.
									</p>
									<p>
										iPhone SE thế hệ 3 (còn gọi là iPhone SE 3 hay iPhone SE 2022) được Apple công bố vào tháng 3 năm 2022, kế nhiệm iPhone SE 2.
										Đây là một phần của iPhone thế hệ thứ 15, cùng với iPhone 13 và iPhone 13 Pro. Thế hệ thứ 3 có kích thước và yếu tố hình thức
										của thế hệ trước, trong khi các thành phần phần cứng bên trong được lựa chọn từ dòng iPhone 13, bao gồm cả hệ thống trên chip
										A15 Bionic.
									</p>
								</div>
							</div>
							<div class="product-full-description__item">
								<h1 class="product-full-description__item-title">Mua iPhone giá tốt nhất tại ShopDunk</h1>
								<div class="product-full-description__item-detail">
									<p>
										ShopDunk là đại lý uỷ quyền Apple tại Việt Nam với hệ thống 40 cửa hàng trên toàn quốc, trong đó có 11 Mono Store.
										Đến nay, ShopDunk đã trở thành điểm dừng chân lý tưởng cho iFans nói chung và thế hệ GenZ nói riêng bởi độ chuẩn và chất.
										Không gian thiết kế và bài trí sản phẩm theo tiêu chuẩn của Apple, chia theo từng khu vực rõ ràng, bàn trải nghiệm rộng rãi và đầy đủ sản phẩm.
										<br>
										Tại ShopDunk luôn có mức giá tốt nhất cho người dùng cùng với nhiều chương trình hấp dẫn diễn ra liên tục trong tháng. Hãy đến với chúng tôi và trải nghiệm
										ngay những mẫu iPhone mới nhất với đội ngũ chuyên viên tư vấn được đào tạo bài bản từ Apple, sẵn sàng hỗ trợ bạn về sản phẩm, kỹ thuật hay các công nghệ mới nhất từ Apple.
									</p>
								</div>
							</div>
						</div>
						<div class="read-more-link"></div>
					</article>
				</div>
			</article>
		</section>
	</x-layout>
