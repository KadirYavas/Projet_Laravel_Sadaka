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
                    <li class="has-child "><a class="is-active" href="#">CAUSES</a>

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
			
			<h1 class="page-title">CAUSE TITLE <span class="title-under"></span></h1>
			<p class="page-description">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
			</p>
			
		</div>

	</div>

	<div class="main-container">

		<div class="container">

			<div class="row">

				<div class="col-md-12 fadeIn animated">

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

				<div class="col-md-12 fadeIn animated">

					<div id="cause-carousel" class="carousel slide cause-carousel" data-ride="carousel">

						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#cause-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#cause-carousel" data-slide-to="1"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner" role="listbox">

						    <div class="item active">

						      <img src="{{asset('/images/causes/slider/cause-slider-1.jpg')}}" alt="">
						      
						    </div>

						    <div class="item">

						      <img src="{{asset('/images/causes/slider/cause-slider-2.jpg')}}" alt="">
						      
						    </div>

						  </div>
					</div>

				</div>

			</div>

			<div class="row fadeIn animated">

				<div class="col-md-6">

					<h2 class="title-style-2"> Cause sub title <span class="title-under"></span></h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

				<div class="col-md-6">

					<h2 class="title-style-2"> Cause sub title <span class="title-under"></span></h2>

					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>

				</div>

			</div>

			<div class="row ">

				<div class="col-md-12 fadeIn animate-onscroll">

					<h2 class="title-style-2"> Tabs <span class="title-under"></span></h2>

					
						<div role="tabpanel">

							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
							    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
							    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
							  </ul>

							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="home">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. In consequatur mollitia, libero quisquam impedit obcaecati, dignissimos, eum similique minima ab amet eos sequi distinctio qui modi? Possimus quos, fugit quia.</div>
							    <div role="tabpanel" class="tab-pane" id="profile">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae aut culpa a commodi. Quidem asperiores aliquid sequi incidunt quas soluta eum ab fugiat deleniti in at iste, illum ipsam nisi.</div>
							    <div role="tabpanel" class="tab-pane" id="messages">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aliquam corrupti quibusdam nostrum, aspernatur iure illo, alias vitae, reiciendis culpa explicabo minus iusto ipsum cum tempore incidunt iste praesentium nihil.</div>
							    <div role="tabpanel" class="tab-pane" id="settings">
							    	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ducimus ullam distinctio fugiat voluptates! Vero quis adipisci asperiores aliquam ullam doloremque dolor, reprehenderit, accusamus nisi ut eveniet quas reiciendis dolore.</div>
							  </div>

						</div>

						<p></p>
					

				</div>

				<div class="col-md-12 fadeIn animate-onscroll">
				
					<h2 class="title-style-2"> Accordion <span class="title-under"></span></h2>

					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingOne">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					          Collapsible Group Item #1
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <div class="panel-body">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingTwo">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					          Collapsible Group Item #2
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="panel-body">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					  </div>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="headingThree">
					      <h4 class="panel-title">
					        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					          Collapsible Group Item #3
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					      <div class="panel-body">
					        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					      </div>
					    </div>
					  </div>
					</div>

					<p></p>

				</div>


				<div class="col-md-12 fadeIn animate-onscroll">

					<h2 class="title-style-2">Tables <span class="title-under"></span></h2>
					
						<h4>TABLE STYLE 1</h4>
						<table class="table table-style-1">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>First Name</th>
					          <th>Last Name</th>
					          <th>Username</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <th scope="row">1</th>
					          <td>Mark</td>
					          <td>Otto</td>
					          <td>@mdo</td>
					        </tr>
					        <tr>
					          <th scope="row">2</th>
					          <td>Jacob</td>
					          <td>Thornton</td>
					          <td>@fat</td>
					        </tr>
					        <tr>
					          <th scope="row">3</th>
					          <td>Larry</td>
					          <td>the Bird</td>
					          <td>@twitter</td>
					        </tr>
					      </tbody>
					    </table>

						<h4>TABLE STYLE 2</h4>
					    <table class="table table-style-2">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>First Name</th>
					          <th>Last Name</th>
					          <th>Username</th>
					        </tr>
					      </thead>
					      <tbody>
					        <tr>
					          <th scope="row">1</th>
					          <td>Mark</td>
					          <td>Otto</td>
					          <td>@mdo</td>
					        </tr>
					        <tr>
					          <th scope="row">2</th>
					          <td>Jacob</td>
					          <td>Thornton</td>
					          <td>@fat</td>
					        </tr>
					        <tr>
					          <th scope="row">3</th>
					          <td>Larry</td>
					          <td>the Bird</td>
					          <td>@twitter</td>
					        </tr>

					          <tr>
					          <th scope="row">1</th>
					          <td>Mark</td>
					          <td>Otto</td>
					          <td>@mdo</td>
					        </tr>
					        <tr>
					          <th scope="row">2</th>
					          <td>Jacob</td>
					          <td>Thornton</td>
					          <td>@fat</td>
					        </tr>
					        <tr>
					          <th scope="row">3</th>
					          <td>Larry</td>
					          <td>the Bird</td>
					          <td>@twitter</td>
					        </tr>

					      </tbody>
					    </table>
					
				</div>
				
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