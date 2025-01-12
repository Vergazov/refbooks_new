@extends('main')
@section('content')
    <form action="{{route('refbooks.store')}}" method="post">
        @csrf
        <div class="create_refbook-container container border rounded p-3 mt-5">
            <h3 class="text-center mb-3">Создать новый справочник</h3>
            <div class="mb-3">
                <label class="form-label">Название</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">OID</label>
                <input type="text" name="oid" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Версия</label>
                <input type="text" name="version" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
