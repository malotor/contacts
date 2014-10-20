<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->
  {{ HTML::style('assets/vendor/bootstrap/dist/css/bootstrap.min.css'); }}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<div class="container" role="main">
  <h1>Contacts</h1>

  @yield('content')
</div>
{{ HTML::script('assets/vendor/jquery/dist/jquery.min.js'); }}
{{ HTML::script('assets/vendor/bootstrap/dist/js/bootstrap.min.js'); }}
</body>
</html>