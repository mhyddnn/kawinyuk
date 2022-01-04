<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
    <title>Tambah Acara - Kawinyuk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <section class="section">
    <div class="section-header">
        <a href="<?= site_url('acara') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        <h1>Acara</h1>
    </div>

    <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Data Acara</h4>
      </div>
      <div class="card-body col-md-6">
          <form action="<?= site_url('acara/store')?>" method="post">
          <?= csrf_field() ?>
              <div class="form-group">
                  <label for="">Nama acara</label>
                  <input type="text" name="name_acara" class="form-control" required autofocus autocomplete="off">
              </div>
              <div class="form-group">
                  <label for="">Tanggal acara</label>
                  <input type="date" name="date_acara" class="form-control" required>
              </div>
              <div class="form-group">
                  <label for="">Info</label>
                  <textarea type="text" name="info_acara" class="form-control" autocomplete="off"></textarea>
              </div>
              <div>
                  <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
          </form>
      </div>
    </div>
    </div>
  </section>
<?= $this->endSection() ?>

