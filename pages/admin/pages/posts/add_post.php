<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $postFOrm = handleAdminPost($GLOBALS);
}

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Add post</h1>
</div>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="post_title">Post title</label>

    <input type="text" class="form-control" id="post_title" name="post_title">
  </div>

  <div class="form-group">
    <textarea id="editor" name="post_content"></textarea>
  </div>

  <div class="form-group">
    <label for="post_tags">Post tags</label>

    <input type="text" class="form-control" id="post_tags" name="post_tags">
  </div>

  <br/>
    <hr/>
  <br/>

  <div class="form-group">
      <label for="post_status">Status</label></label>
      <select class="form-control" id="post_status" name="post_status">
          <option value="public">Public</option>
          <option value="draft">Draft</option>
      </select>
  </div>

  <div class="form-group">
      <label for="post_image">Image</label></label>
      <input type="file" class="form-control-file" name="post_image" id="post_image">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script>
  $(document).ready(function(){
    ClassicEditor.create(document.querySelector('#editor'))
    .then(edior=>{
      console.log(editor);
    })
    .catch(error=>{
      console.log(error);
    })
  })
</script>