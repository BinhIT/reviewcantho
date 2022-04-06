<?php
/*
Plugin Name: Crawl_post
Author URI: Binh IT
*/
add_shortcode('get_email', 'get_email');
function get_email(){
?>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php 
}