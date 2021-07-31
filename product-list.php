

<?php
session_start();


use \Phppot\Product;
require_once __DIR__ . './class/Product.php';

$product = new Product();
$productResult = $product->getAllProduct();

if (isset($_POST["export"])) {
    $product->exportProductDatabase($productResult);
}

?>


<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./view/css/style.css" type="text/css" rel="stylesheet" />
<link href="./dist/style.css" type="text/css" rel="stylesheet" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<style>
.form-group{
                                       
  padding-right: 4px;
  padding-left: 4px;
  border: 1px solid #48b4f7;
  margin-right: 400px;
  margin-left: 400px;
  background-color: lightblue;
}
.container
{
  margin-right: 4px;
  margin-left: 4px;
}

</style>

</head>
<body>

<!--header-->
<?php include("./header.php");?>
<!--header ends-->



    <div id="table-container">
    <?php
    if ($productResult) {
        ?>
        <table id="tab">
            <thead>
                <tr>
                    <th width="35%" style="color:green;">First Name</th>
                    <th width="20%">Last Name</th>
                    <th width="25%">Work Assigned</th>
                    <th width="20%">Assigned By</th>
                    <th width="20%">Work Status</th>
                    <th width="20%">Assigned Date</th>
                    <th width="20%">Completion Date</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php
         
        foreach ($productResult as $key => $value) {
            ?>   
                <tr>
                    <td><?php echo $productResult[$key]["Fname"]; ?></td>
                    <td><?php echo $productResult[$key]["Lname"]; ?></td>
                    <td><?php echo $productResult[$key]["WorkAssigned"]; ?></td>
                    <td><?php echo $productResult[$key]["AssignedBy"]; ?></td>
                    <td><?php echo $productResult[$key]["WorkStatus"]; ?></td>
                    <td><?php echo $productResult[$key]["AssignedDate"]; ?></td>
                    <td><?php echo $productResult[$key]["CompletionDate"]; ?></td>
                </tr>
            <?php
        }
        ?>
            </tbody>
        </table>

        <div class="btn">
            <form action="" method="post">
                <button type="submit" id="btnExport" name='export'
                    value="Export to Excel" class="btn btn-light">Export
                    to Excel</button>
             </div>       
                
            </form>
       <div>     
        <div class="btn">
            <form action="./delete.php" method="post">
            <button name="submit" type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
            Delete All</button>
                    
                
            </form>
            
        </div>
        
    <?php
    }
    else
    {
    ?>
    <div class="empty-table">
    <div class="svg-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><circle cx="12" cy="19" r="2"/><path d="M10 3h4v12h-4z"/><path fill="none" d="M0 0h24v24H0z"/></svg>
    </div>
    No records found</div>
    <?php 
    }
    ?>
    </div>

 

</body>
</html>