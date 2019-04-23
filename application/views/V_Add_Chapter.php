<div class="container" role="main">
	<div class="card mb-3">
		<h6 class="card-header"><span class="fas fa-upload fa-fw " aria-hidden="true"></span> Upload guidelines</h6>
		<div class="card-body">
			<ul class="m-0">
				<li>Do not upload:
					<ul>
						<li>Western comics.</li>
						<li>Scans of official releases, including raws.</li>
						<li>Bulk chapters (e.g. Ch. 1-10 as one chapter).</li>
						<li>Obtrusively watermarked images.</li>
						<li>Images saved from aggregator sites, if an original source is available.</li>
					</ul>
				</li>
				<li>File limits:
					<ul>
						<li>Archive file type must be .zip, and file size must be less than 100MB.</li>
						<li>No password protected archives.</li>
 					<li>The archive cannot have directories inside directories.</li>
				</ul>
			</li>
			<li>Naming conventions:
				<ul>
					<li>Include chapter names, if they are available.</li>
					<li>Use decimals (e.g. Ch. 1.5) for bonus chapters/omake/etc. They may have to be zeropadded.</li>
					<li>Do not zeropad volume or chapter numbers. (01, 02, etc.)</li>
					<li>Number volumes correctly. For chapters not (yet) released in volumes, leave the volume number empty.</li>
					<li>If the comic uses season numbers, use the volume field for that.</li>
					<li>For oneshots, name the chapter "Oneshot" and leave the volume and
						chapter numbers empty (except use volume 0 for oneshots inside their
						serialization entries).</li>
					</ul>
				</li>
				<li>General:
					<ul>
						<li>Do not add, edit, change the order of, or remove any pages unless you are part of the original scanlator group.</li>
						<li>Select "Unknown" if you do not know which group to attribute the chapter to.</li>
						<li>Select "no group" if the original scanlator does not wish to create a group for their scanlation.</li>
						<li>If the group does not appear on the dropdown list, add it to the database <a target="_blank" href="#">here</a>.</li>
						<li><span class="fas fa-exclamation-circle" aria-hidden="true" title=""></span> next to a group name indicates that only group members can upload to that group.</li>
						<li>Do not evade group restrictions by any means.</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
  <div class="card mb-3">
    <h6 class="card-header"><span class="fas fa-upload fa-fw " aria-hidden="true"></span> Upload Chapter</h6>
    <div class="card-body">
      <div class="col-md-6">
          <!-- nomor 10 -->
          <!-- Panggil fungsi Upload/do_upload disini -->
          <?php echo form_open_multipart('Uploads/do_upload_zip') ?>
              <div class="form-group">
                  <!-- Tampilkan alert gagal jika gagal upload, dan alert berhasil jika berhasil upload disini -->
                  <?php
                  #echo $this->session->userdata('upload');
                  #echo $this->session->userdata('error');
                      if ($this->session->userdata('upload')) {
                          #$this->load->view('Alerts/SuccessRegis');
                          echo $this->session->userdata('upload');
                          #$this->load->view('Alerts/SuccessUpload', array('upload' => $this->session->userdata('upload')));
                          #echo $this->session->userdata('upload');
                      } else if ($this->session->userdata('error')) {
                          #$this->load->view('Alerts/FailLogin');
                          #$this->load->view('Alerts/SuccessRegis');
                          echo $this->session->userdata('error');
                          #echo $this->session->userdata('error');
                      }
                   ?>
                   <div class="input-group form-group row">
                     <label for="id Manga" class="col-md-3 col-form-label" hidden>idManga</label>
                     <div class="col-md-9">
                       <input type="text" name="idManga" placeholder="id Manga" id="idManga" value="<?echo $idManga;?>" hidden>
                     </div>
                   </div>
                   <div class="input-group form-group row">
                     <span><label for="titleManga" class="mx-2">Manga Title</label></span>
                     <input type="text" name="titleManga" id="titleManga" value="<?= $this->M_Manga->getMangaTitle($idManga)?>" readonly disabled>
                   </div>
                   <div class="input-group form-group row">
                     <label for="idScanGroup" class="mx-2">Group Name</label>
                     <input type="text" name="idScanGroup" placeholder="id Manga" id="idScanGroup" value="<?= $this->M_Group->getGroupName($this->session->userdata('idScanGroup'))?>" readonly disabled>
                   </div>
                  <div class="input-group form-group row">
                    <label for="chapter_number" class="mx-2">chapter number</label>
                    <input type="text" name="chapter_number" placeholder="chapter number" id="chapter_number">
                  </div>
                  <div class="input-group form-group row">
                    <label for="chapter_title" class="mx-2">chapter title</label>
                    <input type="text" name="chapter_title" placeholder="chapter title" id="chapter_title">
                  </div>
                  <div class="input-group form-group row">
                    <label for="langguage" class="mx-2">langguage</label>
                    <input type="text" name="langguage" placeholder="langguage" id="langguage" placeholder="English">
                  </div>
                  <div class="input-group form-group row">
                      <span class="input-group-btn">
                          <span class="btn btn-default btn-file">
                              Browse… <input type="file" id="imgInp" name='userfile'>
                          </span>
                      </span>
                      <input type="text" class="form-control" readonly>
                      <span class="input-group-btn">
                          <input class="btn btn-primary" type="submit" value="Submit">
                      </span>
                  </div>
                  <img id='img-upload'/>
              </div>
          </form>
          <!-- Endof nomor 10 -->
      </div>
    </div>

  </div>
</div>
