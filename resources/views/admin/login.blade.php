@extends('admin.layouts.master')

<script src="/public/assets/bootstrap/js/bootstrap.js"></script>
<link href="/public/assets/bootstrap/css/bootstrap-theme.css">
<link href="/public/assets/bootstrap/css/bootstrap.css">
@section('title', '頁面標題')
@section('content')
    <form action="{{ url('login/LoginCheck') }}" method=post>
        <input type="hidden" name ='id'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <table border="7" >
            <tr><td aign=right>登入名稱:</td>
                <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                             　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                             　　 ID="Text1" NAME="account" required="required"></td></tr>
            <tr><td align=right>密碼:</td>
                <td>　 <input onkeyup="value=value.replace(/[\W]/g,'') "
                             　　 onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))"
                             　　 id="text1" name="password" required="required" type="password"></td></tr>
        </table>
        <div class="btn btn-success">input</div>
        <input Type=submit Value="登入" name="B1">
    </form>
    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker2'>
                        <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {

                    $('#datetimepicker2').datetimepicker({
                        locale: 'ru'
                    });
                });
            </script>
        </div>
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>

    <div class="container">
        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker1').datetimepicker();
                });
            </script>
        </div>
    </div>

@endsection

