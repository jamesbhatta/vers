@extends('layouts.app')
@section('content')
<div class="container-fluid">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page">Website</li>
    </ol>
  </nav>
        <div class="box p-3">
            <form>
                <div class="row">

                    <div class="form-group col-xl-6">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="image" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" name="image" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="exampleInputEmail1">Position</label>
                        <input type="text" class="form-control" name="image" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-xl-6">
                        <label for="exampleInputEmail1">logo</label>
                        <input type="file" class="form-control" name="image" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="form-group col-xl-12">
                        <label for="exampleInputEmail1">Testimonial</label>
                        <textarea name="discription" v-model="discription" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Description" rows="8" cols="200">
                            </textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    @endsection
