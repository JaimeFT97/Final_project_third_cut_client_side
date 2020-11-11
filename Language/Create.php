<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3" id="language-form">
    <h1 class="h4 text-center">Add Language</h1>
    <div class="form-group">
        <label>Language</label>
        <input type="text" class="form-control " name="Language_name" placeholder="Write a Language...">
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createLanguage()"/>
</form>

<?php include("../Shared/footer.html"); ?>