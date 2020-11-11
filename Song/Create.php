<?php include("../Shared/header.html"); ?>
<div id="alerta"></div>
<form class="border p-3 my-2 " id="song-form">
    <h1 class="h4 text-center">Add Song</h1>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Song Name</label>
            <input type="text" name="Song_name" class="form-control" placeholder="Write a song name...">
        </div>
        <div class="form-group col-6">
            <label>Duration</label>
            <input type="text" name="Duration" class="form-control" placeholder="Write a duration...">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Song Gender</label>
            <select class="form-control" id="GetGender" name="Gender_id"></select>
        </div>
        <div class="form-group col-6">
            <label>Original Language</label>
            <select class="form-control" id="GetLanguage" name="Language_id"></select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Original Country</label>
            <select class="form-control" id="GetCountry" name="Country_id"></select>
        </div>
        <div class="form-group col-6">
            <label>Song Link</label>
            <input type="text" name="Link_song" class="form-control" placeholder="Write a link...">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-6">
            <label>Album ID</label>
            <select class="form-control" id="GetAlbum" name="Album_id"></select>
        </div>
        <div class="form-group col-6">
            <label>Artist ID</label>
            <select class="form-control" id="GetArtist" name="Artist_id"></select>
        </div>
    </div>
    <input type="button" value="Send" class="btn btn-success" style="width: 778px;" onclick="createSong()"/>
</form>

<?php include("../Shared/footer.html"); ?>