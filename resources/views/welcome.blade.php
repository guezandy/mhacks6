<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">


        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>The Hello World of News Search</title>
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
            document.getElementById('content').innerHTML = '';
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
            newsSearch.execute('Goodwill');

            // Include the required Google branding
            google.search.Search.getBranding('branding');
          }

          // Set a callback to call your code when the page loads
          google.setOnLoadCallback(onLoad);
        </script>
    </head>
    <body>
        <h1 class="text-center">MHACKS LEGGO</h1>
        <div id="branding"  style="float: left;"></div><br />
        <div id="content">Loading...</div>

        <form class="form-horizontal" method="any" action="{{ url('/home')}}">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-7 col-md-offset-1">
                    <input class="input" type="text" name="city" id="city" placeholder="this awesome city" required>
                     </div>
                    <div class="col-md-2 col-sm-1 col-xs-1">
                        <h1 class="title">,</h1>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-4">
                      <select class="select" name="state" id="state" required>
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
                    </div><br>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-4 col-sm-offset-4" style="text-align:center;">
                    <button type="submit" class="button">Search nearest location</i></button>
                </div>
            </div>
        </form>


        <div class="col-sm-3">
            @if($result == 0)
                <h1>NO RESULTS {{$result}}</h1>
            @else
                <h1>RESULTS: {{$result}}</h1>
                @for($i = 0; $i < $result; $i++)
                    <h3>{{$names[$i]}}</h3>
                    @if($address[$i] != "n/a")
                      <h5>{{$address[$i]}}</h5>
                    @endif
                    @if($url[$i] != "n/a")
                    <a href="{!! $url[$i] !!}">
                        <h5 class="text-primary details">Check out website!</h5>
                    </a>
                    @endif
                @endfor
            @endif
        </div>
    </body>
</html>
