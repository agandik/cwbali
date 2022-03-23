@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form class="p-3">
                <h1>Insert Company</h1>
                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>   
                <div class="row mb-3">
                    <label for="website" class="col-sm-2 col-form-label">Website</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>            
                <button type="submit" class="btn btn-primary">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
