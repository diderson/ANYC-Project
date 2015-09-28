
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Backend</title>

    <!-- Core CSS - Include with every page -->
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="/dadmin/css/sb-admin.css" rel="stylesheet">
    <script src="admin/js/jquery-1.10.2.js"></script>
    <style>
    input .form-control .error{
        border: 1px solid #F00;

    }
    .error {
        color: #F00;
    }
    .btn-success, .btn-warning {
  color: #fff;
  background-color: #000;
  border-color: #000;
}
.btn-warning :hover {
  color: #fff;
  background-color: #ffbf00;
  border-color: #ffbf00;
}
    </style>

</head>

<body style="background-color:#ffbf00;">

   {include file=$contentTemplate}
    <!-- Core Scripts - Include with every page -->
    
    <script src="admin/js/bootstrap.min.js"></script>
    <script src="admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <!-- validate plugins -->
    <script type="text/javascript" src="admin/js/jquery.validate/jquery.validate.js"></script>


    <!-- SB Admin Scripts - Include with every page -->
 

</body>

</html>
