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
                  
                  <a class="navbar-brand" href="/"><img src="{{asset('/images/sadaka-logo.png')}}" alt=""></a>
                  
                </div>

                <div id="navbar" class="navbar-collapse collapse pull-right">

                  <ul class="nav navbar-nav">

                    <li><a href="{{route('index')}}">HOME</a></li>
                    <li><a href="{{route('about')}}">ABOUT</a></li>

                    <li class="has-child"><a href="#">CAUSES</a>

                      <ul class="submenu">
                         <li class="submenu-item"><a href="{{route('causes')}}">Causes list </a></li>
                         <li class="submenu-item"><a href="{{route('causes-single')}}">Single cause </a></li>
                         <li class="submenu-item"><a href="{{route('causes-single')}}">Single cause </a></li>
                         <li class="submenu-item"><a href="{{route('causes-single')}}">Single cause </a></li>
                      </ul>

                    </li>
                    <li><a class="is-active" href="{{route('gallery')}}">GALLERY</a></li>

                    <li><a href="{{route('contact')}}">CONTACT</a></li>


                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">GALLERY <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container gallery fadeIn animated">

			<div class="row">
				

					
                    
                    @foreach ($gallery as $item)
                    <a href="{{asset('images/'.$item->photo)}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{('images/'.$item->photo)}}" height="400px" width="150px" alt="">

						<span class="on-hover">
							<span class="hover-caption">{{$item->titre}}</span>
						</span>

					</a>
                    @endforeach
                        
                    {{-- <a href="{{asset('/images/gallery/7610291856_931fb9f461_k.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/7610291856_931fb9f461_k.jpg')}}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{asset('/images/gallery/children-82272_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/children-82272_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="{{asset('/images/gallery/human-rights.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/human-rights.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="{{asset('/images/gallery/old-books-436498_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/old-books-436498_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="{{asset('/images/gallery/hunger-682834_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/hunger-682834_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="{{asset('/images/gallery/africa-education.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/africa-education.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="{{asset('/images/gallery/afghani-60798_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/afghani-60798_1280.jpg')}}" alt="">

						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>

					</a> <!-- /.gallery-item -->

					<a href="{{asset('/images/gallery/boy-60729_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/boy-60729_1280.jpg')}}" alt="">
						
						<span class="on-hover">index.html
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="{{asset('/images/gallery/child-207573_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/child-207573_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->


					<a href="{{asset('/images/gallery/children-60654_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/children-60654_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="{{asset('/images/gallery/doll-87407_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/doll-87407_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item -->

					<a href="{{asset('/images/gallery/girl-62328_1280.jpg')}}" class="col-md-3 col-sm-4 gallery-item lightbox">

						<img src="{{asset('/images/gallery/girl-62328_1280.jpg')}}" alt="">
						
						<span class="on-hover">
							<span class="hover-caption">Image Caption</span>
						</span>
						
					</a> <!-- /.gallery-item --> --}}

				
			</div>
			
		</div>


	</div> <!-- /.main-container  -->

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
                                    
                                    <form action="{{route('message')}}" method="POST">
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