<?php
	session_start();
?>
<DOCTYPE! HTML>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/styles.css">
	<title>Main Page</title>
	<script src="assets/jquery.html"></script>
    <script>
	    $(document).ready(function(){
	        $.get('/index/load_header', function(res) {
	          $('.header').append(res);
	        });
	    });
    </script>
</head>
<body>
	<div id="header">
		<h1>Artisimo</h1>
	</div>
	<h1>Admin Page</h1>
	<div id="panel">
		<h2>Current user is <?= $this->session->userdata('first_name')?> at <?= $this->session->userdata('admin')?> level</h2>
		<a href='addmerch'><button>Add Item</button></a>
		<a href='editmerch'><button>Edit Item</button></a>
		<p><a href='logout_user'><button>Logout</button></a></p>
		<p><a href='shopping_cart'><button>Shopping Cart</button></a></p>
		<a href="/products"><button>See our products</button></a>
		<p>Admin functions</p>
		<p><a href='/view_orders'><button>Orders</button></a></p>
		
	</div>
</body>
</html>