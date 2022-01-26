<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head>
    <title>{{config('app.name','MyBlog')}}</title>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('w3.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.js')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" ></link>
    <!-- Styles -->
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>

			<style>
				a{
					/*color: rgb(94,16,156);*/
					color: rgb(39,16,100);
				}
					/*			
				.pagination {
				  display: -ms-flexbox;
				  display: flex;
				  padding-left: 0;
				  list-style: none;
				  border-radius: 0.25rem;
				}
*/
					.border-center{
						display:flex;
						justify-content:center;
					}
					.w3-center{
						display:inline-block;
						width:100%;
						text-align:center;
					}
			
					body{
						background-color:gray;
					}
			
					.body{
							font-family:serif;
							font-size:100%;
						}
						
				@media screen and (orientation:landscape){

					.body{
							font-family:serif;
							font-size:145%;
							/*width:85%;*/
							padding-left: 10%;
							padding-right: 10%;
						}
						
				}
						.header{
							font-size:500%;
						}
						
						
						
						.blog-description{
							font-size:20%;
						}
						
						.post-topic{
							font-size:120%;
						}
						
						/*CREATE POST*/
						.create-post{
							font-size:100%;
						}
						
						.form-input1{
							font-size:110%;
							width:95%;
						}
						
						.form-input2{
							font-size:140%;
							width:95%;
							height:250px;
						}
						
						.form-input3{
							font-size:80%;
							width:95%;
						}
						
						.submit{
							font-size:120%;
						}
						
						.footer{
							font-size:130%;
						}
			</style>
</head>
<body>
	<div class="body ">

			<!--HEADER-->
			<div class="header w3-center">
					<a href="{{url('/')}}" style="text-decoration:none;"><b class=""><b class="">{{config('app.name','MyBlog')}}</b></b></a>
					<div class="description" >
							<hr />
							<i class="blog-description">The Best Informative Blog For The Best</i>
							<hr />
					</div>
			</div>

			

			@yield('content')
		

		<!--FOOTER-->
		<div class="footer w3-center">
				<hr />
				<b class="">MyBlog &copy 2022</b>
		</div>

	</div>
</body>
</html>