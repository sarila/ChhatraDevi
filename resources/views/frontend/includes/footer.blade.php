  <!--   <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4 class=mb-3>Login</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email1" placeholder="Your email address...">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password1" placeholder="Your password...">
                            </div>
                            <button type="button" class="btn btn-info btn-block btn-round mb-2">Login</button>
                        </form>
                        <div class="text-center text-muted delimiter mb-2">or use a social network</div>
                        <div class="d-flex justify-content-center social-buttons">
                            <button type="button" class="button-one cursor-pointer mr-3 " data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="button-one cursor-pointer mr-3" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button type="button" class="button-one cursor-pointer mr-3" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                <i class="fab fa-linkedin"></i>
                            </button>
                            </di>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

     <!-- Footer -->
        <footer class="site-footer">
            <!-- Footer Top -->
            <div class="footer-t pt-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12 mb-3 xs-title text-white mb-4">
                            <a href="index.php" class="footer-logo d-inline-block bg-white mb-3">
                                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                            </a>
                           <p>{{$theme->footer_text}}</p>
                            <div class="social-links">
                                <ul class="list-none d-flex">
                                    <li class="mr-3"><a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="mr-3"><a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a></li>
                                    <li class="mr-3"><a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Cols -->
                        <div class="col-lg-4 col-md-6 col-12 mb-3 xs-title text-white mb-4">
                            <h2 class="sm-title text-white d-inline-block after-border-b-white mb-4">Quick Links</h2>
                            <div class="d-flex">
                                <ul class="list-none mr-3">
                                    <li><a href="{{route('indexPage')}}" class="xs-title text-white mb-3 d-block">Home</a></li>
                                    <li><a href="{{route('ongoingProjects')}}" class="xs-title text-white mb-3 d-block">Our Projects</a></li>
                                    <li><a href="{{route('services')}}" class="xs-title text-white mb-3 d-block">Services</a></li>
                                    <li><a href="{{route('contact-us')}}" class="xs-title text-white mb-3 d-block">Contact Us</a></li>
                                </ul>
                                <!-- <ul class="list-none">
                                    <li><a href="#" class="xs-title text-white mb-3 d-block">Home</a></li>
                                    <li><a href="#" class="xs-title text-white mb-3 d-block">Our Projects</a></li>
                                    <li><a href="#" class="xs-title text-white mb-3 d-block">Services</a></li>
                                    <li><a href="#" class="xs-title text-white mb-3 d-block">Contact Us</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <!-- Col -->
                        <div class="col-lg-3 col-md-6 col-12 mb-3 xs-title text-white mb-4">
                            <h2 class="sm-title text-white d-inline-block after-border-b-white mb-4">Contact info</h2>
                            <h3 class="xs-title text-white mb-3"><i class="fas fa-map-marker-alt mr-3"></i>{{$setting->address}}</h3>
                            <a href="#" class="xs-title text-white mb-3 d-block"><i class="fas fa-phone-alt mr-2"></i>{{$setting->contact_number}}</a>
                            <a href="mailto: {{$setting->email}}" class="xs-title text-white mb-0"><i class="far fa-envelope mr-2"></i>{{$setting->email}}</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom -->
            <div class="footer-b text-center text-white py-2 border-top xs-title">
                <div class="container">
                    <p>© Copyright <a href="index.php" class="d-inline-block text-white">TechCoderz </a><?php echo date('Y'); ?>. All Rights Reserved Chhatra Devi Foundation Nepal.</p>
                </div>
            </div>
        </footer>
        <!-- End of footer -->   
    </div>
    <div class="overlay"></div>
    <!-- jQuery library -->
    <script src="{{ asset('frontend/assets/js/jquery-3.4.1.min.js') }}"></script>
    <!-- Boostrap 4 JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Popper Js -->
    <script src="{{ asset('frontend/assets/js/popper.js') }}"></script>
    <!-- Swipper JS -->
    <script src="{{ asset('frontend/assets/js/swipper.min.js') }}"></script>
    <!-- Fontawesome Js -->
    <script src="{{ asset('frontend/assets/js/all.min.js') }}"></script>
    <!-- numinate js -->
    <script src="{{ asset('frontend/assets/js/numinate.1.0.1.min.js') }}"></script>
    <!-- numinate js -->
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Fontawesome Js -->
    <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Lazy Load -->
     <script src="{{ asset('frontend/assets/js/jquery.unveil.js') }}"></script> 
    <!-- Custom Js -->
    <script src="{{ asset('frontend/assets/js/custom.js') }}"></script>
</body>

</html>