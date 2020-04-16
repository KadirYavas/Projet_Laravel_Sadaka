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
                    <li class="has-child"><a class="is-active" href="#">CAUSES</a>

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
                    <li class="has-child"><a href="#">CONTACT</a>
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
			
			<h1 class="page-title">OUR CAUSES <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="our-causes fadeIn animated">

	        <div class="container">

	            <h2 class="title-style-1">Our Causes <span class="title-under"></span></h2>

	            <div class="row">

	      				
		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-hunger.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
		                            10$ / 500$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div> 

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-education.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div>


		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-rights.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		                            400$ / 1000$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div>

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-culture.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div>



		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-hunger.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
		                            10$ / 500$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUNGER AND POVERTY </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div> 

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-education.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">EDUCATION AND TRAINING</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div>


		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-rights.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
		                            400$ / 1000$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">HUMAN RIGHTS</a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div>

		                <div class="col-md-3 col-sm-6">

		                    <div class="cause">

		                        <img src="{{asset('/images/causes/cause-culture.jpg')}}" alt="" class="cause-img">

		                        <div class="progress cause-progress">
		                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
		                            400$ / 700$
		                          </div>
		                        </div>

		                        <h4 class="cause-title"><a href="#">ARTS AND CULTURE </a></h4>
		                        <div class="cause-details">
		                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at eros rutrum turpis viverra elementum semper quis ex. Donec lorem nulla, aliquam quis neque vel, maximus lacinia urna.
		                        </div>

		                        <div class="btn-holder text-center">

		                          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#donateModal"> DONATE NOW</a>
		                          
		                        </div>

		                        

		                    </div> <!-- /.cause -->
		                    
		                </div>


	            </div>

	         </div>
	        
	    </div> <!-- /.our-causes -->

		


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


        <!-- Donate Modal -->
    <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">DONATE NOW</h4>
          </div>
          <div class="modal-body">

                <form class="form-donation">

                        <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

                        <div class="row">

                            <div class="form-group col-md-12 ">
                                <input type="text" class="form-control" id="amount" placeholder="AMOUNT(€)">
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="firstName" placeholder="First name*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                            </div>
                        </div>


                        <div class="row">

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>

                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" name="address" placeholder="Address">
                            </div>

                        </div>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" name="donateNow" >DONATE NOW</button>
                            </div>

                        </div>



                       
                    
                </form>
            
          </div>
        </div>
      </div>

    </div> <!-- /.modal -->

@endsection