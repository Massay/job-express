@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action=" {{ url('subgroups') }} " method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Name</label>
                    <select class="form-control" name="group_id" id="group_id">
                        @foreach ($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="inputAddress2" class="col-form-label">Descrption</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
    </div>
</div>
@endsection