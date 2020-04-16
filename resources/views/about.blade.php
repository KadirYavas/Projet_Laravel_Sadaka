@extends('layouts/master')

@section('content')

<!-- NAVBAR
    ================================================== -->

    <header class="main-header">
        
    
        <nav class="navbar navbar-static-top">

            <div class="navbar-top">

              <div class="container">
                  <div class="row">

                    <div class="col-sm-6 col-xs-12">

                        <ul class="list-unstyled list-inline header-contact">
                            <li> <i class="fa fa-phone"></i> <a href="tel:">+212 658 986 213 </a> </li>
                             <li> <i class="fa fa-envelope"></i> <a href="mailto:contact@sadaka.org">contact@sadaka.org</a> </li>
                       </ul> <!-- /.header-contact  -->
                      
                    </div>

                    <div class="col-sm-6 col-xs-12 text-right">

                        <ul class="list-unstyled list-inline header-social">

                            <li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-google"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa-youtube"></i>  </a> </li>
                            <li> <a href="#" target="_blank"> <i class="fa fa fa-pinterest-p"></i>  </a> </li>
                       </ul> <!-- /.header-social  -->
                      
                    </div>


                  </div>
              </div>

            </div>

            <div class="navbar-main">
              
              <div class="container">

                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                  </button>
                  
                  <a class="navbar-brand" href="index.html"><img src="{{asset('/images/sadaka-logo.png')}}" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="{{route('index')}}">HOME</a></li>
                    <li class="has-child"><a class="is-active" href="#">ABOUT</a>
						<ul class="submenu">
						  <li class="submenu-item"><a href="{{route('about')}}">ABOUT</a></li>
						  @if (Auth::id() == 1)
							  
						  <li class="submenu-item"><a href="{{route('AboutBDD')}}">BDD About</a></li>
						  @endif
					   </ul>
					  </li>
                    <li class="has-child"><a href="#">CAUSES</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="{{route('causes')}}">Causes list </a></li>
                         <li class="submenu-item"><a href="{{route('causes-single')}}">Single cause </a></li>
                         <li class="submenu-item"><a href="{{route('causes-single')}}">Single cause </a></li>
                         <li class="submenu-item"><a href="{{route('causes-single')}}">Single cause </a></li>
                      </ul>

                    </li>
                    <li class="has-child"><a href="#">GALLERY</a>
						<ul class="submenu">
						  <li class="submenu-item"><a href="{{route('gallery')}}">GALLERY</a></li>
						  @if (Auth::id() == 1)
							  
						  <li class="submenu-item"><a href="{{route('GalleryBDD')}}">BDD Gallery</a></li>
						  @endif
					   </ul>
					  </li>
                    <li><a href="{{route('contact')}}">CONTACT</a></li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">ABOUT US <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row fadeIn animated">

				<div class="col-md-6">

					<img src="{{asset('/images/about-us.jpg')}}" alt="" class="img-responsive">

				</div>

				<div class="col-md-6">

					<h2 class="title-style-2">ABOUT SADAKA <span class="title-under"></span></h2>

					@foreach ($about as $item)
						<p>{{$item->texte}}</p>
					@endforeach
					
				</div>

			</div> <!-- /.row -->

			<div class="section-home about-us">


			            <div class="row">

			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="{{asset('/images/icons/our-mission-icon.png')}}" alt="">
			                        </div>
			                        <h3 class="col-title">our mission</h3>
			                        <div class="col-details">

			                          <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>


			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="{{asset('/images/icons/make-donation-icon.png')}}" alt="">
			                        </div>
			                        <h3 class="col-title">Make donations</h3>
			                        <div class="col-details">

			                          <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>


			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="{{asset('/images/icons/help-icon.png')}}" alt="">
			                        </div>
			                        <h3 class="col-title">Help & support</h3>
			                        <div class="col-details">

			                          <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>


			                <div class="col-md-3 col-sm-6">
			                
			                  <div class="about-us-col">

			                        <div class="col-icon-wrapper">
			                          <img src="{{asset('/images/icons/programs-icon.png')}}" alt="">
			                        </div>
			                        <h3 class="col-title">our programs</h3>
			                        <div class="col-details">

			                          <p>Lorem ipsum dolor sit amet consect adipisscin elit proin vel lectus ut eta esami vera dolor sit amet consect</p>
			                          
			                        </div>
			                        <a href="#" class="btn btn-primary"> Read more </a>
			                    
			                  </div>
			                  
			                </div>
			                

			                
			            </div> <!-- /.row -->

			      
			    </div> 

		</div> <!-- /.about-us -->


	    <div class="our-team animate-onscroll fadeIn">

	        <div class="container">

	            <h2 class="title-style-1">Our Team <span class="title-under"></span></h2>

	            <div class="row">

	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="{{asset('/images/team/member-1.jpg')}}" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">Robert C. Numbers</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>

	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="{{asset('/images/team/member-3.jpg')}}" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">Marjorie R. Echevarria</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>


	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="{{asset('/images/team/member-4.jpg')}}" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">Allison J. Falls</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>


	                <div class="col-md-3 col-sm-6">

	                    <div class="team-member">

	                        <div class="thumnail">

	                            <img src="{{asset('/images/team/member-2.jpg')}}" alt="" class="cause-img">
	                            
	                        </div>



	                        <h4 class="member-name"><a href="#">Bryan B. Stevens</a></h4>

	                        <div class="member-position">
	                            CO-FOUNDER
	                        </div>

	                        <div class="btn-holder">

	                          <a href="#" class="btn"> <i class="fa fa-envelope"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-facebook"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-google"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-twitter"></i> </a>
	                          <a href="#" class="btn"> <i class="fa fa-linkedin"></i> </a>
	                          
	                        </div>

	                        

	                    </div> <!-- /.team-member -->
	                    
	                </div>

	            </div> <!-- /.row -->

	        </div>

	    </div>
		


	</div>


    <footer class="main-footer">

        <div class="footer-top">
            
        </div>


        <div class="footer-main">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">About us <span class="title-under"></span></h4>

                            <div class="footer-content">
								
								@foreach ($contact as $item)
									<p>{{$item->texte}}</p>
								@endforeach

                            </div>
                            
                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">LAST TWEETS <span class="title-under"></span></h4>

                            <div class="footer-content">
                                <ul class="tweets list-unstyled">
                                    @foreach ($tweet as $item)
                                <li class="tweet"> 

                                  {{$item->texte}} 

                              </li>
                                @endforeach

                                </ul>
                            </div>
                            
                        </div>

                    </div>


                    <div class="col-md-4">

                        <div class="footer-col">

                            <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                            <div class="footer-content">

                                <div class="footer-form" >
                                    
                                    <form action="{{route('email')}}" method="POST">
										@csrf
										  <div class="form-group">
											  <input type="text" name="name" class="form-control" placeholder="Name" required>
										  </div>
	  
										   <div class="form-group">
											  <input type="email" name="email" class="form-control" placeholder="E-mail" required>
										  </div>
	  
										  <div class="form-group">
											  <textarea name="message" class="form-control" placeholder="Message" required></textarea>
										  </div>
	  
										  <div class="form-group alerts">
						  
											  <div class="alert alert-success" role="alert">
												
											  </div>
	  
											  <div class="alert alert-danger" role="alert">
												
											  </div>
											  
										  </div>
											  <button type="submit" class="btn btn-submit pull-right">Send message</button>
										  
									  </form>

                                </div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="clearfix"></div>



                </div>
                
                
            </div>

            
        </div>

        <div class="footer-bottom">

            <div class="container text-right">
                Sadaka @ copyrights 2015 - by <a href="http://www.ouarmedia.com" target="_blank">Ouarmedia</a>
            </div>
        </div>
        
    </footer>


@endsection