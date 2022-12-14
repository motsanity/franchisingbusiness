<?php
    session_start();
  include("get_session.php");
  $permission_allowed = [1];
  include("get_privilege.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Franchising Business | Franchisees</title>
    <?php
        include("component/head_assets.html");
    ?>
<link rel="stylesheet" href="vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
<link rel="stylesheet" href="vendors/DataTables/Responsive-2.2.5/css/responsive.bootstrap.css">


</head>
<body>
<?php
    include("component/navbar-admin.php");
?>
<section data-bs-version="5.1" class="content4 cid-sMJyQseRCz mb-0" id="content4-19">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-md-12 col-lg-10">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Franchisees</strong>
                </h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4">
                    Manage all franchisees here.
                </h4>
                <?php
                  include("fetch-franchisees.php");
                ?>
            </div>
        </div>
    </div>
</section>
<section class="mb-5 mx-auto p-5 col-sm-12" id="franchisee-table">
  <div class="container table-responsive col-sm-12 col-lg-12 mx-auto">
  <table id="index-data-table" class="col-sm-12 col-lg-12 table-bordered mx-auto pb-5 mb-3 table table-lg table-hover table-striped">
    
      <thead class="table-dark">
        <tr>
          <th scope="col">ID Number</th>
          <th class="col" scope="col">First Name</th>
          <th scope="col">Middle Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Privilege</th>
          <th scope="col" style="white-space: nowrap; min-width: 200px; text-align: center">Action</th>
          <!--
          <th scope="col-3">Email Address</th>
          <th scope="col">Phone Number</th>
          <th scope="col-3">Facebook URL</th>
        -->
        </tr>
    </thead>
    <tbody>
      <?php
        foreach($result as $r) {
      ?>
        <tr>
          <td><?php echo $r->id_no; ?> </td>
          <td><?php echo $r->first_name; ?></td>
          <td><?php echo $r->middle_name; ?></td>
          <td><?php echo $r->last_name; ?></td>
          <td><?php echo $r->description; ?></td>
          <td class="mx-auto px-auto align-center" style="white-space: nowrap;min-width: 200px">
            <div class="mx-auto">
            <?php if ($r->privilege != 1) { ?>
            <?php if ($r->privilege !=2 ) {?>
            <a href="franchisee-edit.php?id=<?php echo $r->id_no; ?>&action=2&a_id=<?php echo $_REQUEST['a_id']; ?>" class="btn btn-sm btn-warning link-info">Set mod</a>
            <?php } else { ?>
            <a href="franchisee-edit.php?id=<?php echo $r->id_no; ?>&action=3&a_id=<?php echo $_REQUEST['a_id']; ?>" class="btn btn-sm btn-primary link-info">Unset mod</a>
            <?php } }?>
            <a href="franchisee-detail.php?id=<?php echo $r->id_no; ?>" class="btn btn-sm btn-info link-primary">View</a>
            <a href="my-story.php?id=<?php echo $r->id_no; ?>" class="btn btn-sm btn-info link-primary" target="_blank">Story</a>
            </div>
          </td>
          <!--
          <td><?php echo $r->email; ?></td>
          <td><?php echo $r->phone_no; ?></td>
          <td><?php echo $r->fb; ?></td>
      -->
      </tr>
      <?php 
        }
      ?>
      <tfoot class="table-dark" style="font-size: .8em">
          <tr>
            <th scope="col">ID Number</th>
            <th class="col" scope="col">First Name</th>
            <th scope="col">Middle Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Privilege</th>
            <th scope="col" class="text-center">Action</th>
          <!--
          <th scope="col-3">Email Address</th>
          <th scope="col">Phone Number</th>
          <th scope="col-3">Facebook URL</th>
        -->
        </tr>
      </tfoot>
      
    </tbody>
  </table>
</div>
</section>

<?php
    include("component/footer.php");

?>
</section>
<?php
    include("component/footer_assets.html");
?>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="vendors/DataTables/Responsive-2.2.5/js/dataTables.responsive.js"></script>

<script type="text/javascript">
  $('#index-data-table').DataTable({
    order: [[1, "asc"]],
        lengthMenu: [[10, 20, -1], [10, 20, "All"]],

    columnDefs: [
      {
        className: "dt-nowrap"
      }
    ]
  });
</script>
</body>
</html>