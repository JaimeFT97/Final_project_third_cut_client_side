<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3 my-2 " id="album-form">
    <input name="form" type="hidden" readonly />
    <h1 class="h4 text-center">Add Album</h1>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Album Name</label>
            <input type="text" name="Album_name" class="form-control" placeholder="Write a album name...">
        </div>
        <div class="form-group col-6">
            <label>Album Cover</label>
            <input type="text" name="Album_cover" class="form-control" placeholder="Write a cover...">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-6">
            <label>Song quiantity</label>
            <input type="number" name="Song_quantity" min="0" pattern="[0-9]" class="form-control" placeholder="Write a song quantity...">
        </div>

        <div class="form-group col-6">
            <label>Duration</label>
            <input type="text" name="Duration" class="form-control" placeholder="Write a duration...">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Link Album</label>
            <input type="text" name="Link_album" class="form-control" placeholder="Write a link...">
        </div>
        <div class="form-group col-6">
            <label>Artist</label>
            <select class="form-control" id="GetArtist" name="Artist_id"></select>
        </div>
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createAlbum()"/>
</form>

<?php include("../Shared/footer.html"); ?>