@extends('layouts.app') 
    
@section('title', 'Add a new student')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one m-5">Quản lý sinh viên</h1>
                <div class="text-left"><a href="/" class="btn btn-outline-primary">Student manager</a></div>

                <form action="" id="add-fm" method="POST"class="border p-3 mt-2">
                    <div class="control-group col-6 text-left">
                        <label for="txtFullname">Fullname</label>
                        <div>
                            <input type="text" id="txtFullname" class="form-control mb-4" name="txtFullname"
                                placeholder="Enter Fullname" 
                                required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left">
                        <label for="txtBirthdate">Birthdate</label>
                        <div>
                            <input type="date" id="txtBirthdate" class="form-control mb-4" name="txtBirthdate"
                                placeholder="Enter txtBirthdate" 
                                required>
                        </div>
                    </div>
                    <div class="control-group col-6 text-left">
                        <label for="txtAddress">Address</label>
                        <div>
                            <input type="text" id="txtAddress" class="form-control mb-4" name="txtAddress"
                                placeholder="Enter Address"
                                required>
                        </div>
                    </div>
                    @csrf 
				 
                    <div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
                </form>
            </div>
        </div>
    </div>
@endsection