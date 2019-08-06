@include('include.header')
@include('include.sidebar')

            
            <section class="content">
                <header class="content__title">
                    <h1>HTML TABLES</h1>

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
                        <h4 class="card-title">Basic Example</h4>
                        <h6 class="card-subtitle">Using the most basic table markup, here’s how <code>.table</code> -based tables look in Bootstrap.</h6>

                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>Sn No</th>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Phone No</th>
                                <th>User Type</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
							<?php
							$i =1;
							foreach ($users as $user)
							{
								
							?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td>{{ $user->name }}</td>
                                <td><?php print($user->email); ?></td>
                                <td><?php print($user->phone); ?></td>
                                <td><?php if($user->role == 1){
									echo "Doctor";
								}else if($user->role == 0){
									echo "User";
								} ?></td>
                                <td><a href="{{ url('/editpage/'.$user->id) }}">Edit</a></td>
                                <td><a href="{{ url('/deleteUser/'.$user->id) }}">Delete</a></td>
                            </tr>
                           <?php  $i++; } ?>
                            </tbody>
                        </table>
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