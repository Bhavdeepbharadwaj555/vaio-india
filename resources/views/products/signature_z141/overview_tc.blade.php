@extends('layout.app')

@section('title', 'VAIO Z SIGNATURE EDITION')

@section('product_nav')
    @include('products.signature_z141.product_nav')
@stop

@section('content')
<!--- Banner here------------------------------------>
<section class="main-banner-section" style="height: fit-content;">
    <div class="sswiper-container-horizontal"> 
		<a href="javascript:void(0);" class="swiper-slide">
			<div class="main-banner-wrapper cms-banner cms-banner-5" style="background-image:url(/images/signature_z141/VAIO_Z_SE_KV_TC.jpg)">
				<div class="main-banner" title=""></div>
			</div>
		</a>
    </div>
</section>
@push('css')

    <style>
        .cms-banner:before {
            padding-top: 37.51%;
        }

        @media( max-width: 991px) {
            .cms-banner:before {
                padding-top: 106%;
            }
        }
        .cms-banner-5 .main-banner {
            background-image: url(/images/signature_z141/VAIO_Z_SE_KV_TC.jpg);
        }
        @media(max-width: 991px) {
        .cms-banner-5 .main-banner {
            background-image: url(/images/signature_z141/VAIO_Z_SE_KV_TC_MO.jpg);
            }
        }
		
		/* CSS for Z images */
		.mb_px-10 {
			padding: 0px 0px 0px 0px;
		} 

       .mb_only {
				display:none;
        }
       .pc_only {
				display:block;
        }
		
		
		h1{
			font-size: 3rem;
			font-weight: bolder;
			letter-spacing: 2px;
		}
		
		h3{
			font-weight: bold;
			color: #000;
		}
		
		.pt-section{
			background-color: #000;
		}
		
		.pt-title {
			font-size: 2.3rem;
			font-weight: bold; 
		}
		
		.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
			/*width: calc(100% - 60px);*/
		}
		
		.pt-container-m{
			padding: 45px;
		}
		
		
		.pt-container-s{
			padding: 30px;
		}
		
		
		
		.bg-grey{
			background-color: #f0f0f0;
		}
		
		.text-white{
			color: #fff  !imporant;
		}
		
		.box{
			border:1px solid #fff;
			padding: 30px;
		}
		
		.img_maintext_vtp{
			position: absolute;
			left: 75%;
			margin-top: 50px;
		}
		
		.white-btn{
			border: 1px solid #fff;
			background-color: transparent;
			color: #fff;
			border-radius: 0;
			padding: 1rem 4rem;
		}
		
		.white-btn:hover{
			border: 1px solid #fff;
			background-color: transparent;
			color: #fff;
			opacity: 0.7;
		}
		
		a.linkWrapper{
			display: block;
			color: #fff; 
			text-align: center;
			background: url(/images/signature_z141/bg_arrow.png) no-repeat right 15px center;
			border: 1px solid #fff; 
			box-sizing: border-box;
			max-width: 300px;
			width: 100%;
			margin: auto;
		}
		
		.bg-vaio-logo{
			padding: 100px 0px 330px;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: bottom right;
		}
		
        @media(max-width: 991px) {
		.mb_px-10 {
			padding: 10px 0px 10px 0px;
		}
			.sx14_bg1 {
			background-color:#000;
			background-image: url();
			}
			.sx14_bg2 {
			background-color:#000;
			background-image: url();
			}
            .pc_only {
				display:none;
            }
            .mb_only {
				display:block;
            }
			
			
			
			
			h1{
				font-size: 2rem;
				font-weight: bolder;
				letter-spacing: 0px;
    			line-height: 1.1;
			}
			
			.pt-title{
				font-size: 1.5rem; 
    			letter-spacing: 0px !important;
			}
			
			h3{
				font-size: 1.2rem;
    			line-height: 1;
			}
			
			.pt-content-wrapper-lg, .pt-content-wrapper:not(:lang(zh-hk)){
				width: calc(100% - 30px);
			}
			
			.py-5 {
				padding-top: 2rem!important;
				padding-bottom: 2rem!important;
			}
			
			h1.my-4{
				margin-top: 0rem!important;
    			margin-bottom: 0rem!important;
			}
			
			.black-btn{				
				padding: .5rem;
				font-size: 12px;
				letter-spacing: 0px;
				width: auto;
				min-width: auto;
				max-width: 100%;
				margin-bottom: 40px;
			}
			
			.box{ 
   				padding: 15px;
			}
			
			.pt-container-m{				
    			padding: 30px;
			}
			
			
			.img_maintext_vtp{
				position: relative;
				left: 0;
				margin-top: 30px;
			}
			
			
			.bg-vaio-logo{				
    			padding: 50px 0px 150px;
			}
		
		
			
			
			
        }

    </style>

@endpush 

<!--
	<section class="pt-section text-center py-5" style="background-color: #0b122e;" >
		<div class="container">
        <a href="https://vaio.nexstmall.com/zh_hk/vaio/sx14/vaio-sx14-14-inch-laptop-kachiiro-color-windows-10-pro-vaio-5th-anniversary-special-edition.html?utm_source=website&utm_medium=launch&utm_campaign=kachiiro&utm_content=buynow
" class="btn" style="color: #dbad7a !important; border: 1px solid; padding: 1rem 5rem;" target="_blank">立即購買勝色限定版</a>
		</div>                        
	</section>

-->


