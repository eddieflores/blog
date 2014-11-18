<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>create blog post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label <!--it has a place for the title-->
        <input type="text" name="title" /> <!--it has a name for the title-->
    </div>
    
    <div>
        <label for="post">post: </label> <!--it post the label from the title-->
        <textarea nam="post"></textarea> <!--is basically a textbox that contains lines-->
    </div>
    
    <div>
        <button type="submit" >sumbit</button>
    </div>
</form>