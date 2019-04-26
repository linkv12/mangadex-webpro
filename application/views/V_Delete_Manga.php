<div class="container">
  <form class="" action="<?= site_url('/C_Manga/deleteProcessManga')?>" method="post">
    <div class="form-group">
      <label for="manga_id" hidden>idManga</label>
      <input type="text" name="manga_id" hidden placeholder="<?= $idManga?>" id="manga_id"  value="<?= $idManga?>" >
    </div>
    <div class="form-group">
      <label for="quest">Y/N ?</label>
      <input type="text" name="quest" placeholder="Fill with Y/N" id="quest" required>
    </div>
    <div class="form-group">
      <input type="submit" name="check" value="Submit">
    </div>
  </form>
</div>
