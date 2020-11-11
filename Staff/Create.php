<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3 my-5 " id="staff-form">
    <h1 class="h4 text-center">Add Staff</h1>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Name</label>
            <input type="text" name="Name" class="form-control" placeholder="Write a name...">
        </div>
        <div class="form-group col-6">
            <label>Age</label>
            <input type="number" name="Age" min="0" class="form-control" max="130" pattern="[0-9]" placeholder="Write a age...">
        </div>
    </div>
    <div class="form-group">
        <div>
            <label>Gender</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" value="Male" type="radio" name="Gender">
            <label class="form-check-label">Male</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" value="Female" type="radio" name="Gender">
            <label class="form-check-label">Female</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" value="Other" type="radio" name="Gender">
            <label class="form-check-label">Other</label>
        </div>
    </div>
    <div class="form-group">
        <label>Role</label>
        <input type="text" name="Role" class="form-control" placeholder="Write a role...">
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createStaff()"/>
</form>

<?php include("../Shared/footer.html"); ?>