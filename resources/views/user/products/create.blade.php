@extends('layouts.user.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="panel panel-default col-md-8 col-md-offset-2">
                <form action="{{ route('adverticement.store') }}" method="post" class="form" enctype="multipart/form-data">
                    <div class="box-body">
                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <h2>Product</h2>

                            <div class="form-group">
                                <label for="name">Category <span class="text-danger">*</span></label>
                                <select name="category_id" id="category_id" class="form-control select2">
                                    <option value="">-- Select Category --</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" placeholder="Title" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" placeholder="Name" class="form-control" value="{{ $user->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" placeholder="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="phone" class="form-control" value="{{ $user->phone }}" pattern="(999) 999-9999">
                            </div>
                            <div class="form-group">
                                <label for="description">Description </label>
                                <textarea class="form-control" name="description" id="description" rows="5" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="btn-group">
                                    <a href="{{ route('home') }}" class="btn btn-default">Back</a>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
