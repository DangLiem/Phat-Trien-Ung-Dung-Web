@extends('layouts.master')
@section('content')
<div class="container-fluid">
        <div class="col-sm-8 col-sm-offset-2 box">
            <div class="head-phone row">
                <h3 style="color: #fff">Phone book</h3>
            </div>
            <div class="body-phone">
                <div class="row search">
                    <form action="">
                        <label>Search: <input type="text" name="search" id="search"><a href=""><i class="glyphicon glyphicon-search"></i></a></label>
                    </form>
                </div>
                <div class="list-phone">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Handle</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>John</td>
                            <td>850-648-4200</td>
                            <td><ul class="handle">
                                <li><button class="btn-danger">Delete</button></li>
                                <li>|</li>
                                <li><button type="button" class="btn-info" data-toggle="modal" data-target="#myModal">update</button></li>
                            </ul></td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>850-648-4200</td>
                            <td><ul class="handle">
                                <li><button class="btn-danger">Delete</button></li>
                                <li>|</li>
                                <li><button type="button" class="btn-info" data-toggle="modal" data-target="#myModal">update</button></li>
                            </ul></td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>850-648-4200</td>
                            <td><ul class="handle">
                            <li><button class="btn-danger">Delete</button></li>
                            <li>|</li>
                            <li><button type="button" class="btn-info" data-toggle="modal" data-target="#myModal">update</button></li>
                            </ul></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="add-phone row">
                <form class="col-sm-8 row" action="#" method="post">
                        <label>Name: <input type="text" name="name" id="name"></label>
                        <label>Tel: <input type="text" name="tel" id="tel"></label>
                        <input type="submit" class="btn-primary" value="Add">
                </form>
            </div>

        </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <input type="text" class="form-control" placeholder="Name...">
                    <br>
                    <input type="text" class="form-control" placeholder="Phone...">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" >Update</button>
            </div>
        </div>

    </div>
</div>
@endsection()