<section class="section">
    <div class="section-header">
        <h1>Master</h1>
    </div>

</section>

<!-- Main Content -->
<section class="content">
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Data Kamar</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-striped table-md" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kd Kamar</th>
                                <th>Kd Kelas</th>
                                <th>Kamar</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $kmr) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $kmr['kdkamar'] ?></td>
                                    <td><?= $kmr['kdkelas'] ?></td>
                                    <td><?= $kmr['nmkamar'] ?></td>


                                    <td>
                                        <div class="row">
                                            <div class="buttons">
                                                <a href="" class="btn btn-icon btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                                <a href="" class="btn btn-icon btn-sm btn-primary"><i class="far fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
</section>