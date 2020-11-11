<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3 my-2 " id="artist-form">
    <h1 class="h4 text-center">Add Artist</h1>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Artistic Name</label>
            <input type="text" name="Artistic_name" class="form-control" placeholder="Write a artistic name...">
        </div>
        <div class="form-group col-6">
            <label>Real Name</label>
            <input type="text" name="Real_name" class="form-control" placeholder="Write a real name...">
        </div>
    </div>
    <div class="form-group">
        <label>Native Country</label>
        <select class="form-control" id="GetCountry" name="Country_id"></select>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Average Salary</label>
            <input type="number" min="0" pattern="[0-9]" name="Average_salary" class="form-control" placeholder="Write a real name...">
        </div>
        <div class="form-group col-6">
            <label>Ocuppation</label>
            <input type="text" name="Occupation" class="form-control" placeholder="Write a occupation...">
        </div>
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createArtist()"/>
</form>

<?php include("../Shared/footer.html"); ?>