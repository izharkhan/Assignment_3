<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <title>PHP INTERPRETER</title>
    <style type="text/css">
        #output {
		
		top:50%;
            width: 600px;
            height: 500px;
            border: 2px solid #999999;
			border-radius: 10px;
        }
		#outline {
		
            width: 600px;
            height: 500px;
            border: 5px solid red;
        }
		#submit {
		
		top:50%;
		}
    </style>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  
  
</head>
<body>
<header>
<div class="navbar-header">
       <a class="navbar-brand" href="{{ url('/ViewCode') }}">
                    View Codes
                </a>
                     <a class="navbar-brand" href="{{ url('/logout') }}">
                    logout
                </a>
 </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <p style="color:black; font-size:24px; text-align:center">  PHP INTERPRETER ONLINE ! </p>
    </div>
</div>
 
<div class"outline">
    <div class="col-lg-6" >
        {!! Form::open(array('url'=>'/','method'=>'POST', 'id'=>'myform')) !!}
          <textarea name='usercode' id='usercode' class='form-control span6' rows='24'>{{old('usercode')}}</textarea>
    </div>
   </div>
    <div class="col-lg-6">
        <div id="output">
        <?php
         $myfile = fopen("code.php", "r") or die("Unable to open file!");
		$data = file_get_contents('http://localhost/test-project-copy/public/code.php');
echo $data;
?>
        </div>
    </div>
</div>
<div class="row">
    <div class="submit" align="center" >
        {!! Form::button('Send Data!', array('class'=>'btn btn-success', 'type'=>'submit')) !!}
        {!! Form::close() !!}
    </div>
</div>

<script type="text/javascript">
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });
</script>
</body>
</html>