<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3" id="country-form">
    <h1 class="h4 text-center">Add Country</h1>
    <div class="form-group">
        <label>Country</label>
        <input type="text" class="form-control" name="Country_name" placeholder="Write a country...">
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createCountry()"/>
</form>

<?php include("../Shared/footer.html"); ?>