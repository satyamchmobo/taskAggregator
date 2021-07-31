


<html>
<head>
<title>WorkStatus</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<style>
.form-group{
  color:white;
  padding-right: 4px;
  padding-left: 4px;
  margin-right: 400px;
  margin-left: 400px;
  background-color:#00BCD4;
}
.form-group1{
padding-right: 4px;
padding-left: 4px;
margin-right: 400px;
margin-left: 400px;
}
.bg-gray-800{
  position: fixed;
  top: 0;
  width: 100%
}


</style>

</head>
<body>
<!--header-->	
<?php include("./header.php");?>
<!--header ends-->


<!--login -->

<div style=" margin-top:0;" class="min-h-screen flex items-left justify-left bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md w-full">
    <div>
      <img width="500" height="600" class="mx-auto h-12 w-auto" src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-4.png" alt="Workflow" />
      <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
       Admin Sign in 
      </h2>
      
      <div style="margin-top:0px; margin-right:0px">

</div>
      <p class="mt-2 text-center text-sm leading-5 text-gray-600">
        Or
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
          
        </a>
      </p>
    </div>
    <form class="mt-8" action="./adloginphpcode.php" method="POST">
      <input type="hidden" name="remember" value="true" />
      <div class="rounded-md shadow-sm">
        <div>
          <input aria-label="Email address" name="email" type="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Email address" />
        </div>
        <div class="-mt-px">
          <input aria-label="Password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm sm:leading-5" placeholder="Password" />
        </div>
      </div>

      <div class="mt-6 flex items-center justify-between">
        <div class="flex items-center">
          <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
          <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
            Remember me
          </label>
        </div>

        <div class="text-sm leading-5">
          <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
            Forgot your password?
          </a>
        </div>
      </div>
     
      <div class="mt-6">
        <button name="submit" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400 transition ease-in-out duration-150" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
            </svg>
          </span>
          Sign in
        </button>
      </div>
    </form>
  </div>
  
</div>



   





<!--login end-->





</body>
</html>