<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
    <title>Data Acara - Kawinyuk</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <section class="section">
    <div class="section-header">
        <h1>Acara</h1>
        <div class="section-header-button">
            <a href="<?= site_url('acara/create') ?>" class="btn btn-primary">Add new</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="alert-body">
                <b>Success!</b>
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="close" data-dismiss="alert" arial-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body">
                <b>Error!</b>
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="close" data-dismiss="alert" arial-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('warning')) : ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <div class="alert-body">
                <b>Success!</b>
                <?= session()->getFlashdata('warning') ?>
                <button type="button" class="close" data-dismiss="alert" arial-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    <?php endif; ?>

    <div class="section-body">
    <div class="card">
      <div class="card-header">
        <h4>Data Acara</h4>
      </div>
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-striped table-md">
            <tbody><tr>
              <th>No</th>
              <th>Nama acara</th>
              <th>Tanggal acara</th>
              <th>Info</th>
              <th>Aksi</th>
            </tr>
            <?php foreach ($acara as $key => $value) : ?>
                <tr>
                <td><?= $key+1 ?></td>
                <td><?= $value->name_acara ?></td>
                <td><?= date('d/m/Y',strtotime($value->date_acara))?></td>
                <td><?= $value->info_acara ?></td>
                <td>
                    <a href="<?= site_url('acara/edit/'.$value->id_acara) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    <form action="<?= site_url('acara/'.$value->id_acara) ?>" method="post" class="d-inline">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="put">
                        <button href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                </tr>
            <?php endforeach; ?>
          </tbody></table>
        </div>
      </div>
    </div>
    </div>
  </section>
<?= $this->endSection() ?>

