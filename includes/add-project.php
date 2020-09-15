    
<?php 
if(isset($_POST['add_project'])){

    $title = $_POST['title'];
    $link = $_POST['link'];
    $image = $_FILES['image']['name'];
    $image_temp = $_FILES['image']['tmp_name'];
    $description = $_POST['message'];

    move_uploaded_file($image_temp , "projectImages/$image");

    $query = "insert into projects( title,  image, description, link) ";
    $query .= " value('{$title}','{$image}','{$description}','{$link}') ";
    $creat_project = mysqli_query($connection , $query);
    if(!$creat_project){
    die(mysqli_error($connection));
}


}
?>

        <form
          class="form-contact contact_form"
          method="post"
          id="addForm"
          novalidate="novalidate"
          enctype="multipart/form-data"
        ><h2 class="contact-title">ADD PROJECT</h2>
          <div class="row">
            

            <div class="col-sm-6">
              <div class="form-group">
                <input
                  class="form-control valid"
                  name="title"
                  id="title"
                  type="text"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Title'"
                  placeholder="Title"
                />
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input
                  class="form-control valid"
                  name="link"
                  id="link"
                  type="text"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Link'"
                  placeholder="Link"
                />
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea
                  class="form-control w-100"
                  name="message"
                  id="message"
                  cols="30"
                  rows="9"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Enter Description'"
                  placeholder=" Description"
                ></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="file-input" type="file" id="image" name="image" />
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button name='add_project' type="submit" class="button button-contactForm boxed-btn">
              Post
            </button>
          </div>
        </form>