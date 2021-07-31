<html>
<head>
<title>WorkStatus</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<style>

input[type="radio"] + label span {
    transition: background .2s,
      transform .2s;
}

input[type="radio"] + label span:hover,
input[type="radio"] + label:hover span{
  transform: scale(1.2);
} 

input[type="radio"]:checked + label span {
  background-color: #3490DC; //bg-blue
  box-shadow: 0px 0px 0px 2px white inset;
}

input[type="radio"]:checked + label{
   color: #3490DC; //text-blue
}


</style>

</head>
<body>
<h1 class="mb-6 pt-6 mx-auto text-center"> Make the right choice :</h1>
<div class="mx-auto max-w-sm text-center flex flex-wrap justify-center">

  <div class="flex items-center mr-4 mb-4">
    <input id="radio1" type="radio" name="radio" class="hidden" checked />
    <label for="radio1" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Best choice</label>
   </div>

   <div class="flex items-center mr-4 mb-4">
    <input id="radio2" type="radio" name="radio" class="hidden" />
    <label for="radio2" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Second choice</label>
   </div>
  
    <div class="flex items-center mr-4 mb-4">
    <input id="radio3" type="radio" name="radio" class="hidden" />
    <label for="radio3" class="flex items-center cursor-pointer">
     <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
     Third choice</label>
   </div>
 
 
 </div>

</body>
</html>