<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>
<div class="container">
    <a href="<?php echo base_url('project/create') ?>" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i> Novo Projeto</a>
    <br>   <table class="table table-striped table-bordered table-sm table-rounded">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Criação</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project) : ?>
                <tr>
                    <td><?php echo $project['id'] ?></td>
                    <td><?php echo $project['name'] ?></td>
                    <td><?php echo $project['description'] ?></td>
                    <td><?php echo $project['status'] ?></td>
                    <td><?php echo $project['created_at'] ?></td>
                    <td>
                        <a href="<?php echo base_url('project/edit/' . $project['id']) ?>"><i class="fa-solid fa-pen">&nbsp;</i></a>
                        <a href="<?php echo base_url('project/delete/' . $project['id']) ?>"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php echo $this->endSection() ?>