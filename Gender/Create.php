<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3" id="gender-form">
    <h1 class="h4 text-center">Add Gender</h1>
    <div class="form-group">
        <label>Gender</label>
        <input type="text" class="form-control" name="Gender_name" placeholder="Write a Gender...">
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createGender()"/>
</form>

<?php include("../Shared/footer.html"); ?>
