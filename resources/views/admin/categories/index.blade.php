@extends('admin.dashboard')
@section('content')
    <h1>Category</h1>
    <form action="{{ url('admin/category') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" rows="5"></textarea>
        </div>
        <button class="btn btn-primary">Save</button>
    </form>
@endSection