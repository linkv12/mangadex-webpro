<div class="container">
  <form class="" action="<?= site_url('/C_Manga/addingManga')?>" method="post">
    <div class="form-group">
      <label for="manga_title">Title</label>
      <input type="text" name="manga_title" placeholder="Title" id="manga_title" required>
    </div>
    <div class="form-group">
      <label for="manga_author">Autor</label>
      <input type="text" name="manga_author" placeholder="Author" id="manga_author" required>
    </div>
    <div class="form-group">
      <label for="manga_artist">Artist</label>
      <input type="text" name="manga_artist" placeholder="Artist" id="manga_artist" required>
    </div>
    <div class="form-group">
      <label for="manga_description">description</label>
      <input type="text" name="manga_description" placeholder="description" id="manga_description" required>
    </div>
    <div class="form-group">
      <label for="manga_og_langguage">Original Langguage</label>
      <input type="text" name="manga_og_langguage" placeholder="English" id="manga_og_langguage" required>
    </div>
    <div class="form-group">
      <label for="manga_pub_status">Publication Status</label>
      <input type="text" name="manga_pub_status" placeholder="pub_status" id="manga_pub_status" required>
    </div>
    <div class="form-group form-button">
      <input type="submit" name="signin" class="form-submit" value="Submit">
    </div>
  </form>
</div>
