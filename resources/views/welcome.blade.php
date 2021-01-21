<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ads</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="js/bootstrap.bundle.min.js"></script>


        <!-- Fonts -->
        <!-- Styles -->
        <style>
            html, body {
             	background: url("images/background_b.jpg");
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

           
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

          
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
	    <div class="flex-center position-ref full-height">
		     
            <div class="content">
				<h1><span class="border border-primary col-xl-12 title">{{Session::get('arrAngka')[Session::get('arr')-1]}}</span></h1>
				<button onclick="click_me()" id="click_me" type="button" class="btn btn-success">Click</button>
				<button onclick="mo()" id="mo" type="button" class="btn btn-primary">Mo</button>
            </div>
        </div>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		
		<script>
		$("#mo").prop("disabled",true);
		function click_me(){
			console.log(423234);
			$.ajax({
			url: "{{route('click')}}",
			type: 'GET',
			dataType: 'json', // added data type
			success: function(res) {
				console.log(res);
				$("#mo").removeAttr("disabled");
				$("#click_me").prop("disabled",true);
			}
		});
		}
		function mo(){
			console.log(423234);
			$.ajax({
			url: "{{route('mo')}}",
			type: 'GET',
			dataType: 'json', // added data type
			success: function(res) {
				location.reload();
			}
		});
		}
		</script>
    </body>
</html>