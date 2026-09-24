<?php 
include("header.php");
include("config.php");
$sql='SELECT * from user_login';
$users=$conn->prepare($sql);
$users->execute();
$userData=$users->fetchAll();

?>

<style>
    table{
        border: 1px solid black;
    }
    tr,td,th{
        border: 1px solid black;
    }
    table,tr,<td></td>boder-collapse: collapse;
    

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Welcome </a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="signout.php">Signout</a>
</li>
</ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <mav class="col-md-2 d-none d-md-block bg-light slidebar">
            <div class="slidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
</a>
</li>
</li>
<a class="nav-link" href="profile.php">
<span data-feather="file"></span>
Edit Profile
</a>
</li>
</ul>
</div>
</nav>
    

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"></main>
  <div class=d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom>
    <h1 class="h2"> Dashboard </h1>

</div>
<div>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Username</th>
            <th>Email</th>
            <th>Action</th>
</tr>
    </thead>
    <?php
    foreach($userData){
    ?>
    <tbody>
        <tr>
            <>td
<?=  $user['name'] ?></td>
<?=  $user['surname'] ?></td>
<?=  $user['username'] ?></td>
<?=  $user['email'] ?></td>
<td>Delete | Edit <>

</div>
</div>

<?php include('footer.php')?>

