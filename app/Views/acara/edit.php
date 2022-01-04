<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
    <title>Edit Acara - Kawinyuk</title>
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
          <form action="<?= site_url('acara/'.$acara->id_acara)?>" method="post">
          <?= csrf_field() ?>
          <input type="hidden" name="_method" value="put">
              <div class="form-group">
                  <label for="">Nama acara</label>
                  <input type="text" name="name_acara" class="form-control" value="<?= $acara->name_acara ?>" required autofocus autocomplete="off">
              </div>
              <div class="form-group">
                  <label for="">Tanggal acara</label>
                  <input type="date" name="date_acara" class="form-control" value="<?= $acara->date_acara ?>" required>
              </div>
              <div class="form-group">
                  <label for="">Info</label>
                  <textarea type="text" name="info_acara" class="form-control" autocomplete="off"><?= $acara->info_acara ?></textarea>
              </div>
              <div>
                  <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                  <a href="<?= site_url('acara') ?>" class="btn btn-secondary">Kembali</a>
              </div>
          </form>
      </div>
    </div>
    </div>
  </section>
<?= $this->endSection() ?>

