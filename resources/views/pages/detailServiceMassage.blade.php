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
                    <h1 class="text-white">Dịch Vụ Massage của Spa Lea Beauty </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{URL::to('chi-tiet-dich-vu')}}">Home</a></li>
							<li>List Sản phẩm dịch vụ Massage</li>
						</ul>
					</div>

					<!-- Breadcrumb row END -->
                </div>
                		<div class="address-massage"> 
						<img src="{{asset('public/frontend/images/massage/location.png')}}" alt="dia chi cua spa lea beauty"><span>228 Nguyễn Trọng Tuyển, P8, Quận Phú Nhuận</span><br>
        	<img src="{{asset('public/frontend/images/massage/telephone.png')}}" alt="so dien thoai cua spa lea beauty"><span>090 947 99 46</span>
        </div>
            </div>
            
        </div>
       
            <!-- contact area -->
            <div class="content-area bgeffect" style="background-image:url(images/background/bg12.jpg);" data-0="background-position:0px 0px;" data-end="background-position:0px 2000px;">
            <div class="container">
                <!-- blog start -->
                <div class="blog-post blog-single">
                    <div class="dez-post-title ">
                        <h4 class="post-title"><a href="#">Massage Body Với Đá Nóng</a></h4>
                    </div>
                    <div class="dez-post-meta m-b20">
                        <ul>
                            <li class="post-date"> <i class="fa fa-calendar"></i><strong>Ngày 10 Tháng 4</strong> <span> 2016</span> </li>
                            <li class="post-author"><i class="fa fa-user"></i>Bởi <a href="#">Lea Beauty Service</a> </li>
                            <li class="post-comment"><i class="fa fa-comments"></i> <a href="#">0 Bình Luận</a> </li>
                        </ul>
                    </div>
                    <div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="{{asset('public/frontend/images/blog/default/tmp.jpg')}}" alt=""></a> </div>
                    <div class="dez-post-text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy 
                            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum 
                            is simply dummy text of the printing and typesetting  printer a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            Lorem Ipsum has been the industry's standard text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to 
                            make a type specimen  It has urvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen  
                            It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                        <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Has been the industry's standard text ever since 
                            the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimencenturies.</blockquote>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen  
                            It has urvived not only five centuries, but also the leap into electronic typesetting.</p>
                        <h5>Completely Responsive</h5>
                        <img class="alignleft" width="300" src="{{asset('public/frontend/images/blog/grid/danong.jpg')}}" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only                                 
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the releasefive centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the release</p>
                        <div class="dez-divider bg-gray-dark"></div>
                        <img class="alignright" width="300" src="images/blog/grid/pic1.jpg" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text 
                            ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only                                 
                            five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                            of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like 
                            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
                            has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                            type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                            It was popularised in the 1960s with the release</p>
                    </div>
                    <div class="dez-post-tags clear">
                        <div class="post-tags"> <a href="#">#Massage hồ chí minh </a> <a href="#">#Thư giãn </a> <a href="#">#massage đá nóng </a> <a href="#"># giảm street </a> </div>
                    </div>
                </div>
                <div class="clear" id="comment-list">
                    <div class="comments-area" id="comments">
                        <h2 class="comments-title">0 bình luận </h2>
                        <div class="clearfix">
                            <!-- comment list END -->
                            <!-- Form -->
                            <div class="comment-respond" id="respond">
                                <h4 class="comment-reply-title" id="reply-title">Gửi Ý kiến<small> <a style="display:none;" href="#" id="cancel-comment-reply-link" rel="nofollow">Cancel reply</a> </small> </h4>
                                <form class="comment-form" id="commentform" method="post" action="http://sedatelab.com/developer/donate/wp-comments-post.php">
                                    <p class="comment-form-author">
                                        <label for="author">Name <span class="required">*</span></label>
                                        <input type="text"  name="author"  placeholder="Tên" id="author">
                                    </p>
                                    <p class="comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input type="text"  placeholder="Email" name="email" id="email">
                                    </p>
                                   
                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea rows="8" name="comment" placeholder="Ý kiến của bạn" id="comment"></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" value="Gửi Bình Luận" class="submit" id="submit" name="submit">
                                    </p>
                                </form>
                            </div>
                            <!-- Form END -->
                        </div>
                    </div>
                </div>
                <!-- blog END -->
            </div>
        </div>
    </div>
    <!-- Content END-->
	    @include('template.footer')