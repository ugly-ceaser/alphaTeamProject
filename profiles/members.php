<?php
// header('Content-Type: application/json');
include './inc/header.php';
include('./inc/config.php');



$sql_compiled = "SELECT * FROM Users";
$result_compiled = mysqli_query($conn, $sql_compiled);

$users = [];

while ($row = mysqli_fetch_assoc($result_compiled)) {
  array_push($users, $row);
}

$allUsers = [];

foreach ($users as $user) {
  $id = $user['id'];
  $query = "SELECT * FROM Profile WHERE `id` = '$id'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result)) {
    $row = mysqli_fetch_assoc($result);
  
  
    $newArr =  [];
    array_push($newArr, $user);
    array_push($newArr, $row);
    array_push($allUsers, $newArr);
  }
}

// echo json_encode($allUsers);

// die();


?>

<div class="flex" style="display: flex; margin-left: 3.5%; margin-top: 2%;">
  <table style="margin-bottom: 3%;">
    <tr>
      <th>
        <h4>Name</h4>
      </th>
      <th>
        <h4>Group</h4>
      </th>
      <th>
        <h4>Role</h4>
      </th>
      <th>
        <h4>Phone Number</h4>
      </th>
      <th colspan="3">
        <h4>Actions</h4>
      </th>
    </tr>

    <tbody>



      <?php if (count($allUsers)) : ?>

        <?php foreach ($allUsers as $details) : ?>
          <tr class="tr">

            <td class="name">
              <h6 class="name"><?= $details[1]["firstName"] . " " . $details[1]["lastName"]; ?></h6>
            </td>
            <td class="name">
              <h6 class="name"><?= $details[1]["group"]; ?></h6>
            </td>
            <td class="name">
              <h6 class="name"><?= $details[1]["role"]; ?></h6>
            </td>
            <td class="name">
              <h6 class="name"><?= $details[0]["Phonenumber"]; ?><i class="ni ni-single-copy-04 text-light text-sm opacity-10"></i></h6>
            </td>

            <?php
            if (!empty($_SESSION['groupLEADER'])) { ?>
              <td>
                <a href="" class="a bg-success text-white"><span>Send Request </span></a>


              </td>
            <?php } ?>

            <td>
              <a href="" class=" bg-primary text-white"><span>View Profile</span></a>

            </td>
            <?php
            if (!empty($_SESSION['Admin'])) { ?>
              <td>
                <a href="" class="a bg-success"><span>Make Leader</span></a>


              </td>
            <?php } ?>
          </tr>
        <?php endforeach; ?>

      <?php else : ?>

        <tr>
          <td colspan="5">
            <div class="d-flex h-25 align-items-center justify-content-center">
              No user found
            </div>
          </td>
        </tr>

      <?php endif; ?>


    </tbody>
  </table>
</div>

</main>












<!--   Core JS Files   -->
<?php
include './inc/footer.php';
?>