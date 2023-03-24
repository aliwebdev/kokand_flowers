@extends('layouts.app')

@section('content')
<div class="main">
    <div class="page-header">
            <h4 class="page-title">Hodimlar ro'yxati</h4>
            <a class="btn btn-success" style="margin-left: 80%;"><i class="feather icon-user-plus"></i></a>
        </div>
    <div class="table-responsive">
        <table class="table table-bordered table-light">
            <thead>
                <tr align="center">
                    <th scope="col">№</th>
                    <th scope="col">Ism Familya</th>
                    <th scope="col">Tel-raqam</th>
                    <th scope="col">Hodim huquqi</th>
                    <th scope="col">E-pochta</th>
                    <th scope="col">Amallar</th>
                </tr>
            </thead>

            <tbody>
                <tr align="center">
                    <th scope="row">1</th>
                    <td>Mark Robinson</td>
                    <td>99-999-99-99</td>
                    <td>Menejer</td>
                    <td>salom@mail.ru</td>
                    <td>
                        <button class="btn btn-warning"><i class="feather icon-edit"></i></button>
                        <button class="btn btn-danger"><i class="feather icon-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection