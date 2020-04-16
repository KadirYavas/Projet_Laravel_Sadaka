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
                    <li class="has-child"><a href="#">ABOUT</a>
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
                      <li class="has-child"><a class="is-active" href="#">CONTACT</a>
                        <ul class="submenu">
                          <li class="submenu-item"><a href="{{route('contact')}}">CONTACT</a></li>
                          @if (Auth::id() == 1)
                              
                          <li class="submenu-item"><a href="{{route('ContactBDD')}}">BDD Contact</a></li>
                          @endif
                       </ul>
                      </li>

                  </ul>

                </div> <!-- /#navbar -->

              </div> <!-- /.container -->
              
            </div> <!-- /.navbar-main -->


        </nav> 

    </header> <!-- /. main-header -->


	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>

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

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2"> SADAKA CONTACTS <span class="title-under"></span></h2>
					<p>
						<b>Sadaka</b> ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla .
					</p>

					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> 135 Hay el nahda, Rabat, Morocco</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> 00 210 25 55  55 11</li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> contact@sadaka.org</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
		


	</div>

	<div id="contact-map" class="contact-map">
		
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