<!---Page content here--------------------------------------------->
	<section class="pt-section d-flex flex-wrap text-center">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 py-5 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-left"> 
							<p class="pt-content text-white">
								VAIO旗艦系列、全球首部*全碳纖機身VAIO® Z隆重登場！「極尚版」VAIO® Z | SIGNATURE EDITION將獨特材質融合頂尖創新智慧，完美釋放震撼效能，為屹立筆記型電腦領域20年的VAIO品牌寫下歷史新一頁。
							</p>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 


		<!--
	<section class="section-menu">
        <div class="main-content container ">
            <div class="d-flex flex-wrap nav-pt px-4 p-lg-0">
                <a href="#pt-1" class="col-6 col-lg-4 selling-pt py-4 text-center active ">
                    <h2>強勁遊戲效能</h2>
                </a>
                
                <a href="#pt-3" class="col-6 col-lg-4 selling-pt py-4 text-center ">
                    <h2>自然傾斜角度</h2>
                </a> 
				<a href="#pt-4" class="col-6 col-lg-4 selling-pt py-4 text-center ">
                    <h2>全天候續航力</h2>
                </a>  
				
            </div>
        </div>
   </section>
-->





	<section class="pt-section d-flex flex-wrap text-center bg-vaio-logo" style="background-image: url('/images/signature_z141/carbon_bg.jpg')">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<div class="pt-content mx-auto">
								<h2 class="pt-title my-4 my-lg-4 text-white">綻放全碳纖魅力</h2> 							
								<p class="pt-content mt-4 text-white">
								 作為系列一大賣點，VAIO® Z機身貫徹全碳纖設計，美感渾然天成。而碳纖魅力並不止於視覺，機身獨特的物料亦為每部VAIO® Z添上獨一無二的觸感。
								</p> 
								 
							</div>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 



 
		
	<section class="pt-section d-flex flex-wrap text-center text-white">
	 
	<div class="container">   
		<div class="row">
			
		
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph01.jpg" >
		</div>


		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph02.jpg" >
		</div>
			
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph03.jpg" >
		</div>
 
		<div class="col-12 col-lg-6 my-3">
		   <img src="/images/signature_z141/area1_ph04.png" >
		</div>	
			 
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 	







		
<section class="pt-section d-flex flex-wrap text-center text-white" style="padding-top: 0px;">
	
	<div class="fs-0 my-4 my-lg-5" style="margin-top: 0px !important;">
		<img src="/images/signature_z141/area2_bg.jpg"> 
		<img src="/images/signature_z141/img_maintext_vtp.png" class="img_maintext_vtp" > 
	</div> 

	<div class="container">   
		<div class="row">
		
		<div class="col-12 py-5 order-1 order-lg-2" >
			<h1 class="my-4 my-lg-3">5.00GHz處理器挑戰極速界限</h1>
			
			<div class="pt-content-wrapper-lg mx-auto text-left"> 
				<p class="pt-content text-white mt-4">
					VAIO® Z特意搭載第11代Intel® Core ™ H系列處理器中速度高達5.00GHz的特別版Core i7-11375H，務求突破VAIO一直引以為傲的速度界限，展現無與倫比的表現效能。
				</p>
			</div>
			 
		</div>	
  
		<!--
		<div class="col-12 my-4">
		   <img src="/images/signature_z141/area2_logo.png"  >
		</div>
		-->
		
		
		
		<div class="col-12 col-lg-6 my-4">
		   <img src="/images/signature_z141/area2_graph01.jpg" >
		</div>


		<div class="col-12 col-lg-6 my-4">
		   <img src="/images/signature_z141/area2_graph02.jpg" >
		</div>

			
	 </div><!-- row -->
		 
	</div><!--container--->
 </section> 	




	<section class="pt-section d-flex flex-wrap text-center" style="background-color: #2F2F2F;">
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center  h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<h2 class="pt-title my-4 my-lg-4 text-white">甚麼是VAIO® TruePerformance？</h2>
							<p class="pt-content-wrapper-lg mx-auto text-white">
								VAIO® TruePerformance為VAIO自身研發的專屬技術。透過加強電量及改良散熱機制，處理器效能得以進一步提升，並長時間維持於巔峰狀態。
							</p>
							<!--<a href="" class="btn white-btn mt-3">了解更多</a> -->
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 
 
 
 
	<section class="pt-section d-flex flex-wrap text-center" >
		
		<div class="container">   
			<div class="row"> 
				<div class="col-12 order-1 order-lg-2 ">
					<div class="d-flex flex-wrap flex-column align-items-center h-100"> 
						<div class="pt-content-wrapper-lg mx-auto text-center"> 
							<div class="pt-content mx-auto">
								
								<img src="/images/signature_z141/basemodel_main.png">
								 						
								<p class="pt-content mt-5 text-white">
								 詳情請參閱本系列「產品規格」頁面。
								</p> 
								
								<a href="{{ route('product.overview_z') }}" class="btn white-btn linkWrapper mt-5">產品規格</a>
								 
							</div>
						</div>
					</div>
				</div> 
				
			</div><!-- row -->
		</div><!--container -->
		
    </section> 


 
 
    <div class="support-center-wrap" style="background: #000;">
        <div class="container"> 
            <div class="row  ">
                <div class="row no-gutters my-3 col-12 mx-auto ml-0">

                    <p class="spec-item-name text-white" style="font-size: 0.8rem;">
                        Intel, Intel圖誌, the Intel Inside圖誌和Intel Core均是Intel Corporation在美國或其他國家的商標。<br>
                        "VAIO"商標使用權是獲得VAIO Corporation授權使用。
                    </p>

                </div>
            </div>
        </div>
    </div>


<!---Page content end here--------------------------------------------->

@stop

@section('css')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/product.css') }}" />
@stop

@section('js')
    <script src="{{ asset('js/product.js') }}"></script>
@stop
