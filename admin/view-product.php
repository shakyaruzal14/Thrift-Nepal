<?php
    session_start();
    if(!isset($_SESSION['admin-id'])){
        header ('Location: ../login-first');
        exit;
    }
    require '../classes/product.class.php';
    $product = new Product();
    $data = $product->selectAddedProduct();
    // print_r ($data);
    
    if(isset($_GET['msg']) && $_GET['msg'] == 'productDeleted'){
	    echo "<script type='text/javascript'>window.alert('Product Deleted Successfully!!!');</script>";
    }
    if(isset($_GET['msg']) && $_GET['msg'] == 'productUpdated'){
	    echo "<script type='text/javascript'>window.alert('Product Updated Successfully!!!');</script>";
    }
    
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Added Products | Nepali Handicraft</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <style>
        th {
            text-align: center;
        }
        td{
            text-align: justify;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <?php include 'admin-sidebar.php'; ?>

    <div class="main-panel">

		<?php include 'admin-nav.php'; ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Available Products</h4>
                                <p class="category">In the database</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Product Image</th>
                                    	<th>Product Name</th>
                                    	<th>Original Price</th>
                                        <th>Discounted Price</th>
                                        <th>Product Description</th>
                                        <th colspan="2">Action</th>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data as $details) { ?>
                                        <tr>
                                        	<td><?php echo $details['p_id']; ?></td>
                                            <td><img src="../images/product-images/<?php echo $details['p_image']; ?>" style="width:100px; height:100px;"></td>
                                            <td><?php echo $details['p_name']; ?></td>
                                            <td><?php echo $details['p_price']; ?></td>
                                            <td><?php echo $details['p_disprice']; ?></td>
                                            <td><?php echo $details['p_description']; ?></td>
                                            <td><a href="update-product.php?edit=<?php echo $details['p_id']; ?>" class="btn btn-primary">Edit</a></td>
								            <td><a href="../actions/deleteProduct-action.php?delete=<?php echo $details['p_id']; ?>" class="btn btn-danger" onclick="Javascript: return confirm('Are you sure you want to delete?');" name="productDelete">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'admin-footer.php'; ?>


    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
