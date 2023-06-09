@extends('layouts.main')

@section('content')
<h1 class="mt-4">Users Data</h1>
<div class="d-flex justify-content-between mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <a href="#">
        <button class="btn btn-success" type="submit">Create Data</button>
    </a>
</div>
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Users Data
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>1</td>
                    <th>emmanuel</th>
                    <th>emma</th>
                    <th>emmejelek</th>
                    <th>emmanuel@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>Isma Nabilah</th>
                    <th>Isma</th>
                    <th>isma1789</th>
                    <th>ismanabilah@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <th>Elsa Padilah</th>
                    <th>Elsa</th>
                    <th>elsaa0412</th>
                    <th>elsapadilah@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <th>Naya putri</th>
                    <th>Naya</th>
                    <th>naya1209</th>
                    <th>nayaputri@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <th>winni</th>
                    <th>winni</th>
                    <th>123aaa</th>
                    <th>winni@gmail.com</th>
                    <th>user</th>
                    <td>
                        <a href="" class="btn btn-sm btn-warning"> Edit</a>
                        <a href="" class="btn btn-sm btn-dark" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection