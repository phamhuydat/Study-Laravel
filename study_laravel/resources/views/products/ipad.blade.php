<x-layout title="Home">
	<section class="main">
        <article class="product-full">
            <div class="grid">
                <h1 class="product-full__tile">iPad</h1>
                <article class="product-full__banner">
                    <div class="slider">
                        <div class="slider-prev">
                            <i class="fa fa-angle-left slider-prev__icon"></i>
                        </div>
                        <ul class="slider-dots">
                            <li class="slider-dot-item active" data-index="0"></li>
                            <li class="slider-dot-item" data-index="1"></li>
                        </ul>
                        <div class="slider-wrapper">
                            <div class="slider-main">
                                <div class="banner__item">
                                    <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img" src="/frontend/img/BANNER/iPad/danh mục iphone ipad t4-10.jpeg" alt="banner"></a>
                                </div>
                                <div class="banner__item">
                                    <a class="banner__item-link" href="" target="_blank"><img class="banner__item-img" src="/frontend/img/BANNER/iPad/danh mục iphone ipad t4-18.jpeg" alt="banner"></a>
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
                            <a href="~/Home/Ipad" class="product-list__link ">Tất cả</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Ipad?type=ipad pro m1" class="product-list__link">iPad Pro M1</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Ipad?type=ipad pro m2" class="product-list__link ">iPad Pro M2</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Ipad?type=ipad air" class="product-list__link ">iPad Air</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Ipad?type=ipad gen 9" class="product-list__link" >iPad Gen 9th</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Ipad?type=ipad gen 10" class="product-list__link">iPad Gen 10th</a>
                        </li>
                        <li class="product-list__item">
                            <a href="~/Home/Ipad?type=ipad mini" class="product-list__link">iPad Mini</a>
                        </li>
                    </ul>
                    <form action="#" method="post">
                        <select class="product-sorting" onchange="handleFilter(value);">
                            <option value="" >Thứ tự hiển thị</option>
                            <option value="1" >Giá cao đến thấp</option>
                            <option value="2" >Giá thấp đến cao</option>
                        </select>
                    </form>
                </article>
    
                <article class="product-full-item-detail">
                    <div class="grid__row">
                        @foreach ($ipad as $item)
                            <div class="grid__column-4 mt-3">
                                <div class="home-product-item">
                                    <div class="home-product__img">
                                        <a class="home-product__img-link" href="{{URL::to('/detail/'. $item->id)}}">
                                            <img src="{{ URL::to( 'frontend/'.$item->image ) }}" />
                                        </a>
                                    </div>
                                    <div class="home-product__detail">
                                        <h3 class="home-product__detail-name"><a href="{{URL::to('/detail/'. $item->id)}}">{{ $item->name_product}}</a></h3>
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
                                {{$ipad->links()}}
                            </li>
                        </ul>
                    </div>
                </article>
    
                <article class="product-full-description">
                    <div class="product-full-description__container">
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">iPad là gì ?</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    iPad là máy tính bảng do Apple Inc. phát triển. Được công bố vào ngày 27 tháng 1 năm 2010, thiết bị này tạo ra một phân loại mới giữa điện thoại thông minh và máy tính xách tay.
                                </p>
                                <br>
                                <p>
                                    Tương tự về tính năng so với thiết bị nhỏ và yếu hơn là iPhone hoặc iPod touch, iPad cũng hoạt động trên cùng hệ điều hành iPhone OS đã được sửa đổi với giao diện được thiết kế lại để phù hợp với màn hình lớn.
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Tại sao nên mua iPad ?</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    iPad được trang bị các tính năng tiện ích để phục vụ công việc, nhu cầu giải trí hiệu quả. Trên thực tế vai trò của iPad trong học tập hay làm việc cũng không hề nhỏ nhờ các tính năng:
                                </p>
                                <br>
                                <p>
                                    Thiết kế hiện đại và sang chảnh, nhiều màu sắc đa dạng: Xám, Bạc, Vàng Hồng, Xanh Green, Xanh Blue, Tím,..
                                    Gọn nhẹ chỉ khoảng 300g. Bạn có thể mang theo mọi nơi một cách thuận tiện.
                                    Màn hình sắc nét, rộng, với cảm ứng đa điểm, góc nhìn thoáng giúp cho việc xem phim, đọc báo hay chơi game dễ dàng và thú vị hơn.
                                    Kết nối mạng 4G, 5G mọi lúc mọi nơi, phục vụ nhu cầu sử dụng một cách nhanh nhất.
                                    Thời lượng pin lên đến 10 tiếng thoải mái sử dụng cả ngày, mang đến trải nghiệm trọn vẹn nhất.
                                    Hơn một triệu ứng dụng được thiết kế riêng cho iPad để làm việc hiệu quả, trò chơi, du lịch, hình ảnh, AR, học tập, v.v.
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">Mua iPad giá tốt nhất tại ShopDunk</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    ShopDunk là đại lý uỷ quyền Apple tại Việt Nam với hệ thống 40 cửa hàng trên toàn quốc, trong đó có 11 Mono Store.
                                    Đến nay, ShopDunk đã trở thành điểm dừng chân lý tưởng cho iFans nói chung và thế hệ GenZ nói riêng bởi độ chuẩn
                                    và chất. Không gian thiết kế và bài trí sản phẩm theo tiêu chuẩn của Apple, chia theo từng khu vực rõ ràng, bàn trải
                                    nghiệm rộng rãi và đầy đủ sản phẩm.
                                </p>
                                <br>
                                <p>
                                    Tại ShopDunk luôn có mức giá tốt nhất cho người dùng cùng với nhiều chương trình hấp dẫn diễn ra liên tục trong tháng.
                                    Hãy đến với chúng tôi và trải nghiệm ngay những mẫu iPad mới nhất với đội ngũ chuyên viên tư vấn được đào tạo bài bản từ
                                    Apple, sẵn sàng hỗ trợ bạn về sản phẩm, kỹ thuật hay các công nghệ mới nhất từ Apple.
                                </p>
                            </div>
                        </div>
                        <div class="product-full-description__item">
                            <h1 class="product-full-description__item-title">ShopDunk cung cấp những dòng iPad nào ?</h1>
                            <div class="product-full-description__item-detail">
                                <p>
                                    ShopDunk là đại lý uỷ quyền Apple tại Việt Nam với hệ thống 40 cửa hàng trên toàn quốc, trong đó có 11 Mono Store.
                                    Đến nay, ShopDunk đã trở thành điểm dừng chân lý tưởng cho iFans nói chung và thế hệ GenZ nói riêng bởi độ chuẩn
                                    và chất. Không gian thiết kế và bài trí sản phẩm theo tiêu chuẩn của Apple, chia theo từng khu vực rõ ràng, bàn trải
                                    nghiệm rộng rãi và đầy đủ sản phẩm.
                                </p>
                                <br>
                                <p>
                                    Tại ShopDunk luôn có mức giá tốt nhất cho người dùng cùng với nhiều chương trình hấp dẫn diễn ra liên tục trong tháng.
                                    Hãy đến với chúng tôi và trải nghiệm ngay những mẫu iPad mới nhất với đội ngũ chuyên viên tư vấn được đào tạo bài bản từ
                                    Apple, sẵn sàng hỗ trợ bạn về sản phẩm, kỹ thuật hay các công nghệ mới nhất từ Apple.
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
