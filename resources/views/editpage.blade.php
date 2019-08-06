@include('include.header')
@include('include.sidebar')

            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Form Layouts</h1>
                        <small>Since Bootstrap applies <code>display: block</code> and <code>width: 100%</code> to almost all our form controls, forms will by default stack vertically. Additional classes can be used to vary this layout on a per-form basis.</small>

                        <div class="actions">
                        <a href="" class="actions__item zmdi zmdi-trending-up"></a>
                        <a href="" class="actions__item zmdi zmdi-check-all"></a>

                        <div class="dropdown actions__item">
                            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="" class="dropdown-item">Refresh</a>
                                <a href="" class="dropdown-item">Manage Widgets</a>
                                <a href="" class="dropdown-item">Settings</a>
                            </div>
                        </div>
                    </div>
                    </header>

                   

                   

                    <div class="card">
                        <div class="card-body">
                            
                            <h2 class="card-body__title">Edit User detail</h2>
                          
                            <br>
							
                            <form method="post" action="{{action('AddresController@editUserDetail')}}">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" value="{{ $datauser->email }}" placeholder="Email Id">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control" value="{{ $datauser->address }}"  placeholder="Enter Address">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control" name="phone" value="{{ $datauser->phone }}"  placeholder="Enter Phone No">
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" value="{{ $datauser->name }}"  placeholder="Enter Name">
											<input type="hidden" name="id" class="form-control" value="{{ $datauser->id }}"  placeholder="Enter Name">
											
					<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
					
                                            <i class="form-group__bar"></i>
                                        </div>
                                    </div>
                                </div>
                              
                                
                                <button type="submit" name="submit" class="btn btn-primary">Update Account</button>
                            </form>
                        </div>
                    </div>

                   
                    <footer class="footer hidden-xs-down">
                    <p>© Material Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
                </div>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="{{url('/')}}/document/vendors/jquery/jquery.min.js"></script>
        <script src="{{url('/')}}/document/vendors/popper.js/popper.min.js"></script>
        <script src="{{url('/')}}/document/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/document/vendors/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{{url('/')}}/document/vendors/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="{{url('/')}}/document/js/app.min.js"></script>
    </body>
</html>