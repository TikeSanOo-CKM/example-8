<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        JSAT NAVI | ホーム
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <script src="https://kit.fontawesome.com/c950b74c85.js" crossorigin="anonymous"></script>
    <!-- Swiper 4系を使用 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <!-- CSS Files -->


    <link href="{{ asset('css/jsat-default.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jsat-navi-style.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('img/sidebar.jpg') }}">
            <div class="logo"><a href="#" class="simple-text logo-mini">
                    <i class="fas fa-graduation-cap"></i>
                </a>
                <a href="#" class="simple-text logo-normal">
                    JSAT NAVI
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('img/user.png') }}" />
                    </div>
                    <div class="user-info">
                        <a data-toggle="collapse" href="#collapseUser" class="username">
                            <span>
                                山口 敬太郎
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseUser">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"><i class="fas fa-id-card"></i></span>
                                        <span class="sidebar-normal">プロフィール</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"><i class="fas fa-edit"></i></span>
                                        <span class="sidebar-normal">投稿した記事</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"><i class="fas fa-heart"></i></span>
                                        <span class="sidebar-normal">フォローした記事</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"><i class="fas fa-cog"></i></span>
                                        <span class="sidebar-normal"> アカウント設定 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="../client_view/home.html">
                            <i class="material-icons">dashboard</i>
                            <p> ホーム </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#nav_kurashi">
                            <i class="fas fa-laptop-house"></i>
                            <p> くらし
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse show" id="nav_kurashi">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="./genre.html">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 家庭 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> グルメ </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> ライフスタイル </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 育児 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 健康 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 旅行・おでかけ </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> ペット </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> ファッション </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#nav_manabi">
                            <i class="fas fa-school"></i>
                            <p> まなび
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="nav_manabi">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 教育 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 読書 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> デザイン </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> サイエンス </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#nav_job">
                            <i class="fas fa-user-tie"></i>
                            <p> しごと
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="nav_job">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 読書 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> ビジネス </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> キャリア </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> IT </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#nav_asobi">
                            <i class="far fa-grin-squint-tears"></i>
                            <p> カルチャー・あそび
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="nav_asobi">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> マンガ </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 恋愛 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> アート </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 芸能 </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="#">
                                        <span class="sidebar-mini"> <i class="fas fa-caret-right"></i> </span>
                                        <span class="sidebar-normal"> 音楽 </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="sidebar-background"></div>
        </div>
        <div class="main-panel">
             @yield('content')


            <footer class="footer">
                <div class="container-fluid">
                  <div class="copyright float-right">
                    &copy;
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, JSAT NAVI
                  </div>
                </div>
            </footer>
        </div>

    </div>
    <!--   Core JS Files   -->
    {{ asset('js/jsat-script.js') }}
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src=" {{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src=" {{ asset('js/plugins/sweetalert2.js') }}"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('js/plugins/jquery.validate.min.js') }}"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src=" {{ asset('js/plugins/jquery.bootstrap-wizard.js') }}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src=" {{ asset('js/plugins/bootstrap-selectpicker.js') }}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src=" {{ asset('js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src=" {{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('js/plugins/bootstrap-tagsinput.js') }}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src=" {{ asset('js/plugins/jasny-bootstrap.min.js') }}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('js/plugins/fullcalendar.min.js') }}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('js/plugins/jquery-jvectormap.js') }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="  {{ asset('js/plugins/arrive.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src=" {{ asset('js/plugins/chartist.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=" {{ asset('js/material-dashboard.js?v=2.2.2') }}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <!-- Swiper 4系を使用 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js'></script>
    <script src="{{ asset('js/jsat-script.js') }}"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' +
                                new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img")
                            .attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image +
                            '")');
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        if ($(".sidebar").length != 0) {
                            var ps = new PerfectScrollbar('.sidebar');
                        }
                        if ($(".sidebar-wrapper").length != 0) {
                            var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                        }
                        if ($(".main-panel").length != 0) {
                            var ps2 = new PerfectScrollbar('.main-panel');
                        }
                        if ($(".main").length != 0) {
                            var ps3 = new PerfectScrollbar('main');
                        }

                    } else {

                        if ($(".sidebar").length != 0) {
                            var ps = new PerfectScrollbar('.sidebar');
                            ps.destroy();
                        }
                        if ($(".sidebar-wrapper").length != 0) {
                            var ps1 = new PerfectScrollbar('.sidebar-wrapper');
                            ps1.destroy();
                        }
                        if ($(".main-panel").length != 0) {
                            var ps2 = new PerfectScrollbar('.main-panel');
                            ps2.destroy();
                        }
                        if ($(".main").length != 0) {
                            var ps3 = new PerfectScrollbar('main');
                            ps3.destroy();
                        }


                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });

    </script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();

            md.initVectorMap();

        });

    </script>
</body>

</html>
