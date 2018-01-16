<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet">

</head>

<body style="background: #000030">

    <div class="modal" id="confirm">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Delete Confirmation</h4>
                </div>
                <div class="modal-body">
                    <p>Are you sure you, want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Delete</button>
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div>

        <table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
            <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categoryList as $category)
                <tr>
                    <td>{{ $category->name_contact }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-xs">{{ trans('categories.edit') }}</a>

                        {!! Form::model($category, ['method' => 'delete', 'route' => ['categories.destroy', $category->id], 'class' =>'form-inline form-delete']) !!}
                        {!! Form::hidden('id', $category->id) !!}
                        {!! Form::submit(trans('categories.delete'), ['class' => 'btn btn-xs btn-danger delete', 'name' => 'delete_modal']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
            e.preventDefault();
            var $form=$(this);
            $('#confirm').modal({ backdrop: 'static', keyboard: false })
                .on('click', '#delete-btn', function(){
                    $form.submit();
                });
        });
    </script>

</body>