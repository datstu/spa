@include('template.header')
    <!-- header END -->
    <!-- Content -->
     <style>
    .top-bar .container-fluid{
        color: black !important;
    }
    .navbar-nav .active a{
    border-color: #00723d !important;
}
.navbar-nav li a{
    color: black !important;
}
@media only screen and (min-width: 1140px) {
   .bg-list-massage{
   	height: 445px;
   }
  }
  .address-massage{
  	bottom: -12px;
    position: absolute;
    margin: 20px;
    font-weight: 300;
    right: -11%;
    font-size: 18px;
    color: #000;
    font-family:Arial,Helvetica,sans-serif;
  }
  .address-massage img{
  	height: 23px;
    margin-bottom: 10px;
  }
   
  @media only screen and (max-width: 1024px) {
 .address-massage{
  	    bottom: -56px;
    right: -43px;
    font-size: 15px;
  }
 
  }
   @media only screen and (max-width: 768px) {
 .address-massage{
  	    bottom: -56px;
    right: -15px;
    font-size: 15px;
  }
 
  }
   @media only screen and (max-width: 426px) {
   	.dez-bnr-inr-entry h1{
   		margin-bottom: 100px;
   	}
   	.dez-bnr-inr-entry ul{
   		margin-bottom: -20px;
   		  font-weight: 500;
   	}
 .address-massage{
      width: 100%;
    padding-left: 15px;
    margin-bottom: 60px;
    font-weight: 500;
  }
 
  }
   @media only screen and (max-width: 336px) {
  
   
 .address-massage{
   
    margin-bottom: 73px;
   
  }
 
  }
   @media only screen and (max-width: 320px) {
   	.container-fluid .extra-nav {
    padding: 0;
    top: -16px;
   }
   }
     @media only screen and (max-width: 266px) {
  
   .container-fluid .extra-nav {
    padding: 0;
    top: -16px;
   }
    
 .address-massage{
   
    margin-bottom: 83px;
   
  }
  .dez-bnr-inr-entry ul li:last-child {
   		margin-right: 0;
   	}
 
  }
  .background-hover{
    background-color: #f3e0e4ab;
}
    </style>
    <div class="page-content bg-white tb">
        <!-- inner page banner -->
        <div class="dez-bnr-inr overlay-white-middle tb bg-list-massage" style="background-image:url(public/frontend/images/banner/bnr1.jpg); background-size:100% 100%; ">
            <div class="container">
                <div class="dez-bnr-inr-entry">
                    <h1 class="text-white">D???ch V??? Massage c???a Spa Lea Beauty </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{URL::to('chi-tiet-dich-vu')}}">Home</a></li>
							<li>List S???n ph???m d???ch v??? Massage</li>
						</ul>
					</div>

					<!-- Breadcrumb row END -->
                </div>
                		<div class="address-massage"> 
						<img src="{{asset('public/frontend/images/massage/location.png')}}" alt="dia chi cua spa lea beauty"><span>228 Nguy???n Tr???ng Tuy???n, P8, Qu???n Ph?? Nhu???n</span><br>
        	<img src="{{asset('public/frontend/images/massage/telephone.png')}}" alt="so dien thoai cua spa lea beauty"><span>090 947 99 46</span>
        </div>
            </div>
            
        </div>
       
        <!-- inner page banner END -->
        <div class="content-area bgeffect" style="background-image:url(public/frontend/images/background/bg12.jpg);" data-0="background-position:0px 0px;" data-end="background-position:0px 2000px;">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div id="masonry" class="dez-blog-grid-2">
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to('chi-tiet-dich-vu')}}"><img src="{{asset('public/frontend/images/blog/grid/pic1.jpg')}}" height="407px" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h4 class="post-title"><a href="{{URL::to('chi-tiet-dich-vu')}}">Massage Body v???i ???? n??ng</a></h4>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20-10</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to('chi-tiet-dich-vu')}}">Lea Beauty</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to('chi-tiet-dich-vu')}}">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>#TRI???T_L??NG_C??NG_NGH???_CAO_SHR t???i Lea Beauty l?? c??ng ngh??? tri???t l??ng hi???n ?????i v?? ti??n ti???n. C??ng ngh??? SHR c?? nhi???u c???i ti???n t??? th???i gian ??i???u tr???, m???c an to??n v?? ????? hi???u qu???. C??ng ngh??? tri???t l??ng SHR s??? d???ng m???c n??ng l?????ng ??nh s??ng c???i ti???n v???i b?????c s??ng d??i 695-1200nm, c?? th??? ti??u hu??? m???i t??nh tr???ng l??ng kh??c nhau v?? ng??n ch???n kh??ng cho ch??ng m???c tr??? l???i m?? kh??ng g??y ??au do ???????c trang b??? h???.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{URL::to('chi-tiet-dich-vu')}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi ti???t <i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to('chi-tiet-dich-vu')}}"><img src="{{asset('public/frontend/images/blog/grid/pic1.jpg')}}" height="407px" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h4 class="post-title"><a href="{{URL::to('chi-tiet-dich-vu')}}">Massage Body v???i ???? n??ng</a></h4>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20-10</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to('chi-tiet-dich-vu')}}">Lea Beauty</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to('chi-tiet-dich-vu')}}">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>#TRI???T_L??NG_C??NG_NGH???_CAO_SHR t???i Lea Beauty l?? c??ng ngh??? tri???t l??ng hi???n ?????i v?? ti??n ti???n. C??ng ngh??? SHR c?? nhi???u c???i ti???n t??? th???i gian ??i???u tr???, m???c an to??n v?? ????? hi???u qu???. C??ng ngh??? tri???t l??ng SHR s??? d???ng m???c n??ng l?????ng ??nh s??ng c???i ti???n v???i b?????c s??ng d??i 695-1200nm, c?? th??? ti??u hu??? m???i t??nh tr???ng l??ng kh??c nhau v?? ng??n ch???n kh??ng cho ch??ng m???c tr??? l???i m?? kh??ng g??y ??au do ???????c trang b??? h???.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{URL::to('chi-tiet-dich-vu')}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi ti???t <i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to('chi-tiet-dich-vu')}}"><img src="{{asset('public/frontend/images/blog/grid/pic1.jpg')}}" height="407px" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h4 class="post-title"><a href="{{URL::to('chi-tiet-dich-vu')}}">Massage Body v???i ???? n??ng</a></h4>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20-10</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to('chi-tiet-dich-vu')}}">Lea Beauty</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to('chi-tiet-dich-vu')}}">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>#TRI???T_L??NG_C??NG_NGH???_CAO_SHR t???i Lea Beauty l?? c??ng ngh??? tri???t l??ng hi???n ?????i v?? ti??n ti???n. C??ng ngh??? SHR c?? nhi???u c???i ti???n t??? th???i gian ??i???u tr???, m???c an to??n v?? ????? hi???u qu???. C??ng ngh??? tri???t l??ng SHR s??? d???ng m???c n??ng l?????ng ??nh s??ng c???i ti???n v???i b?????c s??ng d??i 695-1200nm, c?? th??? ti??u hu??? m???i t??nh tr???ng l??ng kh??c nhau v?? ng??n ch???n kh??ng cho ch??ng m???c tr??? l???i m?? kh??ng g??y ??au do ???????c trang b??? h???.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{URL::to('chi-tiet-dich-vu')}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi ti???t <i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to('chi-tiet-dich-vu')}}"><img src="{{asset('public/frontend/images/blog/grid/pic1.jpg')}}" height="407px" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h4 class="post-title"><a href="{{URL::to('chi-tiet-dich-vu')}}">Massage Body v???i ???? n??ng</a></h4>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20-10</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to('chi-tiet-dich-vu')}}">Lea Beauty</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to('chi-tiet-dich-vu')}}">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>#TRI???T_L??NG_C??NG_NGH???_CAO_SHR t???i Lea Beauty l?? c??ng ngh??? tri???t l??ng hi???n ?????i v?? ti??n ti???n. C??ng ngh??? SHR c?? nhi???u c???i ti???n t??? th???i gian ??i???u tr???, m???c an to??n v?? ????? hi???u qu???. C??ng ngh??? tri???t l??ng SHR s??? d???ng m???c n??ng l?????ng ??nh s??ng c???i ti???n v???i b?????c s??ng d??i 695-1200nm, c?? th??? ti??u hu??? m???i t??nh tr???ng l??ng kh??c nhau v?? ng??n ch???n kh??ng cho ch??ng m???c tr??? l???i m?? kh??ng g??y ??au do ???????c trang b??? h???.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{URL::to('chi-tiet-dich-vu')}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi ti???t <i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to('chi-tiet-dich-vu')}}"><img src="{{asset('public/frontend/images/blog/grid/pic1.jpg')}}" height="407px" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h4 class="post-title"><a href="{{URL::to('chi-tiet-dich-vu')}}">Massage Body v???i ???? n??ng</a></h4>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20-10</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to('chi-tiet-dich-vu')}}">Lea Beauty</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to('chi-tiet-dich-vu')}}">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>#TRI???T_L??NG_C??NG_NGH???_CAO_SHR t???i Lea Beauty l?? c??ng ngh??? tri???t l??ng hi???n ?????i v?? ti??n ti???n. C??ng ngh??? SHR c?? nhi???u c???i ti???n t??? th???i gian ??i???u tr???, m???c an to??n v?? ????? hi???u qu???. C??ng ngh??? tri???t l??ng SHR s??? d???ng m???c n??ng l?????ng ??nh s??ng c???i ti???n v???i b?????c s??ng d??i 695-1200nm, c?? th??? ti??u hu??? m???i t??nh tr???ng l??ng kh??c nhau v?? ng??n ch???n kh??ng cho ch??ng m???c tr??? l???i m?? kh??ng g??y ??au do ???????c trang b??? h???.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{URL::to('chi-tiet-dich-vu')}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi ti???t <i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="post card-container col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="blog-post blog-grid date-style-2">
                                <div class="dez-post-media dez-img-effect shrink background-hover"> <a href="{{URL::to('chi-tiet-dich-vu')}}"><img src="{{asset('public/frontend/images/blog/grid/pic1.jpg')}}" height="407px" alt=""></a> </div>
                                <div class="dez-post-info">
                                    <div class="dez-post-title ">
                                        <h4 class="post-title"><a href="{{URL::to('chi-tiet-dich-vu')}}">Massage Body v???i ???? n??ng</a></h4>
                                    </div>
                                    <div class="dez-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>20-10</strong> <span> 2016</span> </li>
                                            <li class="post-author"><i class="fa fa-user"></i><a href="{{URL::to('chi-tiet-dich-vu')}}">Lea Beauty</a> </li>
                                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="{{URL::to('chi-tiet-dich-vu')}}">0 Comments</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dez-post-text">
                                        <p>#TRI???T_L??NG_C??NG_NGH???_CAO_SHR t???i Lea Beauty l?? c??ng ngh??? tri???t l??ng hi???n ?????i v?? ti??n ti???n. C??ng ngh??? SHR c?? nhi???u c???i ti???n t??? th???i gian ??i???u tr???, m???c an to??n v?? ????? hi???u qu???. C??ng ngh??? tri???t l??ng SHR s??? d???ng m???c n??ng l?????ng ??nh s??ng c???i ti???n v???i b?????c s??ng d??i 695-1200nm, c?? th??? ti??u hu??? m???i t??nh tr???ng l??ng kh??c nhau v?? ng??n ch???n kh??ng cho ch??ng m???c tr??? l???i m?? kh??ng g??y ??au do ???????c trang b??? h???.</p>
                                    </div>
                                    <div class="dez-post-readmore"> <a href="{{URL::to('chi-tiet-dich-vu')}}" title="READ MORE" rel="bookmark" class="site-button-link">Xem chi ti???t <i class="fa fa-angle-double-right"></i></a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination start -->
                    <div class="pagination-bx col-lg-12 clearfix ">
                        <ul class="pagination">
                            <li class="previous"><a href="{{URL::to('chi-tiet-dich-vu')}}"><i class="fa fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="{{URL::to('chi-tiet-dich-vu')}}">1</a></li>
                            <li><a href="{{URL::to('chi-tiet-dich-vu')}}">2</a></li>
                            <li><a href="{{URL::to('chi-tiet-dich-vu')}}">3</a></li>
                            <li class="next"><a href="{{URL::to('chi-tiet-dich-vu')}}"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
	    @include('template.footer')