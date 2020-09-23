<table class='table table-hover' style='width: 100%' >
<thead class="thead-dark">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Image</th>
    </tr>
</thead>
<tbody>
<?php    
$query = "SELECT * from projects  ";
$result = mysqli_query($connection , $query);

if(mysqli_num_rows($result) == 0 ){

  echo '<th class="text-center">No project Published</th> ';
}else{


while($row = mysqli_fetch_assoc($result)){

  $id = $row['id'];
  $title = $row['title'];
  $image = $row['image'];
  $link = $row['link'];
  $description = $row['description'] ;



  echo '<tr>';

echo"<th>$id</th>";
echo"<th>$title</th>";
echo "<th><img width='60px' src='projectImages/$image' ></th>";
echo "<th><a onClick=\" return confirm('are you sure you want to delete this project')\" href='admin.php?delete={$id}'>Delete</a></th>";
echo "</tr>";

}}



if(isset($_GET['delete'])){

  $project_id = $_GET['delete'];


$query = "delete from projects where id = {$project_id}";
$result = mysqli_query($connection , $query);


header('location: admin.php');

}

?>