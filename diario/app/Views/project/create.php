<?php echo $this->extend('layout') ?>
<?php echo $this->section('content') ?>
<?php if(isset($id)): ?>
    <h1>Editar Projeto</h1>
<?php else: ?>
    <h1>Novo Projeto</h1>    
<?php echo $this->endSection()?>