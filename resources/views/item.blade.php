{!! Form::open(array('route' => 'item.create', 'files' => 'true')) !!}
    {!! csrf_field() !!}

{!! Form::label('Item:') !!}
{!! Form::text('item') !!}

 {!! Form::label('Price:') !!}
{!! Form::text('price') !!}

{!! Form::submit('Save', '', array('class' => 'form-control')) !!}
{!! Form::close() !!}