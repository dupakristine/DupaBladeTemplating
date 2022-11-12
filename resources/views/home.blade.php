@extends('base')

@section('content')

<div class="body">
    <div class="btns">
    <a href="<?= url('/') ?>" class="btn btn-light" aria-current="page">Home</a>
                <a href="<?= url('/categories')?>" class="btn btn-light">Category</a>
                <a href="<?= url('/merchandises')?>" class="btn btn-light">Merchandise</a>
                <a href="<?= url('/units')?>" class="btn btn-light">Unit</a>
    </div>
</div>
<style>
    .body{
        display:grid;
        place-items:center;
    }
    .btns a{
        margin:50px;
    }
</style>
@stop