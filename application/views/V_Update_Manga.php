<?php
  $data = $this->M_Manga->getMangaById($idManga);

 ?>
<?php echo $idManga ?>
<div class="container">
  <form class="" action="<?= site_url('/C_Manga/updateProcessManga')?>" method="post">
    <div class="form-group">
      <label for="manga_id" hidden>idManga</label>
      <input type="text" name="manga_id" hidden placeholder="<?= $idManga?>" id="manga_id"  value="<?= $idManga?>" >
    </div>
    <div class="form-group">
      <label for="manga_title">Title</label>
      <input type="text" name="manga_title" placeholder="<?= $data['Title']?>" id="manga_title"  value="<?= $data['Title']?>" required>
    </div>
    <div class="form-group">
      <label for="manga_author">Autor</label>
      <input type="text" name="manga_author" placeholder="<?= $data['Author']?>" id="manga_author" value="<?= $data['Author']?>" required>
    </div>
    <div class="form-group">
      <label for="manga_artist">Artist</label>
      <input type="text" name="manga_artist" placeholder="<?= $data['Artist']?>" id="manga_artist" value="<?= $data['Artist']?>" required>
    </div>
    <div class="form-group">
      <label for="manga_description">description</label>
      <input type="text" name="manga_description" placeholder="<?= $data['description']?>" id="manga_description" value="<?= $data['description']?>" required>
    </div>
    <div class="form-group">
      <label for="manga_og_langguage">Original Langguage</label>
      <input type="text" name="manga_og_langguage" placeholder="<?= $data['og_langguage']?>" id="manga_og_langguage" value="<?= $data['og_langguage']?>" required>
    </div>
    <div class="form-group">
      <label for="manga_pub_status">Publication Status</label>
      <input type="text" name="manga_pub_status" placeholder="<?= $data['pub_status']?>" id="manga_pub_status" value="<?= $data['pub_status']?>" required>
    </div>
    <div class="form-group form-button">
      <input type="submit" name="signin" class="form-submit" value="Submit">
    </div>
  </form>
</div>
