<?php
//  header('Content-Type: application/json');

include './inc/header.php';
include('./inc/config.php');

$id = $_SESSION['id'];

$GroupSearch = "SELECT * FROM `GroupDetails`";

$SearchResult = mysqli_query($conn, $GroupSearch);



$groups = [];

while ($row = mysqli_fetch_assoc($SearchResult)) {

    $memberByGroup = [];
    $groupName = $row['groupName'];

    $query = "SELECT * FROM Profile WHERE `group` = '$groupName'";
    $queryResult = mysqli_query($conn, $query);

    $groupArr = [];


    if (mysqli_num_rows($queryResult)) {
        while ($rows = mysqli_fetch_assoc($queryResult)) {
            $combined = array_merge($row, $rows);
            array_push($groupArr, $combined);
        }
    }

    array_push($groups, $groupArr);
}

// print_r($groups);

?>
<?php if (count($groups)) : ?>
    <?php foreach ($groups as $teams) : ?>
        <div>
            <h3 style="color:inherit;">Group Name: <?= $teams[0]['groupName']; ?> </h3>
            <div class="group_Scroller snaps_inline">
                <?php foreach ($teams as $team) : ?>
                    <div class="group_member">
                        <img src="./users_img/<?= $team['profile_pic'] ?>" alt="member1">
                        <br>
                        <small>name : <?= $team['firstName']; ?></small>
                        <br>
                        <small>Role : <?= $team['role']; ?></small>
                        <br>
                        <small>Bio : <?= $team['about']; ?> </small>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <h1>no Groups</h1>
<?php endif; ?>














































<!--   Core JS Files   -->
<?php
include './inc/footer.php';
?>