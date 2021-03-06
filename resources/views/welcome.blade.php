<!DOCTYPE html>
<html>
    <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta property="og:title"
content="Send FREE text reminders" />
<meta property="og:site_name" content="Todo SMS"/>
<meta property="og:url"
content="http://todo.jyroneparker.com" />
<meta property="og:description" content="Send free reminder texts to yourself or anyone in the world.
The best part? It's 100% free!" />
<meta property="fb:app_id" content="1645292445709533" />
<meta property="og:type" content="website" />
<meta name="og:image" content="http://www.inviewmarketing.ca/wp-content/uploads/2012/01/mobile-marketing.jpg" />
      <meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@mastashake08" />
<meta name="twitter:title" content="Todo SMS" />
<meta name="twitter:description" content="Send text reminders to yourself or anyone in the world for free!" />
<meta name="twitter:image" content="http://www.inviewmarketing.ca/wp-content/uploads/2012/01/mobile-marketing.jpg" />
        <title>Todo SMS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53029737-3', 'auto');
        ga('send', 'pageview');

        </script>

        <center>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.js"></script>
        <script>$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });</script>

        <!-- Todo Top Banner -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7023023584987784"
             data-ad-slot="3867992558"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </center>


    </head>
    <body>
      @if($status != '')
      <div class="alert alert-success text-center">
  <strong>{{$status}}</strong>
</div>
@endif

        <div class="container">
            <div class="content">
              <h1 class="text-center">Todo SMS</h1>
              <p class="text-center"> <strong>This simple app allows you to create a todo item and send it to yourself as a text message. If you want persistence log in with Facebook!</strong>
                If you like this app or the content on my <a href="http://www.jyroneparker.com">blog</a>, please show your support!



              </p>
              <center>
              <div class="embed-responsive embed-responsive-16by9">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/8qQKnhGVx_w" frameborder="0" allowfullscreen></iframe>
              </div>
            </center>
              <br>
              @if(isset($user))
              <h2 class="text-center">Welcome back {{$user['name']}}</h2>
              <img class="facebook-img img-responsive center-block" src="{{$user['avatar']}}"/>
              <br>
              @foreach ($todos as $todo)
              <p class="text-center">{{ $todo->content }}</p>
              @endforeach
              <center>
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Todo Top Banner -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-7023023584987784"
                   data-ad-slot="3867992558"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </center>
            <br>
              <form method="POST" action="/addTodo" role="form">
                {!! csrf_field() !!}

                <div class="form-group">

                    <input class="form-control" type="text" name="content" placeholder="Content" value="{{ old('content') }}">
                    <br>
                    <input class="form-control" type="tel" name="phone" placeholder="10 digit phone number" value="{{ old('phone') }}">
                    <br>
                    <select class="form-control" name="gateway">
                      @foreach($gateways as $gateway)
                      <option value="{{$gateway->gateway}}">{{ $gateway->name }}</option>
                      @endforeach
                    </select>
                    <input type="radio" name="timer" value="0" checked>Now

                    <input type="radio" name="timer" value="60">1 Minute

                    <input type="radio" name="timer" value="300">5 minutes

                    <input type="radio" name="timer" value="600">10 minutes

                    <input type="radio" name="timer" value="900">15 Minutes

                    <input type="radio" name="timer" value="1800">30 Minutes

                    <input type="radio" name="timer" value="3600">1 Hour

                    <input type="radio" name="timer" value="43200">12 Hours

                    <input type="radio" name="timer" value="86400">24 Hours
                </div>



                <div class="form-group">
                    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i> Send Todo </button><script src="https://checkout.stripe.com/checkout.js"></script>

    <button class="btn btn-info" id="customButton"><i class="glyphicon glyphicon-usd"></i> Donate</button>

    <script>
    console.log('hi');
    var handler = StripeCheckout.configure({
    key: "{{env('STRIPE_KEY')}}",
    image: 'https://en.gravatar.com/userimage/70717632/01ef556bed004cc9abf426fa649bd196.jpg?size=200',
    locale: 'auto',
    token: function(token) {
    // Use the token to create the charge with a server-side script.
    // You can access the token ID with `token.id`
    var data = {
    stripeToken: token.id,

  };
  $.post('/payment', data, function(result){});
    }
    });

    $('#customButton').on('click', function(e) {
    // Open Checkout with further options
    console.log('click');
    handler.open({
    name: 'Jyrone Parker',
    description: 'Kind Donation',
    amount: 100
    });
    e.preventDefault();
    });

    // Close Checkout on page navigation
    $(window).on('popstate', function() {
    handler.close();
    });
    </script>

                </div>
              </form>
              @else
              <center>
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- Todo Top Banner -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-7023023584987784"
                   data-ad-slot="3867992558"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </center>
            <br>
              <form method="POST" action="/addTodo" role="form">
                {!! csrf_field() !!}

                <div class="form-group text-center">

                    <input class="form-control" type="text" name="content" placeholder="Content" value="{{ old('content') }}">
                    <br>
                    <input class="form-control" type="tel" name="phone" placeholder="10 digit phone number" value="{{ old('phone') }}">
                    <br>
                    <select class="form-control" name="gateway">
                      @foreach($gateways as $gateway)
                      <option value="{{$gateway->gateway}}">{{$gateway->name}}</option>
                      @endforeach
                    </select>
                    <input type="radio" name="timer" value="0" checked>Now

                    <input type="radio" name="timer" value="60">1 Minute

                    <input type="radio" name="timer" value="300">5 minutes

                    <input type="radio" name="timer" value="600">10 minutes

                    <input type="radio" name="timer" value="900">15 Minutes

                    <input type="radio" name="timer" value="1800">30 Minutes

                    <input type="radio" name="timer" value="3600">1 Hour

                    <input type="radio" name="timer" value="43200">12 Hours

                    <input type="radio" name="timer" value="86400">24 Hours
                </div>



                <div class="form-group">
                    <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i> Send Todo </button>
                    <a class="btn btn-default" href="/auth/facebook"><span class="glyphicon glyphicon-user"></span> Connect To Facebook</a>
                    <script src="https://checkout.stripe.com/checkout.js"></script>

    <button class="btn btn-info" id="customButton"><i class="glyphicon glyphicon-usd"></i> Donate</button>

                    <script>
                    console.log('hi');
                    var handler = StripeCheckout.configure({
                    key: "{{env('STRIPE_KEY')}}",
                    image: 'https://en.gravatar.com/userimage/70717632/01ef556bed004cc9abf426fa649bd196.jpg?size=200',
                    locale: 'auto',
                    token: function(token) {
                    // Use the token to create the charge with a server-side script.
                    // You can access the token ID with `token.id`
                    var data = {
                    stripeToken: token.id,

                  };
                  $.post('/payment', data, function(result){});
                    }
                    });

                    $('#customButton').on('click', function(e) {
                    // Open Checkout with further options
                    console.log('click');
                    handler.open({
                    name: 'Jyrone Parker',
                    description: 'Kind Donation',
                    amount: 100
                    });
                    e.preventDefault();
                    });

                    // Close Checkout on page navigation
                    $(window).on('popstate', function() {
                    handler.close();
                    });
                    </script>

                </div>
              </form>

              @endif

            </div>
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- Todo Top Banner -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-7023023584987784"
                 data-ad-slot="3867992558"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </body>
</html>
