<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>American Express Question 2</title>

        <!-- Vendor CSS -->
        <link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.min.css" rel="stylesheet">
        <link href="vendors/sweet-alert/sweet-alert.min.css" rel="stylesheet">
        <link href="vendors/material-icons/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/socicon/socicon.min.css" rel="stylesheet">


        <!-- CSS -->
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <link href="css/bootstrap-theme.min.css" rel="stylesheet">
        
        <link href="css/app.css" rel="stylesheet">

        <!-- spacing for the buttons -->
        <style type="text/css">
            .btn-colors > .btn {
                min-width: 112px;
            }

            .btn-demo > .btn, .btn-group-demo > .btn-group {
                margin: 0 5px 10px 0;
            }
        </style>

        <!--custom select-->
        <link href="vendors/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
        <link href="vendors/farbtastic/farbtastic.css" rel="stylesheet">
        <link href="vendors/summernote/summernote.css" rel="stylesheet">
        <!-- Following CSS are used only for the Demp purposes thus you can remove this anytime. -->
        <style type="text/css">
            .toggle-switch .ts-label {
                min-width: 130px;
            }
        </style>

        <!--notifications-->
        <style type="text/css">
            .notifications .btn {
                width: 100%;
                margin-bottom: 20px;
            }
        </style>


        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <script src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
          
          // This code generates a "Raw Searcher" to handle search queries. The Raw 
          // Searcher requires you to handle and draw the search results manually.
          google.load('search', '1');
          google.load("jquery", "1.4.2");
          google.load("jqueryui", "1.7.2");

          var newsSearch;

          function searchComplete() {

            // Check that we got results
            document.getElementById('google').innerHTML = '';
            if (newsSearch.results && newsSearch.results.length > 0) {
              for (var i = 0; i < newsSearch.results.length; i++) {

                // Create HTML elements for search results
                var p = document.createElement('p');
                var a = document.createElement('a');
                var img = document.createElement('img');

                a.href="/news-search/v1/newsSearch.results[i].url;"
                a.innerHTML = newsSearch.results[i].title;

                if(newsSearch.results[i].image.url != null) {
                    img.setAttribute('src', newsSearch.results[i].image.url);
                    img.setAttribute('height', '50px');
                    img.setAttribute('width', '50px');
                }

                // Append search results to the HTML nodes
                p.appendChild(img);
                p.appendChild(a);
                document.body.appendChild(p);
              }
            }
          }

          function onLoad() {

            // Create a News Search instance.
            newsSearch = new google.search.NewsSearch();
      
            // Set searchComplete as the callback function when a search is 
            // complete.  The newsSearch object will have results in it.
            newsSearch.setSearchCompleteCallback(this, searchComplete, null);

            // Specify search quer(ies)
              newsSearch.execute('Red Cross');
            // Include the required Google branding
            google.search.Search.getBranding('branding');
          }

          // Set a callback to call your code when the page loads
          google.setOnLoadCallback(onLoad);
        </script>

    </head>
    <body>
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar">
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
                <li class="logo hidden-xs">
                    <a href="index.html">American Express Question 2</a>
                </li>

                <li class="pull-right">
                  <ul class="top-menu">

                    </ul>
                </li>
            </ul>

            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>

        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner">
                    <div class="si-inner">


                        <ul class="main-menu">
                            <li class="active"><a href="{{url('/')}}"><i class="md md-home"></i> Home</a></li>
                            <li class=""><a href="{{url('input')}}">Input Data</a></li>
                        </ul>
                    </div>
                </div>
            </aside>



            <section id="content">
                <div class="container">

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Enter Chartiy <small>And city to find information relevant</small></h2>
                        </div>
                        <div class="card-body card-padding">
                            <form class="row" role="form" action="{{ url('/home')}}">

                                <div class="col-sm-12">
                                    <div class="form-group fg-line">
                                        <label class="sr-only" for="charity">Charity Name</label>
                                        <input type="text" class="form-control input-sm" id="charity" name="charity" placeholder="Enter Charity Name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group fg-line">
                                        <label class="sr-only" for="city">City</label>
                                        <input type="text" class="form-control input-sm" id="city" name="city" placeholder="Enter city">
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group fg-line">
                                      <label class="sr-only" for="state">State:</label>
                                      <select name="state" class="selectpicker">
                                        <option value="">in state</option>
                                        <option value="AL">AL</option>
                                        <option value="AK">AK</option>
                                        <option value="AZ">AZ</option>
                                        <option value="AR">AR</option>
                                        <option value="CA">CA</option>
                                        <option value="CO">CO</option>
                                        <option value="CT">CT</option>
                                        <option value="DE">DE</option>
                                        <option value="DC">DC</option>
                                        <option value="FL">FL</option>
                                        <option value="GA">GA</option>
                                        <option value="HI">HI</option>
                                        <option value="ID">ID</option>
                                        <option value="IL">IL</option>
                                        <option value="IN">IN</option>
                                        <option value="IA">IA</option>
                                        <option value="KS">KS</option>
                                        <option value="KY">KY</option>
                                        <option value="LA">LA</option>
                                        <option value="ME">ME</option>
                                        <option value="MD">MD</option>
                                        <option value="MA">MA</option>
                                        <option value="MI">MI</option>
                                        <option value="MN">MN</option>
                                        <option value="MS">MS</option>
                                        <option value="MO">MO</option>
                                        <option value="MT">MT</option>
                                        <option value="NE">NE</option>
                                        <option value="NV">NV</option>
                                        <option value="NH">NH</option>
                                        <option value="NJ">NJ</option>
                                        <option value="NM">NM</option>
                                        <option value="NY">NY</option>
                                        <option value="NC">NC</option>
                                        <option value="ND">ND</option>
                                        <option value="OH">OH</option>
                                        <option value="OK">OK</option>
                                        <option value="OR">OR</option>
                                        <option value="PA">PA</option>
                                        <option value="RI">RI</option>
                                        <option value="SC">SC</option>
                                        <option value="SD">SD</option>
                                        <option value="TN">TN</option>
                                        <option value="TX">TX</option>
                                        <option value="UT">UT</option>
                                        <option value="VT">VT</option>
                                        <option value="VA">VA</option>
                                        <option value="WA">WA</option>
                                        <option value="WV">WV</option>
                                        <option value="WI">WI</option>
                                        <option value="WY">WY</option>
                                      </select>
                                    </div>
                                </div>
                                
                                
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary btn-sm m-t-5">Search</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>FourSquare Location Results: {{$result}}<small></small></h2>
                        </div>
                        <div class="card-body card-padding">
                            @if($result == "n/a")


                            @elseif($result == 0)
                                <h1>No results for this city</h1>
                            @else
                                <h4>Number of Locations: {{$result}}</h4>
                                @for($i = 0; $i < $result; $i++)
                                  <div class="row">
                                    <h4>{{$names[$i]}}</h4>
                                    @if($address[$i] != "n/a")
                                      <h4>{{$address[$i]}}</h4>
                                    @endif
                                    @if($url[$i] != "n/a")
                                    <a href="{!! $url[$i] !!}">
                                        <h5 class="text-primary details">Check out website!</h5>
                                    </a>
                                    @endif
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>Google New Results: <small></small></h2>
                            <div id="branding"></div><br />
                            <div id="google">Loading...</div>
                        </div>
                        <div class="card-body card-padding">
                          <div class="btn-demo">

                          </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header">
                                <h2>Ask about THE RED CROSS</h2>
                            </div>
                            <div class="card-body card-padding">
                                <form class="row" role="form" action="{{ url('respond')}}">
                                    <div class="col-sm-12">
                                        <div class="form-group fg-line">
                                            <label class="sr-only" for="charity">Enter Question about:</label>
                                            <input type="text" class="form-control input-sm" id="question" name="question" placeholder="Enter question about Charity">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-sm m-t-5">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($res == "n/a")

                        @else
                        <div class="card">
                            <div class="card-header">
                                <h2>Response:
                                <small>To question: {{$question}}</small>
                                </h2>
                            </div>
                            <div class="card-body card-padding">
                                <h4>{{$res[0]->text}}</h4>
                                <div class="row">
                                    <h5>This was helpful to {{$res[0]->count}} people was it helpful for you?</h5>
                                    <a href="{{ URL::route('plusone', ['id' => $res[0]->id, 'ques' => $question]) }}" class="btn btn-success btn-sm m-t-5">Yes</a>
                                    <a href="#" class="btn btn-danger btn-sm m-t-5">No</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </section>
        </section>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="js/jquery-2.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script src="vendors/flot/jquery.flot.min.js"></script>
        <script src="vendors/flot/jquery.flot.resize.min.js"></script>
        <script src="vendors/flot/plugins/curvedLines.js"></script>
        <script src="vendors/sparklines/jquery.sparkline.min.js"></script> <!-- chart lines y-->
        <script src="vendors/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="vendors/fullcalendar/lib/moment.min.js"></script>
        <script src="vendors/fullcalendar/fullcalendar.min.js"></script>
        <script src="vendors/simpleWeather/jquery.simpleWeather.min.js"></script>
        <script src="vendors/auto-size/jquery.autosize.min.js"></script>
        <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/bootgrid/jquery.bootgrid.min.js"></script>
        <script src="vendors/waves/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script><!--y -->
        <script src="vendors/sweet-alert/sweet-alert.min.js"></script> <!--y -->

        <script src="js/flot-charts/curved-line-chart.js"></script>
        <script src="js/flot-charts/line-chart.js"></script>
        <script src="js/charts.js"></script>

        <script src="js/charts.js"></script>
        <script src="js/functions.js"></script>
        <script src="js/demo.js"></script>

        <!--CUstom select-->
        <script src="vendors/noUiSlider/jquery.nouislider.all.min.js"></script> <!--y-->
        <script src="vendors/input-mask/input-mask.min.js"></script>
        <script src="vendors/farbtastic/farbtastic.min.js"></script>
        <script src="vendors/summernote/summernote.min.js"></script>
        <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/fileinput/fileinput.min.js"></script>
        <script src="vendors/auto-size/jquery.autosize.min.js"></script>
        <script src="vendors/bootstrap-select/bootstrap-select.min.js"></script><!--y-->
        <script src="vendors/chosen/chosen.jquery.min.js"></script><!--y-->

        <!-- Data Table -->
        <script type="text/javascript">
            $(document).ready(function(){
                //Basic Example
                $("#data-table-basic").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                });

                //Selection
                $("#data-table-selection").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    selection: true,
                    multiSelect: true,
                    rowSelect: true,
                    keepSelection: true
                });

                //Command Buttons
                $("#data-table-command").bootgrid({
                    css: {
                        icon: 'md icon',
                        iconColumns: 'md-view-module',
                        iconDown: 'md-expand-more',
                        iconRefresh: 'md-refresh',
                        iconUp: 'md-expand-less'
                    },
                    formatters: {
                        "commands": function(column, row) {
                            return "<button type=\"button\" class=\"btn btn-icon command-edit\" data-row-id=\"" + row.id + "\"><span class=\"md md-edit\"></span></button> " +
                                "<button type=\"button\" class=\"btn btn-icon command-delete\" data-row-id=\"" + row.id + "\"><span class=\"md md-delete\"></span></button>";
                        }
                    }
                });
            });
        </script>

      <!--notifications-->
      <script type="text/javascript">
          /*
           * Notifications
           */
          function notify(from, align, icon, type, animIn, animOut){
              $.growl({
                  icon: icon,
                  title: ' Bootstrap Growl ',
                  message: 'Turning standard Bootstrap alerts into awesome notifications',
                  url: ''
              },{
                      element: 'body',
                      type: type,
                      allow_dismiss: true,
                      placement: {
                              from: from,
                              align: align
                      },
                      offset: {
                          x: 20,
                          y: 85
                      },
                      spacing: 10,
                      z_index: 1031,
                      delay: 2500,
                      timer: 1000,
                      url_target: '_blank',
                      mouse_over: false,
                      animate: {
                              enter: animIn,
                              exit: animOut
                      },
                      icon_type: 'class',
                      template: '<div data-growl="container" class="alert" role="alert">' +
                                      '<button type="button" class="close" data-growl="dismiss">' +
                                          '<span aria-hidden="true">&times;</span>' +
                                          '<span class="sr-only">Close</span>' +
                                      '</button>' +
                                      '<span data-growl="icon"></span>' +
                                      '<span data-growl="title"></span>' +
                                      '<span data-growl="message"></span>' +
                                      '<a href="#" data-growl="url"></a>' +
                                  '</div>'
              });
          };

          $('.notifications > div > .btn').click(function(e){
              e.preventDefault();
              var nFrom = $(this).attr('data-from');
              var nAlign = $(this).attr('data-align');
              var nIcons = $(this).attr('data-icon');
              var nType = $(this).attr('data-type');
              var nAnimIn = $(this).attr('data-animation-in');
              var nAnimOut = $(this).attr('data-animation-out');

              notify(nFrom, nAlign, nIcons, nType, nAnimIn, nAnimOut);
          });


          /*
           * Dialogs
           */

          //Basic
          $('#sa-basic').click(function(){
              swal("Here's a message!");
          });

          //A title with a text under
          $('#sa-title').click(function(){
              swal("Here's a message!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis")
          });

          //Success Message
          $('#sa-success').click(function(){
              swal("Good job!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat, tincidunt vitae ipsum et, pellentesque maximus enim. Mauris eleifend ex semper, lobortis purus sed, pharetra felis", "success")
          });

          //Warning Message
          $('#sa-warning').click(function(){
              swal({
                  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it!",
                  closeOnConfirm: false
              }, function(){
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
              });
          });

          //Parameter
          $('#sa-params').click(function(){
              swal({
                  title: "Are you sure?",
                  text: "You will not be able to recover this imaginary file!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it!",
                  cancelButtonText: "No, cancel plx!",
                  closeOnConfirm: false,
                  closeOnCancel: false
              }, function(isConfirm){
                  if (isConfirm) {
                      swal("Deleted!", "Your imaginary file has been deleted.", "success");
                  } else {
                      swal("Cancelled", "Your imaginary file is safe :)", "error");
                  }
              });
          });

          //Custom Image
          $('#sa-image').click(function(){
              swal({
                  title: "Sweet!",
                  text: "Here's a custom image.",
                  imageUrl: "img/thumbs-up.png"
              });
          });

          //Auto Close Timer
          $('#sa-close').click(function(){
               swal({
                  title: "Auto close alert!",
                  text: "I will close in 2 seconds.",
                  timer: 2000,
                  showConfirmButton: false
              });
          });

      </script>

    </body>
  </html>
